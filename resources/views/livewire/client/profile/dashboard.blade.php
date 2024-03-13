@push('links')
    <link rel="stylesheet" href="/frontend/css/profile.css"/>
    <link rel="stylesheet" href="/frontend/css/progresscircle.css"/>
@endpush

<div class="row container p-lg-0 mx-auto mx-lg-0">
        <!-- ====== sidebar ====== -->
    @include('livewire.client.profile.sidebar')

         <!-- ====== main content ====== -->
         <div class="col col-lg-10 p-0 px-lg-4">
          <!-- top menu -->
          @include('livewire.client.profile.status')
          <!-- course btn -->
          <div class="mt-5 d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
            <h4 class="text-primary d-flex align-items-center column-gap-2">
              <span></span>دوره های جاری
            </h4>
            <a
              href="#"
              class="d-flex align-items-center column-gap-2 instalink">
              <p class="text-primary m-0">تمامی دوره های جاری</p>
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

          <!-- My Courses -->
          <section>
            <div
              class="d-flex justify-content-center justify-content-lg-start align-items-center flex-wrap gap-4 mt-4">
              <div class="bg-secondary rounded-4 p-3">
                <iframe
                  class="rounded-3"
                  src="https://www.youtube.com/embed/QHBVA_7bSRg?si=8WJSsEfdxlxMKZ_5"
                  title="YouTube video player"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>

                <!-- Course section -->
                <div class="title">
                  <p class="m-0 text-white my-2 fw-light">بخش هفتم</p>
                  <p class="m-0 text-white my-2 fw-medium">آموزش منطق بولی</p>
                </div>
                <!-- course name -->
                <div class="d-flex align-items-center my-4">
                  <svg
                    width="36"
                    height="36"
                    viewBox="0 0 36 36"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <mask
                      id="mask0_576_157"
                      style="mask-type: luminance"
                      maskUnits="userSpaceOnUse"
                      x="1"
                      y="1"
                      width="34"
                      height="34">
                      <path
                        d="M1.0741 1.07422H34.0142V34.0143H1.0741V1.07422Z"
                        fill="white" />
                    </mask>
                    <g mask="url(#mask0_576_157)">
                      <path
                        d="M1.0741 1.07422H34.0142V34.0143H1.0741V1.07422Z"
                        fill="#FFD600" />
                    </g>
                    <path
                      d="M22.6115 25.7314C23.2447 26.7598 23.9328 27.7453 25.3903 27.7453C26.6147 27.7453 27.257 27.1369 27.257 26.295C27.257 25.2876 26.5926 24.9298 25.2458 24.3433L24.5074 24.0285C22.3763 23.1246 20.959 21.9918 20.959 19.599C20.959 17.3938 22.6471 15.7158 25.2851 15.7158C27.1636 15.7158 28.5133 16.3663 29.4868 18.07L27.1865 19.5405C26.6805 18.6364 26.1333 18.2805 25.2851 18.2805C24.4195 18.2805 23.8715 18.8267 23.8715 19.5405C23.8715 20.4225 24.4204 20.7794 25.6877 21.3256L26.4261 21.6404C28.9378 22.71 30.3542 23.8025 30.3542 26.2584C30.3542 28.9046 28.2643 30.3549 25.4589 30.3549C22.7148 30.3549 21.1566 28.9778 20.2892 27.2732L22.6115 25.7314ZM12.0102 25.8064C12.4732 26.6354 13.1769 27.2732 14.1888 27.2732C15.1569 27.2732 15.7142 26.8907 15.7142 25.4038V15.7148H18.7639V25.8723C18.7639 28.9531 16.9769 30.3549 14.3673 30.3549C12.0093 30.3549 10.3074 28.7573 9.61383 27.2732L12.0102 25.8064Z"
                      fill="#000001" />
                  </svg>
                  <p class="m-0 fw-bold text-white me-2">آموزش جاوااسکریپت</p>
                </div>

                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center column-gap-2">
                    <p class="m-0 text-primary fw-bold">مشاهده دوره</p>
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M10 18.3346C14.6024 18.3346 18.3334 14.6037 18.3334 10.0013C18.3334 5.39893 14.6024 1.66797 10 1.66797C5.39765 1.66797 1.66669 5.39893 1.66669 10.0013C1.66669 14.6037 5.39765 18.3346 10 18.3346Z"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        d="M8.33331 6.66797L13.3333 10.0013L8.33331 13.3346V6.66797Z"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                  <!-- Circle progress -->
                  <div class="progress_wrapper">
                    <div class="box">
                      <div
                        class="circlechart text-primary"
                        data-percentage="20">
                        20%
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-secondary rounded-4 p-3">
                <iframe
                  class="rounded-3"
                  src="https://www.youtube.com/embed/QHBVA_7bSRg?si=8WJSsEfdxlxMKZ_5"
                  title="YouTube video player"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>

                <!-- Course section -->
                <div class="title">
                  <p class="m-0 text-white my-2 fw-light">بخش هفتم</p>
                  <p class="m-0 text-white my-2 fw-medium">آموزش منطق بولی</p>
                </div>
                <!-- course name -->
                <div class="d-flex align-items-center my-4">
                  <svg
                    width="36"
                    height="36"
                    viewBox="0 0 36 36"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <mask
                      id="mask0_576_157"
                      style="mask-type: luminance"
                      maskUnits="userSpaceOnUse"
                      x="1"
                      y="1"
                      width="34"
                      height="34">
                      <path
                        d="M1.0741 1.07422H34.0142V34.0143H1.0741V1.07422Z"
                        fill="white" />
                    </mask>
                    <g mask="url(#mask0_576_157)">
                      <path
                        d="M1.0741 1.07422H34.0142V34.0143H1.0741V1.07422Z"
                        fill="#FFD600" />
                    </g>
                    <path
                      d="M22.6115 25.7314C23.2447 26.7598 23.9328 27.7453 25.3903 27.7453C26.6147 27.7453 27.257 27.1369 27.257 26.295C27.257 25.2876 26.5926 24.9298 25.2458 24.3433L24.5074 24.0285C22.3763 23.1246 20.959 21.9918 20.959 19.599C20.959 17.3938 22.6471 15.7158 25.2851 15.7158C27.1636 15.7158 28.5133 16.3663 29.4868 18.07L27.1865 19.5405C26.6805 18.6364 26.1333 18.2805 25.2851 18.2805C24.4195 18.2805 23.8715 18.8267 23.8715 19.5405C23.8715 20.4225 24.4204 20.7794 25.6877 21.3256L26.4261 21.6404C28.9378 22.71 30.3542 23.8025 30.3542 26.2584C30.3542 28.9046 28.2643 30.3549 25.4589 30.3549C22.7148 30.3549 21.1566 28.9778 20.2892 27.2732L22.6115 25.7314ZM12.0102 25.8064C12.4732 26.6354 13.1769 27.2732 14.1888 27.2732C15.1569 27.2732 15.7142 26.8907 15.7142 25.4038V15.7148H18.7639V25.8723C18.7639 28.9531 16.9769 30.3549 14.3673 30.3549C12.0093 30.3549 10.3074 28.7573 9.61383 27.2732L12.0102 25.8064Z"
                      fill="#000001" />
                  </svg>
                  <p class="m-0 fw-bold text-white me-2">آموزش جاوااسکریپت</p>
                </div>

                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center column-gap-2">
                    <p class="m-0 text-primary fw-bold">مشاهده دوره</p>
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M10 18.3346C14.6024 18.3346 18.3334 14.6037 18.3334 10.0013C18.3334 5.39893 14.6024 1.66797 10 1.66797C5.39765 1.66797 1.66669 5.39893 1.66669 10.0013C1.66669 14.6037 5.39765 18.3346 10 18.3346Z"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        d="M8.33331 6.66797L13.3333 10.0013L8.33331 13.3346V6.66797Z"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                  <!-- Circle progress -->
                  <div class="progress_wrapper">
                    <div class="box">
                      <div
                        class="circlechart text-primary"
                        data-percentage="90"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-secondary rounded-4 p-3">
                <iframe
                  class="rounded-3"
                  src="https://www.youtube.com/embed/QHBVA_7bSRg?si=8WJSsEfdxlxMKZ_5"
                  title="YouTube video player"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>

                <!-- Course section -->
                <div class="title">
                  <p class="m-0 text-white my-2 fw-light">بخش هفتم</p>
                  <p class="m-0 text-white my-2 fw-medium">آموزش منطق بولی</p>
                </div>
                <!-- course name -->
                <div class="d-flex align-items-center my-4">
                  <svg
                    width="36"
                    height="36"
                    viewBox="0 0 36 36"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <mask
                      id="mask0_576_157"
                      style="mask-type: luminance"
                      maskUnits="userSpaceOnUse"
                      x="1"
                      y="1"
                      width="34"
                      height="34">
                      <path
                        d="M1.0741 1.07422H34.0142V34.0143H1.0741V1.07422Z"
                        fill="white" />
                    </mask>
                    <g mask="url(#mask0_576_157)">
                      <path
                        d="M1.0741 1.07422H34.0142V34.0143H1.0741V1.07422Z"
                        fill="#FFD600" />
                    </g>
                    <path
                      d="M22.6115 25.7314C23.2447 26.7598 23.9328 27.7453 25.3903 27.7453C26.6147 27.7453 27.257 27.1369 27.257 26.295C27.257 25.2876 26.5926 24.9298 25.2458 24.3433L24.5074 24.0285C22.3763 23.1246 20.959 21.9918 20.959 19.599C20.959 17.3938 22.6471 15.7158 25.2851 15.7158C27.1636 15.7158 28.5133 16.3663 29.4868 18.07L27.1865 19.5405C26.6805 18.6364 26.1333 18.2805 25.2851 18.2805C24.4195 18.2805 23.8715 18.8267 23.8715 19.5405C23.8715 20.4225 24.4204 20.7794 25.6877 21.3256L26.4261 21.6404C28.9378 22.71 30.3542 23.8025 30.3542 26.2584C30.3542 28.9046 28.2643 30.3549 25.4589 30.3549C22.7148 30.3549 21.1566 28.9778 20.2892 27.2732L22.6115 25.7314ZM12.0102 25.8064C12.4732 26.6354 13.1769 27.2732 14.1888 27.2732C15.1569 27.2732 15.7142 26.8907 15.7142 25.4038V15.7148H18.7639V25.8723C18.7639 28.9531 16.9769 30.3549 14.3673 30.3549C12.0093 30.3549 10.3074 28.7573 9.61383 27.2732L12.0102 25.8064Z"
                      fill="#000001" />
                  </svg>
                  <p class="m-0 fw-bold text-white me-2">آموزش جاوااسکریپت</p>
                </div>

                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center column-gap-2">
                    <p class="m-0 text-primary fw-bold">مشاهده دوره</p>
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M10 18.3346C14.6024 18.3346 18.3334 14.6037 18.3334 10.0013C18.3334 5.39893 14.6024 1.66797 10 1.66797C5.39765 1.66797 1.66669 5.39893 1.66669 10.0013C1.66669 14.6037 5.39765 18.3346 10 18.3346Z"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        d="M8.33331 6.66797L13.3333 10.0013L8.33331 13.3346V6.66797Z"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                  <!-- Circle progress -->
                  <div class="progress_wrapper">
                    <div class="box">
                      <div
                        class="circlechart text-primary"
                        data-percentage="30"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Q & A -->
          <section class="mt-5">
            <h4 class="text-primary d-flex align-items-center column-gap-2">
              <span></span>پرسش و پاسخ
            </h4>

            <div class="question w-75 d-flex align-items-center column-gap-4 p-3">
              <img
                src="/frontend/assets/images/questions.png"
                alt="question mark" />
              <div>
                <h5 class="text-white fw-medium">اشکالت رو برطرف کن</h5>
                <p class="m-0 text-white">
                  سوال خود را مطرح کنید و منتظر پاسخ آن از طرف مدرس دوره باشید
                  تا مشکل شمل برطرف شود
                </p>
                <div class="d-flex align-items-center column-gap-1">
                  <p class="m-0 text-primary">ارسال اولین پرسش</p>
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
                      d="M15.75 19.5 8.25 12l7.5-7.5" />
                  </svg>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

@push('scripts')
<script src="/frontend/js/profile.js"></script>
<script src="/frontend/js/progresscircle.js"></script>
@endpush
