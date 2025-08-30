@extends('layouts.en.main')

@section('title', 'Zahnarztpraxis')

@section('content')

<main>


    <section class="container py-5">
        <!-- Zahnersatz -->
        <h5 class="display-5 text-primary mt-5">Dental Prosthesis</h5>
        <div class="accordion accordion-flush" id="accordionZahnersatz">
            <div class="accordion-item">
                <h5 class="accordion-header" id="headingZ1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseZ1">
                        <h5>Dental bridges and crowns</h5>
                    </button>
                </h5>
                <div id="collapseZ1" class="accordion-collapse collapse" data-bs-parent="#accordionZahnersatz">
                    <div class="accordion-body">
                        For a co pay&shy;ment of just 330 euros (per tooth). Au&shy;gs&shy;burg mas&shy;ter
                        la&shy;bo&shy;ra&shy;to&shy;ry and 6-year war&shy;ran&shy;ty. In an ef&shy;fort to make
                        full-ce&shy;ra&shy;mic crowns and full-ce&shy;ra&shy;mic bridges in the
                        pos&shy;te&shy;ri&shy;or tooth re&shy;gion more sta&shy;ble and
                        frac&shy;ture-re&shy;sis&shy;tant, a new sys&shy;tem was in&shy;tro&shy;duced to the
                        mar&shy;ket some time ago.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h5 class="accordion-header" id="headingZ2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseZ2">
                        <h5>Mini-Implantates</h5>
                    </button>
                </h5>
                <div id="collapseZ2" class="accordion-collapse collapse" data-bs-parent="#accordionZahnersatz">
                    <div class="accordion-body">
                        <p>
                            Af&shy;ford&shy;a&shy;ble den&shy;ture sta&shy;bi&shy;li&shy;za&shy;tion and
                            se&shy;cure den&shy;tal re&shy;place&shy;ment using mi&shy;ni im&shy;plants. The 3M
                            ESPE mi&shy;ni im&shy;plants are very small, bio&shy;com&shy;pat&shy;i&shy;ble
                            screw-type im&shy;plants made of ti&shy;tan&shy;i&shy;um al&shy;loy, which are placed
                            in a min&shy;i&shy;mal&shy;ly in&shy;va&shy;sive man&shy;ner and are
                            im&shy;me&shy;di&shy;ate&shy;ly load&shy;able in the low&shy;er jaw.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h5 class="accordion-header" id="headingZ3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseZ3">
                        <h5>Telescope denture</h5>
                    </button>
                </h5>
                <div id="collapseZ3" class="accordion-collapse collapse" data-bs-parent="#accordionZahnersatz">
                    <div class="accordion-body">
                        <p>
                            The lux&shy;u&shy;ry op&shy;tion among par&shy;tial den&shy;tures: te&shy;le&shy;scope
                            den&shy;ture. More el&shy;e&shy;gance and se&shy;cu&shy;ri&shy;ty – for all who
                            val&shy;ue com&shy;fort.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Zahnästhetik -->

        <h5 class="display-5 text-primary mt-5" id="link-zahnasthetik">Aesthetic Dentistry</h5>
        <span class="ps-3 c-fs-10px text-danger">
            From this point on, the text was written by ChatGPT
        </span>
        <div class="accordion accordion-flush" id="accordionZahnaesthetik">
            <div class="accordion-item">
                <h5 class="accordion-header" id="headingA1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseA1">
                        <h5>Tooth whitening</h5>
                    </button>
                </h5>
                <div id="collapseA1" class="accordion-collapse collapse" data-bs-parent="#accordionZahnaesthetik">
                    <div class="accordion-body">
                        <p>
                            A bright, white smile stands for health, care, and at&shy;trac&shy;tive&shy;ness.
                            Pro&shy;fes&shy;sion&shy;al tooth whiten&shy;ing can gently and
                            ef&shy;fec&shy;tive&shy;ly brighten dis&shy;col&shy;ored teeth – for a
                            nat&shy;u&shy;ral&shy;ly beau&shy;ti&shy;ful ap&shy;pear&shy;ance.
                        </p>

                        <h5>Causes of Tooth Dis&shy;col&shy;or&shy;a&shy;tion</h5>
                        <p>
                            Over time, teeth can be&shy;come dis&shy;col&shy;ored due to cof&shy;fee, tea, red
                            wine, or nic&shy;o&shy;tine con&shy;sump&shy;tion. Cer&shy;tain
                            med&shy;i&shy;ca&shy;tions or nat&shy;u&shy;ral ag&shy;ing pro&shy;cess&shy;es may
                            con&shy;trib&shy;ute as well. A whiten&shy;ing treat&shy;ment can
                            per&shy;ma&shy;nent&shy;ly re&shy;move these dis&shy;col&shy;or&shy;a&shy;tions.
                        </p>

                        <h5>Pro&shy;fes&shy;sion&shy;al In-Of&shy;fice Whiten&shy;ing</h5>
                        <p>
                            With in-of&shy;fice whiten&shy;ing, the tooth bright&shy;en&shy;ing is done
                            di&shy;rect&shy;ly in our prac&shy;tice. A spe&shy;cial gel is ap&shy;plied to the
                            teeth and ac&shy;tiv&shy;a&shy;ted with a spe&shy;cial light. Re&shy;sults are
                            usu&shy;al&shy;ly vis&shy;i&shy;ble af&shy;ter just one ses&shy;sion.
                        </p>

                        <h5>Home Whiten&shy;ing – At Home</h5>
                        <p>
                            For home whiten&shy;ing, you will re&shy;ceive cus&shy;tom-fit&shy;ted trays and a
                            spe&shy;cial bleach&shy;ing gel from us. Ap&shy;pli&shy;ca&shy;tion takes place over
                            sev&shy;er&shy;al days at home – with con&shy;trol&shy;lable whiten&shy;ing
                            re&shy;sults.
                        </p>

                        <h5>Is Whiten&shy;ing Safe?</h5>
                        <p>
                            Yes – un&shy;der den&shy;tal su&shy;per&shy;vi&shy;sion, whiten&shy;ing is safe and
                            gentle. Be&shy;fore each treat&shy;ment, we check the health of your teeth and
                            pro&shy;vide per&shy;son&shy;al&shy;ized ad&shy;vice.
                        </p>

                        <h5>Book an Ap&shy;point&shy;ment Now</h5>
                        <p>Give your smile a new ra&shy;di&shy;ance – we look for&shy;ward to your visit!</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h5 class="accordion-header" id="headingA2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseA2">
                        <h5>Veneers</h5>
                    </button>
                </h5>
                <div id="collapseA2" class="accordion-collapse collapse" data-bs-parent="#accordionZahnaesthetik">
                    <div class="accordion-body">
                        <h5>Ve&shy;neers – Aes&shy;thet&shy;ics for a Per&shy;fect Smile</h5>
                        <p>
                            Ve&shy;neers are ul&shy;tra-thin ce&shy;ram&shy;ic cov&shy;er&shy;ings that are firmly
                            ap&shy;plied to the vis&shy;i&shy;ble front side of the teeth. They of&shy;fer a
                            long-last&shy;ing and beau&shy;ti&shy;ful so&shy;lu&shy;tion for dis&shy;col&shy;ored,
                            mis&shy;aligned, or dam&shy;aged teeth – for a har&shy;mo&shy;ni&shy;ous and
                            nat&shy;u&shy;ral-look&shy;ing smile.
                        </p>

                        <h5>When Are Ve&shy;neers Use&shy;ful?</h5>
                        <p>
                            Ve&shy;neers are ide&shy;al for cor&shy;rect&shy;ing:
                            <br />
                            – Tooth dis&shy;col&shy;or&shy;a&shy;tions
                            <br />
                            – Minor mis&shy;align&shy;ments
                            <br />
                            – Chip&shy;ped or bro&shy;ken edges
                            <br />
                            – Short or ir&shy;reg&shy;u&shy;lar teeth
                            <br />
                            – Gaps in the front teeth
                        </p>

                        <h5>Nat&shy;u&shy;ral and Long-Last&shy;ing</h5>
                        <p>
                            Thanks to mod&shy;ern den&shy;tal med&shy;i&shy;cine, ve&shy;neers look
                            en&shy;tire&shy;ly nat&shy;u&shy;ral – shape, col&shy;or, and
                            trans&shy;par&shy;en&shy;cy are in&shy;di&shy;vid&shy;u&shy;al&shy;ly tai&shy;lored to
                            your teeth. The high-qual&shy;i&shy;ty ce&shy;ram&shy;ic is not only
                            aes&shy;thet&shy;ic but al&shy;so par&shy;tic&shy;u&shy;lar&shy;ly du&shy;ra&shy;ble
                            and col&shy;or-sta&shy;ble.
                        </p>

                        <h5>The Path to Your Ve&shy;neers</h5>
                        <p>
                            Af&shy;ter a thor&shy;ough con&shy;sul&shy;ta&shy;tion and plan&shy;ning, the
                            af&shy;fect&shy;ed teeth are gent&shy;ly shaped. Pre&shy;cise im&shy;pres&shy;sions
                            are then tak&shy;en and the ve&shy;neers are pro&shy;duced in the
                            lab&shy;o&shy;ra&shy;to&shy;ry. They are bond&shy;ed us&shy;ing a spe&shy;cial
                            ad&shy;he&shy;sive – safe, gen&shy;tle, and per&shy;ma&shy;nent.
                        </p>

                        <h5>Your Smile – Per&shy;son&shy;al & Unique</h5>
                        <p>
                            Ev&shy;ery per&shy;son is unique – just like their smile. With ve&shy;neers, we
                            high&shy;light your nat&shy;u&shy;ral beau&shy;ty in the gentlest way and help you
                            feel com&shy;plete&shy;ly at ease again.
                        </p>

                        <h5>Book a Con&shy;sul&shy;ta&shy;tion Now</h5>
                        <p>
                            In a per&shy;son&shy;al con&shy;ver&shy;sa&shy;tion, we are hap&shy;py to ad&shy;vise
                            you on your op&shy;tions with ve&shy;neers. Book your ap&shy;point&shy;ment now – we
                            look for&shy;ward to meet&shy;ing you!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Prophylaxe -->
        <h5 class="display-5 text-primary mt-5" id="link-prophylaxe">Prophylaxis</h5>
        <div class="accordion accordion-flush" id="accordionProphylaxe">
            <div class="accordion-item">
                <h5 class="accordion-header" id="headingP1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseP1">
                        <h5>Professional Dental Cleaning</h5>
                    </button>
                </h5>
                <div id="collapseP1" class="accordion-collapse collapse" data-bs-parent="#accordionProphylaxe">
                    <div class="accordion-body">
                        <h5>
                            Pro&shy;fes&shy;sion&shy;al Tooth Clean&shy;ing – for Healthy Teeth and Fresh Breath
                        </h5>
                        <p>
                            Pro&shy;fes&shy;sion&shy;al tooth clean&shy;ing (PDC) is an im&shy;port&shy;ant part
                            of mod&shy;ern pre&shy;ven&shy;tive care. It re&shy;moves stub&shy;born
                            de&shy;pos&shy;its, tar&shy;tar, and bac&shy;te&shy;ria that can&shy;not be ful&shy;ly
                            re&shy;moved by home oral hy&shy;giene alone. The re&shy;sult:
                            no&shy;tice&shy;a&shy;bly smooth teeth, a fresh feel&shy;ing in the mouth, and
                            long-term gum health.
                        </p>

                        <h5>Why Get a PDC?</h5>
                        <p>
                            Even with thor&shy;ough brush&shy;ing, plaque can build up over time in
                            in&shy;ter&shy;den&shy;tal spac&shy;es and along the gum&shy;line. This can lead to
                            in&shy;flam&shy;ma&shy;tion, tar&shy;tar, and pe&shy;ri&shy;odon&shy;titis.
                            Reg&shy;u&shy;lar pro&shy;fes&shy;sion&shy;al clean&shy;ings help pre&shy;vent these
                            is&shy;sues ef&shy;fec&shy;tive&shy;ly and pre&shy;serve the health of your teeth.
                        </p>

                        <h5>What Hap&shy;pens Dur&shy;ing the Clean&shy;ing?</h5>
                        <p>
                            Our spe&shy;cial&shy;ly trained den&shy;tal hy&shy;gien&shy;ists thor&shy;ough&shy;ly
                            clean all tooth sur&shy;faces with spe&shy;cial in&shy;stru&shy;ments, re&shy;move
                            tar&shy;tar, pol&shy;ish the teeth, and ap&shy;ply a pro&shy;tec&shy;tive
                            flu&shy;o&shy;ride gel. On re&shy;quest, you will al&shy;so re&shy;ceive guid&shy;ance
                            on op&shy;ti&shy;mal oral hy&shy;giene at home.
                        </p>

                        <h5>How Of&shy;ten Is a PDC Rec&shy;om&shy;mend&shy;ed?</h5>
                        <p>
                            De&shy;pend&shy;ing on your in&shy;di&shy;vid&shy;u&shy;al risk, we
                            rec&shy;om&shy;mend a PDC twice a year. If you have pre-ex&shy;ist&shy;ing gum
                            prob&shy;lems or a high car&shy;ies risk, short&shy;er in&shy;ter&shy;vals may be
                            ad&shy;vis&shy;a&shy;ble.
                        </p>

                        <h5>Ben&shy;e&shy;fits at a Glance:</h5>
                        <p>
                            – Pre&shy;ven&shy;tion of car&shy;ies and pe&shy;ri&shy;odon&shy;titis
                            <br />
                            – Long-term tooth pre&shy;ser&shy;va&shy;tion
                            <br />
                            – Fresh breath and smooth tooth sur&shy;faces
                            <br />
                            – Aes&shy;thet&shy;i&shy;cal&shy;ly clean smile
                        </p>

                        <h5>Book Your Pre&shy;ven&shy;tive Care Ap&shy;point&shy;ment Now</h5>
                        <p>
                            Treat your teeth to reg&shy;u&shy;lar care at the high&shy;est level. We look
                            for&shy;ward to your vis&shy;it and are hap&shy;py to ad&shy;vise you
                            per&shy;son&shy;al&shy;ly on PDC.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gutachten -->
        <h5 class="display-5 text-primary mt-5" id="link-gutachten">Reports</h5>
        <div class="accordion accordion-flush" id="accordionGutachten">
            <div class="accordion-item">
                <h5 class="accordion-header" id="headingG1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseG1">
                        <h5>Dental Expert Reports</h5>
                    </button>
                </h5>
                <div id="collapseG1" class="accordion-collapse collapse" data-bs-parent="#accordionGutachten">
                    <div class="accordion-body">
                        <p>
                            An in&shy;de&shy;pen&shy;dent and pro&shy;fes&shy;sion&shy;al as&shy;sess&shy;ment of
                            den&shy;tal ques&shy;tions. Whether for in&shy;sur&shy;ance mat&shy;ters, le&shy;gal
                            dis&shy;putes, the eval&shy;u&shy;a&shy;tion of ex&shy;ist&shy;ing den&shy;tal
                            pros&shy;the&shy;ses, or as a sec&shy;ond opin&shy;ion – we pro&shy;vide you with a
                            well-found&shy;ed, trans&shy;par&shy;ent ex&shy;pert re&shy;port at the high&shy;est
                            pro&shy;fes&shy;sion&shy;al lev&shy;el.
                        </p>

                        <h5>When Is an Ex&shy;pert Re&shy;port Use&shy;ful?</h5>
                        <p>
                            A den&shy;tal ex&shy;pert re&shy;port may be re&shy;quired in the fol&shy;low&shy;ing
                            cas&shy;es:
                            <br />
                            – Treat&shy;ment find&shy;ings or sus&shy;pect&shy;ed mal&shy;treat&shy;ment
                            <br />
                            – Qual&shy;i&shy;ty as&shy;sess&shy;ment of pros&shy;the&shy;ses
                            <br />
                            – Dis&shy;putes with health in&shy;sur&shy;ance com&shy;pa&shy;nies
                            <br />
                            – Prepa&shy;ra&shy;tion for le&shy;gal pro&shy;ceed&shy;ings
                            <br />
                            – Sec&shy;ond opin&shy;ions on com&shy;plex treat&shy;ment plans
                        </p>

                        <h5>Our Ap&shy;proach</h5>
                        <p>
                            Each re&shy;port is based on a thor&shy;ough ex&shy;am&shy;i&shy;na&shy;tion,
                            care&shy;ful doc&shy;u&shy;men&shy;ta&shy;tion, and – if nec&shy;es&shy;sary – an
                            anal&shy;y&shy;sis of ex&shy;ist&shy;ing find&shy;ings, X-rays, and
                            lab&shy;o&shy;ra&shy;to&shy;ry da&shy;ta. We pre&shy;sent med&shy;i&shy;cal&shy;ly
                            rel&shy;e&shy;vant facts neu&shy;tral&shy;ly, clear&shy;ly, and
                            trans&shy;par&shy;ent&shy;ly.
                        </p>

                        <h5>Con&shy;fi&shy;dent Ad&shy;vice</h5>
                        <p>
                            Ex&shy;pert opin&shy;ions are of&shy;ten linked to emo&shy;tion&shy;al&shy;ly
                            bur&shy;den&shy;some sit&shy;u&shy;a&shy;tions. We ac&shy;com&shy;pa&shy;ny you with
                            em&shy;pa&shy;thy, thor&shy;ough&shy;ness, and spe&shy;cial care. You can rely on our
                            many years of ex&shy;per&shy;i&shy;ence and in&shy;de&shy;pen&shy;dent
                            ex&shy;per&shy;tise.
                        </p>

                        <h5>Good to Know</h5>
                        <p>
                            Den&shy;tal ex&shy;pert opin&shy;ions can be pri&shy;vate&shy;ly
                            com&shy;mis&shy;sioned or re&shy;quest&shy;ed by health in&shy;sur&shy;ance
                            com&shy;pa&shy;nies, courts, or oth&shy;er in&shy;sti&shy;tu&shy;tions. We will
                            hap&shy;pi&shy;ly in&shy;form you in ad&shy;vance about the scope, pro&shy;cess, and
                            cost.
                        </p>

                        <h5>Book an Ap&shy;point&shy;ment Now</h5>
                        <p>
                            Do you need a re&shy;li&shy;a&shy;ble den&shy;tal ex&shy;pert opin&shy;ion?
                            Con&shy;tact us – we sup&shy;port you with com&shy;pe&shy;tent and dis&shy;creet
                            ex&shy;per&shy;tise.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

