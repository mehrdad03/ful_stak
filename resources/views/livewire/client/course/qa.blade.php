<section id="questions">
    <h3 class="text-primary fs-2 mb-5">پرسش و پاسخ</h3>
    <!-- btns -->
    <div class="d-flex justify-content-center column-gap-3">
        <button
            class="text-white main-btn d-flex px-3 py-2 rounded-5 addQ">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="qIcon">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            <p class="m-0">طرح سوال جدید</p>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="qIcon">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </button>
        <button
            class="text-white bg-secondary px-4 py-2 rounded-5 closeQ">
            دنبال کردن نظرات
        </button>
    </div>

    <!-- New Question -->
    <div class="newQ">
        <!-- title -->
        <div
            class="d-flex justify-content-center column-gap-2 border-bottom pb-4">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="qIcon text-primary">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
            </svg>
            <p class="m-0 text-white">
                سوال خود را میتوانید در کادر پایین مطرح کنید ، پاسخ به سوال
                شما در سریع ترین زمان ممکن ارسال خواهد شد
            </p>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="qIcon text-primary">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
            </svg>
        </div>
        <!-- Firstname and Lastname -->
        <form action="#">
            <div class="d-flex text-center w-100 my-4">
                <!-- first name -->
                <div class="text-white w-50 d-flex flex-column px-5">
                    <label for="firstName">نام:</label>
                    <input type="text" class="py-2" />
                </div>
                <!-- last Name -->
                <div class="text-white w-50 d-flex flex-column px-5">
                    <label for="lastName">نام خانوادگی:</label>
                    <input type="text" class="py-2" />
                </div>
            </div>
            <!-- Email -->
            <div class="text-white w-100 d-flex flex-column px-5">
                <label for="email" class="text-center mt-3">ایمیل:</label>
                <input type="email" class="py-2" />
            </div>
            <!-- Question -->
            <div class="text-white w-100 d-flex flex-column px-5">
                <label for="question" class="my-3">سوال:</label>
                <textarea
                    name="question"
                    id=""
                    cols="30"
                    rows="10"></textarea>
            </div>

            <!-- buttons -->
            <div
                class="w-100 mt-5 d-flex justify-content-center column-gap-3">
                <button
                    class="text-white bg-danger px-4 py-1 rounded-4 closeQ"
                    type="button">
                    انصراف
                </button>
                <button class="main-btn text-white px-4 py-1" type="submit">
                    ثبت
                </button>
            </div>
        </form>
    </div>

    <!-- question -->
    <div class="mt-5 question">
        <div
            class="d-flex justify-content-between align-items-center px-1 px-lg-4 pb-4 border-bottom">
            <div class="d-flex align-items-center column-gap-3">
                <img
                    src="/frontend/assets/images/master.jpg"
                    alt="avatar"
                    class="avatar rounded-5" />
                <div>
                    <h6 class="text-white m-0">متین حسن کاویاری</h6>
                    <p class="m-0 text-white-50">یک هفته پیش</p>
                </div>
            </div>
            <button class="main-btn text-white px-2 px-lg-5 py-1">
                پاسخ
            </button>
        </div>
        <p class="m-0 pt-3 p-lg-5 text-white">
            سلام وقتتون بخیر <br />
            جاوا اسکریپت چیه و چه کاربردی داره؟
        </p>
    </div>
    <!-- Answer Border -->
    <img
        src="/frontend/assets/images/ans.png"
        alt="answer"
        class="ansBorder" />
    <!-- answer -->
    <div class="answer bg-primary btn-innerShadow rounded-4 p-1 p-lg-4 w-75">
        <div
            class="d-flex justify-content-between align-items-center px-4 pb-4 border-bottom">
            <div class="d-flex align-items-center column-gap-3">
                <img
                    src="/frontend/assets/images/master.jpg"
                    alt="avatar"
                    class="avatar rounded-5" />
                <div>
                    <h6 class="text-white m-0">مهرداد داداشی</h6>
                    <p class="m-0 text-white-50">یک هفته پیش</p>
                </div>
            </div>
            <button class="main-btn text-white px-2 px-lg-5 py-1">
                پاسخ
            </button>
        </div>
        <p class="m-0 p-3 text-white">
            جاوا اسکریپت یک زبان برنامه‌نویسی کلاینت-ساید می‌باشد که برای
            تعامل با وبسایت‌ها و ایجاد ویژگی‌های پویا در صفحات وب به کار
            می‌رود. این زبان به صورت اصلی در مرورگرها اجرا می‌شود و می‌تواند
            DOM (مدل اسناد شیء) را تغییر دهد و رفتارهای کاربر را کنترل کند.
        </p>
    </div>
    <!-- Answer Border -->
    <img
        src="/frontend/assets/images/ans.png"
        alt="answer"
        class="ansBorder" />
    <!-- Question answer -->
    <div class="mt-0 question">
        <div
            class="d-flex justify-content-between align-items-center px-1 px-lg-4 pb-4 border-bottom">
            <div class="d-flex align-items-center column-gap-3">
                <img
                    src="/frontend/assets/images/master.jpg"
                    alt="avatar"
                    class="avatar rounded-5" />
                <div>
                    <h6 class="text-white m-0">متین حسن کاویاری</h6>
                    <p class="m-0 text-white-50">یک هفته پیش</p>
                </div>
            </div>
            <button class="main-btn text-white px-2 px-lg-5 py-1">
                پاسخ
            </button>
        </div>
        <p class="m-0 pt-3 p-lg-5 text-white">
            سلام وقتتون بخیر <br />
            جاوا اسکریپت چیه و چه کاربردی داره؟
        </p>
    </div>
</section>
