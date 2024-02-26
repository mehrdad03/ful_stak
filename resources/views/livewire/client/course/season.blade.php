<section
    class="season d-flex flex-column justify-content-center align-items-center" id="season">
    <h3 class="text-primary fs-2 mb-lg-5">سرفصل دوره ها</h3>
    <div
        class="w-100 d-flex justify-content-lg-end justify-content-center totalDet my-5">
        <div class="courseDetails mx-1">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="text-white">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>
            </svg>
            <p class="m-0 text-primary fw-medium">{{$sections->count()}} فصل</p>
        </div>
        <div class="courseDetails mx-1">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="text-white">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/>
            </svg>

            <p class="m-0 text-primary fw-medium">4 تمرین</p>
        </div>
        <div class="courseDetails mx-1">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="text-white">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
            </svg>

            <p class="m-0 text-primary fw-medium"> ساعت</p>
        </div>
    </div>
    <!-- ======= accordions ======= -->
    <!-- n 1 -->

    @foreach($sections as $section)
        <div class="acc w-100">
            <div class="acc-num"><p class="m-0 index">{{$loop->index+1}}</p></div>
            <div class="acc-item w-100 {{$loop->index==0 ? 'active' :'' }}">
                <div
                    class="d-flex justify-content-center justify-content-md-end">
                    <div
                        class="acc-header d-flex w-100 align-items-center justify-content-between px-1 px-md-4">
                        <p class="w50 m-0 text-primary fw-bold px-2">{{$section->title}}</p>
                        <!-- section details -->
                        <div
                            class="w-50 d-flex align-items-center justify-content-around justify-content-md-end section-info">
                            <div
                                class="d-flex justify-content-center align-items-start py-3 w-75">
                                <div class="courseDetails w-50">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="text-white">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>
                                    </svg>
                                    <p class="m-0 text-primary fw-medium">
                                        {{$section->sectionLectures->count()}} <span class="d-none d-md-inline">جلسه</span>
                                    </p>
                                </div>
                                <div class="courseDetails w-50">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="text-white">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/>
                                    </svg>

                                    <p class="m-0 text-primary fw-medium">
                                        4 <span class="d-none d-md-inline">تمرین</span>
                                    </p>
                                </div>
                                <div class="courseDetails w-50">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="text-white">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>

                                    <p class="m-0 text-primary fw-medium">
                                        3 <span class="d-none d-md-inline">ساعت</span>
                                    </p>
                                </div>
                            </div>
                            <!-- chevron -->
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="text-primary me-lg-5">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="acc-content lh-lg">

                    @foreach($section->sectionLectures as $lecture)

                        <!-- episode -->
                        <div class="d-flex justify-content-between">
                            <div class="course_episods">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="text-primary">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z"/>
                                </svg>
                                <p class="text-white m-0">{{$lecture->title}}</p>
                            </div>
                            <div class="d-flex column-gap-2 align-items-center lecture-info ">
                                <p class="m-0 text-white fw-bold">پیش نمایش</p>
                                <p class="m-0 text-primary fw-bold">{{@date('s : i',$lecture->sectionLectureVideos->duration)}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</section>