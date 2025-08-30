{{-- de index --}}

@extends('layouts.de.main')

@section('title', 'Zahnarztpraxis')

@section('content')






    <!-- Inhalt -->
    <main>
        <section class="container py-5">
            <!-- Zahnersatz -->
            <h5 class="display-5 text-primary mt-5">Zahnersatz</h5>
            <div class="accordion accordion-flush" id="accordionZahnersatz">
                <div class="accordion-item">
                    <h5 class="accordion-header" id="headingZ1">
                        <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseZ1">
                            Brücken und Kronen
                        </button>
                    </h5>
                    <div id="collapseZ1" class="accordion-collapse collapse" data-bs-parent="#accordionZahnersatz">
                        <div class="accordion-body">
                            Zum Eigen&shy;anteil von nur 330,- Euro (pro Zahn).
                            Augs&shy;burger Meis&shy;ter&shy;labor und 6 Jahre
                            Ga&shy;ran&shy;tie. In dem Be&shy;mü&shy;hen,
                            Voll&shy;ke&shy;ra&shy;mik-Kro&shy;nen und auch
                            Voll&shy;ke&shy;ra&shy;mik-Brü&shy;cken im
                            Sei&shy;ten&shy;zahn&shy;be&shy;reich sta&shy;bi&shy;ler und
                            bruch&shy;fes&shy;ter zu ma&shy;chen, wurde vor ei&shy;ni&shy;ger
                            Zeit ein neues Sys&shy;tem auf den Markt ge&shy;bracht.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h5 class="accordion-header" id="headingZ2">
                        <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseZ2">
                            Mini-Implantate
                        </button>
                    </h5>
                    <div id="collapseZ2" class="accordion-collapse collapse" data-bs-parent="#accordionZahnersatz">
                        <div class="accordion-body">
                            <p>
                                Güns&shy;tige
                                Pro&shy;the&shy;sen&shy;sta&shy;bi&shy;li&shy;sie&shy;rung und
                                fes&shy;ter Zahn&shy;er&shy;satz durch
                                Mi&shy;ni-Im&shy;plan&shy;tate. Bei den 3M ESPE
                                Mi&shy;ni-Im&shy;plan&shy;taten han&shy;delt es sich um sehr
                                klei&shy;ne, bio&shy;kom&shy;pa&shy;tible
                                Schrau&shy;ben&shy;im&shy;plan&shy;tate aus
                                Ti&shy;tan&shy;le&shy;gie&shy;rung, die
                                mi&shy;ni&shy;mal&shy;in&shy;va&shy;siv ein&shy;ge&shy;bracht
                                wer&shy;den und im Un&shy;ter&shy;kie&shy;fer so&shy;fort
                                be&shy;last&shy;bar sind.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h5 class="accordion-header" id="headingZ3">
                        <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseZ3">
                            Teleskopprothesen
                        </button>
                    </h5>
                    <div id="collapseZ3" class="accordion-collapse collapse" data-bs-parent="#accordionZahnersatz">
                        <div class="accordion-body">
                            <p>
                                Die Lu&shy;xus&shy;va&shy;ri&shy;an&shy;te un&shy;ter den
                                Teil&shy;pro&shy;the&shy;sen:
                                Te&shy;le&shy;skop&shy;pro&shy;the&shy;se Mehr Ele&shy;ganz und
                                Halt – für alle, die Wert auf Kom&shy;fort le&shy;gen
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Zahnästhetik -->

            <h5 class="display-5 text-primary mt-5" id="link-zahnasthetik">
                Zahnästhetik
            </h5>
            <span class="ps-3 c-fs-10px text-danger">Ab hier war ChatGPT der Texter</span>
            <div class="accordion accordion-flush" id="accordionZahnaesthetik">
                <div class="accordion-item">
                    <h5 class="accordion-header" id="headingA1">
                        <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseA1">
                            Zahn&shy;auf&shy;hel&shy;lung (Bleach&shy;ing)
                        </button>
                    </h5>
                    <div id="collapseA1" class="accordion-collapse collapse" data-bs-parent="#accordionZahnaesthetik">
                        <div class="accordion-body">
                            <p>
                                Ein strah&shy;lend wei&shy;ßes Lä&shy;cheln steht für
                                Ge&shy;sund&shy;heit, Pfle&shy;ge und
                                At&shy;trak&shy;ti&shy;vi&shy;tät. Durch
                                pro&shy;fes&shy;sio&shy;nel&shy;les Zahn&shy;bleach&shy;ing
                                kön&shy;nen ver&shy;färb&shy;te Zäh&shy;ne scho&shy;nend und
                                wirk&shy;sam auf&shy;ge&shy;hellt wer&shy;den – für ein
                                na&shy;tür&shy;lich schö&shy;nes
                                Er&shy;schei&shy;nungs&shy;bild.
                            </p>
                            <h5>Ur&shy;sachen für Zahn&shy;ver&shy;fär&shy;bun&shy;gen</h5>
                            <p>
                                Mit der Zeit kön&shy;nen sich Zäh&shy;ne durch den Kon&shy;sum
                                von Kaf&shy;fee, Tee, Rot&shy;wein oder Ni&shy;kotin
                                ver&shy;fär&shy;ben. Auch be&shy;stimm&shy;te
                                Me&shy;di&shy;ka&shy;men&shy;te oder na&shy;tür&shy;li&shy;che
                                Alte&shy;rungs&shy;pro&shy;zes&shy;se tra&shy;gen da&shy;zu bei.
                                Ein Bleach&shy;ing kann die&shy;se Ver&shy;fär&shy;bun&shy;gen
                                nach&shy;hal&shy;tig ent&shy;fer&shy;nen.
                            </p>
                            <h5>
                                Pro&shy;fes&shy;sio&shy;nel&shy;les
                                In&shy;Of&shy;fice-Bleach&shy;ing
                            </h5>
                            <p>
                                Beim In&shy;Of&shy;fice-Bleach&shy;ing er&shy;folgt die
                                Zahn&shy;auf&shy;hel&shy;lung di&shy;rekt in un&shy;se&shy;rer
                                Pra&shy;xis. Ein spe&shy;zi&shy;el&shy;les Gel wird auf die
                                Zäh&shy;ne auf&shy;ge&shy;tra&shy;gen und mit ei&shy;nem
                                spe&shy;zi&shy;el&shy;len Licht ak&shy;ti&shy;viert. Das
                                Er&shy;geb&shy;nis ist meist be&shy;reits nach ei&shy;ner
                                Be&shy;hand&shy;lung sicht&shy;bar.
                            </p>
                            <h5>Home-Bleach&shy;ing – für zu Hau&shy;se</h5>
                            <p>
                                Beim Home-Bleach&shy;ing er&shy;hal&shy;ten Sie von uns
                                in&shy;di&shy;vi&shy;du&shy;ell an&shy;ge&shy;fer&shy;tig&shy;te
                                Schie&shy;nen und ein spe&shy;zi&shy;el&shy;les Bleich&shy;gel.
                                Die An&shy;wen&shy;dung er&shy;folgt über meh&shy;re&shy;re
                                Ta&shy;ge bequem zu Hau&shy;se – mit
                                kon&shy;trol&shy;lier&shy;ba&shy;rem
                                Auf&shy;hel&shy;lungs&shy;ef&shy;fekt.
                            </p>
                            <h5>Ist Bleach&shy;ing si&shy;cher?</h5>
                            <p>
                                Ja – un&shy;ter zahn&shy;ärzt&shy;li&shy;cher Auf&shy;sicht ist
                                das Bleach&shy;ing si&shy;cher und scho&shy;nend. Vor je&shy;der
                                Be&shy;hand&shy;lung über&shy;prü&shy;fen wir die
                                Zahn&shy;ge&shy;sund&shy;heit und be&shy;ra&shy;ten Sie
                                in&shy;di&shy;vi&shy;du&shy;ell.
                            </p>
                            <h5>Jetzt Ter&shy;min ver&shy;ein&shy;ba&shy;ren</h5>
                            <p>
                                Ver&shy;lei&shy;hen Sie Ih&shy;rem Lä&shy;cheln neue
                                Strahl&shy;kraft – wir freu&shy;en uns auf Ih&shy;ren
                                Be&shy;such!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h5 class="accordion-header" id="headingA2">
                        <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseA2">
                            Veneers
                        </button>
                    </h5>
                    <div id="collapseA2" class="accordion-collapse collapse" data-bs-parent="#accordionZahnaesthetik">
                        <div class="accordion-body">
                            <h5>
                                Ve&shy;neers – Äs&shy;the&shy;tik für ein per&shy;fek&shy;tes
                                Lä&shy;cheln
                            </h5>
                            <p>
                                Ve&shy;neers sind hauch&shy;dün&shy;ne
                                Ke&shy;ra&shy;mik&shy;ver&shy;blen&shy;dun&shy;gen, die fest auf
                                der sicht&shy;ba&shy;ren Vor&shy;der&shy;sei&shy;te der
                                Zäh&shy;ne be&shy;fes&shy;tigt wer&shy;den. Sie bie&shy;ten
                                ei&shy;ne lang&shy;fris&shy;tig schö&shy;ne Lö&shy;sung bei
                                ver&shy;färb&shy;ten, schie&shy;fen oder
                                be&shy;schä&shy;dig&shy;ten Zäh&shy;nen – für ein
                                har&shy;mo&shy;ni&shy;sches und na&shy;tür&shy;lich
                                wir&shy;ken&shy;des Lä&shy;cheln.
                            </p>
                            <h5>Wann sind Ve&shy;neers sinn&shy;voll?</h5>
                            <p>
                                Ve&shy;neers eig&shy;nen sich ide&shy;al zur Kor&shy;rek&shy;tur
                                von: <br />– Zahn&shy;ver&shy;fär&shy;bun&shy;gen <br />–
                                klei&shy;nen Zahn&shy;fehl&shy;stel&shy;lun&shy;gen <br />–
                                ab&shy;ge&shy;split&shy;ter&shy;ten Kan&shy;ten <br />– zu
                                kur&shy;zen oder un&shy;re&shy;gel&shy;mä&shy;ßi&shy;gen
                                Zäh&shy;nen <br />– Zah&shy;len&shy;lü&shy;cken im
                                Front&shy;zahn&shy;be&shy;reich
                            </p>
                            <h5>Na&shy;tür&shy;lich und lang&shy;le&shy;big</h5>
                            <p>
                                Dank mo&shy;der&shy;ner Zahn&shy;me&shy;di&shy;zin wir&shy;ken
                                Ve&shy;neers völ&shy;lig na&shy;tür&shy;lich – Form, Far&shy;be
                                und Trans&shy;pa&shy;renz wer&shy;den
                                in&shy;di&shy;vi&shy;du&shy;ell an Ih&shy;re Zäh&shy;ne
                                an&shy;ge&shy;passt. Die hoch&shy;wer&shy;ti&shy;ge
                                Ke&shy;ra&shy;mik ist nicht nur ästhe&shy;tisch, son&shy;dern
                                auch be&shy;son&shy;ders wi&shy;der&shy;stands&shy;fä&shy;hig
                                und farb&shy;sta&shy;bil.
                            </p>
                            <h5>Der Weg zu Ih&shy;ren Ve&shy;neers</h5>
                            <p>
                                Nach ei&shy;ner um&shy;fas&shy;sen&shy;den Be&shy;ra&shy;tung
                                und Pla&shy;nung wer&shy;den die be&shy;trof&shy;fe&shy;nen
                                Zäh&shy;ne mi&shy;ni&shy;mal in Form ge&shy;bracht.
                                An&shy;schlie&shy;ßend wer&shy;den prä&shy;zi&shy;se
                                Ab&shy;drü&shy;cke ge&shy;nom&shy;men und die Ve&shy;neers im
                                La&shy;bor an&shy;ge&shy;fer&shy;tigt. Die
                                Be&shy;fes&shy;ti&shy;gung er&shy;folgt mit ei&shy;nem
                                spe&shy;zi&shy;el&shy;len Ad&shy;hä&shy;siv&shy;kle&shy;ber –
                                scho&shy;nend, si&shy;cher und dau&shy;er&shy;haft.
                            </p>
                            <h5>
                                Ihr Lä&shy;cheln – per&shy;sön&shy;lich &
                                ein&shy;zig&shy;ar&shy;tig
                            </h5>
                            <p>
                                Je&shy;der Mensch ist ein&shy;zig&shy;ar&shy;tig – ge&shy;nauso
                                wie sein Lä&shy;cheln. Mit Ve&shy;neers
                                un&shy;ter&shy;strei&shy;chen wir auf scho&shy;nends&shy;te
                                Wei&shy;se Ih&shy;re na&shy;tür&shy;li&shy;che Schön&shy;heit
                                und hel&shy;fen Ih&shy;nen da&shy;bei, sich wie&shy;der
                                rund&shy;um wohl zu füh&shy;len.
                            </p>
                            <h5>
                                Jetzt Be&shy;ra&shy;tungs&shy;ter&shy;min
                                ver&shy;ein&shy;ba&shy;ren
                            </h5>
                            <p>
                                In ei&shy;nem per&shy;sön&shy;li&shy;chen Ge&shy;spräch
                                be&shy;ra&shy;ten wir Sie gern zu Ih&shy;ren
                                Mög&shy;lich&shy;kei&shy;ten mit Ve&shy;neers.
                                Ver&shy;ein&shy;ba&shy;ren Sie jetzt ei&shy;nen Ter&shy;min –
                                wir freu&shy;en uns auf Sie!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Prophylaxe -->
            <h5 class="display-5 text-primary mt-5" id="link-prophylaxe">
                Prophylaxe
            </h5>
            <div class="accordion accordion-flush" id="accordionProphylaxe">
                <div class="accordion-item">
                    <h5 class="accordion-header" id="headingP1">
                        <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseP1">
                            Professionelle Zahnreinigung
                        </button>
                    </h5>
                    <div id="collapseP1" class="accordion-collapse collapse" data-bs-parent="#accordionProphylaxe">
                        <div class="accordion-body">
                            <h5>
                                Pro&shy;fes&shy;sio&shy;nel&shy;le Zahn&shy;rei&shy;ni&shy;gung
                                – für ge&shy;sun&shy;de Zäh&shy;ne und fri&shy;schen Atem
                            </h5>
                            <p>
                                Die pro&shy;fes&shy;sio&shy;nel&shy;le
                                Zahn&shy;rei&shy;ni&shy;gung (PZR) ist ein wich&shy;ti&shy;ger
                                Be&shy;stand&shy;teil der mo&shy;der&shy;nen Vor&shy;sor&shy;ge.
                                Sie ent&shy;fernt hart&shy;näcki&shy;ge Be&shy;lää&shy;ge,
                                Zahn&shy;stein und Bak&shy;te&shy;ri&shy;en, die mit der
                                häus&shy;li&shy;chen Mund&shy;hy&shy;gie&shy;ne nicht
                                voll&shy;stän&shy;dig er&shy;fasst wer&shy;den kön&shy;nen. Das
                                Er&shy;geb&shy;nis: spür&shy;bar glat&shy;te Zäh&shy;ne, ein
                                fri&shy;sches Mund&shy;ge&shy;fühl und lang&shy;fris&shy;tig
                                ge&shy;sun&shy;des Zahn&shy;fleisch.
                            </p>
                            <h5>Wozu ei&shy;ne PZR?</h5>
                            <p>
                                Auch bei gründ&shy;li&shy;chem Zäh&shy;ne&shy;put&shy;zen
                                set&shy;zen sich mit der Zeit Be&shy;lää&shy;ge in
                                Zahn&shy;zwi&shy;schen&shy;räu&shy;men und am
                                Zahn&shy;fleisch&shy;rand fest. Dort ent&shy;ste&shy;hen
                                Ent&shy;zün&shy;dun&shy;gen, Zahn&shy;stein und
                                Par&shy;o&shy;don&shy;ti&shy;tis. Ei&shy;ne
                                re&shy;gel&shy;mä&shy;ßi&shy;ge
                                pro&shy;fes&shy;sio&shy;nel&shy;le Rei&shy;ni&shy;gung hilft,
                                dies wirk&shy;sam vor&shy;zu&shy;beu&shy;gen und er&shy;hält die
                                Ge&shy;sund&shy;heit Ih&shy;rer Zäh&shy;ne.
                            </p>
                            <h5>
                                Was pas&shy;sie&shy;rt bei der Zahn&shy;rei&shy;ni&shy;gung?
                            </h5>
                            <p>
                                Un&shy;se&shy;re spe&shy;zi&shy;ell
                                aus&shy;ge&shy;bil&shy;de&shy;ten
                                Pro&shy;phy&shy;la&shy;xe&shy;as&shy;sis&shy;ten&shy;t:in&shy;nen
                                rei&shy;ni&shy;gen al&shy;le Zahn&shy;flä&shy;chen
                                gründ&shy;lich mit spe&shy;zi&shy;el&shy;len
                                In&shy;stru&shy;men&shy;ten, ent&shy;fer&shy;nen Zahn&shy;stein,
                                po&shy;lie&shy;ren die Zäh&shy;ne und tra&shy;gen zum
                                Ab&shy;schluss ein schüt&shy;zen&shy;des Flu&shy;orid&shy;gel
                                auf. Auf Wunsch er&shy;folgt auch ei&shy;ne Be&shy;ra&shy;tung
                                zur op&shy;ti&shy;ma&shy;len Mund&shy;hy&shy;gie&shy;ne für zu
                                Hau&shy;se.
                            </p>
                            <h5>Wie oft ist ei&shy;ne PZR emp&shy;feh&shy;lens&shy;wert?</h5>
                            <p>
                                Je nach In&shy;di&shy;vi&shy;du&shy;al&shy;ri&shy;siko
                                emp&shy;feh&shy;len wir ei&shy;ne PZR zwei&shy;mal pro Jahr. Bei
                                vor&shy;be&shy;stehen&shy;den
                                Zahn&shy;fleisch&shy;pro&shy;ble&shy;men oder ho&shy;hem
                                Kari&shy;es&shy;ri&shy;siko kön&shy;nen auch kür&shy;ze&shy;re
                                In&shy;ter&shy;val&shy;le sinn&shy;voll sein.
                            </p>
                            <h5>Vor&shy;tei&shy;le auf ei&shy;nen Blick:</h5>
                            <p>
                                – Vor&shy;beu&shy;gung von Kari&shy;es und
                                Par&shy;o&shy;don&shy;ti&shy;tis<br />
                                – lang&shy;fris&shy;ti&shy;ger Zahn&shy;er&shy;halt<br />
                                – fri&shy;scher Atem und glat&shy;te Zahn&shy;flä&shy;chen<br />
                                – ästhe&shy;tisch sau&shy;be&shy;res Lä&shy;cheln
                            </p>
                            <h5>
                                Jetzt Vor&shy;sor&shy;ge&shy;ter&shy;min
                                ver&shy;ein&shy;ba&shy;ren
                            </h5>
                            <p>
                                Gön&shy;nen Sie Ih&shy;ren Zäh&shy;nen
                                re&shy;gel&shy;mä&shy;ßi&shy;ge Pfle&shy;ge auf höchs&shy;tem
                                Ni&shy;veau. Wir freu&shy;en uns auf Ih&shy;ren Be&shy;such und
                                be&shy;ra&shy;ten Sie gern in&shy;di&shy;vi&shy;du&shy;ell zur
                                PZR.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gutachten -->
            <h5 class="display-5 text-primary mt-5" id="link-gutachten">Gutachten</h5>
            <div class="accordion accordion-flush" id="accordionGutachten">
                <div class="accordion-item">
                    <h5 class="accordion-header" id="headingG1">
                        <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseG1">
                            Zahnärztliche Gutachten
                        </button>
                    </h5>
                    <div id="collapseG1" class="accordion-collapse collapse" data-bs-parent="#accordionGutachten">
                        <div class="accordion-body">
                            <h5>
                                Zahn&shy;ärzt&shy;li&shy;che Gut&shy;ach&shy;ten – fach&shy;lich
                                fun&shy;diert & ob&shy;jek&shy;tiv
                            </h5>
                            <p>
                                Ein zahn&shy;ärzt&shy;li&shy;ches Gut&shy;ach&shy;ten dient der
                                neu&shy;tra&shy;len und sach&shy;kun&shy;di&shy;gen
                                Be&shy;ur&shy;tei&shy;lung
                                zahn&shy;me&shy;di&shy;zi&shy;ni&shy;scher
                                Fra&shy;ge&shy;stel&shy;lun&shy;gen. Ob im Rah&shy;men von
                                Ver&shy;si&shy;che&shy;rungs&shy;an&shy;lie&shy;gen,
                                Rechts&shy;strei&shy;tig&shy;kei&shy;ten, zur
                                Be&shy;ur&shy;tei&shy;lung be&shy;ste&shy;hen&shy;der
                                Zahn&shy;ersatz&shy;ver&shy;sor&shy;gun&shy;gen oder als
                                zwei&shy;te Mei&shy;nung – wir er&shy;stel&shy;len für Sie ein
                                fun&shy;dier&shy;tes, trans&shy;pa&shy;ren&shy;tes
                                Gut&shy;ach&shy;ten auf höchs&shy;tem fach&shy;li&shy;chen
                                Ni&shy;veau.
                            </p>
                            <h3>Wann ist ein Gut&shy;ach&shy;ten sinn&shy;voll?</h3>
                            <p>
                                Ein zahn&shy;ärzt&shy;li&shy;ches Gut&shy;ach&shy;ten kann in
                                fol&shy;gen&shy;den Fäl&shy;len er&shy;for&shy;der&shy;lich
                                sein: <br />– Be&shy;hand&shy;lungs&shy;be&shy;fund oder
                                Fehl&shy;be&shy;hand&shy;lungs&shy;ver&shy;dacht <br />–
                                Qua&shy;li&shy;täts&shy;be&shy;ur&shy;tei&shy;lung von
                                Zahn&shy;ersatz <br />– Streit&shy;fäl&shy;le mit
                                Kran&shy;ken&shy;kas&shy;sen oder
                                Ver&shy;si&shy;che&shy;run&shy;gen <br />–
                                Vor&shy;be&shy;rei&shy;tung auf ge&shy;richt&shy;li&shy;che
                                Aus&shy;ein&shy;an&shy;der&shy;set&shy;zun&shy;gen <br />–
                                Zweit&shy;mei&shy;nungs&shy;ein&shy;ho&shy;lung bei
                                kom&shy;ple&shy;xen Be&shy;hand&shy;lungs&shy;plä&shy;nen
                            </p>
                            <h3>Un&shy;se&shy;re Vor&shy;ge&shy;hens&shy;wei&shy;se</h3>
                            <p>
                                Je&shy;des Gut&shy;ach&shy;ten ba&shy;siert auf ei&shy;ner
                                aus&shy;führ&shy;li&shy;chen Un&shy;ter&shy;su&shy;chung,
                                ei&shy;ner sorg&shy;fäl&shy;ti&shy;gen
                                Do&shy;ku&shy;men&shy;ta&shy;ti&shy;on und – falls
                                er&shy;for&shy;der&shy;lich – auf der Aus&shy;wer&shy;tung
                                vor&shy;lie&shy;gen&shy;der Be&shy;fun&shy;de,
                                Rönt&shy;gen&shy;bil&shy;der und La&shy;bor&shy;da&shy;ten. Wir
                                stel&shy;len die me&shy;di&shy;zi&shy;nisch
                                re&shy;le&shy;van&shy;ten Fak&shy;ten neu&shy;tral,
                                ver&shy;ständ&shy;lich und nach&shy;voll&shy;zieh&shy;bar dar.
                            </p>
                            <h3>Ver&shy;trau&shy;ens&shy;vol&shy;le Be&shy;ra&shy;tung</h3>
                            <p>
                                Gut&shy;ach&shy;ten sind oft mit per&shy;sön&shy;lich
                                be&shy;las&shy;ten&shy;den Si&shy;tua&shy;tio&shy;nen
                                ver&shy;bun&shy;den. Wir be&shy;glei&shy;ten Sie mit
                                Em&shy;pa&shy;thie, Ge&shy;wiss&shy;en&shy;haf&shy;tig&shy;keit
                                und be&shy;son&shy;de&shy;rer Sorg&shy;falt. Ver&shy;trau&shy;en
                                Sie auf un&shy;se&shy;re lang&shy;jäh&shy;ri&shy;ge
                                Er&shy;fah&shy;rung und un&shy;ab&shy;hän&shy;gi&shy;ge
                                Ex&shy;per&shy;ti&shy;se.
                            </p>
                            <h3>Gut zu wis&shy;sen</h3>
                            <p>
                                Zahn&shy;ärzt&shy;li&shy;che Gut&shy;ach&shy;ten kön&shy;nen
                                pri&shy;vat be&shy;auf&shy;tragt oder von
                                Kran&shy;ken&shy;kas&shy;sen, Ge&shy;rich&shy;ten oder
                                an&shy;de&shy;ren In&shy;sti&shy;tu&shy;tio&shy;nen
                                an&shy;ge&shy;for&shy;dert wer&shy;den. Wir
                                in&shy;for&shy;mie&shy;ren Sie gern vor&shy;ab über Um&shy;fang,
                                Ab&shy;lauf und Kos&shy;ten.
                            </p>
                            <h3>Jetzt Ter&shy;min ver&shy;ein&shy;ba&shy;ren</h3>
                            <p>
                                Sie be&shy;nö&shy;ti&shy;gen ein
                                zu&shy;ver&shy;läs&shy;si&shy;ges zahn&shy;ärzt&shy;li&shy;ches
                                Gut&shy;ach&shy;ten? Kon&shy;tak&shy;tie&shy;ren Sie uns – wir
                                un&shy;ter&shy;stüt&shy;zen Sie fach&shy;lich
                                kom&shy;pe&shy;tent und dis&shy;kret.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
