@php
    $user=\Illuminate\Support\Facades\Auth::user();
    $prefix=\Illuminate\Support\Facades\Route::current()->getPrefix();
    $rout_name=\Illuminate\Support\Facades\Route::current()->getName();
@endphp
<header id="header">
    <nav class="navbar container navbar-expand-lg fixed-top my-3">
        <div class="container">
            <div class="w-100 d-flex justify-content-between align-items-center">
                <div class="d-block d-lg-none mx-sm-4" id="openMenu">
                    <img src="/frontend/assets/images/menu.png" alt="menu"/>
                </div>
                <!-- logo -->
                <a class="navbar-brand" wire:navigate href="{{route('client.home')}}">
                    <img src="/frontend/assets/images/logo.png" alt="logo" class="logo"/>
                </a>
                <ul class="navbar-nav d-none d-lg-flex gap-4">

                    <li class="nav-item">
                        <a class="nav-link text-white fs-6" wire:navigate href="{{route('client.home')}}">صفحه اصلی</a>
                        <span class="nav-border"></span>
                    </li>
                    @foreach($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link text-white fs-6" wire:navigate href="#">{{$category->title}}</a>
                            <span class="nav-border"></span>
                        </li>
                    @endforeach

                    <li class="nav-item">
                        <a class="nav-link text-white fs-6" wire:navigate href="#">بلاگ</a>
                        <span class="nav-border"></span>
                    </li>
                </ul>


                @auth

                    <!-- ===== User logged in ===== -->
                    <div class="profile position-relative d-flex align-items-center column-gap-3">
                        <a wire:navigate href="{{route('client.basket')}}" class="position-relative">
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
                            <img src="{{$user->picture ?? '/frontend/assets/images/default.png'}}" alt="user picture"/>
                        </button>
                        @if($prefix!='profile')
                        <!-- popover -->
                        <div class="popover position-absolute bg-secondary">
                            <!-- avatar & phoneNumber -->
                            <div class="d-flex  py-3">
                                <img src="{{$user->picture ?? '/frontend/assets/images/default.png'}}" alt="user picture"/>
                                <div class="text-right me-3">
                                    <h6 class="m-0 pb-2 text-white fw-bold user_name"> مهرداد داداش </h6>
                                    <p class="m-0 text-primary">{{$user->mobile ? $user->mobile : $user->email}}</p>
                                </div>
                            </div>
                            <ul class="d-flex flex-column p-0 mt-2 mb-0">
                                <!-- profile -->
                                <li class=" pe-3 fw-medium">
                                    <a wire:navigate href="{{route('client.profile.dashboard')}}"
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
                                    <a wire:navigate href="{{route('client.profile.my-courses')}}"
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
                                <!-- bookmarks -->
                                <li class=" pe-3 fw-medium">
                                    <a wire:navigate href="#" class="py-3 d-flex align-items-center column-gap-2">
                                        <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M19 21L12 16L5 21V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H17C17.5304 3 18.0391 3.21071 18.4142 3.58579C18.7893 3.96086 19 4.46957 19 5V21Z"
                                                    stroke="#23BF65"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                        </svg>

                                        <p class="m-0 text-white">علاقه مندی های </p>
                                    </a>
                                </li>
                                <!-- logout -->
                                <li class=" pe-3 fw-medium">
                                    <a wire:navigate href="{{route('client.logout')}}"
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
                            wire:navigate href="{{route('auth.client')}}"
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
                <img src="/frontend/assets/images/logo.png" alt="logo" class="logo"/>
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

                @if($mobile && $prefix=='profile')
                    @include('livewire.client.profile.profile-mobile-sidebar')
                @else
                    @include('livewire.client.home.primary-mobile-menu')
                @endif

            </ul>
        </div>
    </div>
</header>
