@push('links')
    <link rel="stylesheet" href="/frontend/css/singleCourse.css" />
    <link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css" />
@endpush
<div>

    <!-- Crumble tabs -->
    <livewire:client.course.crumble/>
    <!-- video on mobile -->
    <livewire:client.course.mobile-video/>
    <!-- Main Row -->
    <div class="row flex-column-reverse flex-lg-row">
        <!-- ========= Main Content =========-->
        <div id="mainContent" class="col col-lg-8">
            <!-- Title Text -->

            <livewire:client.course.title   :title="$course->title" :short_description="$course->short_description" />
            <!-- mobile version Course Detail -->
            <livewire:client.course.mobile-course-detail/>
            <!-- mobile version Course Master Box -->
            <livewire:client.course.mobile-about-master/>
            <!-- mobile version Subscription -->
            <livewire:client.course.mobile-subscription/>
            <!-- Course Features -->
            <livewire:client.course.features :what_you_will_learn="$course->what_you_will_learn"/>

            <!-- hr -->
            <img src="/frontend/assets/images/hr.png" alt="HR" class="hr" />

            <!-- Course Season -->
            <livewire:client.course.season/>

            <!-- hr -->
            <img src="/frontend/assets/images/hr.png" alt="HR" class="hr" />

            <!-- course Needs -->

            <livewire:client.course.requirments/>
            <!-- hr -->
            <img src="/frontend/assets/images/hr.png" alt="HR" class="hr" />

            <!-- Course Explain -->
            <livewire:client.course.description/>

            <!-- hr -->
            <img src="/frontend/assets/images/hr.png" alt="HR" class="hr" />

            <!-- ======= Course Slider ======= -->
            <livewire:client.course.courses-slider/>

            <!-- hr -->
            <img src="/frontend/assets/images/hr.png" alt="HR" class="hr" />

            <!-- ======= Q & A ======= -->
            <livewire:client.course.qa/>
        </div>

        <!-- ========= Desktop Side Bar ========= -->
        <livewire:client.course.desktop-sidebar/>
    </div>
</div>
@push('scripts')
    <script src="/frontend/js/swiper-bundle.min.js"></script>
    <script src="/frontend/js/singleCourse.js"></script>
@endpush
