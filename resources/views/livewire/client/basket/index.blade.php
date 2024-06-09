@push('links')
    <link rel="stylesheet" href="/frontend/css/cart.css"/>
@endpush

<div class="row">

    @if($basket->count()>0)
        <!-- ===== Courses ===== -->
        <livewire:client.basket.item :items="$basket"/>
        <!-- ===== payment ===== -->
        <livewire:client.basket.payment :payment="$payment" :basket="$basket"/>
    @else
        @include('livewire.client.basket.empty-basket')
    @endif

</div>

