<div class="d-flex align-items-center gap-1 ">
    <!-- Home -->
    <a
        href="{{route('client.home')}}"
        class="d-flex gap-1 text-white fw-medium crumItem">
          <span
          ><svg
                  width="19"
                  height="19"
                  viewBox="0 0 19 19"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_246_1043)">
                <path
                    d="M4.06655 9.76674H2.58984L9.23501 3.12158L15.8802 9.76674H14.4035"
                    stroke="#424A6B"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M4.06689 9.7666V14.9351C4.06689 15.3267 4.22248 15.7023 4.49941 15.9792C4.77635 16.2562 5.15195 16.4118 5.5436 16.4118H12.9271C13.3188 16.4118 13.6944 16.2562 13.9713 15.9792C14.2482 15.7023 14.4038 15.3267 14.4038 14.9351V9.7666"
                    stroke="#424A6B"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M7.02002 16.4117V11.9816C7.02002 11.5899 7.1756 11.2143 7.45254 10.9374C7.72947 10.6605 8.10508 10.5049 8.49672 10.5049H9.97342C10.3651 10.5049 10.7407 10.6605 11.0176 10.9374C11.2945 11.2143 11.4501 11.5899 11.4501 11.9816V16.4117"
                    stroke="#424A6B"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
              </g>
              <defs>
                <clipPath id="clip0_246_1043">
                  <rect
                      width="17.7204"
                      height="17.7204"
                      fill="white"
                      transform="translate(0.375 0.90625)" />
                </clipPath>
              </defs>
            </svg>
          </span>
        <p class="m-0">صفحه اصلی</p>
    </a>
    <!-- next step -->
    <svg
        width="18"
        height="19"
        viewBox="0 0 18 19"
        fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
            d="M11.1144 13.9369L6.68433 9.50677L11.1144 5.07666"
            stroke="#424A6B"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round" />
    </svg>
    <!-- Courses -->
    <a
        href="../index.html"
        class="d-flex gap-1 text-white fw-medium crumItem">

        <p class="m-0">دوره ها</p>
    </a>
    <!-- next step -->
    <svg
        width="18"
        height="19"
        viewBox="0 0 18 19"
        fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
            d="M11.1144 13.9369L6.68433 9.50677L11.1144 5.07666"
            stroke="#424A6B"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round" />
    </svg>
    <!-- JavaScript -->
    <a href="../index.html" class="d-flex gap-1 text-primary fw-medium">

        <p class="m-0">{{$course->title}}</p>
    </a>
</div>
