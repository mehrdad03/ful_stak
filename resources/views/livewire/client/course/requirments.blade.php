<section wire:ignore id="requirements">
    <h3 class="text-primary fs-2 mb-5">
        پیش نیاز های این دوره :
    </h3>

    @if(count($course->requirementsCourses)>0)
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- HTML -->
                @foreach ($course->requirementsCourses as $item)
                    @php
                        /*  $seconds = $item->course->total_duration; // تعداد ثانیه‌های ویدیو

                          $hours = floor($seconds / 3600);
                          $minutes = floor(($seconds % 3600) / 60);
                          $seconds = $seconds % 60;

                          // نمایش با فرمت ساعت:دقیقه:ثانیه
                         $formattedTime = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);*/
                       $title=explode('_',$item->course->title);
                    @endphp


                    <div class="swiper-slide borderSlider">
                        <a target="_blank" href="{{route('client.course',$item->course->url_slug)}}"
                           class="course-cover">
                              <img loading="lazy" style="top: -60px;"
                                src="/{{@$item->course->coverImage->path }}"
                                alt="html"
                                class="roadIcon"
                                width="100"/>
                        </a>
                        <a target="_blank" href="{{route('client.course',$item->course->url_slug)}}"
                           class="course-cover">
                        <span class="text-primary pt-5 mb-2 d-block fs-5 fw-bold" style="height: 120px">
                            {{@$title[0]}}
                            <span class="me-1 text-primary">
                            {{@$title[1]}}
                            </span>
                            {{@$title[2]}}
                        </span>

                        </a>
                        <p class="text-white flex-grow-1 w-100">
                            {{mb_substr($item->course->short_description, 0, 100)}} ...
                        </p>
                        <div class="d-flex align-items-center justify-content-center mb-2 w-100 ps-2 pe-2">
                            <!-- course duration -->
                            {{-- <div class=" d-flex align-items-center">
                                 <p class="m-0 text-white ms-2 pt-1">{{@$formattedTime}}</p>
                                 <i class="fa fa-clock-o text-primary"></i>
                             </div>--}}
                            <!-- Course Liked -->
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <p class="m-0 text-white fw-medium">{{number_format($item->course->price)}}</p>
                                <p class="m-0 text-primary fw-bold me-2">تومان</p>
                            </div>
                        </div>
                        <a target="_blank" href="{{route('client.course',$item->course->url_slug)}}"
                           class="main-btn text-white px-3 py-2 ">مشاهده دوره</a>
                    </div>
                @endforeach
                <!-- Css -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    @else
        <ul>

            @foreach(explode('_',$course->requirements) as $item)
                <li class="text-white lh-lg" style="list-style: initial">{{$item}}</li>

            @endforeach
        </ul>

    @endif


</section>
<img src="/frontend/assets/images/hr.png" alt="HR" class="hr"/>
