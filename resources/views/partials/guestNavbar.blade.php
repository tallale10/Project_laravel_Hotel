<nav class="navbar navbar-expand-lg fixed-top py-0 tran-2 bg-white border border-white shadow-0"
     id="navbar">
    <div class="container py-3">
        {{--        brand--}}
        <div class="w-25">
            <a class="navbar-brand p-0" href="/home">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" height="24">
            </a>
        </div>
        {{--        navigation --}}
        <div class="justify-content-center w-50	d-none d-lg-flex">
            <ul class="navbar-nav mb-lg-0 w-100 justify-content-between">
                {{--                home--}}
                <li class="nav-item">
                    <a class="nav-link tran-2
                    {{request()->routeIs('guest.home') ? 'active' : ''}}"
                       href="{{route('guest.home')}}">Home</a>
                </li>
                {{--                rooms--}}
                <li class="nav-item dropdown">
                    <a class="nav-link tran-2  {{request()->route()->getPrefix() == '/rooms' ? 'active' : ''}}"
                       href="{{route('guest.rooms')}}"
                       aria-expanded="false" id="dropdown2"
                       data-mdb-toggle="dropdown">
                        Rooms <i class="bi bi-caret-down-fill fs-7 ms-1"></i>
                    </a>
                    <ul class="dropdown-menu mt-0 tran-3 bg-white border shadow-sm animate slideIn"
                        aria-labelledby="dropdown2">
                        <li><a class="dropdown-item tran-2" href="#">Single Room</a></li>
                        <li><a class="dropdown-item tran-2" href="#">Double Room</a></li>
                        <li><a class="dropdown-item tran-2" href="#">Triple Room</a></li>
                    </ul>
                </li>
                {{--services--}}
                <li class="nav-item dropdown">
                    <a class="nav-link tran-2" href="/"
                       aria-expanded="false" id="dropdown2"
                       data-mdb-toggle="dropdown">
                        Services <i class="bi bi-caret-down-fill fs-7 ms-1"></i>
                    </a>
                    <ul class="dropdown-menu mt-0 tran-3 bg-white border shadow-sm animate slideIn"
                        aria-labelledby="dropdown2">
                        <li><a class="dropdown-item tran-2" href="#">Guided tour</a></li>
                        <li><a class="dropdown-item tran-2" href="#">Event planning</a></li>
                        <li><a class="dropdown-item tran-2" href="#">Restaurant</a></li>
                        <li><a class="dropdown-item tran-2" href="#">Fitness center</a></li>
                        <li><a class="dropdown-item tran-2" href="#">Spa & Massage</a></li>
                        <li><a class="dropdown-item tran-2" href="#">Laundry</a></li>
                    </ul>
                </li>
                {{--contact--}}
                <li class="nav-item">
                    <a class="nav-link tran-2
                    {{request()->routeIs('guest.contact') ? 'active' : ''}}"
                       href="{{route('guest.contact')}}">Contact</a>
                </li>
                {{--about--}}
                <li class="nav-item">
                    <a class="nav-link tran-2
                    {{request()->routeIs('guest.about') ? 'active' : ''}}"
                       href="{{route('guest.about')}}">About Us</a>
                </li>

            </ul>
        </div>

        @guest('guest')
            {{--        login btn--}}
            <div class="w-25 d-flex justify-content-end	d-none d-lg-flex">
                <a class="btn btn-tertiary px-3 tran-2 me-2 rounded-9" href="{{route('guest.login')}}"
                   data-mdb-ripple-init>
                    Log in
                </a>
                <a class="btn btn-primary px-3 tran-2 rounded-9" href="{{route('guest.register')}}"
                   data-mdb-ripple-init>
                    Sign up
                </a>
            </div>
        @endguest

        @auth('guest')
            {{--        account btn--}}
            <div class="w-25 d-flex justify-content-end	d-none d-lg-flex">
                <!-- Icon -->
                <div class="dropdown me-3">
                    <a class="text-reset tran-2 dropdown-toggle hidden-arrow"
                       aria-expanded="false" id="dropdown3"
                       data-mdb-toggle="dropdown" href="#" role="button">
                        <i class="bi bi-bell"></i>
                        <span class="badge rounded-pill badge-notification bg-danger">1</span>
                    </a>
                    <ul class="end-0 dropdown-menu dropright mt-0 tran-3 bg-white border shadow-sm animate slideIn"
                        aria-labelledby="dropdown3">
                        <li><a class="dropdown-item tran-2" href="#">Welcome back!</a></li>
                        <li><a class="dropdown-item tran-2" href="#">Book a room now for 20% sales off!</a>
                        </li>
                        <li><a class="dropdown-item tran-2" href="#">Account created successfully!</a></li>
                    </ul>
                </div>

                <!-- Notifications -->
                <div class="dropdown">
                    <a class="text-reset tran-2  dropdown-toggle hidden-arrow"
                       aria-expanded="false" id="dropdown4"
                       data-mdb-toggle="dropdown" href="#" role="button">
                        <i class="bi bi-person"></i>
                    </a>
                    <ul class="end-0 dropdown-menu dropright mt-0 tran-3 bg-white border shadow-sm animate slideIn"
                        aria-labelledby="dropdown4">
                        <li><a class="dropdown-item tran-2" href="{{route('guest.profile')}}">
                                <i class="bi bi-info-circle me-2"></i>My profile</a></li>
                        <li><a class="dropdown-item tran-2" href="{{route('guest.myBooking')}}">
                                <i class="bi bi-receipt me-2"></i>My bookings</a></li>
                        <li><a class="dropdown-item tran-2" href="{{route('guest.editAccount')}}">
                                <i class="bi bi-gear me-2"></i>Settings</a></li>
                        <li>
                            <hr class="m-0">
                        </li>
                        <li><a class="dropdown-item tran-2" href="{{route('guest.logout')}}">
                                <i class="bi bi-box-arrow-left me-2"></i>Sign out</a></li>
                    </ul>
                </div>
            </div>
            {{--        account btn--}}
        @endauth

        {{--       responsive list button --}}
        <div class="text-end navbar-toggler border-0 p-0">
            <a class="text-reset" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
               aria-controls="offcanvasExample">
                <i class="bi bi-list"></i>
            </a>
        </div>

        {{--        responsive nav bar button--}}
        <div class="offcanvas offcanvas-start tran-3 d-lg-none" tabindex="-1" id="offcanvasExample"
             aria-labelledby="offcanvasExampleLabel" style="width: 240px">
            <div class="offcanvas-body d-flex flex-column justify-content-between">
                <div class="w-100 flex-fill mb-3">
                    <h5 class="text-primary fw-bold p-3 text-center">
                        @auth('guest')
                            Hello, Tam!
                        @endauth
                        @guest('guest')
                            Welcome to Skyrim Hotel!
                        @endguest
                    </h5>
                    <hr>
                    <div class="list-group list-group-light">
                        <a class="d-flex align-items-center list-group-item list-group-item-action
                        px-3 border-0 tran-2
                            {{request()->routeIs('guest.home') ? 'active' : ''}}"
                           href="{{route('guest.home')}}">
                            <i class="bi bi-house col-2"></i>
                            <div class="col-10">
                                Home
                            </div>
                        </a>
                        <a class="d-flex align-items-center list-group-item list-group-item-action
                        px-3 border-0 tran-2"
                           href="#" role="button"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <i class="bi bi-door-closed col-2"></i>
                            <div class="col-10">
                                Rooms
                            </div>
                        </a>
                        <a class="d-flex align-items-center list-group-item list-group-item-action
                        px-3 border-0 tran-2"
                           href="#" role="button"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <i class="bi bi-chat-heart col-2"></i>
                            <div class="col-10">
                                Services
                            </div>
                        </a>
                        <a class="d-flex align-items-center list-group-item list-group-item-action
                        px-3 border-0 tran-2
                            {{request()->routeIs('guest.contact') ? 'active' : ''}}"
                           href="{{route('guest.contact')}}">
                            <i class="bi bi-telephone col-2"></i>
                            <div class="col-10">
                                Contact
                            </div>
                        </a>
                        <a class="d-flex align-items-center list-group-item list-group-item-action
                        px-3 border-0 tran-2
                            {{request()->routeIs('guest.about') ? 'active' : ''}}"
                           href="{{route('guest.about')}}">
                            <i class="bi bi-info-circle col-2"></i>
                            <div class="col-10">
                                About Us
                            </div>
                        </a>
                        @auth('guest')
                            <a class="d-flex align-items-center list-group-item list-group-item-action
                            px-3 border-0 tran-2"
                               href="#">
                                <i class="bi bi-bell col-2"></i>
                                <div class="col-10">
                                    Notification
                                </div>
                            </a>

                            <a class="d-flex align-items-center list-group-item list-group-item-action
                            px-3 border-0 tran-2"
                               href="{{route('guest.profile')}}">
                                <i class="bi bi-person col-2"></i>
                                <div class="col-10">
                                    My profile
                                </div>
                            </a>

                            <a class="d-flex align-items-center list-group-item list-group-item-action
                            px-3 border-0 tran-2"
                               href="{{route('guest.myBooking')}}">
                                <i class="bi bi-receipt col-2"></i>
                                <div class="col-10">
                                    My bookings
                                </div>
                            </a>

                            <a class="d-flex align-items-center list-group-item list-group-item-action
                            px-3 border-0 tran-2"
                               href="{{route('guest.editAccount')}}">
                                <i class="bi bi-gear col-2"></i>
                                <div class="col-10">
                                    Settings
                                </div>
                            </a>

                            <a class="d-flex align-items-center list-group-item list-group-item-action
                            px-3 border-0 tran-2"
                               href="{{route('guest.logout')}}">
                                <i class="bi bi-box-arrow-left col-2"></i>
                                <div class="col-10">
                                    Sign out
                                </div>
                            </a>
                        @endauth
                    </div>
                </div>

                @guest('guest')
                    {{--                LOGIN--}}
                    <div class="w-100 d-flex flex-column justify-content-between align-items-end">
                        <a class="btn btn-secondary px-3 tran-2 mb-2 rounded-9 w-100"
                           href="{{route('guest.login')}}">
                            Log in
                        </a>
                        <a class="btn btn-primary px-3 tran-2 rounded-9 w-100" href="{{route('guest.register')}}">
                            Sign up
                        </a>
                    </div>
                    {{--                LOGIN--}}
                @endguest
            </div>
        </div>
    </div>
</nav>
