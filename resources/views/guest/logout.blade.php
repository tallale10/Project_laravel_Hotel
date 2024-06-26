<title>Logout - Skyrim Hotel</title>
<x-guestLayout>
    <section id="logout-section" class="m-nav">
        <div class="container mh-screen">
            <div class="w-100 h-100 d-flex align-items-center justify-content-center load-hidden fade-in fade-bottom">
                <form class="bg-white p-5 pb-4 rounded border shadow-sm col-md-8 col-lg-6 col-xl-4">
                    {{--                    success icon--}}
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="bi bi-check-circle-fill text-success display-1"></i>
                    </div>
                    {{--                    heading--}}
                    <div class="d-flex flex-column justify-content-center align-items-center mb-4">
                        <div>
                            <h5 class="fw-bold">You have been logged out</h5>
                        </div>
                        <div>
                            <h6>Thank you!</h6>
                        </div>
                    </div>
                    <!-- Submit button -->
                    <div class="d-flex align-items-center justify-content-between">
                        <a data-mdb-ripple-init type="button"
                           class="btn btn-tertiary rounded tran-2 me-2"
                           href="{{route('guest.home')}}">
                            Home
                        </a>
                        <a data-mdb-ripple-init type="button"
                           class="btn btn-primary rounded tran-2"
                           href="{{route('guest.login')}}">
                            Sign in
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-guestLayout>
