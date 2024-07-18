<div class="p-4">
    <p class="fs-5 fw-bold">ویژگی های این دوره :</p>
    <ul>
        <li class="d-flex gap-2 ">
                  <span>
                    <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M20 6L9 17L4 12"
                          stroke="#23BF65"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"/>
                    </svg>
                  </span>
            <p>
                تدریس با آخرین ورژن زبان ها و فریمورک ها

            </p>
        </li>
        <li class="d-flex gap-2 ">
                  <span>
                    <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M20 6L9 17L4 12"
                          stroke="#23BF65"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"/>
                    </svg>
                  </span>
            <p>
                بیش از
                <strong class="fs-4" style="color: #23bf65">
                    @if($course->url_slug=='laravel-tutorial-digikala')
                       72
                    @else
                        {{$hours}}
                    @endif

                </strong>
                ساعت ویدیو آموزشی</p>
        </li>
        <li class="d-flex gap-2 ">
                  <span>
                    <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M20 6L9 17L4 12"
                          stroke="#23BF65"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"/>
                    </svg>
                  </span>
            <p>
                بیش از
                <strong class="fs-4" style="color: #23bf65">
                    @if($course->url_slug=='laravel-tutorial-digikala')
                        180
                    @else
                        {{$lecturesCount}}
                    @endif

                </strong>
                جلسه آموزشی
            </p>
        </li>
        <li class="d-flex gap-2">
                  <span>
                    <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M20 6L9 17L4 12"
                          stroke="#23BF65"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"/>
                    </svg>
                  </span>
            <p class="m-0">
                پرسش و پاسخ آنلاین در گروه VIP با استاد
            </p>
        </li>

    </ul>
</div>
