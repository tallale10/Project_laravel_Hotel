<title>My bookings - Skyrim Hotel</title>
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
                        <div>
                            <div class="d-flex justify-content-between">
                                <h4 class="text-primary fw-bold mb-4">
                                    My bookings</h4>
                                <div>
                                    <form action="" method="GET" class="m-0">
                                        <select name="filter" id="filter"
                                                onchange="this.form.submit()">
                                            <option value="0" {{$filter == 0 ? 'selected' : ''}}
                                            data-display="Select">All
                                            </option>
                                            <option value="1" {{$filter == 1 ? 'selected' : ''}}>Pending</option>
                                            <option value="2" {{$filter == 2 ? 'selected' : ''}}>Confirmed</option>
                                            <option value="3" {{$filter == 3 ? 'selected' : ''}}>Ongoing</option>
                                            <option value="4" {{$filter == 4 ? 'selected' : ''}}>Completed</option>
                                            <option value="5" {{$filter == 5 ? 'selected' : ''}}>Cancelled</option>
                                            <option value="6" {{$filter == 6 ? 'selected' : ''}}>Refund</option>
                                        </select>
                                    </form>
                                </div>
                            </div>

                            <div>
                                @if (count($bookings) != 0)
                                    <div class="row g-4">
                                        @foreach ($bookings as $booking)
                                            <div class="col-12">
                                                <div class="border rounded shadow-sm p-3">
                                                    <div class="text-center">
                                                        {{ $booking->id }}
                                                    </div>
                                                    <div class="text-break text-center">
                                                        @php
                                                            $bookingDate = Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $booking->created_date);

                                                            $bookingDay = $bookingDate->get('day');
                                                        if(mb_strlen($bookingDay) == 1) {
                                                            $bookingDay = '0' . $bookingDay;
                                                        }

                                                        $bookingMonth = $bookingDate->get('month');
                                                        if(mb_strlen($bookingMonth) == 1) {
                                                            $bookingMonth = '0' . $bookingMonth;
                                                        }

                                                        $bookingYear = $bookingDate->get('year');

                                                        $bookingHour = $bookingDate->get('hour');
                                                        if(mb_strlen($bookingHour) == 1) {
                                                            $bookingHour = '0' . $bookingHour;
                                                        }

                                                        $bookingMin = $bookingDate->get('minute');
                                                        if(mb_strlen($bookingMin) == 1) {
                                                            $bookingMin = '0' . $bookingMin;
                                                        }
                                                        @endphp
                                                        {{$bookingDate->englishDayOfWeek . ', ' . $bookingDay . '/' . $bookingMonth . '/' . $bookingYear . ' at ' . $bookingHour . 'h' . $bookingMin}}
                                                    </div>
                                                    <div class="text-center text-success">
                                                        ${{ $booking->total_price }}
                                                    </div>
                                                    <div class="text-break text-center">
                                                        payment
                                                    </div>
                                                    <div class="text-break text-center">
                                                        {{ $booking->status }}
                                                    </div>
                                                    <div>
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <a href=""
                                                               class="btn btn-primary btn-sm rounded">
                                                                Details <i class="bi bi-chevron-right fw-bold"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="col-12">
                                            {{$bookings->links()}}
                                        </div>
                                    </div>
                                @else
                                    No results
                                @endif
                            </div>
                        </div>

                    </div>
                    {{--                    form--}}
                </div>
            </div>
            {{--                CONTENT--}}
        </div>
    </section>
</x-guestLayout>
<script>
    $(document).ready(function () {
        $("#dataTable").DataTable({
            columnDefs: [
                {
                    orderable: false,
                    targets: 5,
                },
            ],
            pagingType: "full_numbers",
            layout: {
                topStart: {
                    search: {
                        text: "",
                        placeholder: "Type to search...",
                    },
                },
                topEnd: {
                    paging: {
                        numbers: 3,
                    },
                },
                bottomStart: {},
                bottomEnd: {},
            },
        });
    });
    // select
    new SlimSelect({
        select: '#filter'
    })
</script>

