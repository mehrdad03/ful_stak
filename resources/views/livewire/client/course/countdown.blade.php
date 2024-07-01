@php
    $originalPrice = $course->price;
    $discountedPrice = $course->discount;
    $discountPercentage = ceil(((($originalPrice - $discountedPrice) / $originalPrice) * 100)/5)*5;
@endphp
<div class="countdown d-flex align-items-center justify-content-evenly" id="countdown">
    <div class="d-flex">
        <div class="countdown-item p-1 rounded fs-5">
            <span id="days"></span>
            <span>روز</span>
        </div>
        <span class="separator">:</span>
        <div class="countdown-item p-1 rounded fs-5">
            <span id="hours"></span>
            <span>ساعت</span>
        </div>
        <span class="separator">:</span>
        <div class="countdown-item p-1 rounded fs-5">
            <span id="minutes"></span>
            <span>دقیقه</span>
        </div>
        <span class="separator">:</span>
        <div class="countdown-item p-1 rounded fs-5">
            <span id="seconds"></span>
            <span>ثانیه</span>
        </div>
    </div>
    <span class="d-block text-center fs-6 m-0 discount-percentage align-content-center  rounded">
        <span class="text-white ">{{ number_format($discountPercentage) }}%</span>
    </span>

</div>

<div class="discount-price position-relative fw-bold mt-3">
    <span class="d-block text-center fs-3 m-0">{{number_format($course->price)}}</span>
</div>

@push('scripts')

    <script>
        // تاریخ و زمان پایان تخفیف
        var endTime = new Date("Jul 15, 2024 23:59:59").getTime();

        // تابع کمکی برای افزودن صفر به اعداد کمتر از 10
        function padZero(num) {
            return num < 10 ? "0" + num : num;
        }

        // به‌روزرسانی شمارنده معکوس هر ثانیه
        var countdownFunction = setInterval(function () {
            // زمان کنونی
            var now = new Date().getTime();

            // فاصله بین زمان کنونی و زمان پایان
            var distance = endTime - now;

            // محاسبه روز، ساعت، دقیقه و ثانیه باقی‌مانده
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // نمایش زمان باقی‌مانده
            document.getElementById("days").innerHTML = padZero(days);
            document.getElementById("hours").innerHTML = padZero(hours);
            document.getElementById("minutes").innerHTML = padZero(minutes);
            document.getElementById("seconds").innerHTML = padZero(seconds);

            // اگر شمارنده معکوس به پایان رسید
            if (distance < 0) {
                clearInterval(countdownFunction);
                document.getElementById("countdown").innerHTML = "تخفیف به پایان رسید!";
            }
        }, 1000);
    </script>
@endpush
