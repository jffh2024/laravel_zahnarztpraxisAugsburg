
{{-- de index --}}

@extends('layouts.de.main')

@section('title', 'Zahnarztpraxis')

@section('content')

<main>



    <section class="container p-0 c-fs-10px text-center text-black fw-semibold d-block">
        <h4 p-3 class="display-4">So finden Sie uns</h4>

        <div class="ratio ratio-16x9">
            <iframe class="pt-3"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d643.7818465187047!2d10.89826694094485!3d48.36851198469304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479ebd514d0f5d1d%3A0x9dff90f5a27169f1!2sRathaus%20Augsburg!5e0!3m2!1sde!2sde!4v1753664311449!5m2!1sde!2sde"
                width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <br />
        <span class="pt-0 pb-3 c-fs-10px text-black">
            Zur Darstellung einer eingebetteten Karte wurde hier das Augsburger Rathaus verlinkt
        </span>
    </section>
</main>
@endsection
