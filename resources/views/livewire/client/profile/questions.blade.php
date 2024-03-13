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
          <div
            class="coursbtn qbtn w-50 mx-auto rounded-4 py-3 px-4 my-5 d-flex flex-wrap gap-3 justify-content-around align-items-center bg-secondary">
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

              <p class="m-0 text-white">پیغام مدیریت</p>
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

              <p class="m-0 text-white">پیغام کاربر</p>
            </button>
          </div>

          <!-- === if it wasn't any question === -->
          <div
            class="w-100 d-flex flex-column justify-content-center align-items-center gap-3">
            <img
              src="/frontend/assets/images/nothing.png"
              alt="no question"
              class="w-25" />

            <h2 class="text-secondary fw-bolder">هیچ نتیجه ای یافت نشد</h2>
          </div>
        </div>
      </div>

      @push('scripts')
<script src="/frontend/js/profile.js"></script>
@endpush