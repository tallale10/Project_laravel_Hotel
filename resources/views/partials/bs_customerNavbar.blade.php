<nav class="navbar navbar-expand-lg py-0 sticky-top bg-white">
    <div class="container py-3">
        {{--        brand--}}
        <div class="w-25">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" height="28" class="rounded border">
                <span class="fw-semibold text-info ms-2 font-2">
                    Breezehome
                </span>
            </a>
        </div>
        {{--        navigation --}}
        <div class="justify-content-center w-50	d-none d-lg-flex">
            <ul class="navbar-nav mb-lg-0 w-100 justify-content-between">
                {{--                home--}}
                <li class="nav-item">
                    <a class="nav-link active tran-2" aria-current="page" href="#">Home</a>
                </li>
                {{--                rooms--}}
                <li class="nav-item dropdown">
                    <a class="nav-link tran-2" href="#" role="button"
                       aria-expanded="false" id="dropdown2"
                       data-mdb-toggle="dropdown">
                        Rooms <i class="bi bi-caret-down-fill main-color fs-7"></i>
                    </a>
                    <ul class="dropdown-menu tran-3 bg-white border shadow-sm" aria-labelledby="dropdown2">
                        <li class="nav-item px-2">
                            <a class="nav-link text-start tran-2" href="#">Single Room</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-start tran-2" href="#">Double Room</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-start tran-2" href="#">Triple Room</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-start tran-2" href="#">Quadruple Room</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-start tran-2" href="#">Standard Room</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-start tran-2" href="#">Superior Room</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-start tran-2" href="#">Deluxe Room</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-start tran-2" href="#">Queen Room</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-start tran-2" href="#">King Room</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-start tran-2" href="#">Twin Room</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-start tran-2" href="#">Studio</a>
                        </li>
                    </ul>
                </li>
                {{--services--}}
                <li class="nav-item dropdown">
                    <a class="nav-link tran-2" href="#" role="button"
                       aria-expanded="false" id="dropdown2"
                       data-mdb-toggle="dropdown">
                        Services <i class="bi bi-caret-down-fill main-color fs-7"></i>
                    </a>
                    <ul class="dropdown-menu tran-3 bg-white border shadow-sm" aria-labelledby="dropdown2">
                        <li class="nav-item px-2">
                            <a class="nav-link text-start tran-2" href="#">Guided tour</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-start tran-2" href="#">Event planning</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-start tran-2" href="#">Restaurant</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-start tran-2" href="#">Fitness center</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-start tran-2" href="#">Spa & Massage</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-start tran-2" href="#">Laundry</a>
                        </li>
                    </ul>
                </li>
                {{--gallery--}}
                <li class="nav-item">
                    <a class="nav-link tran-2" href="#">Gallery</a>
                </li>
                {{--contact--}}
                <li class="nav-item">
                    <a class="nav-link tran-2" href="#">Contact</a>
                </li>
                {{--about--}}
                <li class="nav-item">
                    <a class="nav-link tran-2" href="#">About Us</a>
                </li>

            </ul>
        </div>
        {{--        login btn--}}
        <div class="w-25 d-flex justify-content-end	d-none d-lg-flex">
            <a class="btn btn-light bg-white border border-white rounded px-3 me-2 tran-3" href="#">
                Log in
            </a>
            <a class="btn btn-outline-info rounded px-3 tran-3" href="#">
                Sign up
            </a>
        </div>
        {{--       responsive list button --}}
        <div class="text-end navbar-toggler border-0 p-0">
            <a class="btn btn-outline-info" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
               aria-controls="offcanvasExample">
                <i class="bi bi-list"></i>
            </a>
        </div>

        {{--        responsive nav bar button--}}
        <div class="offcanvas offcanvas-start tran-3 d-lg-none" tabindex="-1" id="offcanvasExample"
             aria-labelledby="offcanvasExampleLabel" style="width: 240px">
            <div class="offcanvas-body">
                <div class="w-100">
                    Your name
                </div>
                <hr>
                <ul class="navbar-nav nav-fill mb-lg-0 h-50 w-100 align-items-start">
                    <li class="nav-item w-100 text-start">
                        <a class="nav-link active tran-2 row d-flex m-0" aria-current="page" href="#">
                            <i class="bi bi-house-fill col-2"></i>
                            <div class="col-10">
                                Home
                            </div>
                        </a>
                    </li>

                    <li class="nav-item dropdown w-100 text-start">
                        <a class="nav-link tran-2 row d-flex m-0" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <i class="bi bi-door-closed-fill col-2"></i>
                            <div class="col-10">
                                Rooms <i class="bi bi-caret-down-fill main-color fs-7"></i>
                            </div>
                        </a>
                        <ul class="dropdown-menu bg-white">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown w-100 text-start">
                        <a class="nav-link tran-2 row d-flex m-0" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <i class="bi bi-chat-heart-fill col-2"></i>
                            <div class="col-10">
                                Services
                                <i class="bi bi-caret-down-fill main-color fs-7"></i>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>

                    <li class="nav-item w-100 text-start">
                        <a class="nav-link tran-2 row d-flex m-0" aria-current="page" href="#">
                            <i class="bi bi-house-fill col-2"></i>
                            <div class="col-10">
                                Gallery
                            </div>
                        </a>
                    </li>

                    <li class="nav-item w-100 text-start">
                        <a class="nav-link tran-2 row d-flex m-0" aria-current="page" href="#">
                            <i class="bi bi-telephone-fill col-2"></i>
                            <div class="col-10">
                                Contact
                            </div>
                        </a>
                    </li>

                    <li class="nav-item w-100 text-start">
                        <a class="nav-link tran-2 row d-flex m-0" aria-current="page" href="#">
                            <i class="bi bi-info-circle-fill col-2"></i>
                            <div class="col-10">
                                About Us
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="w-100 h-25 d-flex justify-content-between align-items-end">
                    <a class="btn btn-outline-secondary rounded px-3 me-2 tran-3" href="#">Log in</a>
                    <a class="btn btn-outline-info rounded px-3 tran-3" href="#">Sign up</a>
                </div>
            </div>
        </div>
    </div>
</nav>
