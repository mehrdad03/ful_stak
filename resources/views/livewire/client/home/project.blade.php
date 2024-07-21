@if(isset($categories['master-courses']) && $categories['master-courses']->courses->isNotEmpty())

    <section id="projects" class="position-relative">
        <div class="row flex-column flex-lg-row row-gap-3 align-items-center">
            <div
                class="col-12 col-lg-2 col-xl-3 z-3 d-flex flex-wrap align-items-center justify-content-between d-lg-block">
                <h2 class="title-text fs-2">مستر کلاس ها</h2>
                <img
                    src="/frontend/assets/images/brain.webp"
                    alt="brain"
                    class="d-none d-lg-block w-75"/>
                <a href="#" class="d-flex align-items-center column-gap-2">
                    <h4 class="text-primary m-0">مشاهده همه پروژه ها</h4>
                    <svg
                        width="14"
                        height="24"
                        viewBox="0 0 14 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.0671 14.5859L4.44405 17.9628L9.94659 23.4654C11.1123 24.6139 13.1007 23.7911 13.1007 22.1455L13.1007 11.466L13.1007 1.84945C13.1007 0.203825 11.1122 -0.618984 9.94659 0.546664L1.0671 9.42615C-0.355679 10.8318 -0.355679 13.1631 1.0671 14.5859Z"
                            fill="#23BF65"/>
                    </svg>
                </a>
            </div>
            <div class="col-12 col-lg-10 col-xl-9">
                <div class="swiper mySwiper" >
                    <div class="swiper-wrapper">
                        @foreach ($categories['master-courses']->courses as $course)
                            @php
                                $seconds = $course->total_duration; // تعداد ثانیه‌های ویدیو

                                $hours = floor($seconds / 3600);
                                $minutes = floor(($seconds % 3600) / 60);
                                $seconds = $seconds % 60;

                                // نمایش با فرمت ساعت:دقیقه:ثانیه
                               $formattedTime = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
                            @endphp
                            <div class="swiper-slide">
                                <!-- course banner -->
                                <a target="_blank" href="{{route('client.course',$course->url_slug)}}"
                                   class="course-cover">
                                    <img
                                        src="{{@$course->coverImage->path }}"
                                        alt="html"
                                        class="roadIcon rounded-2"
                                        width="230"/>
                                </a>
                                <a target="_blank" href="{{route('client.course',$course->url_slug)}}"
                                   class="course-cover">
                                    <h3 class="fw-bolder text-white w-100">
                                        <span
                                            class="text-primary d-block">{{str_replace('_',' ', $course->title)}}</span>
                                    </h3>
                                </a>
                                <p class="text-white flex-grow-1">
                                    {{mb_substr($course->short_description, 0, 150)}} ...
                                </p>
                                <div class="d-flex flex-wrap mb-2 align-items-end justify-content-around gap-3">
                                    <!-- course duration -->
                                    <div class="d-flex align-items-center">
                                        <p class="m-0 text-white ms-2 pt-1">{{$formattedTime}}</p>
                                        <i class="fa fa-clock-o text-primary"></i>
                                    </div>
                                    <!-- Course Liked -->
                                    <div class="d-flex align-items-center">
                                        <p class="m-0 text-white fw-medium">

                                            <span class="d-block text-decoration-line-through text-danger">{{number_format(@$course->price)}}</span>
                                            <span class="d-block">{{number_format(@$course->price-@$course->discount)}}
                                            <span class="m-0 text-primary fw-bold me-2">تومان</span>
                                            </span>
                                        </p>

                                    </div>
                                </div>
                                <a target="_blank" href="{{route('client.course',$course->url_slug)}}"
                                   class="main-btn text-white px-3 py-2 ">مشاهده دوره</a></div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <img
            src="/frontend/assets/images/projectBg.png"
            alt="projectBg"
            class="d-none d-lg-block"/>
    </section>
    <!-- hr -->
    <img src="/frontend/assets/images/hr.png" alt="HR" class="hr"/>

@endif
