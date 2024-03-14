@push('links')
    <link rel="stylesheet" href="/frontend/css/profile.css"/>
@endpush

<div class="row container p-lg-0 mx-auto mx-lg-0">
        <!-- ====== sidebar ====== -->
    @include('livewire.client.profile.sidebar')

        <!-- ====== main content ====== -->
        <div class="col col-lg-10 p-0 px-lg-4">
                    <!-- top menu -->
                    @include('livewire.client.profile.status')

                 <!-- course Type btn -->
                 <div class="coursbtn mx-auto w-75  rounded-4 py-3 px-4 my-5 d-flex flex-wrap gap-3 justify-content-around align-items-center bg-secondary">
            <!-- weblog -->
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

              <p class="m-0 text-white">وبلاگ</p>
            </button>
            <!-- podcast -->
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
                  d="M12 1C11.2044 1 10.4413 1.31607 9.87868 1.87868C9.31607 2.44129 9 3.20435 9 4V12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12V4C15 3.20435 14.6839 2.44129 14.1213 1.87868C13.5587 1.31607 12.7956 1 12 1Z"
                  stroke="#23BF65"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M19 10V12C19 13.8565 18.2625 15.637 16.9497 16.9497C15.637 18.2625 13.8565 19 12 19C10.1435 19 8.36301 18.2625 7.05025 16.9497C5.7375 15.637 5 13.8565 5 12V10"
                  stroke="#23BF65"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M12 19V23"
                  stroke="#23BF65"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M8 23H16"
                  stroke="#23BF65"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>

              <p class="m-0 text-white">پادکست ها</p>
            </button>
            <!-- courses -->
            <button
              type="button"
              class="px-4 py-3 rounded-4 d-flex justify-content-center align-items-center column-gap-2">
              <svg
                width="22"
                height="18"
                viewBox="0 0 22 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1 13.1C1.96089 13.296 2.84294 13.7702 3.53638 14.4636C4.22982 15.1571 4.70403 16.0391 4.9 17M1 9.05C3.03079 9.27586 4.92428 10.186 6.36911 11.6309C7.81395 13.0757 8.72414 14.9692 8.95 17M1 5V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H19C19.5304 1 20.0391 1.21071 20.4142 1.58579C20.7893 1.96086 21 2.46957 21 3V15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H13"
                  stroke="#23BF65"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M1 17H1.01"
                  stroke="#23BF65"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>

              <p class="m-0 text-white">دوره ها</p>
            </button>
            <!-- episodes -->
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
                  d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                  stroke="#23BF65"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M10 8L16 12L10 16V8Z"
                  stroke="#23BF65"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>

              <p class="m-0 text-white">جلسات</p>
            </button>
          </div>

          <!-- === comments === -->
          <section class="comment row">
            <div class="col-md-12 bg-secondary rounded-3 m-2 p-4">
                <div class="d-flex align-items-center column-gap-2 p-3">
                    <img src="/frontend/assets/images/react.png" alt="react logo" width="50">
                    <h6 class="m-0 text-white fw-bold">تکنیک ها و مهارت های مورد نیاز برای بهبود کدنویسی در فرانت اند ...</h6>
                </div>
                <!-- comment -->
                <div class="bg-dark rounded-4 p-2">
                    <div class="d-flex align-items-center column-gap-2">
                        <img src="../../assets/images/master.jpg" alt="user profile" width="50" height="50" class=" rounded-5 ">
                        <p class="text-white fw-bold m-0">متین حسن کاویاری</p>
                    </div>
                    <p class="m-0 text-white my-4 me-5">بسیار مفید بود ، متشکر از شما</p>
                </div>
            </div>
            <div class="col-md-12 bg-secondary rounded-3 m-2 p-4">
                <div class="d-flex align-items-center column-gap-2 p-3">
                    <img src="/frontend/assets/images/react.png" alt="react logo" width="50">
                    <h6 class="m-0 text-white fw-bold">تکنیک ها و مهارت های مورد نیاز برای بهبود کدنویسی در فرانت اند ...</h6>
                </div>
                <!-- comment -->
                <div class="bg-dark rounded-4 p-2">
                    <div class="d-flex align-items-center column-gap-2">
                        <img src="../../assets/images/master.jpg" alt="user profile" width="50" height="50" class=" rounded-5 ">
                        <p class="text-white fw-bold m-0">متین حسن کاویاری</p>
                    </div>
                    <p class="m-0 text-white my-4 me-5">بسیار مفید بود ، متشکر از شما</p>
                </div>
            </div>
            <div class="col-md-12 bg-secondary rounded-3 m-2 p-4">
                <div class="d-flex align-items-center column-gap-2 p-3">
                    <img src="/frontend/assets/images/react.png" alt="react logo" width="50">
                    <h6 class="m-0 text-white fw-bold">تکنیک ها و مهارت های مورد نیاز برای بهبود کدنویسی در فرانت اند ...</h6>
                </div>
                <!-- comment -->
                <div class="bg-dark rounded-4 p-2">
                    <div class="d-flex align-items-center column-gap-2">
                        <img src="../../assets/images/master.jpg" alt="user profile" width="50" height="50" class=" rounded-5 ">
                        <p class="text-white fw-bold m-0">متین حسن کاویاری</p>
                    </div>
                    <p class="m-0 text-white my-4 me-5">بسیار مفید بود ، متشکر از شما</p>
                </div>
            </div>
            <div class="col-md-12 bg-secondary rounded-3 m-2 p-4">
                <div class="d-flex align-items-center column-gap-2 p-3">
                    <img src="/frontend/assets/images/react.png" alt="react logo" width="50">
                    <h6 class="m-0 text-white fw-bold">تکنیک ها و مهارت های مورد نیاز برای بهبود کدنویسی در فرانت اند ...</h6>
                </div>
                <!-- comment -->
                <div class="bg-dark rounded-4 p-2">
                    <div class="d-flex align-items-center column-gap-2">
                        <img src="../../assets/images/master.jpg" alt="user profile" width="50" height="50" class=" rounded-5 ">
                        <p class="text-white fw-bold m-0">متین حسن کاویاری</p>
                    </div>
                    <p class="m-0 text-white my-4 me-5">بسیار مفید بود ، متشکر از شما</p>
                </div>
            </div>
          </section>

        </div>
</div>

@push('scripts')
<script src="/frontend/js/profile.js"></script>
@endpush
