@extends('layouts.en.main')

@section('title', 'Zahnarztpraxis')

@section('content')

<main>


    <section class="container p-3 text-black  d-block">

        <h4 class="display-4 mb-3">Contact</h4>

        <div class="p-4 border border-secondary rounded">
            <div>
                <label for="nameFormControl" class="form-label fs-6">First name</label>
                <input type="text" class="form-control" id="nameFormControl" placeholder="Name" />
            </div>

            <div>
                <label for="surnameFormControl" class="form-label fs-6">Surname</label>
                <input type="text" class="form-control" id="surnameFormControl" placeholder="Surname" />
            </div>

            <div>
                <label for="emailFormControl" class="form-label fs-6">Email</label>
                <input type="email" class="form-control" id="emailFormControl" placeholder="name@example.com" />
                <div>
                    <label for="apointmentSelect" class="form-label fs-6">Nature of your inquiry</label>
                    <select class="form-select">
                        <option selected>Routine check-up</option>
                        <option value="1">Treatment</option>
                        <option value="2">Professional teeth cleaning</option>
                        <option value="3">Teeth whitening</option>
                        <option value="4">Others</option>
                    </select>
                </div>

                <div>
                    <label for="messageFormControl" class="form-label fs-6">Message</label>
                    <textarea class="form-control" id="messageFormControl" placeholder="Your Message" rows="4"></textarea>
                </div>

                <button type="submit" class="btn btn-primary m-3">Send</button>
            </div>
    </section>
</main>
@endsection

