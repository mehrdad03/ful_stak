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
                        <a style="color: inherit" target="_blank"
                           href="{{route('client.category.road-map','frontend')}}">
                            مشاهده مسیر فرانت اند
                        </a>

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
                            @php
                                $seconds = $course->total_duration; // تعداد ثانیه‌های ویدیو

                                $hours = floor($seconds / 3600);
                                $minutes = floor(($seconds % 3600) / 60);
                                $seconds = $seconds % 60;

                                // نمایش با فرمت ساعت:دقیقه:ثانیه
                               $formattedTime = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
                            @endphp


                            <div class="swiper-slide borderSlider">
                                <a target="_blank" href="{{route('client.course',$course->url_slug)}}"
                                   class="course-cover">
                                    <img
                                        src="{{@$course->coverImage->path }}"
                                        alt="html"
                                        class="roadIcon"
                                        width="125"/>
                                </a>
                                <a target="_blank" href="{{route('client.course',$course->url_slug)}}"
                                   class="course-cover">
                                    <h3 class="fw-bolder text-white w-100 pt-2">
                                        <span
                                            class="text-primary pt-5 d-block">{{str_replace('_',' ', $course->title)}}</span>
                                    </h3>
                                </a>
                                <p class="text-white flex-grow-1 w-100">
                                    {{mb_substr($course->short_description, 0, 100)}} ...
                                </p>
                                <div class="d-flex align-items-center justify-content-between mb-2 w-100 ps-2 pe-2">
                                    <!-- course duration -->
                                    <div class=" d-flex align-items-center">
                                        <p class="m-0 text-white ms-2 pt-1">{{$formattedTime}}</p>
                                        <i class="fa fa-clock-o text-primary"></i>
                                    </div>
                                    <!-- Course Liked -->
                                    <div class="d-flex align-items-center">
                                        <p class="m-0 text-white fw-medium">{{number_format($course->price)}}</p>
                                        <p class="m-0 text-primary fw-bold me-2">تومان</p>
                                    </div>
                                </div>
                                <a target="_blank" href="{{route('client.course',$course->url_slug)}}"
                                   class="main-btn text-white px-3 py-2 ">مشاهده دوره</a>
                            </div>
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
                            @php
                                $seconds = $course->total_duration; // تعداد ثانیه‌های ویدیو

                                $hours = floor($seconds / 3600);
                                $minutes = floor(($seconds % 3600) / 60);
                                $seconds = $seconds % 60;

                                // نمایش با فرمت ساعت:دقیقه:ثانیه
                               $formattedTime = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
                            @endphp

                            <div class="swiper-slide borderSlider">
                                <a target="_blank" href="{{route('client.course',$course->url_slug)}}"
                                   class="course-cover">
                                    <img
                                        src="{{@$course->coverImage->path }}"
                                        alt="html"
                                        class="roadIcon"
                                        width="125"/>
                                </a>
                                <a target="_blank" href="{{route('client.course',$course->url_slug)}}">
                                    <h3 class="fw-bolder text-white w-100 pt-2"><span
                                            class="text-primary pt-5 d-block">{{str_replace('_',' ', $course->title)}}</span>
                                    </h3>
                                </a>
                                <p class="text-white flex-grow-1 w-100">
                                    {{mb_substr($course->short_description, 0, 100)}} ...
                                </p>
                                <div class="d-flex align-items-center justify-content-between mb-2 w-100 ps-2 pe-2">
                                    <!-- course duration -->
                                    <div class=" d-flex align-items-center">
                                        <p class="m-0 text-white ms-2 pt-1">{{$formattedTime}}</p>
                                        <i class="fa fa-clock-o text-primary"></i>
                                    </div>
                                    <div class=" d-flex align-items-center">
                                        <p class="m-0 text-white fw-medium">{{number_format($course->price)}}</p>
                                        <p class="m-0 text-primary fw-bold me-2">تومان</p>
                                    </div>
                                </div>
                                <a target="_blank" href="{{route('client.course',$course->url_slug)}}"
                                   class="main-btn text-white px-3 py-2 ">مشاهده دوره</a>
                            </div>
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
                        <a style="color: inherit" target="_blank"
                           href="{{route('client.category.road-map','backend')}}">
                            مشاهده مسیر بک اند
                        </a>

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
                        @foreach ($categories['fullstack-road-map']->courses as $course)
                            @php
                                $seconds = $course->total_duration; // تعداد ثانیه‌های ویدیو

                                $hours = floor($seconds / 3600);
                                $minutes = floor(($seconds % 3600) / 60);
                                $seconds = $seconds % 60;

                                // نمایش با فرمت ساعت:دقیقه:ثانیه
                               $formattedTime = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
                            @endphp
                            <div  class="swiper-slide borderSlider">
                                <a target="_blank" href="{{route('client.course',$course->url_slug)}}"
                                   class="course-cover">
                                    <img
                                        src="{{@$course->coverImage->path }}"
                                        alt="html"
                                        class="roadIcon"
                                        {{$course->url_slug=='docker-tutorial'?'width=210':'width=125'}}
                                       />
                                </a>
                                <a target="_blank" href="{{route('client.course',$course->url_slug)}}">
                                    <h3 class="fw-bolder text-white w-100 pt-2"><span
                                            class="text-primary pt-5 d-block">{{str_replace('_',' ', $course->title)}}</span>
                                    </h3>
                                </a>
                                <p class="text-white flex-grow-1 w-100">
                                    {{mb_substr($course->short_description, 0, 100)}} ...
                                </p>
                                <div class="d-flex justify-content-between w-100 mb-2">
                                    <!-- course duration -->
                                    <div class="d-flex align-items-center">
                                        @if( $course->total_duration!=0)
                                            <p class="m-0 text-white ms-2 mt-lg">{{$formattedTime}}</p>
                                            <i class="fa fa-clock-o text-primary"></i>
                                        @else
                                            <div class="d-flex align-items-center">
                                                <i class="fa fa-circle-o text-danger ms-2" style="color: #ff0000;"></i>
                                                <span class="text-danger">به زودی</span>
                                            </div>
                                        @endif


                                    </div>
                                    @if( $course->total_duration!=0)
                                        <div class=" d-flex align-items-center">
                                            <p class="m-0 text-white fw-medium">{{number_format($course->price)}}</p>
                                            <p class="m-0 text-primary fw-bold me-2">تومان</p>
                                        </div>
                                    @else
                                        <div class="d-flex align-items-center">
                                            <span class="text-danger">نامشخص</span>
                                        </div>
                                    @endif

                                </div>
                                <a target="_blank" href="{{route('client.course',$course->url_slug)}}"
                                   class="main-btn text-white px-3 py-2 ">مشاهده دوره</a>
                            </div>
                        @endforeach

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
