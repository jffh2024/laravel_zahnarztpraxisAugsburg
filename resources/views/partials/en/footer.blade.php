{{-- resources\views\partials\en\footer.blade.php --}}

<!-- Footer -->
<footer class="p-4 bg-primary">
    <div class="container-fluid">
        <div class="row text-center gy-4">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card h-100 border-1">
                    <div class="card-body text-start bg-secondary text-">
                        <h5 class="card-title text-uppercase">About us</h5>
                        <ul class="list-unstyled mb-0 bg-secondary">
                            <li>
                                <a href="{{ route('unser-team.en') }}" class="text-light text-decoration-none"> Our
                                    Team</a>
                            </li>
                            <li>
                                <a href="{{ route('karriere.en') }}" class="text-light text-decoration-none">Careers</a>
                            </li>
                            <li>
                                <a href="{{ route('anfahrt.en') }}" class="text-light text-decoration-none">Find us</a>
                            </li>
                            <li>
                                <a href="{{ route('impressum.en') }}" class="text-light text-decoration-none">Legal
                                    Notice</a>
                            </li>
                            <li>
                                <a href="{{ route('datenschutz.en') }}" class="text-light text-decoration-none">Privacy
                                    Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card h-100 border-2">
                    <div class="card-body text-start bg-secondary">
                        <h5 class="card-title text-uppercase text-dark">Con&shy;tact</h5>
                        <ul class="list-unstyled mb-0">
                            <li><span class="text-light">Tel: 0123-456789</span></li>
                            <li>
                                <span class="text-light">
                                    Email:
                                    <a href="mailto:info@zahnarztpraxis-augsburg.doctor"
                                        class="text-decoration-none text-light">
                                        info@zahnarztpraxis-augsburg.doctor
                                    </a>
                                </span>
                            </li>
                            <li>
                                <span class="text-light">
                                    Musterstrasse 1, 86150 Augsburg
                                </span>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card h-100 border-1">
                    <div class="card-body text-start bg-secondary text-light">
                        <h5 class="card-title text-uppercase text-dark">
                            <span> Office Hours</span>
                        </h5>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="bg-dark text-white" scope="col">Day</th>
                                    <th class="bg-dark text-white" scope="col">Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><span>Mo. - Th.</span></th>
                                    <td><span></span>8:30 AM - 18:00 PM </span></td>
                                </tr>
                                <tr>
                                    <th scope="row">Fr.</th>
                                    <td>8:30 AM - 1:00 PM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card h-100 border-1">
                    <div class="card-body bg-secondary">
                        <img src="media/patientenbefragugng2.png" class="img-fluid" alt="Patientenbefragung"
                            width="200px" height="auto" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4 small">© 2025 Zahnarztpraxis Augsburg</div>
</footer>
