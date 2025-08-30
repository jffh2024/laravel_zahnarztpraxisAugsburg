{{-- resources\views\partials\sprach-toggle.blade.php --}}

@php
    $path = request()->path(); // z.B. "de/index" oder "en/index"
    $deUrl = preg_replace('/^(en|de)\//', 'de/', $path); // immer deutsche Version
    $enUrl = preg_replace('/^(en|de)\//', 'en/', $path); // immer englische Version
@endphp

<ul class="d-flex flex-row align-items-center list-unstyled">
    <!-- Englische Version -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url($enUrl) }}">
            <img src="{{ asset('media/sprache/English_language.svg.png') }}" alt="Englisch" width="30" height="25" />
        </a>
    </li>

    <!-- Deutsche Version -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url($deUrl) }}">
            <img src="{{ asset('media/sprache/Flag_of_Germany.svg.png') }}" alt="Deutsch" width="30"
                height="25" />
        </a>
    </li>
</ul>
