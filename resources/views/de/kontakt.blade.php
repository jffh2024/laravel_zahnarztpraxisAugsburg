{{-- de index --}}

@extends('layouts.de.main')

@section('title', 'Zahnarztpraxis')

@section('content')


<main>



    <section class="container p-3 text-black d-block">
        <h4 class="display-4 mb-3">Kontakt</h4>

        <div class="p-4 border border-secondary rounded">
            <!-- Formular, das Daten via POST an backend/contact.php sendet -->
            <form id="contactForm" action="backend/contact.php" method="POST" novalidate>
                <!-- 'novalidate' deaktiviert Standardbrowser-Validierung, da JavaScript benutzt wird -->
                <div>
                    <!--Vorname-->
                    <label for="name" class="form-label fs-6">Vorname</label>
                    <input type="text" class="form-control" id="nameFormControl" placeholder="Vorname" />
                </div>

                <div>
                    <!--Nachname-->
                    <label for="surname" class="form-label fs-6">Nachname</label>
                    <input type="text" class="form-control" id="surnameFormControl" placeholder="Nachname" />
                </div>

                <div>
                    <!--E-Mail-Adresse-->

                    <label for="email " class="form-label fs-6">E-Mail-Adresse</label>
                    <input type="email" class="form-control" id="emailFormControl" placeholder="name@example.com" />
                    <div>
                        <!--TerminGrund-->
                        <label for="apointment" class="form-label fs-6" id="grundOption">
                            Grund Ihrer Anfrage
                        </label>
                        <select class="form-select">
                            <option selected>Routinekontrolle</option>
                            <option value="1">Behandlung</option>
                            <option value="2">Professionelle Zahnreinigung</option>
                            <option value="3">Zahnaufhellug (Bleeching)</option>
                            <option value="4">Sonstiges</option>
                        </select>
                    </div>

                    <div>
                        <!-- TaxtNachricht-->
                        <label for="message" class="form-label fs-6">Nachricht</label>
                        <textarea class="form-control" id="messageFormControl" placeholder="Ihre Nachricht" rows="4"></textarea>
                    </div>
                    <!-- Absende-Button -->
                    <button type="submit" class="btn btn-primary m-3">Absenden</button>
                </div>
                <!--Formularende-->
            </form>

            <!-- Bereich für Feedback-Meldungen vom Formular (z.B. Erfolg, Fehler) -->
            <div id="formMessage"></div>
        </div>
    </section>
</main>
@endsection
