<div class="page-header">
    @php
      /*  @$admin=\Illuminate\Support\Facades\Auth::guard('admin')->user()*/
    @endphp
    <div class="row gutters">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">

            <!-- Search container start -->
            <div class="search-container">

                <!-- Toggle sidebar start -->
                <div class="toggle-sidebar" id="toggle-sidebar">
                    <i class="icon-menu"></i>
                </div>
                <!-- Toggle sidebar end -->

            </div>
            <!-- Search container end -->

        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-3">

            <!-- Header actions start -->
            <ul class="header-actions">
                <li class="dropdown">
                    <a href="javascript:0" id="taskss" data-toggle="dropdown" aria-haspopup="true">
                        ادمین :
                        {{@$admin->name}} | {{@$admin->type->title}}

                    </a>

                </li>

                <li class="dropdown">
                    <a href="/backend/dark/#" id="userSettings" class="user-settings" data-toggle="dropdown"
                       aria-haspopup="true">
										<span class="avatar">
											<img
                                                src="/{{--{{@\Illuminate\Support\Facades\Auth::guard('admin')->user()->image->file}}--}}"
                                                alt="User Avatar">
											<span class="status online"></span>
										</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                        <div class="header-profile-actions">

                            <a href="{{--{{route('auth.admin.logout')}}--}}"><i class="icon-log-out1"></i>خروج</a>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- Header actions end -->

        </div>
    </div>
    <!-- Row end -->


    {{--alerts--}}
    {{--restrict other admins--}}
   {{-- @if(\Illuminate\Support\Facades\Auth::user()->user_type_id==1)
        <audio id="myAudio">
            <source src="/beep-warning.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <button hidden id="alert-btn" onclick="playAudio()" type="button"></button>

        <div wire:poll.120000ms="latestOrders"></div>
        <div wire:poll.60000ms="latestTickets"></div>
    @endif--}}

    {{--alerts--}}

    @push('script')

        <script>
            window.addEventListener('swal:latestOrders', event => {

                Swal.fire({
                    icon: 'info',
                    title: event.detail.number + ' سفارش جدید ',
                    confirmButtonText: 'رسیدگی',

                })
                $('.swal2-confirm').on('click', function () {
                    window.location.href = '/admin/orders/?status=4';
                });

                $('#alert-btn').trigger('click');
            })


            window.addEventListener('swal:pendingTickets', event => {

                Swal.fire({
                    icon: 'info',
                    title: event.detail.number + ' تیکت جدید ',
                    confirmButtonText: 'رسیدگی',

                })
                $('.swal2-confirm').on('click', function () {
                    window.location.href = '/admin/tickets?status=0';
                });

                $('#alert-btn').trigger('click');
            })

            //Play the sound effect when sending a new order
            var x = document.getElementById("myAudio");

            function playAudio() {
                x.play();
            }
        </script>
    @endpush

</div>
