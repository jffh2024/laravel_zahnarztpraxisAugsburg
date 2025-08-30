{{-- de index --}}

@extends('layouts.de.main')

@section('title', 'Zahnarztpraxis')

@section('content')


    <main>



        <section class="container ps-4 pe-4 pt-4 pb-4 bg-primary">

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                            a">
                            Prof. Zahnrichter
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body justify-content-center">
                            <div class="card">
                                <div class="text-center p-2 ">
                                    <img src={{ asset('media/team/Zahnrichter.png') }} class="img-fluid"
                                        style="max-height: 150px; width: auto;" alt="Prof Zahnrichter">
                                </div>
                                <div class="card-body ">
                                    <ul>
                                        <li><strong>1990–1996:</strong> Studium der Zahnmedizin an der Universität
                                            Heidelberg</li>
                                        <li><strong>1998:</strong> Promotion zum Dr. med. dent. mit Auszeichnung</li>
                                        <li><strong>2002:</strong> Fachzahnarzt für Oralchirurgie</li>
                                        <li><strong>2003–2009:</strong> Oberarzt an der Universitätsklinik Freiburg,
                                            Abteilung für MKG-Chirurgie</li>
                                        <li><strong>2010:</strong> Habilitation und Ernennung zum außerplanmäßigen
                                            Professor</li>
                                        <li><strong>2011:</strong> Gründung der eigenen Praxis für Zahnmedizin und
                                            Implantologie in Augsburg</li>
                                        <li><strong>Seit 2013:</strong> Lehrbeauftragter für Implantologie und
                                            zahnärztliche Chirurgie an der Universität Tübingen</li>
                                        <li><strong>Laufend:</strong> Fachveröffentlichungen und Vorträge auf nationalen
                                            und internationalen Kongressen</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Prof Dr. Bettina Zahnrichterin
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body   justify-content-center">
                            <div class="card">
                                <div class="text-center p-2">
                                    <img src="{{ asset('media/team/Zahnrichterin.png') }}" class="img-fluid"
                                        style="max-height: 150px; width: auto;" alt="Prof Zahnrichter">
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li><strong>1992–1998:</strong> Studium der Zahnmedizin an der Freien Universität
                                            Berlin</li>
                                        <li><strong>2000:</strong> Promotion zur Dr. med. dent. mit Schwerpunkt
                                            Parodontologie</li>
                                        <li><strong>2003:</strong> Anerkennung als Fachzahnärztin für Parodontologie</li>
                                        <li><strong>2004–2010:</strong> Oberärztin an der Poliklinik für Zahnerhaltung und
                                            Präventivzahnmedizin in München</li>
                                        <li><strong>2011:</strong> Habilitation und Berufung zur außerplanmäßigen
                                            Professorin</li>
                                        <li><strong>Seit 2012:</strong> Gemeinschaftspraxis mit Prof. Dr. Klaus Zahnrichter
                                            in Augsburg</li>
                                        <li><strong>Seit 2014:</strong> Lehrbeauftragte für Parodontologie an der
                                            Universität Heidelberg</li>
                                        <li><strong>Laufend:</strong> Engagement in der Fortbildung junger Zahnärztinnen
                                            und Mitwirkung an Fachpublikationen</li>
                                    </ul>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Julia Zahnfee
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body  justify-content-center">
                            <div class="card">
                                <div class="text-center p-2">
                                    <img src="{{asset('media/team/Zahnfee.png')}}" class="img-fluid" style="max-height: 150px; width: auto;"
                                        alt="Julia Zahnfee">
                                </div>
                                <div class="card-body">

                                    <ul>
                                        <li><strong>2014–2017:</strong> Ausbildung zur Zahnmedizinischen Fachangestellten
                                            (ZFA) in Stuttgart</li>
                                        <li><strong>Seit 2017:</strong> Tätigkeit als Zahnarzthelferin mit Schwerpunkt
                                            Prophylaxe und Patientenbetreuung</li>
                                        <li><strong>Fortbildungen:</strong> Professionelle Zahnreinigung, Assistenz bei
                                            chirurgischen Eingriffen</li>
                                        <li><strong>Seit 2021:</strong> Teammitglied in der Praxis Prof. Dr. Zahnrichter
                                        </li>
                                        <li><strong>Stärken:</strong> Freundlichkeit, Sorgfalt, einfühlsamer Umgang mit
                                            Patientinnen und Patienten</li>
                                    </ul>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Dalibor Zahnelfović
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body justify-content-center">
                            <div class="card">
                                <div class="text-center p-2">
                                    <img src="{{asset('media/team/zahnelf.png')}}" class="img-fluid" style="max-height: 150px; width: auto;"
                                        alt="Dalibor Zahnelfović">
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li><strong>2012–2015:</strong> Ausbildung zum Zahnmedizinischen Fachangestellten
                                            (ZFA) in Nürnberg</li>
                                        <li><strong>Berufserfahrung:</strong> Mitarbeit in verschiedenen Praxen mit
                                            Schwerpunkt chirurgische Assistenz und Implantologie</li>
                                        <li><strong>2018:</strong> Fortbildung zum zertifizierten Prophylaxe-Assistenten
                                        </li>
                                        <li><strong>Seit 2022:</strong> Teammitglied in der Praxis Prof. Dr. Zahnrichter
                                        </li>
                                        <li><strong>Stärken:</strong> Technisches Verständnis, ruhiges Auftreten,
                                            engagierte Patientenbetreuung</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Emma Empfang
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body  justify-content-center">
                            <div class="card">
                                <div class="text-center p-2">
                                    <img src="{{asset('media/team/Empfang.png')}}" class="img-fluid" style="max-height: 150px; width: auto;"
                                        alt="Emma Empfang">
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li><strong>1994–1997:</strong> Ausbildung zur Bürokauffrau/Sekretärin in Karlsruhe
                                        </li>
                                        <li><strong>Berufserfahrung:</strong> Über 20 Jahre im medizinischen Empfangs- und
                                            Verwaltungsbereich</li>
                                        <li><strong>Seit 2018:</strong> Rezeptionistin in der Praxis Prof. Dr. Zahnrichter
                                        </li>
                                        <li><strong>Aufgaben:</strong> Terminvergabe, Patientenempfang, Abrechnung und
                                            Praxisorganisation</li>
                                        <li><strong>Stärken:</strong> Freundlichkeit, Organisationstalent, diskreter und
                                            sicherer Umgang mit Patientendaten</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
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
                                    <img src="{{asset('media/team/Aktas.png')}}" class="img-fluid" style="max-height: 150px; width: auto;"
                                        alt="Aylin Aktaş ">
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li><strong>2010–2013:</strong> Ausbildung zur Zahnmedizinischen Fachangestellten
                                            (ZFA) in Mannheim</li>
                                        <li><strong>2016:</strong> Weiterbildung zur Prophylaxe-Assistentin mit Schwerpunkt
                                            professionelle Zahnreinigung</li>
                                        <li><strong>Berufserfahrung:</strong> Über 10 Jahre tätig in Stuhlassistenz,
                                            Patientenbetreuung und Prophylaxe</li>
                                        <li><strong>Seit 2020:</strong> Teammitglied der Praxis Prof. Dr. Zahnrichter</li>
                                        <li><strong>Sonderrolle:</strong> Inoffizielle Teamleitung der zahnmedizinischen
                                            Assistenz („Nicht-Zahnärzte“)</li>
                                        <li><strong>Stärken:</strong> Fachliche Kompetenz, Verlässlichkeit, klare
                                            Kommunikation und Teamorientierung</li>
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
