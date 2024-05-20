<title>Login - Skyrim Hotel</title>
<x-customerLayout>
    <section id="login-section" class="m-nav">
        <div class="container h-ok">
            <div class="w-100 h-100 d-flex align-items-center justify-content-center
             load-hidden fade-in fade-bottom position-relative">
                {{--alert create account--}}
                @if (session('success'))
                    @include('partials.flashMsgSuccess')
                @endif
                {{--alert login fail--}}
                @if (session('failed'))
                    @include('partials.flashMsgFail')
                @endif
                {{--               login form--}}
                <form method="post" action="{{route('customer.loginProcess')}}" enctype="multipart/form-data"
                      class="bg-white p-5 rounded-5 border shadow-sm col-md-8 col-lg-6 col-xl-4">
                    @csrf
                    {{--                    heading--}}
                    <div class="d-flex justify-content-center align-items-center mb-5">
                        <h6 class="display-6 text-primary fw-bold">Login</h6>
                    </div>
                    <!-- Email input -->
                    <div class="mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <input type="email" id="email" name="email" class="form-control" required
                                   value="{{old('email')}}"/>
                            <label class="form-label" for="email">Email address</label>
                        </div>
                        @if ($errors->has('email'))
                            @foreach ($errors->get('email') as $error)
                                <span class="text-danger fs-7">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>

                    <!-- Password input -->
                    <div class="mb-4">
                        <div data-mdb-input-init class="form-outline input-group"
                             id="show_hide_password">
                            <input type="password" id="pwd" name="password" class="form-control" required
                                   minlength="6"/>
                            <a href="#!" class="input-group-text">
                                <i class="bi bi-eye-slash" aria-hidden="true"></i>
                            </a>
                            <label class="form-label" for="pwd">Password</label>
                        </div>
                        @if ($errors->has('password'))
                            @foreach ($errors->get('password') as $error)
                                <span class="text-danger fs-7">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>

                    <!-- Submit button -->
                    <button data-mdb-ripple-init type="submit"
                            class="btn btn-primary btn-block mb-4 rounded-9 tran-2">
                        Sign in
                    </button>

                    {{--                        reset password--}}
                    <div class="text-center mb-3">
                        <a href="#!">Forgot password?</a>
                    </div>

                    {{--                        register--}}
                    <div class="text-center">
                        <p>Not a member? <a href="{{route('customer.register')}}">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-customerLayout>
