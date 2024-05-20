<title>Home - Skyrim Hotel</title>
<x-guestLayout>
    {{--    HERO--}}
    <section id="hero_section" class="m-nav mb-5">
        <!-- Background image -->
        <div class="container h-ok position-relative">
            {{--alert create account--}}
            @if (session('success'))
                @include('partials.flashMsgSuccess')
            @endif
            <div
                class="w-100 h-100 py-5 d-flex justify-content-start align-items-center hero-section fade-in load-hidden"
                style="background-image: url('{{asset('images/banner.png')}}')">
                <div class="w-100 d-flex flex-column justify-content-center align-items-center">
                    <h1 class="display-6 fw-bold text-primary-emphasis">Welcome
                        to</h1>
                    <h1 class="display-4 fw-bold mb-3 text-primary">Skyrim
                        Hotel</h1>
                    <p class="fs-6 col-10 col-md-8 col-lg-4 text-center">
                        Get ready for unforgettable
                        experiences and
                        create lasting
                        memories with your loved ones</p>
                    <div
                        class="mt-3 d-flex flex-column flex-sm-row justify-content-center justify-content-lg-start">
                        <a type="button"
                           class="btn btn-secondary mb-2 mb-sm-0 me-sm-2 tran-2 btn-lg rounded-9"
                           href="#"
                           data-mdb-ripple-init>
                            DISCOVER
                        </a>
                        <a type="button" class="btn btn-primary tran-2 btn-lg rounded-9"
                           href="#" data-mdb-ripple-init>
                            BOOK NOW
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </section>
    {{--HERO--}}

    {{--  ROOMS  --}}
    <section id="rooms" class="my-5 h-auto">
        <!-- Background image -->
        <div class="container">
            <div
                class="w-100 py-5 d-flex justify-content-start align-items-center">
                <div class="w-100 d-flex flex-column justify-content-center align-items-center
                 fade-in fade-bottom load-hidden">
                    <h1 class="display-6 text-center fw-bold mb-3 text-primary">
                        Designer room to fall in love with</h1>
                    <div class="mt-5 justify-content-center row">
                        <!-- Carousel wrapper -->
                        <div id="carouselMaterialStyle" class="carousel slide carousel-fade col-10"
                             data-mdb-ride="carousel"
                             data-mdb-carousel-init>
                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0"
                                        class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1"
                                        aria-label="Slide 2"></button>
                                <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2"
                                        aria-label="Slide 3"></button>
                            </div>

                            <!-- Inner -->
                            <div class="carousel-inner rounded-9 shadow-4-strong overflow-hidden">
                                <!-- Single item -->
                                <div class="carousel-item active">
                                    <img src="{{asset('images/1.png')}}"
                                         class="w-100 d-block tran-3"/>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Double Room</h5>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>

                                <!-- Single item -->
                                <div class="carousel-item">
                                    <img src="{{asset('images/2.png')}}"
                                         class="w-100 d-block tran-3"/>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Deluxe City View</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>

                                <!-- Single item -->
                                <div class="carousel-item">
                                    <img src="{{asset('images/3.png')}}"
                                         class="w-100 d-block tran-3"/>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>King Bedroom</h5>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Inner -->

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle"
                                    data-mdb-slide="prev">
                                <span aria-hidden="true">
                                    <i class="bi bi-chevron-left fs-2"></i>
                                </span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle"
                                    data-mdb-slide="next">
                                <span aria-hidden="true">
                                    <i class="bi bi-chevron-right fs-2"></i>
                                </span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- Carousel wrapper -->
                    </div>
                    <div class="row mt-5 justify-content-center">
                        <div class="text-center col-10 col-lg-9">
                            Skyrim Hotel offers its guests various stylishly furnished, comfortable design rooms in four
                            categories. All our beds are finished in extra sizes to provide even more sleeping comfort.
                            Each
                            design room or suite has its own individual character. Inspired with the nature, we divided
                            our
                            rooms in three primary elements: sun, water and earth.
                        </div>
                    </div>
                    <div class="mt-5">
                        <a href="/" class="link-primary pb-1 border-bottom border-primary">
                            DISCOVER ROOMS
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </section>
    {{--  ROOMS  --}}

    {{-- INTRODUCTION --}}
    <section id="introduction" class="mt-5 h-auto">
        <!-- Background image -->
        <div class="container">
            <div
                class="w-100 py-5 d-flex justify-content-start align-items-center">
                <div class="w-100 d-flex flex-column justify-content-center align-items-center
                 fade-in load-hidden">
                    <h1 class="display-6 text-center fw-bold mb-3 text-primary fade-top">
                        The glamorous hotel in the heart of Skyrim</h1>
                    <div class="row mt-5">
                        <div class="col-12 col-lg-4 fade-left">
                            <div class="d-flex justify-content-center mb-4">
                                <div class="badge badge-primary p-4 rounded-circle">
                                    <i class="bi bi-headset fs-4"></i>
                                </div>
                            </div>
                            <h6 class="fw-bold text-primary-emphasis text-center mb-4">24/7 Room Services</h6>
                            <p class="px-3 text-center">Whether you need a delicious meal, a refreshing drink, or a
                                relaxing massage, our room services are available 24/7 to cater to your needs. You can
                                order from our extensive menu or request a customized service. Just call us with your
                                phone and our friendly staff will be at your door in no time.</p>
                        </div>

                        <div class="col-12 col-lg-4 fade-bottom">
                            <div class="d-flex justify-content-center mb-4">
                                <div class="badge badge-primary p-4 rounded-circle">
                                    <i class="bi bi-person-walking fs-4"></i>
                                </div>
                            </div>
                            <h6 class="fw-bold text-primary-emphasis text-center mb-4">Diverse Guide Tour</h6>
                            <p class="px-3 text-center">
                                If you want to explore the city and its attractions, our guide tour service is the best
                                way to do it. You can choose from our various packages or customize your own itinerary.
                                Our experienced guides will show you the most interesting and beautiful places, tell you
                                the stories and history behind them, and answer any questions you may have.</p>
                        </div>

                        <div class="col-12 col-lg-4 fade-right">
                            <div class="d-flex justify-content-center mb-4">
                                <div class="badge badge-primary p-4 rounded-circle">
                                    <i class="bi bi-bicycle fs-4"></i>
                                </div>
                            </div>
                            <h6 class="fw-bold text-primary-emphasis text-center mb-4">Free Fitness Center</h6>
                            <p class="px-3 text-center">If you want to stay fit and healthy during your stay, our
                                fitness center service is the perfect choice for you. You can enjoy our state-of-the-art
                                equipment, personal trainers, and group classes. You can also access our sauna, steam
                                room, and jacuzzi for some relaxation from 6 a.m. to 10 p.m.
                                every day.</p>
                        </div>
                    </div>
                    <div class="mt-5 fade-bottm">
                        <a href="/" class="link-primary pb-1 border-bottom border-primary">
                            EXPLORE SERVICES
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- INTRODUCTION --}}

    {{--  AVT  --}}
    <section id="ceo" class="my-5 h-auto">
        <!-- Background image -->
        <div class="container">
            <div
                class="w-100 py-5 d-flex justify-content-start align-items-center">
                <div class="row w-100 justify-content-center fade-in load-hidden">
                    <div class="col-10 col-md-3 mb-5 mb-md-0">
                        <div class="rounded-circle overflow-hidden fade-left">
                            <img src="{{asset('images/ceo.png')}}" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-10 col-md-9 text-center">
                        <div
                            class="ms-md-5 d-flex h-100 flex-column justify-content-center fade-right">
                            <div>
                                <p class="fst-italic fs-4">
                                    "Join us as we delve into the heart of our hotel and discover the magic that makes
                                    it a
                                    truly special destination for all our guests."
                                </p>
                            </div>
                            <div class="text-primary ">
                                <h5 class="fw-bold">Tam Nguyen, Guest Service Manager</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </section>
    {{--  AVT  --}}
</x-guestLayout>
