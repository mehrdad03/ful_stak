@php
    $user=\Illuminate\Support\Facades\Auth::user();
    $prefix=\Illuminate\Support\Facades\Route::current()->getPrefix();
    $rout_name=\Illuminate\Support\Facades\Route::current()->getName();

@endphp
<header id="header">
    <nav class="navbar container navbar-expand-lg  my-3">
        <div class="container">
            <div class="w-100 d-flex justify-content-between align-items-center">
                <div class="d-block d-lg-none mx-sm-4" id="openMenu">
                      <i class="fa fa-bars text-primary fs-4 pe-1"></i>
                </div>
                <!-- logo -->
                <a class="navbar-brand"  href="{{route('client.home')}}">
                       <img loading="lazy"  src="/frontend/assets/images/logo.png" alt="logo" class="logo"/>
                </a>
                <ul class="navbar-nav d-none d-lg-flex gap-4">

                    <li class="nav-item">
                        <a class="nav-link text-white fs-6"  href="{{route('client.home')}}">صفحه اصلی</a>
                        <span class="nav-border"></span>
                    </li>

                    <li class="nav-item" id="roadmapBtn">
                            <button class="nav-link text-white fs-6">
                            نقشه راه برنامه نویسی
                            <svg width="15" class="text-white roadIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
            </svg>
                            </button>
                            <span class="nav-border"></span>
                        </li>
{{--
                    <li class="nav-item">
                        <a class="nav-link text-white fs-6"  href="#">بلاگ</a>
                        <span class="nav-border"></span>
                    </li>--}}
                </ul>

                <!-- roadmapBtn Popover -->
                <div id="roadmapPopup" class="d-flex flex-wrap gap-3">
                    <a href="#" class="front d-flex align-items-center gap-2">
                        <div>
                        <svg width="25" class="text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                        </svg>

                        </div>
                        <p class="m-0 text-white fw-medium">فرانت اند</p>
                    </a>
                    <a href="#" class="back d-flex align-items-center gap-2">
                        <div>
                        <svg width="25" class="text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path d="M12 .75a8.25 8.25 0 0 0-4.135 15.39c.686.398 1.115 1.008 1.134 1.623a.75.75 0 0 0 .577.706c.352.083.71.148 1.074.195.323.041.6-.218.6-.544v-4.661a6.714 6.714 0 0 1-.937-.171.75.75 0 1 1 .374-1.453 5.261 5.261 0 0 0 2.626 0 .75.75 0 1 1 .374 1.452 6.712 6.712 0 0 1-.937.172v4.66c0 .327.277.586.6.545.364-.047.722-.112 1.074-.195a.75.75 0 0 0 .577-.706c.02-.615.448-1.225 1.134-1.623A8.25 8.25 0 0 0 12 .75Z" />
                            <path fill-rule="evenodd" d="M9.013 19.9a.75.75 0 0 1 .877-.597 11.319 11.319 0 0 0 4.22 0 .75.75 0 1 1 .28 1.473 12.819 12.819 0 0 1-4.78 0 .75.75 0 0 1-.597-.876ZM9.754 22.344a.75.75 0 0 1 .824-.668 13.682 13.682 0 0 0 2.844 0 .75.75 0 1 1 .156 1.492 15.156 15.156 0 0 1-3.156 0 .75.75 0 0 1-.668-.824Z" clip-rule="evenodd" />
                        </svg>

                        </div>
                        <p class="m-0 text-white fw-medium">بک اند</p>
                    </a>
                    <a href="#" class="full d-flex align-items-center gap-2">
                        <div>
                        <svg width="25" class="text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                            <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                            <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                        </svg>

                        </div>
                        <p class="m-0 text-white fw-medium">فول استک</p>
                    </a>
                </div>


                @auth

                    <!-- ===== User logged in ===== -->
                    <div class="profile position-relative d-flex align-items-center column-gap-3">
                        <a  href="{{route('client.basket')}}" class="position-relative">
                            <span
                                class="header-basket d-flex align-items-center justify-content-center fw-normal">{{$basket}}</span>
                            <svg
                                width="26"
                                height="26"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <path
                                    d="M3 6H21"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <path
                                    d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <button type="button" class="bg-transparent">
                               <img loading="lazy"  src="{{$user->picture ?? '/frontend/assets/images/default.png'}}" alt="user picture"/>
                        </button>
                        @if($prefix!='profile')
                            <!-- popover -->
                            <div class="popover position-absolute bg-secondary">
                                <!-- avatar & phoneNumber -->
                                <div class="d-flex  py-3">
                                       <img loading="lazy"  src="{{$user->picture ?? '/frontend/assets/images/default.png'}}"
                                         alt="user picture"/>
                                    <div class="text-right me-3">
                                        <h6 class="m-0 pb-2 text-white fw-bold user_name"> مهرداد داداش </h6>
                                        <p class="m-0 text-primary">{{$user->mobile ?? $user->email}}</p>
                                    </div>
                                </div>
                                <ul class="d-flex flex-column p-0 mt-2 mb-0">
                                    <!-- profile -->
                                    <li class=" pe-3 fw-medium">
                                        <a  href="{{route('client.profile.dashboard')}}"
                                           class="d-flex align-items-center column-gap-2 py-3">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21"
                                                    stroke="#23BF65"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path
                                                    d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z"
                                                    stroke="#23BF65"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                            </svg>
                                            <p class="m-0 text-white">پروفایل</p>
                                        </a>
                                    </li>
                                    <!-- my Course -->
                                    <li class="pe-3 fw-medium">
                                        <a  href="{{route('client.profile.my-courses')}}"
                                           class=" py-3  d-flex align-items-center column-gap-2">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 16.9999V8.9999C20.9996 8.64918 20.9071 8.30471 20.7315 8.00106C20.556 7.69742 20.3037 7.44526 20 7.2699L13 3.2699C12.696 3.09437 12.3511 3.00195 12 3.00195C11.6489 3.00195 11.304 3.09437 11 3.2699L4 7.2699C3.69626 7.44526 3.44398 7.69742 3.26846 8.00106C3.09294 8.30471 3.00036 8.64918 3 8.9999V16.9999C3.00036 17.3506 3.09294 17.6951 3.26846 17.9987C3.44398 18.3024 3.69626 18.5545 4 18.7299L11 22.7299C11.304 22.9054 11.6489 22.9979 12 22.9979C12.3511 22.9979 12.696 22.9054 13 22.7299L20 18.7299C20.3037 18.5545 20.556 18.3024 20.7315 17.9987C20.9071 17.6951 20.9996 17.3506 21 16.9999Z"
                                                    stroke="#23BF65"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path
                                                    d="M7.5 5.20996L12 7.80996L16.5 5.20996"
                                                    stroke="#23BF65"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path
                                                    d="M7.5 20.79V15.6L3 13"
                                                    stroke="#23BF65"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path
                                                    d="M21 13L16.5 15.6V20.79"
                                                    stroke="#23BF65"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path
                                                    d="M3.27002 7.95996L12 13.01L20.73 7.95996"
                                                    stroke="#23BF65"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path
                                                    d="M12 23.08V13"
                                                    stroke="#23BF65"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                            </svg>
                                            <p class="m-0 text-white">دوره های من</p>
                                        </a>
                                    </li>
                                    <!-- logout -->
                                    <li class=" pe-3 fw-medium">
                                        <a  href="{{route('client.logout')}}"
                                           class=" py-3 d-flex align-items-center column-gap-2">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H9"
                                                    stroke="#23BF65"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path
                                                    d="M16 17L21 12L16 7"
                                                    stroke="#23BF65"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path
                                                    d="M21 12H9"
                                                    stroke="#23BF65"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                            </svg>

                                            <p class="m-0 text-white">خروج</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>
                @else

                    <a
                         href="{{route('auth.client')}}"
                        class="main-btn text-white px-3 py-2 d-inline-flex justify-content-center">
                        <span class="d-block">ورود &nbsp;</span>
                        <span class="d-none d-sm-block"> و عضویت</span>
                    </a>
                @endauth

            </div>
        </div>
    </nav>
    <!-- Mobile navigation -->
    <div class="mobileNav">
        <div class="dropBox"></div>
        <div class="mobileMenu">
            <!-- logo -->
            <div class="d-flex justify-content-around py-4">
                   <img loading="lazy"  src="/frontend/assets/images/logo.png" alt="logo" class="logo"/>
                <div id="closeMenu">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18 18 6M6 6l12 12"/>
                    </svg>
                </div>
            </div>
            <ul class="navbar-nav gap-4 mt-3">

                @if($mobile and $prefix=='profile')
                    @include('livewire.client.profile.profile-mobile-sidebar')
                @else
                    @include('livewire.client.home.primary-mobile-menu')
                @endif

            </ul>
        </div>
    </div>
</header>
