{{-- resources\views\partials\en\slideshow.blade.php --}}

 <section class="container-fluid">
     <div id="carouselExample" class="carousel slide">
         <!--Inhalt Slideshow-->
         <div class="carousel-inner">
             <!--Slide 1 - Empfangsraum-->
             <div class="carousel-item active c-item">
                 <img src="{{ asset('media/slideshow/Empfangsraum2.png') }}" class="d-block w-100 c-img" alt="Empfangsraum" />

                 <div class="carousel-caption">
                     <h5 class="display-5">
                         We bring a smile to your face
                     </h5>
                 </div>
             </div>

             <!--Slide 2 - Behandlungsraum-->
             <div class="carousel-item c-item">
                 <img src="{{ asset('media/slideshow/Behandlungsraum.png') }}" class="d-block w-100 c-img"
                     alt="Behandlungsraum" />

                 <div class="carousel-caption">
                     <h5 class="display-5">
                         <p class="text-center">
                             We of&shy;fer the best equip&shy;ment and tech&shy;no&shy;lo&shy;gy for your
                             treat&shy;ment.
                         </p>
                     </h5>
                 </div>
             </div>
             <!--Slide 3 - Warteraum-->
             <div class="carousel-item c-item">
                 <img src="{{ asset('media/slideshow/warteraum.png') }}" class="d-block w-100 c-img" alt="Warteraum" />
                 <div class="carousel-caption">
                     <h5 class="display-5">
                         We have the high&shy;est cus&shy;tom&shy;er sat&shy;is&shy;fac&shy;tion – thank you for your
                         trust!
                     </h5>
                 </div>
             </div>
         </div>

         <!--Pfeilknöpfe-->
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
             <span class="carousel-control-prev-icon"></span>
             <span class="visually-hidden">Previous</span>
         </button>
         <!--Vorher-Knopf-->
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
             <span class="carousel-control-next-icon"></span>
             <span class="visually-hidden">Next</span>
         </button>
         <!--Nachher-Knopf-->
     </div>
 </section>
 <!--carousel slides Ende Karusell-->
