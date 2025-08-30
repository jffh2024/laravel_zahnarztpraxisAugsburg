<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array
    {
        return [
            'first_name' => ['required','string','max:100'],
            'last_name'  => ['required','string','max:100'],
            'email'      => ['required','email','max:255'],
            'reason'     => ['required','in:routine,behandlung,pzr,bleaching,sonstiges'],
            'message'    => ['required','string','max:3000'],
        ];
    }
}
