@push('links')
    <link rel="stylesheet" href="/frontend/css/pricing.css"/>
@endpush

<div>
    <!-- Modal -->
    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button
                    type="button"
                    class="btn-close me-auto p-2 my-3 mx-3 d-block d-lg-none"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="modal-body">
                    <!-- Header -->
                    <div
                        class="modalHeader d-flex justify-content-center align-items-center gap-3 m-4">
                        <img
                            src="/frontend/assets/images/bag.png"
                            alt="bag icon"
                            class="d-none d-lg-block"/>
                        <h3 class="text-white fw-medium">سبد خرید شما</h3>
                        <img
                            src="/frontend/assets/images/bag.png"
                            alt="bag icon"
                            class="d-none d-lg-block"/>
                    </div>
                    <!-- disCount code -->
                    <div
                        class="row flex-column flex-lg-row align-items-center justify-content-center">
                        <div class="col col-lg-6 text-white me-2">
                            <h4>عنوان خرید:</h4>
                            <p>خرید اشتراک سه ماهه آموزش های فرانت اند</p>
                            <div
                                class="refCode d-none d-md-flex justify-content-between align-items-center">
                                <span>کد تخفیف :</span>
                                <input type="text"/>
                                <button type="button" class="main-btn px-2">ثبت</button>
                            </div>
                        </div>
                        <div
                            class="col col-lg-5 d-flex justify-content-center justify-content-lg-end mt-3 mt-lg-0">
                            <img
                                src="/frontend/assets/images/frontMac.png"
                                alt="mac"
                                class="w-75"/>
                        </div>
                    </div>
                    <!-- Price -->
                    <div
                        class="prices row align-items-center justify-content-between text-white fs-5 mt-4 px-4">
                        <!-- Purchase -->
                        <div class="d-flex justify-content-between align-items-center">
                            <p>مبلغ خرید:</p>
                            <p>
                                ۵۰۰,۰۰۰
                                <span class="text-primary fw-medium">&nbsp;تومان</span>
                            </p>
                        </div>
                        <!-- Discount -->
                        <div class="d-flex justify-content-between align-items-center">
                            <p>تخفیف:</p>
                            <p>
                                ١۰۰,۰۰۰
                                <span class="text-primary fw-medium">&nbsp;تومان</span>
                            </p>
                        </div>
                        <!-- Total -->
                        <div class="d-flex justify-content-between align-items-center">
                            <p>مبلغ نهایی:</p>
                            <p>
                                ۴۰۰,۰۰۰
                                <span class="text-primary fw-medium">&nbsp;تومان</span>
                            </p>
                        </div>
                    </div>
                    <!-- Payment -->
                    <div class="d-flex flex-column justify-content-center my-4">
                        <!-- mobile Discount -->
                        <div
                            class="refCode d-flex justify-content-between align-items-center mx-4 mb-2 d-md-none">
                            <span>کد تخفیف :</span>
                            <input type="text"/>
                            <button type="button" class="main-btn px-2">ثبت</button>
                        </div>

                        <a
                            href="#"
                            class="text-white main-btn px-3 py-2 fw-bold text-center"
                        >پرداخت</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Stack Title -->
    <div class="position-relative">
        <div class="container d-flex justify-content-center">
            <h2 class="text-center d-inline mx-auto px-5 py-4 text-primary">
                اشتراک ویژه دسترسی به آموزش ها
            </h2>
        </div>
        <!-- Stack Selection -->
        <div
            class="container-fluid d-flex justify-content-between align-items-start my-4">
            <img
                src="/frontend/assets/images/introBG.png"
                alt="dot"
                class="d-none d-lg-block"/>
            <ul
                class="d-flex gap-3 px-4 py-4 stack_btns text-white fw-medium stackBtn">
                <li class="px-3 py-2">فول استک</li>
                <li class="px-3 py-2">بک اند</li>
                <li class="px-3 py-2 tab">فرانت اند</li>
            </ul>
            <img
                src="/frontend/assets/images/introBG.png"
                alt="dot"
                class="d-none d-lg-block"/>
        </div>
    </div>
    <!-- Stack Content -->
    <div
        class="container row flex-column flex-lg-row align-items-center mx-auto mt-5">
        <div class="col col-lg-6">
            <h4 class="fw-bold text-white">
                اشتراک دسترسی به آموزش های
                <span class="text-primary">فرانت اند</span>
            </h4>
            <p class="text-white fw-medium">
                با تهیه اشتراک در <span class="text-primary">Fullstack.dev</span>،
                شما در معرکه توسعه وب شرکت می‌کنید، جایی که مهارت‌های خود را با
                آموزش‌های کاربردی تقویت کرده و به تجربه ای گسترده در دنیای فرانت اند
                دست پیدا می‌کنید. با محتوای اختصاصی و تمرینات عملی، ما به شما این
                امکان را می‌دهیم تا به چالش‌های توسعه وب پیشرفته بپردازید و با
                اطمینان به دنیای فرانت اند خوش‌آمدید بگویید. <br/>
                <span class="text-primary"
                >آموزش با ما، آغازی تازه برای سفر شما به دنیای جذاب توسعه وب
              است</span
                >
            </p>
        </div>
        <div class="col col-lg-6 frontImg">
            <img src="/frontend/assets/images/frontMac.png" alt="front mac"/>
        </div>
    </div>
    <!-- Pricing Title -->
    <div class="price_title d-flex justify-content-center">
        <img
            src="/frontend/assets/images/pricingArrow.png"
            alt="pricing arrow"
            class="d-none d-md-block"/>
        <h3 class="fs-1">پیشنهادی</h3>
        <img
            src="/frontend/assets/images/pricingArrow.png"
            alt="pricing arrow"
            class="d-none d-md-block"/>
    </div>
    <!-- Pricing Card -->
    <div class="container mx-auto row priceCard gap-5 justify-content-center">
        <div class="col col-md-6 col-lg-3 d-flex flex-column mt-lg-5">
            <!-- Price -->
            <div
                class="titleCard text-white d-flex justify-content-start align-items-center mx-auto">
                <span class="p-2 fw-bold">سه ماهه</span>
                <p class="m-0 mx-3">
                    ۵۰۰،۰۰۰ <span class="text-primary fw-bold">&nbsp;تومان</span>
                </p>
            </div>
            <!-- == Property == -->
            <div
                class="d-flex align-items-center justify-content-around my-4 flex-grow-1">
                <div class="d-flex flex-column m-3 propertyFont">
                    <!-- first -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی اول</p>
                    </div>
                    <!-- second -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی دوم</p>
                    </div>
                    <!-- third -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی سوم</p>
                    </div>
                    <!-- fourth -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی چهارم</p>
                    </div>
                    <!-- fifth -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی پنجم</p>
                    </div>
                    <!-- sixth -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی ششم</p>
                    </div>
                </div>
                <!-- img -->
                <div>
                    <img src="/frontend/assets/images/3month.png" alt="3 month image"/>
                </div>
            </div>
            <div
                class="d-flex align-items-center justify-content-center mb-3 flex-shrink-1">
                <button
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    class="main-btn text-white px-3 py-2">
                    تهیه اشتراک
                </button>
            </div>
        </div>
        <div class="col col-md-6 mt-2 mt-lg-0 col-lg-4 d-flex flex-column">
            <!-- Suggestions -->
            <div class="mb-4 mx-auto p-3 suggest">
                <p class="text-white fw-medium m-0">
                    ماهانه <span class="text-primary">۹۵،۰۰۰</span> تومان ویژه
                    <span class="text-primary">اعضای جدید</span>
                </p>
            </div>
            <!-- Price -->
            <div
                class="titleCard text-white d-flex justify-content-start align-items-center mx-auto mt-1">
                <span class="p-2 fw-bold">شش ماهه</span>
                <p class="m-0 mx-3">
                    ۷۰۰،۰۰۰ <span class="text-primary fw-bold">&nbsp;تومان</span>
                </p>
            </div>
            <!-- == Property == -->
            <div
                class="d-flex align-items-center justify-content-around my-4 flex-grow-1">
                <div class="d-flex flex-column m-3 propertyFont">
                    <!-- first -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی اول</p>
                    </div>
                    <!-- second -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی دوم</p>
                    </div>
                    <!-- third -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی سوم</p>
                    </div>
                    <!-- fourth -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی چهارم</p>
                    </div>
                    <!-- fifth -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی پنجم</p>
                    </div>
                    <!-- sixth -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی ششم</p>
                    </div>
                </div>
                <!-- img -->
                <div>
                    <img src="/frontend/assets/images/6month.png" alt="6 month image"/>
                </div>
            </div>
            <div
                class="d-flex align-items-center justify-content-center mb-3 flex-shrink-1">
                <button
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    class="main-btn text-white px-3 py-2">
                    تهیه اشتراک
                </button>
            </div>
        </div>
        <div class="col col-md-6 col-lg-3 d-flex flex-column mt-lg-5">
            <!-- Price -->
            <div
                class="titleCard text-white d-flex justify-content-start align-items-center mx-auto">
                <span class="p-2 fw-bold">یک ماهه</span>
                <p class="m-0 mx-3">
                    ۳۰۰،۰۰۰ <span class="text-primary fw-bold">&nbsp;تومان</span>
                </p>
            </div>
            <!-- == Property == -->
            <div
                class="d-flex align-items-center justify-content-around my-4 flex-grow-1">
                <div class="d-flex flex-column m-3 propertyFont">
                    <!-- first -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی اول</p>
                    </div>
                    <!-- second -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی دوم</p>
                    </div>
                    <!-- third -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی سوم</p>
                    </div>
                    <!-- fourth -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی چهارم</p>
                    </div>
                    <!-- fifth -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی پنجم</p>
                    </div>
                    <!-- sixth -->
                    <div class="d-flex">
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.666 3.49756L5.254 9.90951L2.33948 6.99499"
                                    stroke="#23BF65"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p class="text-white fw-medium mx-1">ویژگی ششم</p>
                    </div>
                </div>
                <!-- img -->
                <div>
                    <img src="/frontend/assets/images/1month.png" alt="1 month image"/>
                </div>
            </div>
            <div
                class="d-flex align-items-center justify-content-center mb-3 flex-shrink-1">
                <div
                    class="d-flex align-items-center justify-content-center mb-3 flex-shrink-1">
                    <button
                        type="button"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal"
                        class="main-btn text-white px-3 py-2">
                        تهیه اشتراک
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script src="/frontend/js/pricing.js"></script>
@endpush
