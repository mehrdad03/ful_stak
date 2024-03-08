@push('links')
    <link rel="stylesheet" href="/frontend/css/profile.css"/>
@endpush

<div class="row container mx-auto">
        <!-- ====== sidebar ====== -->
        <div class="sidebar bg-secondary rounded-4 col-2">
          <div class="d-flex flex-column align-items-center mb-5">
            <img
              src="../../assets/images/master.jpg"
              alt="User Profile"
              class="profileImg" />
            <h5 class="text-white fw-bold">متین حسن کاویاری</h5>
            <p class="text-primary">09019901095</p>
            <a href="#" class="mb-3">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="text-primary">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
              </svg>
            </a>
          </div>

          <ul class="p-0">
            <div class="me-3 w-100">
              <!-- dashboard -->
              <li>
                <a href="./dashboard.html">
                  <div class="icon">
                    <svg
                      width="30"
                      height="30"
                      viewBox="0 0 45 45"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_576_212)">
                        <path
                          d="M36.125 9.375V8.875H35.625H28.125H27.625V9.375V13.125V13.625H28.125H35.625H36.125V13.125V9.375ZM17.375 9.375V8.875H16.875H9.375H8.875V9.375V20.625V21.125H9.375H16.875H17.375V20.625V9.375ZM36.125 24.375V23.875H35.625H28.125H27.625V24.375V35.625V36.125H28.125H35.625H36.125V35.625V24.375ZM17.375 31.875V31.375H16.875H9.375H8.875V31.875V35.625V36.125H9.375H16.875H17.375V35.625V31.875ZM24.875 16.375V6.125H38.875V16.375H24.875ZM20.125 6.125V23.875H6.125V6.125H20.125ZM24.875 38.875V21.125H38.875V38.875H24.875ZM6.125 38.875V28.625H20.125V38.875H6.125Z"
                          fill="#23BF65"
                          stroke="black" />
                      </g>
                      <defs>
                        <clipPath id="clip0_576_212">
                          <rect width="45" height="45" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                  <div class="text">داشبورد</div>
                </a>
              </li>
              <!-- courses -->
              <li class="active">
                <a href="./my-courses.html">
                  <div class="icon">
                    <svg
                      width="30"
                      height="30"
                      viewBox="0 0 45 45"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M39.375 31.8751V16.8751C39.3743 16.2174 39.2007 15.5716 38.8716 15.0022C38.5425 14.4329 38.0695 13.9601 37.5 13.6313L24.375 6.13131C23.8049 5.80218 23.1583 5.62891 22.5 5.62891C21.8417 5.62891 21.1951 5.80218 20.625 6.13131L7.5 13.6313C6.93049 13.9601 6.45746 14.4329 6.12837 15.0022C5.79927 15.5716 5.62567 16.2174 5.625 16.8751V31.8751C5.62567 32.5327 5.79927 33.1785 6.12837 33.7479C6.45746 34.3172 6.93049 34.79 7.5 35.1188L20.625 42.6188C21.1951 42.9479 21.8417 43.1212 22.5 43.1212C23.1583 43.1212 23.8049 42.9479 24.375 42.6188L37.5 35.1188C38.0695 34.79 38.5425 34.3172 38.8716 33.7479C39.2007 33.1785 39.3743 32.5327 39.375 31.8751Z"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        d="M14.0625 9.76953L22.5 14.6445L30.9375 9.76953"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        d="M14.0625 38.9813V29.25L5.625 24.375"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        d="M39.375 24.375L30.9375 29.25V38.9813"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        d="M6.13135 14.9258L22.5001 24.3945L38.8688 14.9258"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        d="M22.5 43.275V24.375"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                  <div class="text">دوره ها</div>
                </a>
              </li>
              <!-- faq -->
              <li>
                <a href="./questions.html">
                  <div class="icon">
                    <svg
                      width="30"
                      height="30"
                      viewBox="0 0 45 45"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M22.5 41.25C32.8553 41.25 41.25 32.8553 41.25 22.5C41.25 12.1447 32.8553 3.75 22.5 3.75C12.1447 3.75 3.75 12.1447 3.75 22.5C3.75 32.8553 12.1447 41.25 22.5 41.25Z"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        d="M17.0437 16.8756C17.4845 15.6225 18.3546 14.5658 19.4999 13.8927C20.6451 13.2196 21.9916 12.9736 23.3009 13.1982C24.6102 13.4227 25.7977 14.1034 26.6532 15.1197C27.5087 16.136 27.9769 17.4222 27.975 18.7506C27.975 22.5006 22.35 24.3756 22.35 24.3756"
                        stroke="#23BF65"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        d="M22.5 31.875H22.5188"
                        stroke="#23BF65"
                        stroke-width="4"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                  <div class="text">پرسش و پاسخ</div>
                </a>
              </li>
              <!-- payment -->
              <li>
                <a href="./payment.html">
                  <div class="icon">
                    <svg
                      width="30"
                      height="30"
                      viewBox="0 0 46 46"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M40.2783 8.19141H6.52832C4.45725 8.19141 2.77832 9.87034 2.77832 11.9414V34.4414C2.77832 36.5125 4.45725 38.1914 6.52832 38.1914H40.2783C42.3494 38.1914 44.0283 36.5125 44.0283 34.4414V11.9414C44.0283 9.87034 42.3494 8.19141 40.2783 8.19141Z"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        d="M2.77832 19.4414H44.0283"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                  <div class="text">مالی</div>
                </a>
              </li>
              <!-- comments -->
              <li>
                <a href="#">
                  <div class="icon">
                    <svg
                      width="30"
                      height="30"
                      viewBox="0 0 46 46"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M8.40332 37.2539C8.40332 36.0107 8.89718 34.8184 9.77626 33.9393C10.6553 33.0603 11.8476 32.5664 13.0908 32.5664H38.4033"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        d="M13.0908 4.44141H38.4033V41.9414H13.0908C11.8476 41.9414 10.6553 41.4475 9.77626 40.5685C8.89718 39.6894 8.40332 38.4971 8.40332 37.2539V9.12891C8.40332 7.8857 8.89718 6.69342 9.77626 5.81434C10.6553 4.93527 11.8476 4.44141 13.0908 4.44141Z"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                  <div class="text">نظرات</div>
                </a>
              </li>
              <!-- notfication -->
              <li>
                <a href="#">
                  <div class="icon">
                    <svg
                      width="30"
                      height="30"
                      viewBox="0 0 45 45"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M33.75 15C33.75 12.0163 32.5647 9.15483 30.455 7.04505C28.3452 4.93526 25.4837 3.75 22.5 3.75C19.5163 3.75 16.6548 4.93526 14.545 7.04505C12.4353 9.15483 11.25 12.0163 11.25 15C11.25 28.125 5.625 31.875 5.625 31.875H39.375C39.375 31.875 33.75 28.125 33.75 15Z"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        d="M25.7437 39.375C25.4141 39.9433 24.9409 40.415 24.3716 40.7429C23.8024 41.0708 23.1569 41.2434 22.5 41.2434C21.843 41.2434 21.1976 41.0708 20.6283 40.7429C20.059 40.415 19.5859 39.9433 19.2562 39.375"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                  <div class="text">پیغام</div>
                </a>
              </li>
              <!-- Logout -->
              <li>
                <a href="#">
                  <div class="icon">
                    <svg
                      width="30"
                      height="30"
                      viewBox="0 0 45 45"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M16.875 39.375H9.375C8.38044 39.375 7.42661 38.9799 6.72335 38.2766C6.02009 37.5734 5.625 36.6196 5.625 35.625V9.375C5.625 8.38044 6.02009 7.42661 6.72335 6.72335C7.42661 6.02009 8.38044 5.625 9.375 5.625H16.875"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        d="M30 31.875L39.375 22.5L30 13.125"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        d="M39.375 22.5H16.875"
                        stroke="#23BF65"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                  <div class="text">خروج</div>
                </a>
              </li>
            </div>
          </ul>
        </div>

        <!-- ====== main content ====== -->
        <div class="col">
          <!-- top menu -->
          <div class="topMenu bg-secondary rounded-4 d-flex flex-wrap gap-2 px-2 justify-content-around align-items-center">
            <!-- still learning -->
            <div class="d-flex flex-column flex-lg-row align-items-center column-gap-3">
              <img src="../../assets/images/puzzle.png" alt="icon" width="70" />
              <div class="text-center ms-md-4">
                <p class="m-0 text-white">درحال یادگیری</p>
                <h5 class="text-primary fw-bold my-2">3 دوره</h5>
              </div>
            </div>
            <!-- Q and A -->
            <div class="d-flex flex-column flex-lg-row align-items-center column-gap-3">
              <img src="../../assets/images/chat.png" alt="icon" width="70" />
              <div class="text-center ms-md-4">
                <p class="m-0 text-white">پرسش های من</p>
                <h5 class="text-primary fw-bold my-2">0 گفتگو</h5>
              </div>
            </div>
            <!-- Score -->
            <div class="d-flex flex-column flex-lg-row align-items-center column-gap-3">
              <img src="../../assets/images/6month.png" alt="icon" width="70" />
              <div class="text-center">
                <p class="m-0 text-white">امتیازات</p>
                <h5 class="text-primary fw-bold my-2">100 ستاره</h5>
              </div>
            </div>
          </div>

          <!-- course Type btn -->
          <div class="coursbtn rounded-4 py-3 px-4 my-5 d-flex flex-column gap-3 flex-lg-row justify-content-around align-items-center bg-secondary">
            <button
              type="button"
              class="px-4 py-3 active rounded-4 d-flex align-items-center column-gap-2">
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
              <p class="m-0 text-white">دوره های جاری</p>
            </button>
            <button
              type="button"
              class="px-4 py-3 rounded-4 d-flex align-items-center column-gap-2">
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
              <p class="m-0 text-white">دوره های خریداری شده</p>
            </button>
            <button
              type="button"
              class="px-4 py-3 rounded-4 d-flex align-items-center column-gap-2">
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
              <p class="m-0 text-white">دوره های گذرانده شده</p>
            </button>
            <button
              type="button"
              class="px-4 py-3 rounded-4 d-flex align-items-center column-gap-2">
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
              <p class="m-0 text-white">دوره های غیر فعال</p>
            </button>
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
        </div>
      </div>
