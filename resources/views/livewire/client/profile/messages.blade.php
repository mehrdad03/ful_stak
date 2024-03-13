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

          <!-- === messagess === -->
          <section class="d-flex flex-column align-items-center gap-4">
            <!-- message -->
            <div class="message bg-secondary w-75 p-3 rounded-3">
              <div class="bg-dark px-lg-5 px-3 py-4 rounded-4">
                <h6 class="text-white mb-4">
                  سلام <span class="fw-bold">متین </span> عزیز ,
                </h6>
                <p class="messageP text-white m-0">
                  ما از تماس شما با پشتیبانی وبسایت ful-stak.dev خوشحالیم. این
                  وبسایت یک منبع آموزشی برای توسعه دهندگان وب است که می‌توانند
                  همه مهارت‌های لازم برای تبدیل شدن به یک توسعه دهنده full-stack
                  را یاد بگیرند. ما امیدواریم که از این دوره لذت ببرید و بتوانید
                  پروژه‌های جذاب و خلاقانه‌ای را با استفاده از دانش خود ایجاد
                  کنید. اگر در هر مرحله‌ای از یادگیری با مشکلی روبرو شدید یا
                  سوالی داشتید، می‌توانید با ما تماس بگیرید یا از بخش پرسش و
                  پاسخ وبسایت استفاده کنید. ما همیشه در خدمت شما هستیم و از
                  نظرات و پیشنهادات شما استقبال می‌کنیم. لطفاً نظر خود را در
                  مورد این دوره و وبسایت به ما بفرستید تا بتوانیم کیفیت خدمات
                  خود را بهبود بخشیم. با تشکر از حمایت شما،
                </p>
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-between my-3">
                  <h6 class="text-white fw-bold">
                    پشتیبانی وبسایت ful-stack.dev
                  </h6>
                  <div class="d-flex flex-row column-gap-4 flex-md-column align-items-end">
                    <p
                      class="text-primary d-flex align-items-center column-gap-2">
                      <span> 22:52 </span>
                      <svg
                        width="13"
                        height="13"
                        viewBox="0 0 13 13"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_628_137)">
                          <path
                            d="M6.49967 11.9154C9.49122 11.9154 11.9163 9.49024 11.9163 6.4987C11.9163 3.50716 9.49122 1.08203 6.49967 1.08203C3.50813 1.08203 1.08301 3.50716 1.08301 6.4987C1.08301 9.49024 3.50813 11.9154 6.49967 11.9154Z"
                            stroke="#23BF65"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                          <path
                            d="M6.5 3.25V6.5L8.66667 7.58333"
                            stroke="#23BF65"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        </g>
                        <defs>
                          <clipPath id="clip0_628_137">
                            <rect width="13" height="13" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </p>
                    <p
                      class="text-primary d-flex align-items-center column-gap-2">
                      <span>1402/12/23</span>
                      <svg
                        width="13"
                        height="13"
                        viewBox="0 0 13 13"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M10.2917 2.16797H2.70833C2.11002 2.16797 1.625 2.65299 1.625 3.2513V10.8346C1.625 11.4329 2.11002 11.918 2.70833 11.918H10.2917C10.89 11.918 11.375 11.4329 11.375 10.8346V3.2513C11.375 2.65299 10.89 2.16797 10.2917 2.16797Z"
                          stroke="#23BF65"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                        <path
                          d="M8.66699 1.08203V3.2487"
                          stroke="#23BF65"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                        <path
                          d="M4.33301 1.08203V3.2487"
                          stroke="#23BF65"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                        <path
                          d="M1.625 5.41797H11.375"
                          stroke="#23BF65"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- message -->
            <div class="message bg-secondary w-75 p-3 rounded-3">
                <div class="bg-dark px-lg-5 px-3 py-4 rounded-4">
                  <h6 class="text-white mb-4">
                    سلام <span class="fw-bold">متین </span> عزیز ,
                  </h6>
                  <p class="messageP text-white m-0">
                    ما از تماس شما با پشتیبانی وبسایت ful-stak.dev خوشحالیم. این
                    وبسایت یک منبع آموزشی برای توسعه دهندگان وب است که می‌توانند
                    همه مهارت‌های لازم برای تبدیل شدن به یک توسعه دهنده full-stack
                    را یاد بگیرند. ما امیدواریم که از این دوره لذت ببرید و بتوانید
                    پروژه‌های جذاب و خلاقانه‌ای را با استفاده از دانش خود ایجاد
                    کنید. اگر در هر مرحله‌ای از یادگیری با مشکلی روبرو شدید یا
                    سوالی داشتید، می‌توانید با ما تماس بگیرید یا از بخش پرسش و
                    پاسخ وبسایت استفاده کنید. ما همیشه در خدمت شما هستیم و از
                    نظرات و پیشنهادات شما استقبال می‌کنیم. لطفاً نظر خود را در
                    مورد این دوره و وبسایت به ما بفرستید تا بتوانیم کیفیت خدمات
                    خود را بهبود بخشیم. با تشکر از حمایت شما،
                  </p>
                  <div class="d-flex flex-column flex-md-row align-items-center justify-content-between my-3">
                    <h6 class="text-white fw-bold">
                      پشتیبانی وبسایت ful-stack.dev
                    </h6>
                    <div class="d-flex flex-row column-gap-4 flex-md-column align-items-end">
                      <p
                        class="text-primary d-flex align-items-center column-gap-2">
                        <span> 22:52 </span>
                        <svg
                          width="13"
                          height="13"
                          viewBox="0 0 13 13"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_628_137)">
                            <path
                              d="M6.49967 11.9154C9.49122 11.9154 11.9163 9.49024 11.9163 6.4987C11.9163 3.50716 9.49122 1.08203 6.49967 1.08203C3.50813 1.08203 1.08301 3.50716 1.08301 6.4987C1.08301 9.49024 3.50813 11.9154 6.49967 11.9154Z"
                              stroke="#23BF65"
                              stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path
                              d="M6.5 3.25V6.5L8.66667 7.58333"
                              stroke="#23BF65"
                              stroke-linecap="round"
                              stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_628_137">
                              <rect width="13" height="13" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </p>
                      <p
                        class="text-primary d-flex align-items-center column-gap-2">
                        <span>1402/12/23</span>
                        <svg
                          width="13"
                          height="13"
                          viewBox="0 0 13 13"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M10.2917 2.16797H2.70833C2.11002 2.16797 1.625 2.65299 1.625 3.2513V10.8346C1.625 11.4329 2.11002 11.918 2.70833 11.918H10.2917C10.89 11.918 11.375 11.4329 11.375 10.8346V3.2513C11.375 2.65299 10.89 2.16797 10.2917 2.16797Z"
                            stroke="#23BF65"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                          <path
                            d="M8.66699 1.08203V3.2487"
                            stroke="#23BF65"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                          <path
                            d="M4.33301 1.08203V3.2487"
                            stroke="#23BF65"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                          <path
                            d="M1.625 5.41797H11.375"
                            stroke="#23BF65"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        </svg>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
          </section>

        </div>
</div>

@push('scripts')
<script src="/frontend/js/profile.js"></script>
@endpush