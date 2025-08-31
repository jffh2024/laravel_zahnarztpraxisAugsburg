{{-- partials/de/footer --}}

<!-- Footer -->
<footer class="p-4 bg-primary">
    <div class="container-fluid">
        <div class="row text-center gy-4">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card h-100 border-1">
                    <div class="card-body text-start bg-secondary text-">
                        <h5 class="card-title text-uppercase">Über uns</h5>
                        <ul class="list-unstyled mb-0 bg-secondary">
                            <li>
                                <a href="{{ route('unser-team.de') }}" class="text-light text-decoration-none">
                                    our team</a>
                            </li>
                            <li>
                                <a href="{{ route('karriere.de') }}" class="text-light text-decoration-none">carrier</a>
                            </li>
                            <li>
                                <a href="{{ route('anfahrt.de') }}" class="text-light text-decoration-none">Anfahrt</a>
                            </li>
                            <li>
                                <a href="{{ route('impressum.de') }}" class="text-light text-decoration-none">legal
                                    notice</a>
                            </li>
                            <li>
                                <a href="{{ route('datenschutz.de') }}" class="text-light text-decoration-none">privacy
                                    policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card h-100 border-2">
                    <div class="card-body text-start bg-secondary">
                        <h5 class="card-title text-uppercase text-dark">Kontakt</h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <span class="text-light">Tel: 0123-456789</span>
                            </li>
                            <li>
                                <span class="text-light">
                                    E-Mail:
                                    <a href="mailto:info@zahnarztpraxis-augsburg.doctor"
                                        class="text-decoration-none text-light">
                                        info
                                        @zahnarztpraxis-augsburg.doctor
                                    </a>
                                </span>
                            </li>
                            <li>
                                <span class="text-light">Musterstraße 1, 86150 Augsburg</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card h-100 border-1">
                    <div class="card-body text-start bg-secondary text-light">
                        <h5 class="card-title text-uppercase text-dark">Sprechzeiten</h5>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="bg-dark text-white" scope="col">Tag</th>
                                    <th class="bg-dark text-white" scope="col">Uhrzeit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Mo. - Do.</th>
                                    <td>8:30 Uhr - 18:00 Uhr</td>
                                </tr>
                                <tr>
                                    <th scope="row">Fr.</th>
                                    <td>8:30 Uhr - 13:00 Uhr</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card h-100 border-1">
                    <div class="card-body bg-secondary">
                        <img src="{{ asset('media\patientenbefragung\patientenbefragugng2.png') }}" class="img-fluid"
                            alt="Patientenbefragung" width="200px" height="auto" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4 small">© 2025 Zahnarztpraxis Augsburg</div>
    {{-- <div class="text-center mt-4 small"> <a href="{{ route('phpinfo') }}"
            class="text-light text-decoration-none">PHPinfo</a></div> --}}



</footer>
