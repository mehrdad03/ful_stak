<div class="my-5  text-center text-white px-2">
    <!-- Main Headline -->
    @php
        $title=explode('_',$course->title);
        $currentYear=date('Y');
    @endphp
    <h1 class="fw-bold text-end fs-2">
        {{@$title[0]}}
        <span class="me-2 text-primary">
        {{@$title[1]}}
        </span>
        {{@$title[2]}}
        |<span class="me-2 text-primary">{{@$currentYear}}</span>

    </h1>
    <!-- Subtitle -->
    <h2 class="my-4 text-end fw-light lh-base fs-6">
        {{$course->short_description}}
    </h2>
    <!-- Score and learners -->
    <section
        class="d-flex flex-column flex-lg-row justify-content-start align-items-center gap-4 fw-medium mb-5">
        <!-- score -->

        <p class="m-0">

            (
            <svg class="mb-1" width="30" height="17" viewBox="0 0 34 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.8 10.5C13.9005 10.5 11.55 8.14949 11.55 5.25C11.55 2.3505 13.9005 0 16.8 0C19.6995 0 22.05 2.3505 22.05 5.25C22.05 8.14949 19.6995 10.5 16.8 10.5Z"
                    fill="currentColor"></path>
                <path
                    d="M16.8 21C9.8826 21 8.4 20.2587 8.4 16.8C8.4 13.3413 9.8826 12.6 16.8 12.6C23.7174 12.6 25.2 13.3413 25.2 16.8C25.2 20.2587 23.7174 21 16.8 21Z"
                    fill="currentColor"></path>
                <path
                    d="M28.35 6.3C28.35 4.21451 26.687 2.1 24.15 2.1C23.5701 2.1 23.1 2.5701 23.1 3.15C23.1 3.7299 23.5701 4.2 24.15 4.2C25.393 4.2 26.25 5.23549 26.25 6.3C26.25 7.36451 25.393 8.4 24.15 8.4C23.5701 8.4 23.1 8.8701 23.1 9.45C23.1 10.0299 23.5701 10.5 24.15 10.5C26.687 10.5 28.35 8.38549 28.35 6.3Z"
                    fill="currentColor"></path>
                <path
                    d="M9.45 2.1C6.91305 2.1 5.25 4.21451 5.25 6.3C5.25 8.38549 6.91305 10.5 9.45 10.5C10.0299 10.5 10.5 10.0299 10.5 9.45C10.5 8.8701 10.0299 8.4 9.45 8.4C8.20696 8.4 7.35 7.36451 7.35 6.3C7.35 5.23549 8.20696 4.2 9.45 4.2C10.0299 4.2 10.5 3.7299 10.5 3.15C10.5 2.5701 10.0299 2.1 9.45 2.1Z"
                    fill="currentColor"></path>
                <path
                    d="M25.2 12.6C25.2 12.0201 25.6701 11.55 26.25 11.55C27.4155 11.55 28.4302 11.578 29.2926 11.6682C30.148 11.7576 30.9181 11.9139 31.5643 12.2054C32.2354 12.5081 32.7807 12.9613 33.1375 13.6167C33.4816 14.2487 33.6 14.9771 33.6 15.75C33.6 16.5271 33.4801 17.2303 33.1873 17.8373C32.8862 18.4619 32.4304 18.9252 31.8634 19.2492C30.8058 19.8535 29.3849 19.95 27.93 19.95C27.3501 19.95 26.88 19.4799 26.88 18.9C26.88 18.3201 27.3501 17.85 27.93 17.85C29.4151 17.85 30.3042 17.7215 30.8216 17.4258C31.0421 17.2998 31.1901 17.1444 31.2958 16.9252C31.4099 16.6885 31.5 16.3229 31.5 15.75C31.5 15.1729 31.4084 14.8325 31.2931 14.6208C31.1906 14.4325 31.0271 14.2669 30.7007 14.1196C30.3494 13.9611 29.8333 13.8361 29.0743 13.7568C28.3223 13.6782 27.3946 13.65 26.25 13.65C25.6701 13.65 25.2 13.1799 25.2 12.6Z"
                    fill="currentColor"></path>
                <path
                    d="M7.35 11.55C7.9299 11.55 8.4 12.0201 8.4 12.6C8.4 13.1799 7.9299 13.65 7.35 13.65C6.20545 13.65 5.27769 13.6782 4.52572 13.7568C3.76673 13.8361 3.25061 13.9611 2.89928 14.1196C2.57288 14.2669 2.40942 14.4325 2.30687 14.6208C2.19162 14.8325 2.1 15.1729 2.1 15.75C2.1 16.3229 2.19007 16.6885 2.30422 16.9252C2.40993 17.1444 2.55791 17.2998 2.77845 17.4258C3.29579 17.7215 4.18491 17.85 5.67 17.85C6.2499 17.85 6.72 18.3201 6.72 18.9C6.72 19.4799 6.2499 19.95 5.67 19.95C4.21509 19.95 2.79421 19.8535 1.73655 19.2492C1.16959 18.9252 0.713821 18.4619 0.41266 17.8373C0.11993 17.2303 0 16.5271 0 15.75C0 14.9771 0.118379 14.2487 0.462506 13.6167C0.819327 12.9613 1.36462 12.5081 2.03572 12.2054C2.68189 11.9139 3.45202 11.7576 4.3074 11.6682C5.16981 11.578 6.18455 11.55 7.35 11.55Z"
                    fill="currentColor"></path>
            </svg>

            شرکت کنندگان :<span class="text-primary me-1">{{number_format($studentsCount)}}</span> دانشجو )
        </p>
        <!-- Updated on -->
        <div class="d-flex justify-content-center fw-medium date">
            <p class="m-0">به روز شده در تاریخ: &nbsp;</p>
            <span id="date"></span>
        </div>
    </section>

    <!-- watch seasons -->
    <div class=" d-flex justify-content-between w-100 main-btn text-white fw-medium d-none d-lg-flex ">
        <a class="text-dark p-2 scroll-btn" href="#season">
            سرفصل های دوره
        </a>
        <a class="text-dark p-2 scroll-btn" href="#requirmnets">
            پیش نیاز ها
        </a>
        <a class="text-dark p-2 scroll-btn" href="#description">
            توضیحات دوره
        </a>
    </div>
</div>
