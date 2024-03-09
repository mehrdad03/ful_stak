@push('links')
    <link rel="stylesheet" href="/frontend/css/profile.css"/>
@endpush

<div class="row flex-nowrap container mx-auto">
        <!-- ====== sidebar ====== -->
    @include('livewire.client.profile.sidebar')

        <!-- ===== main content ===== -->
        <div class="col">
          <!-- main payment section -->
          <section>
            <!-- title -->
            <div
              class="mt-5 d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-md-center mb-3">
              <h4 class="text-primary d-flex align-items-center column-gap-2">
                <span></span>تاریخچه تراکنش ها
              </h4>
              <a
                href="#"
                class="d-flex align-items-center column-gap-2 instalink">
                <p class="text-primary m-0">همه تراکنش ها</p>
                <svg
                  width="25"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="text-primary">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                </svg>
              </a>
            </div>
            <!-- payment table -->
            <div class="bg-secondary text-white w-100 rounded-4">
              <!-- table title -->
              <div id="table">
                <!-- thead -->
                <div
                  class="thead d-flex flex-wrap flex-md-row fw-bold align-items-start align-items-md-center gap-3 justify-content-between m-md-4 p-2 p-md-4">
                  <p class="m-0">شماره پیگیری</p>
                  <p class="m-0">شرح تراکنش</p>
                  <p class="m-0">مبلغ</p>
                  <p class="m-0">ساعت</p>
                  <p class="m-0">تاریخ</p>
                </div>
                <!-- tbody -->
                <div class="mx-md-5 pb-3">
                  <!-- failed payment -->
                  <div
                    class="tr d-flex flex-wrap flex-md-nowrap flex-md-row align-items-start gap-3 align-items-md-center justify-content-between rounded-4 mb-3 p-2 p-md-3 bg-danger">
                    <p class="m-0">550055</p>
                    <p class="m-0">
                      خرید دوره لغو شد <span class="mx-5"></span>
                    </p>
                    <p class="m-0">800,000 تومان</p>
                    <p class="m-0">22:00</p>
                    <p class="m-0">1402/12/10</p>
                  </div>
                  <!-- success payment -->
                  <div
                    class="tr d-flex flex-wrap flex-md-nowrap flex-md-row align-items-start gap-3 align-items-md-center justify-content-between rounded-4 mb-3 p-2 p-md-3 bg-success">
                    <p class="m-0">550055</p>
                    <p class="m-0">
                      خرید با موفقیت انجام شد
                      <span class="mx-2 pb-1 border-bottom">جزئیات</span>
                    </p>
                    <p class="m-0">800,000 تومان</p>
                    <p class="m-0">22:00</p>
                    <p class="m-0">1402/12/10</p>
                  </div>
                  <!-- success payment -->
                  <div
                    class="tr d-flex flex-wrap flex-md-nowrap flex-md-row align-items-start gap-3 align-items-md-center justify-content-between rounded-4 mb-3 p-2 p-md-3 bg-success">
                    <p class="m-0">550055</p>
                    <p class="m-0">
                      خرید با موفقیت انجام شد
                      <span class="mx-2 pb-1 border-bottom">جزئیات</span>
                    </p>
                    <p class="m-0">800,000 تومان</p>
                    <p class="m-0">22:00</p>
                    <p class="m-0">1402/12/10</p>
                  </div>
                  <!-- success payment -->
                  <div
                    class="tr d-flex flex-wrap flex-md-nowrap flex-md-row align-items-start gap-3 align-items-md-center justify-content-between rounded-4 mb-3 p-2 p-md-3 bg-success">
                    <p class="m-0">550055</p>
                    <p class="m-0">
                      خرید با موفقیت انجام شد
                      <span class="mx-2 pb-1 border-bottom">جزئیات</span>
                    </p>
                    <p class="m-0">800,000 تومان</p>
                    <p class="m-0">22:00</p>
                    <p class="m-0">1402/12/10</p>
                  </div>
                  <!-- success payment -->
                  <div
                    class="tr d-flex flex-wrap flex-md-nowrap flex-md-row align-items-start gap-3 align-items-md-center justify-content-between rounded-4 mb-3 p-2 p-md-3 bg-success">
                    <p class="m-0">550055</p>
                    <p class="m-0">
                      خرید با موفقیت انجام شد
                      <span class="mx-2 pb-1 border-bottom">جزئیات</span>
                    </p>
                    <p class="m-0">800,000 تومان</p>
                    <p class="m-0">22:00</p>
                    <p class="m-0">1402/12/10</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
