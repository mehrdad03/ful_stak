<div class="my-5  text-center text-white px-2">
    <!-- Main Headline -->
    @php
    $title=explode('_',$title);
    $currentYear=date('Y');
 @endphp
    <h1 class="fw-bold text-end">
        {{$title[0]}}
        <span class="text-primary">{{$title[1]}}</span>
        {{$title[2]}}
        |<span class="me-2 text-primary">{{$currentYear}}</span>

    </h1>
    <!-- Subtitle -->
    <h4 class="my-4 text-end fw-light lh-base fs-5">
        {{$short_description}}
    </h4>
    <!-- Score and learners -->
    <section
        class="d-flex flex-column flex-lg-row justify-content-start align-items-center gap-4 fw-medium mb-5">
        <!-- score -->

        <p class="m-0">
            (شرکت کنندگان :<span class="text-primary me-1">1100</span> دانشجو )
        </p>
        <!-- Updated on -->
        <div class="d-flex justify-content-center fw-medium date">
            <p class="m-0">به روز شده در تاریخ: &nbsp;</p>
            <span id="date"></span>
        </div>
    </section>

    <!-- watch seasons -->
    <a href="#" class="main-btn text-white px-2 px-lg-4 py-2 fw-medium"
    >مشاهده سرفصل های دوره</a>
</div>
