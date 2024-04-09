@push('links')
    <link rel="stylesheet" href="/frontend/css/singleCourse.css"/>
    <link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css"/>
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
            <!-- Course Season -->
            @include('livewire.client.course.season')
            <!-- course Needs -->
            @include('livewire.client.course.requirments')
            <!-- Course Explain -->
            @include('livewire.client.course.description')
            <!-- ======= Course Slider ======= -->
            @include('livewire.client.course.courses-slider')
            <!-- ======= Q & A ======= -->
            @include('livewire.client.course.qa')


            <!-- ======= video modal ======= -->
            @include('livewire.client.course.video-modal')

        </div>
        <!-- ========= Desktop Side Bar ========= -->
        @include('livewire.client.course.desktop-sidebar')
    </div>
</div>
@push('scripts')
    <script src="/frontend/js/swiper-bundle.min.js"></script>
    <script src="/frontend/js/singleCourse.js"></script>
    <script>
        $(document).ready(function () {

            $('.videoModal').on('click', function () {
                var modal = $('#videoModal');
                var dataPath = $(this).data('path');
                var dataTitle = $(this).data('title');
                modal.find('video').attr('src', dataPath)
                modal.find('h5').html(dataTitle)

            });
        });

    </script>

@endpush
