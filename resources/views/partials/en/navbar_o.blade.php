<!-- Obere Navbar -->
<nav class="navbar bg-primary navbar-dark">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ url('de/index') }}">
            <img src="{{ asset('media\logo_favicon\logo_zahnarztpraxis_augsburg.png') }}" alt="logo" width="100"
                height="95" />
        </a>

        {{-- Sprachumschalter --}}
        @include('partials.sprach-toggle')
    </div>
</nav>
