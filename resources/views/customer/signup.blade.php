<title>Sign up - Skyrim Hotel</title>
<x-customerLayout>
    <section id="signup-section" class="m-nav">
        <div class="container h-ok">
            <div class="w-100 h-100 d-flex align-items-center justify-content-center
             load-hidden fade-in fade-bottom position-relative">
                @if (session('failed'))
                    @include('partials.flashMsgFail')
                @endif
                <form method="post" action="{{route('customer.registerProcess')}}"
                      enctype="multipart/form-data"
                      class="bg-white p-5 rounded-5 border shadow-sm col-md-8 col-lg-6 col-xl-4">
                    @csrf
                    {{--                    heading--}}
                    <div class="d-flex justify-content-center align-items-center mb-5">
                        <h6 class="display-6 text-primary fw-bold">Register</h6>
                    </div>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="first_name" name="first_name" class="form-control"
                                       value="{{old('first_name')}}" required/>
                                <label class="form-label" for="first_name">First name</label>
                            </div>
                            @if ($errors->has('first_name'))
                                @foreach ($errors->get('first_name') as $error)
                                    <span class="text-danger fs-7">{{ $error }}</span>
                                @endforeach
                            @endif
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="last_name" name="last_name" class="form-control"
                                       value="{{old('last_name')}}" required/>
                                <label class="form-label" for="last_name">Last name</label>
                            </div>
                            @if ($errors->has('last_name'))
                                @foreach ($errors->get('last_name') as $error)
                                    <span class="text-danger fs-7">{{ $error }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <!-- Email input -->
                    <div class="mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <input type="email" id="email" name="email" class="form-control"
                                   value="{{old('email')}}" required/>
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
                            <input type="password" id="password" name="password" class="form-control"
                                   value="{{old('password')}}" required minlength="6"/>
                            <a href="#!" class="input-group-text">
                                <i class="bi bi-eye-slash" aria-hidden="true"></i>
                            </a>
                            <label class="form-label" for="password">Password</label>
                        </div>
                        @if ($errors->has('password'))
                            @foreach ($errors->get('password') as $error)
                                <span class="text-danger fs-7">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>

                    <!-- Phone Number input -->
                    <div class="mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <input type="tel" id="phone" name="phone" class="form-control"
                                   value="{{old('phone')}}" maxlength="13" required/>
                            <label class="form-label" for="phone">Phone number</label>
                        </div>
                        @if ($errors->has('phone'))
                            @foreach ($errors->get('phone') as $error)
                                <span class="text-danger fs-7">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>

                    <!-- Submit button -->
                    <button data-mdb-ripple-init type="submit"
                            class="btn btn-primary btn-block mb-4 rounded-9 tran-2">
                        Sign up
                    </button>

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Already a member? <a href="{{route('customer.login')}}">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-customerLayout>

