<aside id="sideBar" class="d-none d-lg-block col col-lg-4 sticky-top">

    <div class="courseDet text-white pb-5 overflow-hidden">
        <!-- ======after purchase ====== -->
        @if($checkPurchase)
            @include('livewire.client.course.circle-progress')
        @endif
        <!-- ======after purchase ====== -->

        @include('livewire.client.course.desktop-video-course')
        @include('livewire.client.course.features-course')

        <!-- ======before purchase ====== -->
        @if(!$checkPurchase)
            @include('livewire.client.course.price-course')
        @endif
        <!-- ======before purchase ====== -->

    </div>

    @include('livewire.client.course.source-code-support-btns')


    <!-- Course Master Box -->
    @include('livewire.client.course.master-of-course')


    @push('scripts')
        <script src="/frontend/js/circle-progress.min.js"></script>
        <script>
            $(document).ready(function () {
                var progress = $('#progress-circle').data('progress');

                $('#progress-circle').circleProgress({
                    value: progress / 100, // مقدار پیشرفت به عددی از 0.0 تا 1.0
                    size: 200,
                    fill: {
                        gradient: ['#23bf65', '#23bf65'] // رنگ پر شدن دایره (از قرمز به قرمز تیره)
                    },
                    emptyFill: 'rgba(255, 255, 255, 0)', // رنگ پس‌زمینه دایره (خالی)
                    startAngle: -Math.PI / 2, // زاویه شروع (12 o'clock position)
                    thickness: 12, // ضخامت progress bar
                    lineCap: 'round', // شکل انتهای progress bar (round or square)
                    animation: {duration: 1400, easing: 'circleProgressEasing'}, // مدت زمان و انیمیشن
                });

                /*$('#progress-info').html('Progress: ' + progress + '%');*/
            });
        </script>

    @endpush

</aside>
