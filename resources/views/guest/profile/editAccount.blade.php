<title>Edit account - Skyrim Hotel</title>
<x-guestLayout>
    <section id="profile-section" class="m-nav">
        <div class="container">
            <div class="row py-5 g-4 justify-content-center position-relative">
                {{--                MENU--}}
                <div class="col-10 col-lg-3">
                    <div class="p-4 border rounded shadow-sm bg-white">
                        @include('partials.guest.guestProfile')
                    </div>
                </div>
                {{--                MENU--}}

                {{--                CONTENT--}}
                <div class="col-10 col-lg-9 h-100">
                    <div
                        class="p-4 border rounded bg-white shadow-sm d-flex flex-column justify-content-between h-100">
                        {{--alert edit success--}}
                        @if (session('success'))
                            @include('partials.flashMsgSuccess')
                        @endif
                        {{--alert edit fail--}}
                        @if (session('failed'))
                            @include('partials.flashMsgFail')
                        @endif
                        <div class="d-flex justify-content-between">
                            <h4 class="text-primary fw-bold mb-4">
                                Edit account</h4>
                            <a class="btn btn-tertiary text-danger rounded tran-2" data-mdb-modal-init
                               href="#deleteModal"
                               data-id="1">
                                <i class="bi bi-x-circle me-1"></i>Delete account
                            </a>
                        </div>
                        {{--                    form--}}
                        <form method="post" action="{{route('guest.updateAccount')}}"
                              enctype="multipart/form-data"
                              class="mb-0">
                            @csrf
                            @method('PUT')
                            <div class="row mb-4 g-4">
                                <div class="col-12 col-lg-8">
                                    {{--first name--}}
                                    <div class="mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="first_name" name="first_name"
                                                   class="form-control"
                                                   value="{{$guest->first_name}}" required/>
                                            <label class="form-label" for="first_name">First name</label>
                                        </div>
                                        @if ($errors->has('first_name'))
                                            @foreach ($errors->get('first_name') as $error)
                                                <span class="text-danger fs-7">{{ $error }}</span>
                                            @endforeach
                                        @endif
                                    </div>
                                    {{-- last name--}}
                                    <div class="mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="last_name" name="last_name" class="form-control"
                                                   value="{{$guest->last_name}}" required/>
                                            <label class="form-label" for="last_name">Last name</label>
                                        </div>
                                        @if ($errors->has('last_name'))
                                            @foreach ($errors->get('last_name') as $error)
                                                <span class="text-danger fs-7">{{ $error }}</span>
                                            @endforeach
                                        @endif
                                    </div>

                                    <!-- Email input -->
                                    <div class="mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="email" id="email" name="email" class="form-control"
                                                   value="{{$guest->email}}" required/>
                                            <label class="form-label" for="email">Email address</label>
                                        </div>
                                        @if ($errors->has('email'))
                                            @foreach ($errors->get('email') as $error)
                                                <span class="text-danger fs-7">{{ $error }}</span>
                                            @endforeach
                                        @endif
                                    </div>

                                    <!-- Phone Number input -->
                                    <div class="">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="tel" id="phone" name="phone" class="form-control"
                                                   value="{{$guest->phone_number}}" maxlength="20" required/>
                                            <label class="form-label" for="phone">Phone number</label>
                                        </div>
                                        @if ($errors->has('phone'))
                                            @foreach ($errors->get('phone') as $error)
                                                <span class="text-danger fs-7">{{ $error }}</span>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>

                                {{-- Image --}}
                                <div class="col-12 col-lg-4">
                                    <div class="mb-4">
                                        <input type="file" class="form-control" id="image" name="image" value=""/>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ $guest->image != "" ? asset('storage/admin/guests/' . $guest->image) : asset('images/noavt.jpg') }}"
                                            alt="guest_image"
                                            class="w-100 h-auto shadow-sm rounded">
                                    </div>
                                </div>
                            </div>
                            <!-- Submit button -->
                            <div
                                class="d-flex flex-column-reverse flex-lg-row justify-content-between justify-content-md-start align-items-center">
                                <a data-mdb-ripple-init href="{{ route('guest.editAccount') }}"
                                   class="btn btn-secondary col-12 col-lg-auto me-lg-3 rounded tran-2">
                                    Cancel
                                </a>
                                <button data-mdb-ripple-init type="submit"
                                        class="btn btn-primary  col-12 col-lg-auto mb-3  mb-lg-0 rounded tran-2">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                    {{--                    form--}}
                </div>
            </div>
            {{--                CONTENT--}}
        </div>
        <!-- DeleteModal -->
        <div class="modal slideUp" id="deleteModal" tabindex="-1"
             aria-labelledby="deleteModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="deleteModalLabel">
                            <i class="bi bi-x-circle me-2"></i>Are you sure?
                        </h5>
                        <button type="button" class="btn-close" data-mdb-ripple-init
                                data-mdb-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('guest.deleteAccount') }}">
                            @csrf
                            @method('POST')
                            <label for="deletePassword" class="form-label">
                                Please enter your password:
                            </label>
                            <div class="mb-4">
                                <input type="password" name="deletePassword"
                                       class="form-control" id="deletePassword" required>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="me-3 btn btn-light rounded"
                                        data-mdb-ripple-init
                                        data-mdb-dismiss="modal">Cancel
                                </button>
                                <button class="btn btn-danger rounded" data-mdb-ripple-init>
                                    Delete
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guestLayout>
