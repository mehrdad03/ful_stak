@push('links')
    <link rel="stylesheet" href="/frontend/css/profile.css"/>
@endpush

<div class="row container p-lg-0 mx-auto mx-lg-0">
        <!-- ====== sidebar ====== -->
    @include('livewire.client.profile.sidebar')

        <!-- ====== main content ====== -->
        <div class="col col-lg-9 p-0 px-lg-4">
                    <!-- top menu -->
                    @include('livewire.client.profile.status')

          <!-- course Type btn -->
          <div
            class="coursbtn w-50 mx-auto rounded-4 py-3 px-4 my-5 d-flex flex-wrap gap-3 justify-content-around align-items-center bg-secondary">
            <button
              type="button"
              class="px-4 py-3 active rounded-4 d-flex justify-content-center align-items-center column-gap-2">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M2 3H8C9.06087 3 10.0783 3.42143 10.8284 4.17157C11.5786 4.92172 12 5.93913 12 7V21C12 20.2044 11.6839 19.4413 11.1213 18.8787C10.5587 18.3161 9.79565 18 9 18H2V3Z"
                  stroke="#23BF65"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M22 3H16C14.9391 3 13.9217 3.42143 13.1716 4.17157C12.4214 4.92172 12 5.93913 12 7V21C12 20.2044 12.3161 19.4413 12.8787 18.8787C13.4413 18.3161 14.2044 18 15 18H22V3Z"
                  stroke="#23BF65"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              <p class="m-0 text-white">پرسش های جاری</p>
            </button>
            <button
              type="button"
              class="px-4 py-3 rounded-4 d-flex justify-content-center align-items-center column-gap-2">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12 19L19 12L22 15L15 22L12 19Z"
                  stroke="#23BF65"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M18 13L16.5 5.5L2 2L5.5 16.5L13 18L18 13Z"
                  stroke="#23BF65"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M2 2L9.586 9.586"
                  stroke="#23BF65"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M11 13C12.1046 13 13 12.1046 13 11C13 9.89543 12.1046 9 11 9C9.89543 9 9 9.89543 9 11C9 12.1046 9.89543 13 11 13Z"
                  stroke="#23BF65"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>

              <p class="m-0 text-white">پاسخ</p>
            </button>
          </div>

          <!-- === if it wasn't any question === -->
          <!-- <div
                              class="w-100 d-flex flex-column justify-content-center align-items-center gap-3">
                              <img
                                src="/frontend/assets/images/nothing.png"
                                alt="no question"
                                class="w-25" />

                              <h2 class="text-secondary fw-bolder">هیچ نتیجه ای یافت نشد</h2>
                            </div> -->

          <!-- ==== Questions ==== -->
          <section>
            <!-- question -->
            <div class="userQ  rounded-4 bg-secondary mb-4 p-lg-4 p-3">
              <div class="d-flex flex-column flex-md-row gap-3 justify-content-between align-items-center border-bottom pb-4">
                <div class="d-flex align-items-center column-gap-2">
                  <img
                    src="../../assets/images/master.jpg"
                    alt="user profile image"
                    width="50"
                    height="50"
                    class="rounded-5" />
                  <div class="d-flex flex-column">
                    <p class="text-white fw-bold m-0">متین حسن کاوریاری</p>
                    <p class="text-white-50 m-0">یک هفته پیش</p>
                  </div>
                </div>
                <button class="bg-primary text-white px-3 py-2 rounded-5">مشاهده گفت و گو</button>
              </div>
              <!-- question text -->
                <p class="text-white mt-3 m-0 fw-semibold p-md-4">
                  سلام وقتتون بخیر، جاوا اسکریپت چیست و چه کاربردی داره؟
                </p>

                <div class="qCourse w-50 mx-auto mt-4 bg-dark rounded-3 p-2 text-center">
                  <p class="text-white m-0">این پرسش مربوط به بخش : <span class="text-primary">آموزش جاوا اسگریپت</span></p>
                </div>
            </div>
            <!-- question -->
            <div class="userQ  rounded-4 bg-secondary mb-4 p-lg-4 p-3">
              <div class="d-flex flex-column flex-md-row gap-3 justify-content-between align-items-center border-bottom pb-4">
                <div class="d-flex align-items-center column-gap-2">
                  <img
                    src="../../assets/images/master.jpg"
                    alt="user profile image"
                    width="50"
                    height="50"
                    class="rounded-5" />
                  <div class="d-flex flex-column">
                    <p class="text-white fw-bold m-0">متین حسن کاوریاری</p>
                    <p class="text-white-50 m-0">یک هفته پیش</p>
                  </div>
                </div>
                <button class="bg-primary text-white px-3 py-2 rounded-5">مشاهده گفت و گو</button>
              </div>
              <!-- question text -->
                <p class="text-white mt-3 m-0 fw-semibold p-md-4">
                  سلام وقتتون بخیر، جاوا اسکریپت چیست و چه کاربردی داره؟
                </p>

                <div class="qCourse w-50 mx-auto mt-4 bg-dark rounded-3 p-2 text-center">
                  <p class="text-white m-0">این پرسش مربوط به بخش : <span class="text-primary">آموزش جاوا اسگریپت</span></p>
                </div>
            </div>
          </section>


        </div>
</div>

@push('scripts')
<script src="/frontend/js/profile.js"></script>
@endpush
