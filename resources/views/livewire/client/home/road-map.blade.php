@push('links')
    <link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css"/>
@endpush

<section id="roadmap">
    <!-- Start  -->
    <h5 class="text-white">شروع مسیر</h5>


    <!-- Step 1 -->
    <img
        src="/frontend/assets/images/step1.png"
        alt="first step"
        class="road d-none d-md-block"/>
    <img
        src="/frontend/assets/images/step1M.png"
        alt="mobile step Line"
        class="d-md-none"/>

    @if(isset($categories['frontend-road-map']) && $categories['frontend-road-map']->courses->isNotEmpty())

        <!-- ==== Front Road ==== -->
        <div class="row w-100 align-items-center">
            <!-- Front RoadMap -->
            <div class="d-none d-xl-flex col-xl-2 pe-5 mb-4 flex-column align-items-center">
                <svg
                    width="32"
                    height="46"
                    viewBox="0 0 32 46"
                    class="ms-3"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M8.07233 2.1412C13.0663 -0.76052 19.2047 -0.709803 24.1519 2.27406C29.0504 5.31869 32.0275 10.7525 31.9998 16.5977C31.8858 22.4046 28.6934 27.863 24.7029 32.0827C22.3998 34.5291 19.8232 36.6924 17.026 38.5283C16.7379 38.6949 16.4224 38.8064 16.0949 38.8574C15.7797 38.844 15.4728 38.7508 15.2018 38.5864C10.9313 35.8278 7.18481 32.3066 4.1425 28.1921C1.59678 24.7575 0.15048 20.6081 2.65968e-06 16.3073C-0.00330479 10.4509 3.07834 5.04293 8.07233 2.1412ZM10.9676 18.7314C11.8076 20.8024 13.7905 22.1533 15.9903 22.1533C17.4315 22.1636 18.8168 21.5864 19.8377 20.5501C20.8585 19.5139 21.4301 18.1048 21.425 16.6368C21.4327 14.396 20.1134 12.3714 18.0833 11.5085C16.0531 10.6455 13.7125 11.1144 12.1542 12.6961C10.596 14.2778 10.1275 16.6604 10.9676 18.7314Z"
                        fill="#C83131"/>
                    <ellipse
                        opacity="0.4"
                        cx="15.9921"
                        cy="43.4264"
                        rx="11.4286"
                        ry="2.28573"
                        fill="#C83131"/>
                </svg>
                <div class="d-flex align-items-center justify-content-center">
                    <p
                        class="m-0 text-primary text-nowrap fw-bold p-3 roadText rounded-5">
                        مشاهده مسیر فرانت اند
                    </p>
                    <svg
                        width="20"
                        height="1"
                        viewBox="0 0 20 1"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <line
                            x1="4.37114e-08"
                            y1="0.5"
                            x2="20"
                            y2="0.500002"
                            stroke="white"
                            stroke-dasharray="2 2"/>
                    </svg>
                </div>
            </div>
            <!-- Front Courses -->
            <div class="col-12 col-xl-10 mt-4 mt-sm-0 p-0">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($categories['frontend-road-map']->courses as $course)

                            <!-- HTML -->
                            <a href="#" class="swiper-slide borderSlider">
                                <img
                                    src="./frontend/assets/images/html.png"
                                    alt="html"
                                    class="roadIcon"
                                    width="100"/>
                                <h3 class="fw-bolder text-white w-100 pt-2">
                                     <span class="text-primary pt-5 d-block">{{str_replace('_',' ', $course->title)}}</span>
                                </h3>
                                <p class="text-white flex-grow-1 w-100">
                                    {{mb_substr($course->short_description, 0, 100)}} ...
                                </p>
                                 <div class="d-flex align-items-center justify-content-between mb-2 w-100 ps-2 pe-2">
                                    <!-- course duration -->
                                       <div class=" d-flex align-items-center">
                                        <p class="m-0 text-white ms-2 pt-1">18:50</p>
                                        <i class="fa fa-clock-o text-primary"></i>
                                    </div>
                                    <!-- Course Liked -->
                                    <div class="d-flex align-items-center">
                                        <p class="m-0 text-white fw-medium">{{number_format($course->price)}}</p>
                                        <p class="m-0 text-primary fw-bold me-2">تومان</p>
                                    </div>
                                </div>
                                <button class="main-btn text-white px-3 py-2 btn-innerShadow">مشاهده دوره</button>
                            </a>
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    @endif

    <!-- Step 2 -->
    <img
        src="/frontend/assets/images/step2.png"
        alt="step 2"
        class="d-none d-md-block"/>
    <img
        src="/frontend/assets/images/step2M.png"
        alt="mobile Step Line"
        class="d-md-none"/>

    @if(isset($categories['backend-road-map']) && $categories['backend-road-map']->courses->isNotEmpty())

        <!-- ==== Back Road ==== -->
        <div class="row w-100 align-items-center">
            <!-- Back Courses -->
            <div class="col-12 col-xl-10 mt-4 mt-sm-0 p-0">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($categories['backend-road-map']->courses as $course)
                            <!-- HTML -->
                            <a href="#" class="swiper-slide borderSlider">
                                <img
                                    src="./frontend/assets/images/html.png"
                                    alt="html"
                                    class="roadIcon"
                                    width="100"/>
                                <h3 class="fw-bolder text-white w-100 pt-2"><span class="text-primary pt-5 d-block">{{str_replace('_',' ', $course->title)}}</span>
                                </h3>
                                <p class="text-white flex-grow-1 w-100">
                                    {{mb_substr($course->short_description, 0, 100)}} ...
                                </p>
                                 <div class="d-flex align-items-center justify-content-between mb-2 w-100 ps-2 pe-2">
                                    <!-- course duration -->
                                       <div class=" d-flex align-items-center">
                                        <p class="m-0 text-white ms-2 pt-1">18:50</p>
                                        <i class="fa fa-clock-o text-primary"></i>
                                    </div>
                                    <div class=" d-flex align-items-center">
                                        <p class="m-0 text-white fw-medium">{{str_replace('_',' ', $course->price)}}</p>
                                        <p class="m-0 text-primary fw-bold me-2">تومان</p>
                                    </div>
                                </div>
                                <button class="main-btn text-white px-3 py-2 btn-innerShadow">مشاهده دوره</button>
                            </a>
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- Back RoadMap -->
            <div
                class="d-none d-xl-flex col-xl-2 ps-5 mb-4 flex-column align-items-center">
                <svg
                    width="32"
                    height="46"
                    viewBox="0 0 32 46"
                    class="me-3"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M8.07233 2.1412C13.0663 -0.76052 19.2047 -0.709803 24.1519 2.27406C29.0504 5.31869 32.0275 10.7525 31.9998 16.5977C31.8858 22.4046 28.6934 27.863 24.7029 32.0827C22.3998 34.5291 19.8232 36.6924 17.026 38.5283C16.7379 38.6949 16.4224 38.8064 16.0949 38.8574C15.7797 38.844 15.4728 38.7508 15.2018 38.5864C10.9313 35.8278 7.18481 32.3066 4.1425 28.1921C1.59678 24.7575 0.15048 20.6081 2.65968e-06 16.3073C-0.00330479 10.4509 3.07834 5.04293 8.07233 2.1412ZM10.9676 18.7314C11.8076 20.8024 13.7905 22.1533 15.9903 22.1533C17.4315 22.1636 18.8168 21.5864 19.8377 20.5501C20.8585 19.5139 21.4301 18.1048 21.425 16.6368C21.4327 14.396 20.1134 12.3714 18.0833 11.5085C16.0531 10.6455 13.7125 11.1144 12.1542 12.6961C10.596 14.2778 10.1275 16.6604 10.9676 18.7314Z"
                        fill="#C83131"/>
                    <ellipse
                        opacity="0.4"
                        cx="15.9921"
                        cy="43.4264"
                        rx="11.4286"
                        ry="2.28573"
                        fill="#C83131"/>
                </svg>
                <div class="d-flex align-items-center justify-content-center">
                    <svg
                        width="20"
                        height="1"
                        viewBox="0 0 20 1"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <line
                            x1="4.37114e-08"
                            y1="0.5"
                            x2="20"
                            y2="0.500002"
                            stroke="white"
                            stroke-dasharray="2 2"/>
                    </svg>
                    <p
                        class="m-0 text-primary text-nowrap fw-bold p-3 roadText rounded-5">
                        مشاهده مسیر بک اند
                    </p>
                </div>
            </div>
        </div>
    @endif

    <!-- Step 3 -->
    <img
        src="/frontend/assets/images/step3.png"
        alt="step 3"
        class="d-none d-md-block"/>
    <img
        src="/frontend/assets/images/step3M.png"
        alt="mobile Step Line"
        class="d-md-none"/>
    @if(isset($categories['fullstack-road-map']) && $categories['fullstack-road-map']->courses->isNotEmpty())

        <!-- ==== FullStack Road ==== -->
        <div class="row w-100 align-items-center">
            <!-- Fullstack RoadMap -->
            <div
                class="d-none d-xl-flex col-xl-2 pe-5 mb-4 flex-column align-items-center">
                <svg
                    width="32"
                    height="46"
                    viewBox="0 0 32 46"
                    class="ms-3"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M8.07233 2.1412C13.0663 -0.76052 19.2047 -0.709803 24.1519 2.27406C29.0504 5.31869 32.0275 10.7525 31.9998 16.5977C31.8858 22.4046 28.6934 27.863 24.7029 32.0827C22.3998 34.5291 19.8232 36.6924 17.026 38.5283C16.7379 38.6949 16.4224 38.8064 16.0949 38.8574C15.7797 38.844 15.4728 38.7508 15.2018 38.5864C10.9313 35.8278 7.18481 32.3066 4.1425 28.1921C1.59678 24.7575 0.15048 20.6081 2.65968e-06 16.3073C-0.00330479 10.4509 3.07834 5.04293 8.07233 2.1412ZM10.9676 18.7314C11.8076 20.8024 13.7905 22.1533 15.9903 22.1533C17.4315 22.1636 18.8168 21.5864 19.8377 20.5501C20.8585 19.5139 21.4301 18.1048 21.425 16.6368C21.4327 14.396 20.1134 12.3714 18.0833 11.5085C16.0531 10.6455 13.7125 11.1144 12.1542 12.6961C10.596 14.2778 10.1275 16.6604 10.9676 18.7314Z"
                        fill="#C83131"/>
                    <ellipse
                        opacity="0.4"
                        cx="15.9921"
                        cy="43.4264"
                        rx="11.4286"
                        ry="2.28573"
                        fill="#C83131"/>
                </svg>
                <div class="d-flex align-items-center justify-content-center">
                    <p
                        class="m-0 text-primary text-nowrap fw-bold p-3 roadText rounded-5">
                        مشاهده مسیر فول استک
                    </p>
                    <svg
                        width="20"
                        height="1"
                        viewBox="0 0 20 1"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <line
                            x1="4.37114e-08"
                            y1="0.5"
                            x2="20"
                            y2="0.500002"
                            stroke="white"
                            stroke-dasharray="2 2"/>
                    </svg>
                </div>
            </div>
            <!-- Fullstack Courses -->
            <div class="col-12 col-xl-10 mt-4 mt-sm-0 p-0">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <!-- HTML -->
                        <a href="#" class="swiper-slide borderSlider">
                            <img
                                src="./frontend/assets/images/html.png"
                                alt="html"
                                class="roadIcon"
                                width="100"/>
                            <h3 class="fw-bolder text-white w-100 pt-2">
                                آموزش <span class="text-primary ">HTML</span>
                            </h3>
                            <p class="text-white flex-grow-1 w-100">
                                در ایستگاه اول از مسیر آموزش فرانت اند به آموزش HTML میرسیم
                                که به طور کامل برای شما توضیح داده خواهد شد
                            </p>
                            <div class="row mb-2">
                                <!-- course duration -->
                                   <div class="col-4 d-flex align-items-center">
                                    <p class="m-0 text-white ms-2 mt-lg">18:50</p>
                                    <svg
                                        width="20"
                                        height="21"
                                        viewBox="0 0 20 21"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.99996 18.8346C14.6023 18.8346 18.3333 15.1037 18.3333 10.5013C18.3333 5.89893 14.6023 2.16797 9.99996 2.16797C5.39759 2.16797 1.66663 5.89893 1.66663 10.5013C1.66663 15.1037 5.39759 18.8346 9.99996 18.8346Z"
                                            stroke="#23BF65"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M10 5.5V10.5L13.3333 12.1667"
                                            stroke="#23BF65"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <!-- Course Liked -->
                                <div class="col-3 d-flex align-items-start">
                                    <p class="m-0 text-white ms-1">10</p>
                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.3667 3.84319C16.941 3.41736 16.4357 3.07956 15.8795 2.84909C15.3232 2.61862 14.7271 2.5 14.125 2.5C13.5229 2.5 12.9268 2.61862 12.3705 2.84909C11.8143 3.07956 11.309 3.41736 10.8833 3.84319L10 4.72652L9.11666 3.84319C8.25692 2.98344 7.09086 2.50045 5.875 2.50045C4.65914 2.50045 3.49307 2.98344 2.63333 3.84319C1.77359 4.70293 1.29059 5.86899 1.29059 7.08485C1.29059 8.30072 1.77359 9.46678 2.63333 10.3265L3.51666 11.2099L10 17.6932L16.4833 11.2099L17.3667 10.3265C17.7925 9.90089 18.1303 9.39553 18.3608 8.83932C18.5912 8.2831 18.7099 7.68693 18.7099 7.08485C18.7099 6.48278 18.5912 5.88661 18.3608 5.33039C18.1303 4.77418 17.7925 4.26882 17.3667 3.84319Z"
                                            fill="#950D0D"
                                            stroke="#950D0D"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="col-5 d-flex align-items-center">
                                    <p class="m-0 text-white fw-medium">{{number_format($course->price)}}</p>
                                    <p class="m-0 text-primary fw-bold me-2">تومان</p>
                                </div>
                            </div>
                            <button class="main-btn text-white px-3 py-2 btn-innerShadow">مشاهده دوره</button>
                        </a>
                        <!-- Css -->
                        <a href="#" class="swiper-slide">
                            <img
                                src="./frontend/assets/images/css.png"
                                alt="css"
                                class="roadIcon"
                                width="100"/>
                            <h3 class="fw-bolder text-white w-100 pt-2">
                                آموزش <span class="text-primary me-2">CSS</span>
                            </h3>
                            <p class="text-white flex-grow-1 w-100">
                                در ایستگاه دوم از مسیر آموزش فول استک به آموزش CSS میرسیم که
                                به طور کامل برای شما توضیح داده خواهد شد
                            </p>
                            <div class="row mb-2">
                                <!-- course duration -->
                                   <div class="col-4 d-flex align-items-center">
                                    <p class="m-0 text-white ms-2 pt-1">18:50</p>
                                    <svg
                                        width="20"
                                        height="21"
                                        viewBox="0 0 20 21"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.99996 18.8346C14.6023 18.8346 18.3333 15.1037 18.3333 10.5013C18.3333 5.89893 14.6023 2.16797 9.99996 2.16797C5.39759 2.16797 1.66663 5.89893 1.66663 10.5013C1.66663 15.1037 5.39759 18.8346 9.99996 18.8346Z"
                                            stroke="#23BF65"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M10 5.5V10.5L13.3333 12.1667"
                                            stroke="#23BF65"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <!-- Course Liked -->
                                <div class="col-3 d-flex align-items-start">
                                    <p class="m-0 text-white ms-1">10</p>
                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.3667 3.84319C16.941 3.41736 16.4357 3.07956 15.8795 2.84909C15.3232 2.61862 14.7271 2.5 14.125 2.5C13.5229 2.5 12.9268 2.61862 12.3705 2.84909C11.8143 3.07956 11.309 3.41736 10.8833 3.84319L10 4.72652L9.11666 3.84319C8.25692 2.98344 7.09086 2.50045 5.875 2.50045C4.65914 2.50045 3.49307 2.98344 2.63333 3.84319C1.77359 4.70293 1.29059 5.86899 1.29059 7.08485C1.29059 8.30072 1.77359 9.46678 2.63333 10.3265L3.51666 11.2099L10 17.6932L16.4833 11.2099L17.3667 10.3265C17.7925 9.90089 18.1303 9.39553 18.3608 8.83932C18.5912 8.2831 18.7099 7.68693 18.7099 7.08485C18.7099 6.48278 18.5912 5.88661 18.3608 5.33039C18.1303 4.77418 17.7925 4.26882 17.3667 3.84319Z"
                                            stroke="#950D0D"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="col-5 d-flex align-items-center">
                                    <p class="m-0 text-white fw-medium">{{number_format( $course->price)}}</p>
                                    <p class="m-0 text-primary fw-bold me-2">تومان</p>
                                </div>
                            </div>
                            <button class="main-btn text-white px-3 py-2 btn-innerShadow">مشاهده دوره</button>
                        </a>
                        <!-- Bootstrap -->
                        <a href="#" class="swiper-slide">
                            <svg
                                width="100"
                                height="100"
                                class="mb-3"
                                viewBox="0 0 134 134"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask
                                    id="mask0_724_1824"
                                    style="mask-type: luminance"
                                    maskUnits="userSpaceOnUse"
                                    x="0"
                                    y="0"
                                    width="134"
                                    height="134">
                                    <path d="M0 0H134V134H0V0Z" fill="white"/>
                                </mask>
                                <g mask="url(#mask0_724_1824)">
                                    <path
                                        d="M134 115.389C134 125.67 125.67 134 115.389 134H18.6112C8.33421 134 0 125.67 0 115.389V18.6112C0 8.3305 8.33421 0 18.6112 0H115.389C125.67 0 134 8.3305 134 18.6112V115.389Z"
                                        fill="#673AB7"/>
                                </g>
                                <path
                                    d="M100.616 72.9583C98.1965 69.6081 94.6976 67.3004 90.1938 66.0722C90.1938 66.0722 93.9904 64.6949 97.4147 59.5584C99.4621 56.2828 100.504 52.3371 100.504 47.7216C100.504 39.719 97.6009 33.5771 91.7943 29.3711C85.9877 25.1651 79.4365 22.3359 68.3069 22.3359H33.5042V111.669H72.3272C82.8608 111.595 90.7894 109.324 96.1865 104.969C101.547 100.54 104.227 93.9888 104.227 85.2415C104.227 80.4028 103.036 76.3084 100.616 72.9583ZM55.8375 37.2251C55.8375 37.2251 71.3593 37.2251 71.6571 37.2251C77.315 37.2251 81.8933 41.8031 81.8933 47.4609C81.8933 53.1188 77.315 57.6972 71.6571 57.6972C71.3593 57.6972 55.8375 57.6972 55.8375 57.6972V37.2251ZM74.4488 96.7805H55.8375V74.4472H74.4488C80.6277 74.4472 85.6154 79.4349 85.6154 85.6138C85.6154 91.7927 80.6277 96.7805 74.4488 96.7805Z"
                                    fill="white"/>
                            </svg>

                            <h3 class="fw-bolder text-white w-100 pt-2">
                                آموزش <span class="text-primary me-2">CSS</span>
                            </h3>
                            <p class="text-white flex-grow-1 w-100">
                                در ایستگاه دوم از مسیر آموزش فول استک به آموزش CSS میرسیم که
                                به طور کامل برای شما توضیح داده خواهد شد
                            </p>
                            <div class="row mb-2">
                                <!-- course duration -->
                                   <div class="col-4 d-flex align-items-center">
                                    <p class="m-0 text-white ms-2 pt-1">18:50</p>
                                    <svg
                                        width="20"
                                        height="21"
                                        viewBox="0 0 20 21"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.99996 18.8346C14.6023 18.8346 18.3333 15.1037 18.3333 10.5013C18.3333 5.89893 14.6023 2.16797 9.99996 2.16797C5.39759 2.16797 1.66663 5.89893 1.66663 10.5013C1.66663 15.1037 5.39759 18.8346 9.99996 18.8346Z"
                                            stroke="#23BF65"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M10 5.5V10.5L13.3333 12.1667"
                                            stroke="#23BF65"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <!-- Course Liked -->
                                <div class="col-3 d-flex align-items-start">
                                    <p class="m-0 text-white ms-1">10</p>
                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.3667 3.84319C16.941 3.41736 16.4357 3.07956 15.8795 2.84909C15.3232 2.61862 14.7271 2.5 14.125 2.5C13.5229 2.5 12.9268 2.61862 12.3705 2.84909C11.8143 3.07956 11.309 3.41736 10.8833 3.84319L10 4.72652L9.11666 3.84319C8.25692 2.98344 7.09086 2.50045 5.875 2.50045C4.65914 2.50045 3.49307 2.98344 2.63333 3.84319C1.77359 4.70293 1.29059 5.86899 1.29059 7.08485C1.29059 8.30072 1.77359 9.46678 2.63333 10.3265L3.51666 11.2099L10 17.6932L16.4833 11.2099L17.3667 10.3265C17.7925 9.90089 18.1303 9.39553 18.3608 8.83932C18.5912 8.2831 18.7099 7.68693 18.7099 7.08485C18.7099 6.48278 18.5912 5.88661 18.3608 5.33039C18.1303 4.77418 17.7925 4.26882 17.3667 3.84319Z"
                                            stroke="#950D0D"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="col-5 d-flex align-items-center">
                                    <p class="m-0 text-white fw-medium">{{number_format($course->price)}}</p>
                                    <p class="m-0 text-primary fw-bold me-2">تومان</p>
                                </div>
                            </div>
                            <button class="main-btn text-white px-3 py-2 btn-innerShadow">مشاهده دوره</button>
                        </a>
                        <!-- JavaScript -->
                        <a href="#" class="swiper-slide">
                            <svg
                                width="100"
                                height="100"
                                class="mb-3"
                                viewBox="0 0 134 134"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask
                                    id="mask0_724_1824"
                                    style="mask-type: luminance"
                                    maskUnits="userSpaceOnUse"
                                    x="0"
                                    y="0"
                                    width="134"
                                    height="134">
                                    <path d="M0 0H134V134H0V0Z" fill="white"/>
                                </mask>
                                <g mask="url(#mask0_724_1824)">
                                    <path
                                        d="M134 115.389C134 125.67 125.67 134 115.389 134H18.6112C8.33421 134 0 125.67 0 115.389V18.6112C0 8.3305 8.33421 0 18.6112 0H115.389C125.67 0 134 8.3305 134 18.6112V115.389Z"
                                        fill="#673AB7"/>
                                </g>
                                <path
                                    d="M100.616 72.9583C98.1965 69.6081 94.6976 67.3004 90.1938 66.0722C90.1938 66.0722 93.9904 64.6949 97.4147 59.5584C99.4621 56.2828 100.504 52.3371 100.504 47.7216C100.504 39.719 97.6009 33.5771 91.7943 29.3711C85.9877 25.1651 79.4365 22.3359 68.3069 22.3359H33.5042V111.669H72.3272C82.8608 111.595 90.7894 109.324 96.1865 104.969C101.547 100.54 104.227 93.9888 104.227 85.2415C104.227 80.4028 103.036 76.3084 100.616 72.9583ZM55.8375 37.2251C55.8375 37.2251 71.3593 37.2251 71.6571 37.2251C77.315 37.2251 81.8933 41.8031 81.8933 47.4609C81.8933 53.1188 77.315 57.6972 71.6571 57.6972C71.3593 57.6972 55.8375 57.6972 55.8375 57.6972V37.2251ZM74.4488 96.7805H55.8375V74.4472H74.4488C80.6277 74.4472 85.6154 79.4349 85.6154 85.6138C85.6154 91.7927 80.6277 96.7805 74.4488 96.7805Z"
                                    fill="white"/>
                            </svg>

                            <h3 class="fw-bolder text-white w-100 pt-2">
                                آموزش <span class="text-primary me-2">CSS</span>
                            </h3>
                            <p class="text-white flex-grow-1 w-100">
                                در ایستگاه دوم از مسیر آموزش فول استک به آموزش CSS میرسیم که
                                به طور کامل برای شما توضیح داده خواهد شد
                            </p>
                            <div class="row mb-2">
                                <!-- course duration -->
                                <div class="col-4 d-flex align-items-center">
                                    <p class="m-0 text-white ms-2 pt-1">18:50</p>
                                    <svg
                                        width="20"
                                        height="21"
                                        viewBox="0 0 20 21"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.99996 18.8346C14.6023 18.8346 18.3333 15.1037 18.3333 10.5013C18.3333 5.89893 14.6023 2.16797 9.99996 2.16797C5.39759 2.16797 1.66663 5.89893 1.66663 10.5013C1.66663 15.1037 5.39759 18.8346 9.99996 18.8346Z"
                                            stroke="#23BF65"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M10 5.5V10.5L13.3333 12.1667"
                                            stroke="#23BF65"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <!-- Course Liked -->
                                <div class="col-3 d-flex align-items-start">
                                    <p class="m-0 text-white ms-1">10</p>
                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.3667 3.84319C16.941 3.41736 16.4357 3.07956 15.8795 2.84909C15.3232 2.61862 14.7271 2.5 14.125 2.5C13.5229 2.5 12.9268 2.61862 12.3705 2.84909C11.8143 3.07956 11.309 3.41736 10.8833 3.84319L10 4.72652L9.11666 3.84319C8.25692 2.98344 7.09086 2.50045 5.875 2.50045C4.65914 2.50045 3.49307 2.98344 2.63333 3.84319C1.77359 4.70293 1.29059 5.86899 1.29059 7.08485C1.29059 8.30072 1.77359 9.46678 2.63333 10.3265L3.51666 11.2099L10 17.6932L16.4833 11.2099L17.3667 10.3265C17.7925 9.90089 18.1303 9.39553 18.3608 8.83932C18.5912 8.2831 18.7099 7.68693 18.7099 7.08485C18.7099 6.48278 18.5912 5.88661 18.3608 5.33039C18.1303 4.77418 17.7925 4.26882 17.3667 3.84319Z"
                                            stroke="#950D0D"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="col-5 d-flex align-items-center">
                                    <p class="m-0 text-white fw-medium">{{str_replace('_',' ', $course->price)}}</p>
                                    <p class="m-0 text-primary fw-bold me-2">تومان</p>
                                </div>
                            </div>
                            <button class="main-btn text-white px-3 py-2 btn-innerShadow">مشاهده دوره</button>
                        </a>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    @endif

    <!-- Last Step -->
    <img
        src="/frontend/assets/images/lastStep.png"
        alt="last step"
        class="lastRoad d-none d-md-block"/>
    <img
        src="/frontend/assets/images/lastStepM.png"
        alt="mobile Step Line"
        class="d-md-none"/>

    <h5 class="text-white">به جهان فول استک کاران خوش آمدید</h5>
</section>

<!-- hr -->
<img src="/frontend/assets/images/hr.png" alt="HR" class="hr"/>

@push('scripts')
    <script src="/frontend/js/swiper-bundle.min.js"></script>

@endpush
