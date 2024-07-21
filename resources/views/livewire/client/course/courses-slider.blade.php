<section wire:ignore>
    <h3 class="text-primary fs-2 mb-5">در ادامه {{$course->category->title}}</h3>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- HTML -->
            @foreach ($sameCourses as $item)
                @php
                    $seconds = $item->total_duration; // تعداد ثانیه‌های ویدیو

                    $hours = floor($seconds / 3600);
                    $minutes = floor(($seconds % 3600) / 60);
                    $seconds = $seconds % 60;

                    // نمایش با فرمت ساعت:دقیقه:ثانیه
                   $formattedTime = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
                @endphp


                <div class="swiper-slide borderSlider">
                    <a target="_blank" {{--href="{{route('client.course',$item->url_slug)}}"--}}
                    class="course-cover">
                        <img
                            src="/{{@$item->coverImage->path }}"
                            alt="html"
                            class="roadIcon"
                            width="125"/>
                    </a>
                    <a target="_blank" href="{{--{{route('client.course',$item->url_slug)}}--}}"
                       class="course-cover">
                        <h5 class="fw-bolder text-white w-100 pt-2">
                                        <span
                                            class="text-primary pt-5 d-block">{{str_replace('_',' ', $item->title)}}</span>
                        </h5>
                    </a>
                    <p class="text-white flex-grow-1 w-100">
                        {{mb_substr($item->short_description, 0, 100)}} ...
                    </p>
                    <div class="d-flex align-items-center justify-content-between mb-2 w-100 ps-2 pe-2">
                        <!-- course duration -->
                        <div class=" d-flex align-items-center">
                            <p class="m-0 text-white ms-2 pt-1">{{$formattedTime}}</p>
                            <i class="fa fa-clock-o text-primary"></i>
                        </div>
                        <!-- Course Liked -->
                        <div class="d-flex align-items-center">
                            <p class="m-0 text-white fw-medium">{{number_format($item->price)}}</p>
                            <p class="m-0 text-primary fw-bold me-2">تومان</p>
                        </div>
                    </div>
                    <a target="_blank" href="{{--{{route('client.course',$course->url_slug)}}--}}"
                       class="main-btn text-white px-3 py-2 ">مشاهده دوره</a>
                </div>
            @endforeach
            <!-- Css -->

        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<img src="/frontend/assets/images/hr.png" alt="HR" class="hr"/>

