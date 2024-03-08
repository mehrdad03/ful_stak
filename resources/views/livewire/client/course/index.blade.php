@push('links')
    <link rel="stylesheet" href="/frontend/css/singleCourse.css" />
    <link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css" />
@endpush
<div>
    <!-- Crumble tabs -->
    @include('livewire.client.course.crumble')
    <!-- video on mobile -->
    @include('livewire.client.course.mobile-video')
    <!-- Main Row -->
    <div class="row flex-column-reverse flex-lg-row">
        <!-- ========= Main Content =========-->
        <div id="mainContent" class="col col-lg-8">
            <!-- Title Text -->
            @include('livewire.client.course.title')
            <!-- mobile version Course Detail -->
            @include('livewire.client.course.mobile-course-detail')
            <!-- mobile version Course Master Box -->
            @include('livewire.client.course.mobile-about-master')
            <!-- mobile version Subscription -->
            @include('livewire.client.course.mobile-subscription')
            <!-- Course Features -->
            @include('livewire.client.course.features')
            <img src="/frontend/assets/images/hr.png" alt="HR" class="hr" />
            <!-- Course Season -->
            @include('livewire.client.course.season')
            <img src="/frontend/assets/images/hr.png" alt="HR" class="hr" />
            <!-- course Needs -->
            @include('livewire.client.course.requirments')
            <img src="/frontend/assets/images/hr.png" alt="HR" class="hr" />
            <!-- Course Explain -->
            @include('livewire.client.course.description')
            <img src="/frontend/assets/images/hr.png" alt="HR" class="hr" />
            <!-- ======= Course Slider ======= -->
            @include('livewire.client.course.courses-slider')
            <img src="/frontend/assets/images/hr.png" alt="HR" class="hr" />
            <!-- ======= Q & A ======= -->
            @include('livewire.client.course.qa')
        </div>
        <!-- ========= Desktop Side Bar ========= -->
        @include('livewire.client.course.desktop-sidebar')
    </div>
</div>
@push('scripts')
    <script src="/frontend/js/swiper-bundle.min.js"></script>
    <script src="/frontend/js/singleCourse.js"></script>
@endpush
