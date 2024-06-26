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
                        class="p-4 rounded border bg-white shadow-sm d-flex flex-column justify-content-between h-100">
                        {{--alert edit success--}}
                        @if (session('success'))
                            @include('partials.flashMsgSuccess')
                        @endif
                        {{--alert edit fail--}}
                        @if (session('failed'))
                            @include('partials.flashMsgFail')
                        @endif
                        <div>
                            <div class="d-flex flex-column flex-md-row justify-content-between">
                                <h4 class="text-primary fw-bold mb-4">
                                    My bookings</h4>
                                <div class="mb-4 mb-md-0 col-12 col-md-3 col-xl-2">
                                    <form method="GET" class="m-0">
                                        <select name="filter" id="filter"
                                                onchange="this.form.submit()">
                                            <option value="all" {{$filter == 'all' ? 'selected' : ''}}>All
                                            </option>
                                            <option value="pending" {{$filter == 'pending' ? 'selected' : ''}}>Pending
                                            </option>
                                            <option value="confirmed" {{$filter == 'confirmed' ? 'selected' : ''}}>
                                                Confirmed
                                            </option>
                                            <option value="ongoing" {{$filter == 'ongoing' ? 'selected' : ''}}>Ongoing
                                            </option>
                                            <option value="completed" {{$filter == 'completed' ? 'selected' : ''}}>
                                                Completed
                                            </option>
                                            <option value="cancelled" {{$filter == 'cancelled' ? 'selected' : ''}}>
                                                Cancelled
                                            </option>
                                            <option value="refund" {{$filter == 'refund' ? 'selected' : ''}}>Refund
                                            </option>
                                        </select>
                                    </form>
                                </div>
                            </div>

                            <div>
                                @if (count($bookings) != 0)
                                    <table
                                        class="tran-3 table table-sm table-bordered table-striped align-middle mb-0 bg-white w-100"
                                        id="dataTable">
                                        <thead>
                                        <tr>
                                            <th class="align-middle text-center">ID</th>
                                            <th class="align-middle text-center">Created Date</th>
                                            <th class="align-middle text-center">Room</th>
                                            <th class="align-middle text-center">Total</th>
                                            <th class="align-middle text-center">Status</th>
                                            <th class="align-middle text-center">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($bookings as $booking)
                                            <tr>
                                                <td class="text-center col">
                                                    {{ $booking->id }}
                                                </td>
                                                <td class="text-break text-center col">
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
                                                    {{$bookingDate->monthName . ' ' . $bookingDay . ', ' . $bookingYear . ' at ' . $bookingHour . ':' . $bookingMin}}
                                                </td>
                                                <td class="text-break text-center col">
                                                    {{ $booking->room->name }}
                                                </td>
                                                <td class="text-center text-success col">
                                                    ${{ $booking->total_price }}
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        @switch($booking->status)
                                                            @case(0)
                                                                <div class="badge badge-danger">
                                                                    Pending
                                                                </div>
                                                                @break
                                                            @case(1)
                                                                <div class="badge badge-warning">
                                                                    Confirmed
                                                                </div>
                                                                @break
                                                            @case(2)
                                                                <div class="badge badge-primary">
                                                                    Ongoing
                                                                </div>
                                                                @break
                                                            @case(3)
                                                                <div class="badge badge-success">
                                                                    Completed
                                                                </div>
                                                                @break
                                                            @case(4)
                                                                <div class="badge badge-danger">
                                                                    Cancelled
                                                                </div>
                                                                @break
                                                            @case(5)
                                                                <div class="badge badge-info">
                                                                    Refund
                                                                </div>
                                                                @break
                                                        @endswitch
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="d-flex flex-column align-items-center justify-content-center">
                                                        <a href="{{route('guest.bookingDetail', $booking->id)}}"
                                                           class="btn btn-sm btn-link rounded" data-mdb-ripple-init
                                                           data-mdb-ripple-color="dark">
                                                            Details <i class="bi bi-chevron-right fw-bold"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                            </div>
                            @else
                                No results to show!
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
                topEnd: {
                    search: {
                        text: "",
                        placeholder: "Type to search...",
                    },
                }
            },
        });
    });
    // select
    new SlimSelect({
        select: '#filter',
        settings: {
            showSearch: false,
        }
    })
</script>

