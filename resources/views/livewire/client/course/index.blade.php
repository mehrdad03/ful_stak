@push('links')
    <link rel="stylesheet" href="/frontend/css/singleCourse.css"/>
    <link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css"/>
    @php
        $seconds = $courseTotalDuration; // تعداد ثانیه‌های ویدیو

        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds % 3600) / 60);
        $seconds = $seconds % 60;

        // نمایش با فرمت ساعت:دقیقه:ثانیه
       $formattedTime = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);

        $slug = strtolower($course->category->url_slug);
          $keyword = strtolower('frontend');
          $telegram_group='';

          // بررسی وجود کلمه کلیدی در اسلاگ
          if (strpos($slug, 'frontend')) {
                   $telegram_group='https://t.me/+hRwjhLGAHNJkZWFk';
          } elseif( strpos($slug, 'backend')) {
             $telegram_group='https://t.me/+mgqbUiNo-UY0YzM8';
          }

    @endphp
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
        document.addEventListener('DOMContentLoaded', function () {
            var video = document.getElementById('videoPlayer');

            if (video) {
                video.addEventListener('ended', function () {
                    completeLesson();
                });

                video.addEventListener('timeupdate', function () {
                    // Check if the remaining time is 20 seconds or less
                    if (video.duration - video.currentTime <= 20) {
                    @this.call('completeLesson')
                        ;
                        // Remove the event listener to prevent multiple calls
                        video.removeEventListener('timeupdate', arguments.callee);
                    }
                });
            }
        });
    </script>
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

        $(document).ready(function () {

            $('#videoModal').on('hide.bs.modal', function () {
                var video = document.getElementById('videoPlayer');
                video.pause();
            });
        });


        window.addEventListener('completeLesson', function (event) {
            completeLesson()
        })

        function completeLesson() {

            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'جلسه تکمیل شد',
                showConfirmButton: false,
                color: '#fff',
                background: '#20222F',

                timer: 3000
            })
        }


    </script>

@endpush
