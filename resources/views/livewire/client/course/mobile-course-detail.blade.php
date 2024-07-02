<div class="d-block d-lg-none courseDet text-white pb-5">
    <!-- ======after purchase ====== -->
    @if($checkPurchase)
        @include('livewire.client.course.circle-progress')
    @endif
    <!-- ======after purchase ====== -->

    @include('livewire.client.course.features-course')

    <!-- ======before purchase ====== -->
    @if(!$checkPurchase)
        @include('livewire.client.course.price-course')
    @endif
    <!-- ======before purchase ====== -->
</div>
