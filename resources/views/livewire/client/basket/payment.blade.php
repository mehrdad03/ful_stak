<div class="col-12 col-md-6 col-lg-4 ">
    <div class="payment">
        <!-- title -->
        <div class="d-flex align-items-center justify-content-around">
            <h2 class="title-text">اطلاعات پرداخت</h2>

        </div>
        <!-- discount code -->
        <div class="my-2">
            <p class="m-0 text-white fw-medium">کد تخفیف</p>
            <div
                class="d-flex align-content-center justify-content-around my-2">
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20 12V22H4V12"
                        stroke="#23BF65"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M22 7H2V12H22V7Z"
                        stroke="#23BF65"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M12 22V7"
                        stroke="#23BF65"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M12 7H7.5C6.83696 7 6.20107 6.73661 5.73223 6.26777C5.26339 5.79893 5 5.16304 5 4.5C5 3.83696 5.26339 3.20107 5.73223 2.73223C6.20107 2.26339 6.83696 2 7.5 2C11 2 12 7 12 7Z"
                        stroke="#23BF65"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M12 7H16.5C17.163 7 17.7989 6.73661 18.2678 6.26777C18.7366 5.79893 19 5.16304 19 4.5C19 3.83696 18.7366 3.20107 18.2678 2.73223C17.7989 2.26339 17.163 2 16.5 2C13 2 12 7 12 7Z"
                        stroke="#23BF65"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <input
                    type="text"
                    placeholder="کد تخفیف را وارد کنید"
                    class="bg-secondary rounded-2 w-75 pe-2 text-white" />
                <button class="bg-primary text-white px-3 py-1 rounded-2">
                    ثبت
                </button>
            </div>
        </div>
        <!-- price -->
        <div class="price py-4 my-4">
            <!-- Total -->
            <div class="d-flex align-items-center justify-content-between">
                <p class="text-white fw-bold">جمع کل</p>
                <p class="text-white fw-semibold">
                    {{number_format($userBasketTotalPrice)}} <span class="me-2 text-primary fw-medium">تومان</span>
                </p>
            </div>
            <!-- Discount -->
            <div class="d-flex align-items-center justify-content-between">
                <p class="text-white fw-medium"> تخفیف</p>
                <p class="text-white fw-semibold">
                    0 <span class="me-2 text-primary fw-medium">تومان</span>
                </p>
            </div>
        </div>

        <!-- have to pay -->
        <div class="d-flex align-items-center justify-content-between">
            <p class="text-white fw-bold">مبلغ قابل پرداخت</p>
            <p class="text-white fw-semibold">
                {{number_format($userBasketTotalPrice)}} <span class="me-2 text-primary fw-medium">تومان</span>
            </p>
        </div>
        <button
            type="button"
            class="w-100 bg-primary text-white fw-bolder py-2 rounded-5">
            پرداخت
        </button>
    </div>
</div>
