@push('links')
    <link rel="stylesheet" href="/frontend/css/profile.css"/>
    <link rel="stylesheet" href="/frontend/css/progresscircle.css"/>
@endpush

<div class="row container p-lg-0 mx-auto mx-lg-0">
    <!-- ====== sidebar ====== -->
    @include('livewire.client.profile.sidebar')

    <!-- ====== main content ====== -->
    <div class="col col-lg-10 p-0 px-lg-4">
        <!-- top menu -->
        @include('livewire.client.profile.status')
        <!-- course btn -->
        <div
            class="mt-5 d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
            <h4 class="text-primary d-flex align-items-center column-gap-2">
                <span></span>دوره های جاری
            </h4>

                <a
                    href="{{route('client.profile.my-courses')}}"
                    class="d-flex align-items-center column-gap-2 instalink">
                    <p class="text-primary m-0">تمامی دوره های جاری</p>
                    <svg
                        width="25"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="text-primary">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18"/>
                    </svg>
                </a>


        </div>

        <!-- My Courses -->
        <section>
            <div class="d-flex justify-content-center justify-content-lg-start align-items-center flex-wrap gap-4 mt-4">
                @forelse($latestCourses as $item)
                    @php
                        $title=explode('_',$item->course->title);
                        $currentYear=date('Y');
                    @endphp
                    <div class="bg-secondary rounded-4 p-3">
                        <iframe
                            class="rounded-3"
                            src="https://www.youtube.com/embed/QHBVA_7bSRg?si=8WJSsEfdxlxMKZ_5"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>

                        <!-- Course section -->
                        <div class="title">
                            <p class="m-0 text-white my-2 fw-light">بخش هفتم</p>
                            <p class="m-0 text-white my-2 fw-medium">آموزش منطق بولی</p>
                        </div>
                        <!-- course name -->
                        <div class="d-flex align-items-center my-4">

                            <p class="m-0 fw-bold text-white me-2">
                                {{$title[0]}}
                                <span class="text-primary">{{$title[1]}}</span>
                                {{$title[2]}}|<span class="me-1 text-primary">{{$currentYear}}</span>
                                </p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center column-gap-2">
                                <p class="m-0 text-primary fw-bold">مشاهده دوره</p>
                                <svg
                                    width="20"
                                    height="20"
                                    viewBox="0 0 20 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 18.3346C14.6024 18.3346 18.3334 14.6037 18.3334 10.0013C18.3334 5.39893 14.6024 1.66797 10 1.66797C5.39765 1.66797 1.66669 5.39893 1.66669 10.0013C1.66669 14.6037 5.39765 18.3346 10 18.3346Z"
                                        stroke="#23BF65"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M8.33331 6.66797L13.3333 10.0013L8.33331 13.3346V6.66797Z"
                                        stroke="#23BF65"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <!-- Circle progress -->
                            <div class="progress_wrapper">
                                <div class="box">
                                    <div
                                        class="circlechart text-primary"
                                        data-percentage="70">
                                        20%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </section>

        <!-- Q & A -->
        <section class="mt-5">
            <h4 class="text-primary d-flex align-items-center column-gap-2">
                <span></span>پرسش و پاسخ
            </h4>

            <div class="question w-75 d-flex align-items-center column-gap-4 p-3">
                <img
                    src="/frontend/assets/images/questions.png"
                    alt="question mark"/>
                <div>
                    <h5 class="text-white fw-medium">اشکالت رو برطرف کن</h5>
                    <p class="m-0 text-white">
                        سوال خود را مطرح کنید و منتظر پاسخ آن از طرف مدرس دوره باشید
                        تا مشکل شمل برطرف شود
                    </p>
                    <div class="d-flex align-items-center column-gap-1">
                        <p class="m-0 text-primary">ارسال اولین پرسش</p>
                        <svg
                            width="25"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="text-primary">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.75 19.5 8.25 12l7.5-7.5"/>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@push('scripts')
    <script src="/frontend/js/profile.js"></script>
    <script src="/frontend/js/progresscircle.js"></script>
@endpush
