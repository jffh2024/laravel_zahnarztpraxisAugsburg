@extends('layouts.en.main')

@section('title', 'Zahnarztpraxis')

@section('content')

    <main>


        <section class="container ps-4 pe-4 pt-4 pb-4 bg-primary">
            <div class="accordion" id="accordionExample">

                <!-- Prof. Zahnrichter -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                            Prof. Zahnrichter
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body justify-content-center">
                            <div class="card">
                                <div class="text-center p-2">
                                    <img src="media/Zahnrichter.png" class="img-fluid"
                                        style="max-height: 150px; width: auto;" alt="Prof Zahnrichter">
                                </div>
                                <div class="card-body">
                                    <h3>Prof. Dr. Klaus Zahnrichter – CV</h3>
                                    <ul>
                                        <li><strong>1990–1996:</strong> Studied dentistry at the University of Heidelberg
                                        </li>
                                        <li><strong>1998:</strong> Doctorate in dental medicine (Dr. med. dent.) with
                                            distinction</li>
                                        <li><strong>2002:</strong> Specialist in oral surgery</li>
                                        <li><strong>2003–2009:</strong> Senior physician at the University Clinic Freiburg,
                                            Department of Oral and Maxillofacial Surgery</li>
                                        <li><strong>2010:</strong> Habilitation and appointment as Associate Professor</li>
                                        <li><strong>2011:</strong> Founded his own dental and implantology practice in
                                            Augsburg</li>
                                        <li><strong>Since 2013:</strong> Lecturer in implantology and dental surgery at the
                                            University of Tübingen</li>
                                        <li><strong>Ongoing:</strong> Numerous publications and lectures at national and
                                            international conferences</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prof. Bettina Zahnrichterin -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo">
                            Prof. Dr. Bettina Zahnrichterin
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body justify-content-center">
                            <div class="card">
                                <div class="text-center p-2">
                                    <img src="media/Zahnrichterin.png" class="img-fluid"
                                        style="max-height: 150px; width: auto;" alt="Prof. Dr. Zahnrichterin">
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li><strong>1992–1998:</strong> Studied dentistry at the Free University of Berlin
                                        </li>
                                        <li><strong>2000:</strong> Doctorate in dental medicine with a focus on
                                            periodontology</li>
                                        <li><strong>2003:</strong> Certified as a specialist in periodontology</li>
                                        <li><strong>2004–2010:</strong> Senior dentist at the Clinic for Conservative
                                            Dentistry and Preventive Dentistry in Munich</li>
                                        <li><strong>2011:</strong> Habilitation and appointment as Associate Professor</li>
                                        <li><strong>Since 2012:</strong> Joint practice with Prof. Dr. Klaus Zahnrichter in
                                            Augsburg</li>
                                        <li><strong>Since 2014:</strong> Lecturer in periodontology at the University of
                                            Heidelberg</li>
                                        <li><strong>Ongoing:</strong> Active in training young dentists and contributing to
                                            publications</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Julia Zahnfee -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree">
                            Julia Zahnfee
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body justify-content-center">
                            <div class="card">
                                <div class="text-center p-2">
                                    <img src="media/Zahnfee.png" class="img-fluid" style="max-height: 150px; width: auto;"
                                        alt="Julia Zahnfee">
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li><strong>2014–2017:</strong> Trained as a dental assistant (ZFA) in Stuttgart
                                        </li>
                                        <li><strong>Since 2017:</strong> Working as a dental assistant focusing on
                                            prophylaxis and patient care</li>
                                        <li><strong>Further training:</strong> Professional teeth cleaning, assistance
                                            during surgical procedures</li>
                                        <li><strong>Since 2021:</strong> Team member at Prof. Dr. Zahnrichter's practice
                                        </li>
                                        <li><strong>Strengths:</strong> Friendliness, precision, empathetic with patients
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dalibor Zahnelfović -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour">
                            Dalibor Zahnelfović
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="card  justify-content-center">
                                <div class="text-center p-2">
                                    <img src="media/zahnelf.png" class="img-fluid" style="max-height: 150px; width: auto;"
                                        alt="Dalibor Zahnelfović">
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li><strong>2012–2015:</strong> Trained as a dental assistant (ZFA) in Nuremberg
                                        </li>
                                        <li><strong>Experience:</strong> Worked in various practices specializing in
                                            surgical assistance and implantology</li>
                                        <li><strong>2018:</strong> Certified as a prophylaxis assistant</li>
                                        <li><strong>Since 2022:</strong> Team member at Prof. Dr. Zahnrichter's practice
                                        </li>
                                        <li><strong>Strengths:</strong> Technical understanding, calm demeanor, dedicated
                                            patient care</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Emma Empfang -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive">
                            Emma Empfang
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body justify-content-center">
                            <div class="card">
                                <div class="text-center p-2">
                                    <img src="media/Empfang.png" class="img-fluid" style="max-height: 150px; width: auto;"
                                        alt="Emma Empfang">
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li><strong>1994–1997:</strong> Trained as an office administrator/secretary in
                                            Karlsruhe</li>
                                        <li><strong>Experience:</strong> Over 20 years in medical reception and
                                            administrative work</li>
                                        <li><strong>Since 2018:</strong> Receptionist at Prof. Dr. Zahnrichter's practice
                                        </li>
                                        <li><strong>Responsibilities:</strong> Scheduling, patient reception, billing, and
                                            practice organization</li>
                                        <li><strong>Strengths:</strong> Friendliness, organizational talent, discretion with
                                            patient data</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Aylin Aktaş -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix">
                            Aylin Aktaş
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body justify-content-center">
                            <div class="card">
                                <div class="text-center p-2">
                                    <img src="media/Aktas.png" class="img-fluid" style="max-height: 150px; width: auto;"
                                        alt="Aylin Aktaş">
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li><strong>2010–2013:</strong> Trained as a dental assistant (ZFA) in Mannheim</li>
                                        <li><strong>2016:</strong> Further qualification as a prophylaxis assistant with
                                            focus on professional cleaning</li>
                                        <li><strong>Experience:</strong> Over 10 years in chairside assistance, patient
                                            care, and prophylaxis</li>
                                        <li><strong>Since 2020:</strong> Part of Prof. Dr. Zahnrichter's team</li>
                                        <li><strong>Special role:</strong> Informal lead of the dental assistant team
                                            ("non-dentist staff")</li>
                                        <li><strong>Strengths:</strong> Professional competence, reliability, clear
                                            communication, teamwork</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


    </main>
@endsection

