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
