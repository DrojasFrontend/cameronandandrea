<?php 
/* 
* Template Name: Home
*/

// Manejar las peticiones AJAX del RSVP
handle_rsvp_ajax();

get_header();

?>

<main class="">
    <section class="position-relative -mb-n140">
        <div class="container-fluid gx-0">
            <div class="row gx-0">
                <div class="col-12 gx-0">
                    <img class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" src="<?php echo THEME_IMG; ?>bg-cameron.png" alt="Bg cameron">
                    <div class="position-relative w-100 h-100 d-flex justify-content-center align-items-start z-1 pt-5 mt-5">
                        <div class="pt-xl-5">
                            <img class="d-none d-xl-block mx-auto" src="<?php echo THEME_IMG; ?>main-logo.png" alt="Main logo">
                            <img class="d-block d-xl-none mx-auto" src="<?php echo THEME_IMG; ?>main-logo-mobile.png" alt="Main logo">
                            <div class="pt-xl-5">
                                <div class="pt-xl-5">
                                    <div class="pt-xl-5" id="wedding">
                                        <div class="position-relative px-xl-0 px-2 mt-xl-0 mt-5">
                                            <img class="w-100 h-100 object-fit-cover d-none d-xl-block" src="<?php echo THEME_IMG; ?>cameron-tarjeta-1.png" alt="Bg cameron 2">
                                            <img class="w-100 h-100 d-block d-xl-none mx-auto object-fit-cover" src="<?php echo THEME_IMG; ?>cameron-tarjeta-1.png" alt="Bg cameron 2">
                                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center pt-5 mt-5 z-2">
                                                <div class="pt-xl-5">
                                                    <div class="pt-xl-5 text-center">
                                                        <!-- <img width="277" height="106" class="d-none d-xl-block mx-auto" src="<?php echo THEME_IMG; ?>text-wedding.svg" alt="Text wedding"> -->
                                                        <!-- <img width="158" class="d-block d-xl-none mx-auto" src="<?php echo THEME_IMG; ?>text-wedding-mobile.svg" alt="Text wedding"> -->
                                                         <h2 class="font-aerotis fs-xl-1-1 fs-2-medium text-primary">Wedding</h2>
                                                        <div class="line line--small mb-5 d-none d-xl-block" style="margin-top: -10px;"></div>
                                                        <div class="line line--small mb-5 d-block d-xl-none"></div>
                                                        <p class="fs-xl-5 fs-7 text-primary letter-spacing-xl-24 letter-spacing-14">FRIDAY,</p>
                                                        <h2 class="fs-xl-3-small fs-5 text-primary letter-spacing-xl-36 letter-spacing-14">January 16th, 2026</h2>
                                                        <h2 class="fs-xl-3-small fs-5 text-primary letter-spacing-xl-36 letter-spacing-14 mb-4">5:00 pm</h2>

                                                        <p class="fs-xl-5 fs-7 text-primary letter-spacing-xl-24 letter-spacing-14 mb-3">CHARLESTON SANTA <br> TERESA HOTEL</p>

                                                        <p class="fs-xl-5 fs-7 text-primary letter-spacing-xl-24 letter-spacing-14 mb-2">Cartagena, Colombia</p>
                                                        <a href="https://maps.app.goo.gl/vZEdBVwfFEJQvVwT9" target="blank" class="btn btn-primary border-2 mx-auto mb-5">
                                                            LOCATION
                                                        </a>

                                                        <p class="fs-xl-5 fs-7 text-primary letter-spacing-xl-24 letter-spacing-14">CEREMONY</p>
                                                        <h2 class="fs-xl-3-small fs-5 text-primary letter-spacing-xl-36 letter-spacing-14 mb-4">Patio Republicano</h2>

                                                        <p class="fs-xl-5 fs-7 text-primary letter-spacing-xl-24 letter-spacing-14">RECEPTION TO FOLLOW</p>
                                                        <h2 class="fs-xl-3-small fs-5 text-primary letter-spacing-xl-36 letter-spacing-14 pb-xl-5">La Capilla Ballroom</h2>

                                                        <div class="pt-4">
                                                            <!-- <img width="277" height="106" class="d-none d-xl-block mx-auto" src="<?php echo THEME_IMG; ?>text-dress-code.svg" alt="Text wedding"> -->
                                                            <!-- <img width="140" class="d-block d-xl-none mx-auto mb-3" src="<?php echo THEME_IMG; ?>text-dress-code-mobile.svg" alt="Text wedding"> -->
                                                            <h2 class="font-aerotis fs-xl-2 fs-3 text-primary">Dress code</h2>
                                                            <button class="btn btn-primary border-2 mx-auto" type="button" data-bs-toggle="modal" data-bs-target="#blackTie">
                                                                BLACK TIE
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customSectionEvents position-relative">
        <img class="d-xl-block d-none position-absolute d-block z-0 flowerVerticalLeft" src="<?php echo THEME_IMG; ?>flower-vertical-left.webp" alt="cameron-fondo-verde-edit">
        <img class="d-xl-block d-none position-absolute d-block z-0 flowerVerticalRight" src="<?php echo THEME_IMG; ?>flower-vertical-right.webp" alt="cameron-fondo-verde-edit">

        <img class="d-block position-absolute d-xl-none z-0 flowerVerticalLeft" src="<?php echo THEME_IMG; ?>flower-vertical-left-mobile.png" alt="cameron-fondo-verde-edit">
        <img class="d-block position-absolute d-xl-none z-0 flowerVerticalRight" src="<?php echo THEME_IMG; ?>flower-vertical-right-mobile.png" alt="cameron-fondo-verde-edit">
        <div class="container-fluid gx-0 pb-xl-5" id="events">
            <div class="row gx-0">
                <div class="col-12">
                    <div class="pt-5">
                        <div class="pt-5">
                            <div class="pt-5 text-center">
                                <img class="customSectionEvents__bckg position-absolute top-0 start-0 object-fit-cover w-100 h-100" src="<?php echo THEME_IMG; ?>cameron-fondo-verde-edit.png" alt="cameron-fondo-verde-edit">
                                <div class="position-relative pt-5">
                                    <!-- <img width="242" height="122" class="d-none d-xl-block mx-auto" src="<?php echo THEME_IMG; ?>text-events.svg" alt="Text Event"> -->
                                    <!-- <img width="180" class="d-block d-xl-none mx-auto" src="<?php echo THEME_IMG; ?>text-events.svg" alt="Text Event"> -->
                                    <h2 class="font-aerotis fs-xl-1-1 fs-2-medium text-primary">Events</h2>
                                    <div class="line line--small mb-5 d-none d-xl-block" style="margin-top: -20px;"></div>
                                    <div class="line line--small mb-5 d-block d-xl-none" style="margin-top: 0px;"></div>
                                    <div class="py-5 mt-5">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-xl-6 mb-xl-0 mb-5">
                                                    <div class="shadow-1 pe-2 position-relative">
                                                        <img class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" src="<?php echo THEME_IMG; ?>box.webp" alt="cameron-event-1">
                                                        <div class="position-relative p-5">
                                                            <img src="<?php echo THEME_IMG; ?>copa.webp" class="mt-img" alt="Copa">
                                                            <h2 class="fs-xl-3-small fs-5 text-primary letter-spacing-xl-36 letter-spacing-14 mb-4">WELCOME <br> COCKTAIL</h2>
                                                            <span class="line line--small mt-3 mb-5"></span>
        
                                                            <p class="fs-xl-5 fs-7 text-primary letter-spacing-xl-24 letter-spacing-14">THURSDAY,</p>
                                                            <h2 class="fs-xl-3-small fs-5 text-primary letter-spacing-xl-36 letter-spacing-14 mb-4">January 15th, 2026</h2>
                                                            <h2 class="fs-xl-3-small fs-5 text-primary letter-spacing-xl-36 letter-spacing-14 mb-4">6:00 - 10:00 pm</h2>
        
                                                            <p class="fs-xl-5 fs-7 text-primary letter-spacing-xl-24 letter-spacing-14 uppercase">BALUARTE <br> SAN FRANCISCO JAVIER</p>
                                                            <!-- <h2 class="fs-xl-3-small fs-5 text-primary letter-spacing-xl-36 letter-spacing-14 mb-4">TDB</h2> -->
        
                                                            <p class="fs-xl-5 fs-7 text-primary letter-spacing-xl-24 letter-spacing-14 mb-4">Cartagena, Colombia</p>
                                                            <a href="https://maps.app.goo.gl/xGjbfSPuNPFjQjzo6?g_st=ic" target="blank" class="btn btn-primary border-2 mx-auto mb-4">
                                                                LOCATION
                                                            </a>
                                                            <button class="btn btn-primary border-2 mx-auto" type="button" data-bs-toggle="modal" data-bs-target="#tropical">
                                                                DRESS CODE
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="py-5 d-block d-xl-none"></div>
                                                <div class="col-12 col-xl-6 position-relative">
                                                <img class="d-block position-absolute d-xl-none z-0 flowerVerticalLeft flowerVerticalLeft2" src="<?php echo THEME_IMG; ?>flower-vertical-left-mobile.png" alt="cameron-fondo-verde-edit">
                                                <img class="d-block position-absolute d-xl-none z-0 flowerVerticalRight flowerVerticalRight2" src="<?php echo THEME_IMG; ?>flower-vertical-right-mobile.png" alt="cameron-fondo-verde-edit">
                                                    <div class="shadow-1 pe-2 position-relative z-2">
                                                        <img class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" src="<?php echo THEME_IMG; ?>box.webp" alt="cameron-event-1">
                                                        <div class="position-relative p-5">
                                                            <img src="<?php echo THEME_IMG; ?>barco.png" class="mt-img" alt="Copa">
                                                            <h2 class="fs-xl-3-small fs-5 text-primary letter-spacing-xl-36 letter-spacing-14 mb-4">SUNSET <br> CRUISE</h2>
                                                            <div class="col-2 mx-auto">
                                                                <span class="line line-small mt-3 mb-5"></span>
                                                            </div>
        
                                                            <p class="fs-xl-5 fs-7 text-primary letter-spacing-xl-24 letter-spacing-14">SATURDAY,</p>
                                                            <h2 class="fs-xl-3-small fs-5 text-primary letter-spacing-xl-36 letter-spacing-14 mb-4">January 17th, 2026</h2>
                                                            <h2 class="fs-xl-3-small fs-5 text-primary letter-spacing-xl-36 letter-spacing-14 mb-4">5:00 - 8:00 pm</h2>
        
                                                            <!-- <p class="fs-xl-5 fs-7 text-primary letter-spacing-xl-24 letter-spacing-14">TDB</p> -->
                                                            <h2 class="fs-xl-3-small fs-5 text-primary letter-spacing-xl-36 letter-spacing-14">BONAVIDA</h2>
        
                                                            <p class="fs-xl-5 fs-7 text-primary letter-spacing-xl-24 letter-spacing-14 mb-4">Cartagena, Colombia</p>
                                                            <a href="https://maps.app.goo.gl/nzn4ssqTxmrVqrvD6?g_st=ic" target="blank" class="btn btn-primary border-2 mx-auto mb-4">
                                                                LOCATION
                                                            </a>
                                                            <button class="btn btn-primary border-2 mx-auto" type="button" data-bs-toggle="modal" data-bs-target="#casualWhite">
                                                                DRESS CODE
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container pt-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- <img class="d-none d-xl-block mx-auto" src="<?php echo THEME_IMG; ?>text-welcome.svg" alt="cameron-fondo-verde-edit"> -->
                                                    <!-- <img class="d-block d-xl-none mx-auto mb-3" src="<?php echo THEME_IMG; ?>text-welcome-mobile.svg" alt="cameron-fondo-verde-edit"> -->
                                                    <h2 class="font-aerotis fs-xl-1-1 fs-2-medium text-primary">Welcome</h2>
                                                    <span class="line line--small mt-3 mb-xl-5 mb-3"></span>
                                                    <div class="col-12 col-xl-7 mx-auto px-4">
                                                        <p class="fs-xl-5 text-black letter-spacing-xl-24 text-center">
                                                            We are overjoyed to welcome you to this beautiful, vibrant city to celebrate our wedding weekend. <br class="d-block d-xl-none"> <br class="d-block"> Cartagena represents all the warmth, passion and love we feel in our hearts We could not imagine a more perfect setting to share with the people we love most as we embark on a lifelong journey together. Your presence is not just a gift, it’s a reflection of the love that has guided us to this moment.
                                                        </p>
                                                        <button class="btn btn-primary border-2 mx-auto mt-5" type="button" data-bs-toggle="modal" data-bs-target="#readMore">
                                                            READ MORE
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container customSectionGallery d-block d-xl-none">
                        <div class="row">
                            <div class="col-12 col-xl-10 mx-auto">
                                <div class="swiper gallerySwiper">
                                    <div class="swiper-wrapper">
                                        <?php for ($i = 0; $i < 4; $i++) { ?>
                                            <div class="swiper-slide">
                                                <div class="bg-yellow-100 p-3">
                                                    <img class="d-block w-100" src="<?php echo THEME_IMG; ?>gallery-<?php echo $i; ?>.png" alt="">
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="swiperCustomPagination swiper-pagination-gallery d-flex justify-content-center bottom-0 mt-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative mt-5 pb-5">
            <img class="customSectionGallery__bckg-2 position-absolute top-0 start-0 d-block w-100 h-100" src="<?php echo THEME_IMG; ?>cameron-fondo-rosado-edit.webp" alt="cameron-fondo-verde-edit">
            <div class="container customSectionGallery d-none d-xl-block">
                <div class="row">
                    <div class="col-12 col-xl-10 mx-auto">
                        <div class="swiper gallerySwiper">
                            <div class="swiper-wrapper">
                                <?php for ($i = 0; $i < 4; $i++) { ?>
                                    <div class="swiper-slide">
                                        <div class="bg-yellow-100 p-3">
                                            <img class="d-block w-100" src="<?php echo THEME_IMG; ?>gallery-<?php echo $i; ?>.png" alt="">
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="swiperCustomPagination swiper-pagination-gallery d-flex justify-content-center bottom-0 mt-3"></div>
                    </div>
                </div>
            </div>
            <div class="position-relative text-center pb-xl-5 pt-xl-0 pt-5">
                <div class="container">
                    <img class="d-block mx-auto w-100" src="<?php echo THEME_IMG; ?>flower-two.webp" alt="">
                    <!-- <img class="d-none d-xl-block mx-auto" src="<?php echo THEME_IMG; ?>text-love.svg" alt=""> -->
                    <!-- <img class="d-block d-xl-none mx-auto" src="<?php echo THEME_IMG; ?>text-love-mobile.svg" alt=""> -->
                    <h2 class="font-aerotis fs-xl-1-1 fs-2-medium text-primary">Save <span class="fs-4" style="font-family: var(--bs-font-family-base);">THE</span> Weekend</h2>
                    <div>
                        <div id="mi-countdown" data-countdown="2026-01-16 14:00:00"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative pb-5">
        <div class="pb-5">
            <div class="container-fluid gx-0">
                <img class="position-absolute top-0 start-0 d-block w-100 h-100 object-fit-cover" src="<?php echo THEME_IMG; ?>cameron-peurta-1.png" alt="">
                <div class="row gx-0">
                    <div class="col-12 col-xl-8 mx-auto px-xl-0 px-3">
                        <div class="pt-5 mt-xl-5">
                            <div class="pt-xl-5 mt-xl-5" id="cartagena">
                                <div class="customSectionCartagena position-relative p-xl-5 p-3">
                                    <div class="col-12 col-xl-10 mx-auto">
                                        <!-- <img class="d-none d-xl-block mx-auto mb-5" src="<?php echo THEME_IMG; ?>text-cartagena.svg" alt=""> -->
                                        <!-- <img class="d-block d-xl-none mx-auto mb-5" src="<?php echo THEME_IMG; ?>text-cartagena-mobile.svg" alt=""> -->
                                        <h2 class="font-aerotis fs-xl-1-medium fs-2-medium text-primary text-center mb-xl-5 mb-3">Cartagena</h2>
                                        <p class="fs-xl-5 text-black letter-spacing-xl-24 text-center mb-4">
                                            We are thrilled to be hosting our wedding in Cartagena, Colombia's coastal gem. This city, designated as a UNESCO world heritage site, stands as one of South America's most significant cultural treasures. The walls of Cartagena de Indias grace the historical center, known as "the walled city," where you can discover squares, cobblestone streets, and exquisite, vibrant colonial buildings.
                                        </p>
                                        <p class="fs-xl-5 text-black letter-spacing-xl-24 text-center">
                                            The ultimate way to experience Cartagena is by strolling through it, immersing yourself in the maze of narrow streets and lush green plazas. We highly recommend lodging within the walled city, where everything is conveniently within walking distance. The streets are alive with constant live music, splendid restaurants, and quirky bars, all contributing to the vibrant atmosphere of Cartagena.
                                        </p>
                                        <ul class="d-flex flex-column gap-xl-3 gap-2 m-0 p-0 py-5 mt-xl-5">
                                            <li class="clickeable bg-white">
                                                <a href="/cartagena/#travel-info" class="d-flex align-items-center text-primary gap-4 fs-xl-2 fs-7 p-xl-3 p-2">
                                                    <span class="d-inline-block icon">
                                                        <img class="w-100" src="<?php echo THEME_IMG; ?>icons/icon-airplane.svg" alt="">
                                                    </span>
                                                    TRAVEL INFO
                                                </a>
                                            </li>
                                            <li class="clickeable bg-white">
                                                <a href="/cartagena/#hotels" class="d-flex align-items-center text-primary gap-4 fs-xl-2 fs-7 p-xl-3 p-2">
                                                    <span class="d-flex align-items-center justify-content-center icon">
                                                        <img class="w-100" src="<?php echo THEME_IMG; ?>icons/icon-hotel.svg" alt="">
                                                    </span>
                                                    HOTELS
                                                </a>
                                            </li>
                                            <li class="clickeable bg-white">
                                                <a href="/cartagena/#restaurants" class="d-flex align-items-center text-primary gap-4 fs-xl-2 fs-7 p-xl-3 p-2">
                                                    <span class="d-flex align-items-center justify-content-center icon">
                                                        <img class="w-100" src="<?php echo THEME_IMG; ?>icons/icon-restaurants.svg" alt="">
                                                    </span>
                                                    RESTAURANTS
                                                </a>
                                            </li>
                                            <li class="clickeable bg-white">
                                                <a href="/cartagena/#brunch" class="d-flex align-items-center text-primary gap-4 fs-xl-2 fs-7 p-xl-3 p-2">
                                                    <span class="d-flex align-items-center justify-content-center icon">
                                                        <img class="w-100" src="<?php echo THEME_IMG; ?>icons/icon-brunch.svg" alt="">
                                                    </span>
                                                    BRUNCH & DESSERTS
                                                </a>
                                            </li>
                                            <li class="clickeable bg-white">
                                                <a href="/cartagena/#bars" class="d-flex align-items-center text-primary gap-4 fs-xl-2 fs-7 p-xl-3 p-2">
                                                    <span class="d-flex align-items-center justify-content-center icon">
                                                        <img class="w-100" src="<?php echo THEME_IMG; ?>icons/icon-bars.svg" alt="">
                                                    </span>
                                                    BARS & PUBS
                                                </a>
                                            </li>
                                            <li class="clickeable bg-white">
                                                <a href="/cartagena/#boutiques" class="d-flex align-items-center text-primary gap-4 fs-xl-2 fs-7 p-xl-3 p-2">
                                                    <span class="d-flex align-items-center justify-content-center icon">
                                                        <img class="w-100" src="<?php echo THEME_IMG; ?>icons/icon-boutiques.svg" alt="">
                                                    </span>
                                                    BOUTIQUES
                                                </a>
                                            </li>
                                            <li class="clickeable bg-white">
                                                <a href="/cartagena/#beauty" class="d-flex align-items-center text-primary gap-4 fs-xl-2 fs-7 p-xl-3 p-2">
                                                    <span class="d-flex align-items-center justify-content-center icon">
                                                        <img class="w-100" src="<?php echo THEME_IMG; ?>icons/icon-beauty-salons.svg" alt="">
                                                    </span>
                                                    BEAUTY SALONS
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- <img class="d-xl-block d-none mx-auto" src="<?php echo THEME_IMG; ?>text-places.svg" alt=""> -->
                                        <!-- <img width="300" class="d-block d-xl-none mx-auto" src="<?php echo THEME_IMG; ?>text-places.svg" alt=""> -->
                                        <h2 class="font-aerotis fs-xl-1-1 fs-3-medium text-primary text-center mb-xl-5 mb-3">Places of Interest</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block d-xl-none">
            <?php get_template_part('template-parts/components/component-swiper-place'); ?>
        </div>
        <div class="py-xl-5">
            <div class="py-xl-5">
                <div class="pt-xl-2"></div>
            </div>
        </div>

    </section>

    <div class="d-none d-xl-block">
        <?php get_template_part('template-parts/components/component-swiper-place'); ?>
    </div>

    <section class="customSectionRSVP position-relative z-1 bg-yellow-300 py-xl-0 py-5" id="rsvp">
        <div class="container">
            <div class="row">
                <div class="customSectionRSVP__content col-12 col-xl-8 mx-auto position-relative">
                    <img class="position-absolute rsvpFlowerLeft" src="<?php echo THEME_IMG; ?>cameron-flores-left.webp" alt="">
                    <img class="position-absolute rsvpFlowerRight" src="<?php echo THEME_IMG; ?>cameron-flores-right.webp" alt="">
                    <div class="d-flex flex-column justify-content-start align-items-center bg-primary-900 p-5 text-center shadow-1">
                        <h2 class="fs-xl-1-medium fs-2 text-primary letter-spacing-xl-20 letter-spacing-96">R.S.V.P.</h2>
                        <p class="fs-p-big text-black letter-spacing-xl-36 mb-5">Kindly respond by <br class="d-block d-xl-none"> OCTOBER 15th, 2025</p>
                        <p class="fs-xl-5 text-black letter-spacing-xl-1 text-center mb-1 fw-bold">
                            Please enter below your first name and your last name.
                        </p>
                        <p class="fs-xl-5 text-black letter-spacing-xl-1 text-center mb-5">
                        If you search your name and it does not appear, your name may be associated with your family or group. Please click the name that populates and confirm your name is assigned to that group.
                        </p>
                        <button class="btn btn-secondary border-0 mx-auto rsvp-open-btn position-relative z-1 mb-xl-4 mb-5" type="button">
                            R.S.V.P.
                        </button>
                        <!-- <img class="d-xl-block d-none mx-auto" src="<?php echo THEME_IMG; ?>text-registre.svg" alt=""> -->
                        <!-- <img width="150" class="d-xl-none d-block mx-auto" src="<?php echo THEME_IMG; ?>text-registre.svg" alt=""> -->
                        <h2 class="font-aerotis fs-xl-1-1 fs-2-medium text-primary text-center mb-2">Registry</h2>
                        <div class="line line--small mb-4"></div>
                        <div class="row">
                            <div class="col-12 col-xl-8 mx-auto px-xl-4 mb-xl-4 mb-3">
                                <p class="fs-xl-5 text-black letter-spacing-xl-1 text-center">
                                    Your presence at our wedding means more to us than any present. Should you wish to honor us with a gift, a contribution towards our honeymoon fund would be sincerely appreciated.
                                </p>
                            </div>
                        </div>
                        <button class="btn btn-primary border-2 mx-auto position-relative z-1" type="button" data-bs-toggle="modal" data-bs-target="#qr">
                        HONEYMOON
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customSectionBanner bg-primary p-xl-4 pb-xl-5 p-4">
        <div class="container gx-0">
            <div class="row">
                <div class="col-12 text-center gx-0">
                    <!-- <img class="d-none d-xl-block mx-auto" src="<?php echo THEME_IMG; ?>text-celebrate.png" alt=""> -->
                    <!-- <img width="300" class="d-block d-xl-none mx-auto" src="<?php echo THEME_IMG; ?>text-celebrate.png" alt=""> -->
                     <h2 class="fs-xl-5 fs-7 text-white">WE CAN'T WAIT TO<span class="font-aerotis fs-xl-2 fs-5 text-white"> Celebrate </span> WITH YOU!</h2>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/components/component-map'); ?>


    <?php get_template_part('template-parts/components/component-step-rsvp'); ?>
    <?php get_template_part('template-parts/components/component-modal'); ?>
</main>

<?php 
get_footer();
?>