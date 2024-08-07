<section class="features text-white mt-5 mx-0 ">
    @php
        $what_you_will_learn=collect(explode('_',$course->what_you_will_learn))->split(2);

    @endphp
    <h3 class="text-primary fs-2 fw-bold my-4 text-center">
        آنچه یاد خواهید گرفت
    </h3>
    <div class="row flex-column flex-lg-row text-end">
        @foreach($what_you_will_learn as $items)

            <div class="col col-lg-6 p-lg-4">
                @foreach($items as $item)
                    <div class="d-flex gap-1 align-items-start">
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
                        <p class="fw-normal">
                            {{$item}}
                        </p>
                    </div>
                @endforeach


            </div>

        @endforeach

    </div>
</section>
<img src="/frontend/assets/images/hr.png" alt="HR" class="hr" />
