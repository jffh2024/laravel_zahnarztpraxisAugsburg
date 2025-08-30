<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Log;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact'); // deine Blade-View mit name-Attributen
    }

    public function store(ContactRequest $request)
    {
        $data = $request->validated();

        $mail = new PHPMailer(true);

        try {
            // SMTP
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION', 'tls'); // 'ssl' oder 'tls'
            $mail->Port       = (int) env('MAIL_PORT', 587);

            // Absender/Empfänger
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME', 'Kontaktformular'));
            $mail->addAddress(env('MAIL_TO_ADDRESS', env('MAIL_FROM_ADDRESS')));
            $mail->addReplyTo($data['email'], $data['first_name'].' '.$data['last_name']);

            // Inhalt
            $mail->isHTML(true);
            $mail->Subject = 'Neue Kontaktanfrage';
            $mail->Body    = view('emails.contact_submitted_phpmailer', ['data' => $data])->render();
            $mail->AltBody =
                "Vorname: {$data['first_name']}\n".
                "Nachname: {$data['last_name']}\n".
                "E-Mail: {$data['email']}\n".
                "Grund: {$data['reason']}\n\n".
                "Nachricht:\n{$data['message']}";

            $mail->send();

            return back()->with('status', 'Danke! Ihre Nachricht wurde gesendet.');
        } catch (Exception $e) {
            Log::error('PHPMailer Fehler: '.$mail->ErrorInfo);
            return back()
                ->withErrors(['email' => 'Versand fehlgeschlagen.'])
                ->withInput();
        }
    }
}
