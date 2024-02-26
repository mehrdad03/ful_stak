<header id="header">
    <nav class="navbar container navbar-expand-lg fixed-top my-3">
        <div class="container">
            <div class="w-100 d-flex justify-content-between align-items-center">
                <div class="d-block d-lg-none mx-sm-4" id="openMenu">
                    <img src="/frontend/assets/images/menu.png" alt="menu" />
                </div>
                <!-- logo -->
                <a  class="navbar-brand" href="{{route('client.home')}}">
                    <img src="/frontend/assets/images/logo.png" alt="logo" class="logo" />
                </a>
                <ul class="navbar-nav d-none d-lg-flex gap-4">

                    <li class="nav-item">
                        <a class="nav-link text-white fs-6" href="#">صفحه اصلی</a>
                        <span class="nav-border"></span>
                    </li>
                    @foreach($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link text-white fs-6" href="#">{{$category->title}}</a>
                            <span class="nav-border"></span>
                        </li>
                    @endforeach


                    <li class="nav-item">
                        <a class="nav-link text-white fs-6" href="#">بلاگ</a>
                        <span class="nav-border"></span>
                    </li>
                </ul>
                <a
                    href="{{route('auth.client')}}"
                    class="main-btn text-white px-3 py-2 d-inline-flex justify-content-center">
                    <span class="d-block">ورود &nbsp;</span>
                    <span class="d-none d-sm-block"> و عضویت</span>
                </a>
            </div>
        </div>
    </nav>
    <!-- Mobile navigation -->
    <div class="mobileNav">
        <div class="dropBox"></div>
        <div class="mobileMenu">
            <!-- logo -->
            <div class="d-flex justify-content-around py-4">
                <img src="/frontend/assets/images/logo.png" alt="logo" class="logo" />
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
                            d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>
            <ul class="navbar-nav gap-4 mt-5">
                <li class="nav-item text-primary">
                    <div class="d-flex align-items-center gap-2 pe-4">
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
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <a class="nav-link text-white fs-6" href="#">صفحه اصلی</a>
                    </div>
                    <span class="nav-border"></span>
                </li>
                <li class="nav-item text-white">
                    <div class="d-flex align-items-center gap-2 pe-4">
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
                                d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>

                        <a class="nav-link text-white fs-6" href="#"
                        >دوره های آموزشی</a
                        >
                    </div>
                </li>
                <li class="nav-item text-white">
                    <div class="d-flex align-items-center gap-2 pe-4">
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
                                d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>

                        <a class="nav-link text-white fs-6" href="#">وبلاگ</a>
                    </div>
                </li>
                <li class="nav-item text-white">
                    <div class="d-flex align-items-center gap-2 pe-4">
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
                                d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                        </svg>
                        <a class="nav-link text-white fs-6" href="#">نقشه راه برنامه نویسی</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
