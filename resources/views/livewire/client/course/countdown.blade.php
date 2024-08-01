<div class=" d-flex justify-content-between w-100 discount-box text-white fw-medium align-items-center  py-2 px-5 mb-4">
    <div><img src="/images/IncredibleOffer.svg" alt=""></div>
    <div class="countdown d-flex align-items-center justify-content-evenly" >
        <div class="countdown-item rounded p-1 fs-4">
            <span class="days"></span>
            <span>روز</span>
        </div>
        <span class="separator">:</span>
        <div class="countdown-item rounded p-1 fs-4">
            <span class="hours"></span>
            <span>ساعت</span>
        </div>
        <span class="separator">:</span>
        <div class="countdown-item rounded p-1 fs-4">
            <span class="minutes"></span>
            <span>دقیقه</span>
        </div>
        <span class="separator">:</span>
        <div class="countdown-item rounded p-1 fs-4">
            <span class="seconds"></span>
            <span>ثانیه</span>
        </div>

    </div>
</div>
<div class="w-100">
    <p>ظرفیت باقیمانده : <span>6</span> </p>
    <div class="progress-container mb-5">
        <div class="progress-bar" style="width: 94%;"></div>
    </div>
</div>




@push('scripts')

    <script>
        // تاریخ و زمان پایان تخفیف
        var endTime = new Date("Aug 3, 2024 23:59:59").getTime();

        // تابع کمکی برای افزودن صفر به اعداد کمتر از 10
        function padZero(num) {
            return num < 10 ? "0" + num : num;
        }

        // به‌روزرسانی شمارنده معکوس هر ثانیه
        var countdownFunction = setInterval(function() {
            // زمان کنونی
            var now = new Date().getTime();

            // فاصله بین زمان کنونی و زمان پایان
            var distance = endTime - now;

            // محاسبه روز، ساعت، دقیقه و ثانیه باقی‌مانده
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // دریافت تمام عناصر شمارنده
            var countdowns = document.querySelectorAll('.countdown');

            // نمایش زمان باقی‌مانده برای تمام شمارنده‌ها
            countdowns.forEach(function(countdown) {
                countdown.querySelector('.days').innerHTML = padZero(days);
                countdown.querySelector('.hours').innerHTML = padZero(hours);
                countdown.querySelector('.minutes').innerHTML = padZero(minutes);
                countdown.querySelector('.seconds').innerHTML = padZero(seconds);
            });

            // اگر شمارنده معکوس به پایان رسید
            if (distance < 0) {
                clearInterval(countdownFunction);
                countdowns.forEach(function(countdown) {
                    countdown.innerHTML = "تخفیف به پایان رسید!";
                });
            }
        }, 1000);
    </script>
@endpush
