<div class="row">
    <div class="align-items-center justify-content-center empty-cart position-relative d-flex flex-column "
         style="margin-top: 170px">

        @if($paymentStatus)
            <h3 class="text-secondary"> پرداخت موفق :)</h3>
            <i class="fa fa-check-circle m-5 text-success" style="font-size: 250px;color: #e81c4d"></i>
            <a wire:navigate class="main-btn d-inline-block px-3 py-2 text-light bg-success"
               style="margin: 30px 0 100px 0" href="{{route('client.profile.my-courses')}}">
            مشاهده دوره</a>

        @else
            <h3 class="text-secondary"> پرداخت ناموفق !</h3>
            <i class="fa fa-times-circle m-5" style="font-size: 250px;color: #e81c4d"></i>
            <a wire:navigate class="main-btn d-inline-block px-3 py-2 text-light"
               style="background:#e81c4d!important;margin: 30px 0 100px 0" href="{{route('client.profile.basket')}}">
                پرداخت دوباره</a>
        @endif

    </div>

</div>
