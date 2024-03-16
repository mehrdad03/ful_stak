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
                    @include('livewire.client.profile.course-item')
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
