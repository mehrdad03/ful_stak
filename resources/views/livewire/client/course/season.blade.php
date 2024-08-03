<section
    class="season d-flex flex-column justify-content-center align-items-center" id="season">
    <h3 class="text-primary fs-2" style="margin-bottom: 80px">سرفصل دوره ها</h3>
    {{--<div
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
            <p class="m-0 text-primary fw-medium">{{$course->sections->count()}} فصل</p>
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

            <p class="m-0 text-primary fw-medium">
                {{@$formattedTime}}
            </p>
        </div>
    </div>--}}
    <!-- ======= accordions ======= -->
    <!-- n 1 -->

        <div class="acc w-100" >
            <div class="acc-num free-lectures-number"><p class="m-0 text-white index">0</p></div>
            <div class="acc-item mb-5 free-lectures">
                <div class="d-flex justify-content-center justify-content-md-end">
                    <div class="acc-header d-flex w-100 align-items-center justify-content-between px-3 py-1 px-md-4">
                        <h2 class="w50 m-0 text-white  px-2 fs-6">نمونه تدریس (رایگان)</h2>
                        <!-- section details -->
                        <div class="w-50 d-flex align-items-center justify-content-around justify-content-md-end section-info">
                            <div class="d-flex justify-content-end align-items-start py-3 w-75">
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
                                        {{$freeLectures->count()}} <span
                                            class="d-none d-md-inline">جلسه</span>
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
                <div class="acc-content">
                    @foreach($freeLectures as $lecture)
                        <!-- episode -->
                        <div class="d-flex justify-content-between py-1 mb-1 ">
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
                                <h4 class="text-white m-0 fs-6">{{$lecture->title}}</h4>
                            </div>
                            <div class="d-flex column-gap-2 align-items-center justify-content-between lecture-info w-25" wire:ignore>

                                <p class="m-0 text-primary ">{{@date('s : i',$lecture->duration)}}</p>
                                @if($checkPurchase or \Illuminate\Support\Facades\Auth::id()==1)
                                    <button data-path="{{config('app.ftp_url').@$lecture->video->path }}"
                                            data-title="{{$lecture->title }}" data-bs-toggle="modal"
                                            data-bs-target="#videoModal"
                                            data-toggle="modal"
                                            class="text-white bg-secondary main-btn videoModal  rounded-2 px-2 py-1"  wire:click="getLectureId({{$lecture->id}})"
                                            type="button">
                                        مشاهده
                                    </button>
                                @elseif($lecture->free)

                                    <button data-path="{{config('app.ftp_url').@$lecture->video->path }}"
                                            data-title="{{$lecture->title }}" data-bs-toggle="modal"
                                            data-target="#videoModal"
                                            data-toggle="modal"
                                            class="text-white bg-secondary main-btn videoModal  rounded-2 px-2 py-1"
                                            type="button">
                                        مشاهده
                                    </button>
                                @else

                                    <div style="background: rgb(232 28 77)" class="px-1 rounded-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #fff"
                                             viewBox="0 0 24 24">
                                            <path
                                                d="M17 9.761v-4.761c0-2.761-2.238-5-5-5-2.763 0-5 2.239-5 5v4.761c-1.827 1.466-3 3.714-3 6.239 0 4.418 3.582 8 8 8s8-3.582 8-8c0-2.525-1.173-4.773-3-6.239zm-8-4.761c0-1.654 1.346-3 3-3s3 1.346 3 3v3.587c-.927-.376-1.938-.587-3-.587s-2.073.211-3 .587v-3.587zm3 17c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6zm2-6c0 1.104-.896 2-2 2s-2-.896-2-2 .896-2 2-2 2 .896 2 2z"/>
                                        </svg>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>



    @foreach($course->sections as $section)
        <div class="acc w-100">
            <div class="acc-num"><p class="m-0 index">{{$loop->index+1}}</p></div>
            <div class="acc-item mb-5">
                <div class="d-flex justify-content-center justify-content-md-end">
                    <div class="acc-header d-flex w-100 align-items-center justify-content-between px-3 py-1 px-md-4">
                        <h2 class="w50 m-0 text-white  px-2 fs-6">{{$section->title}}</h2>
                        <!-- section details -->
                        <div class="w-50 d-flex align-items-center justify-content-around justify-content-md-end section-info">
                            <div class="d-flex justify-content-end align-items-start py-3 w-75">
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
                                    {{--<p class="m-0 text-primary fw-medium">
                                        {{$section->sectionLectures->count()}} <span
                                            class="d-none d-md-inline">جلسه</span>
                                    </p>--}}
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
                <div class="acc-content">
                    @foreach($section->sectionLectures as $lecture)
                        <!-- episode -->
                        <div class="d-flex justify-content-between py-1 mb-1 ">
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
                                <h4 class="text-white m-0 fs-6">{{$lecture->title}}</h4>
                            </div>
                            <div class="d-flex column-gap-2 align-items-center justify-content-between lecture-info w-25">

                                <p class="m-0 text-primary ">{{@date('s : i',$lecture->duration)}}</p>
                                @if($checkPurchase or \Illuminate\Support\Facades\Auth::id()==1)
                                    <button data-path="{{config('app.ftp_url').@$lecture->video->path}}"
                                            data-title="{{$lecture->title }}" data-bs-toggle="modal"
                                            data-target="#videoModal"
                                            data-toggle="modal"
                                            class="text-white bg-secondary main-btn videoModal  rounded-2 px-2 py-1"  wire:click="getLectureId({{$lecture->id}})"
                                            type="button">
                                        مشاهده
                                    </button>
                               {{-- @elseif($lecture->free)

                                        <button data-path="{{config('app.ftp_url').@$lecture->video->path }}"
                                                data-title="{{$lecture->title }}" data-bs-toggle="modal"
                                                data-bs-target="#videoModal"
                                                data-toggle="modal"
                                                class="text-white bg-secondary main-btn videoModal  rounded-2 px-2 py-1"
                                                type="button">
                                            مشاهده
                                        </button>--}}
                                    @else

                                    <div style="background: rgb(232 28 77)" class="px-1 rounded-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #fff"
                                             viewBox="0 0 24 24">
                                            <path
                                                d="M17 9.761v-4.761c0-2.761-2.238-5-5-5-2.763 0-5 2.239-5 5v4.761c-1.827 1.466-3 3.714-3 6.239 0 4.418 3.582 8 8 8s8-3.582 8-8c0-2.525-1.173-4.773-3-6.239zm-8-4.761c0-1.654 1.346-3 3-3s3 1.346 3 3v3.587c-.927-.376-1.938-.587-3-.587s-2.073.211-3 .587v-3.587zm3 17c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6zm2-6c0 1.104-.896 2-2 2s-2-.896-2-2 .896-2 2-2 2 .896 2 2z"/>
                                        </svg>
                                    </div>
                                    @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach

</section>
<img src="/frontend/assets/images/hr.png" alt="HR" class="hr"/>


