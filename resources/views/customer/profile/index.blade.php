<title>Profile - Skyrim Hotel</title>
<x-customerLayout>
    <section id="profile-section" class="m-nav">
        <div class="container">
            <div class="row py-5 justify-content-center">
                {{--                MENU--}}
                <div class="col-10 col-lg-3 p-4 border rounded-5 shadow-sm">
                    <div>
                        <h6 class="fw-bold text-muted text-center">Welcome back,</h6>
                        <h4 class="fw-bold text-primary text-center mb-3">Tam Nguyen!</h4>
                    </div>
                    <div class="list-group list-group-light">
                        <a href="{{route('customer.profile')}}" class="list-group-item list-group-item-action
                        px-3 border-0 d-flex align-items-center justify-content-lg-start justify-content-center
                        {{request()->routeIs('customer.profile') ? 'active' : ''}}" data-mdb-ripple-init
                           aria-current="true">
                            <i class="bi bi-info-circle-fill me-2"></i>
                            <div>My profile</div>
                        </a>
                        <a href="{{route('customer.myBooking')}}" class="list-group-item list-group-item-action
                        px-3 border-0 d-flex align-items-center justify-content-lg-start justify-content-center
                        {{request()->routeIs('customer.myBooking') ? 'active' : ''}}" data-mdb-ripple-init
                           aria-current="true">
                            <i class="bi bi-receipt me-2"></i>
                            <div>My bookings</div>
                        </a>
                        <a href="{{route('customer.editAccount')}}" class="list-group-item list-group-item-action
                        px-3 border-0 d-flex align-items-center justify-content-lg-start justify-content-center
                        {{request()->routeIs('customer.editAccount') ? 'active' : ''}}" data-mdb-ripple-init
                           aria-current="true">
                            <i class="bi bi-pencil-square me-2"></i>
                            <div>Edit account</div>
                        </a>
                        <a href="{{route('customer.changePassword')}}" class="list-group-item list-group-item-action
                        px-3 border-0 d-flex align-items-center justify-content-lg-start justify-content-center
                        {{request()->routeIs('customer.changePassword') ? 'active' : ''}}" data-mdb-ripple-init
                           aria-current="true">
                            <i class="bi bi-shield-lock-fill me-2"></i>
                            <div>Change password</div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action
                        px-3 border-0 d-flex align-items-center justify-content-lg-start justify-content-center"
                           data-mdb-ripple-init
                           aria-current="true">
                            <i class="bi bi-box-arrow-left me-2"></i>
                            <div>Sign out</div>
                        </a>

                    </div>
                </div>
                {{--                MENU--}}

                {{--                CONTENT--}}
                <div class="col-10 col-lg-9 pt-4 ps-4 ms-0 ms-lg-auto">
                    <div>
                        <h4 class="text-primary fw-bold">Profile</h4>
                    </div>
                </div>
                {{--                CONTENT--}}
            </div>
        </div>
    </section>
</x-customerLayout>
