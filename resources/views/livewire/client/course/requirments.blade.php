<section class="text-white">
    <h3 class="text-primary fs-2 mb-5">پیش نیازها</h3>
    <div class="d-flex flex-column gap-3">
        @foreach(explode('_',$requirements) as $item)
            <div
                class="needItem d-flex align-items-center justify-content-start gap-2">
                <span></span>
                <p class="fw-medium m-0 fw-normal">
                    {{$item}}
                </p>
            </div>
        @endforeach

    </div>
</section>