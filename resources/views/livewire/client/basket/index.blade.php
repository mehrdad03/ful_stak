@push('links')
    <link rel="stylesheet" href="/frontend/css/cart.css"/>
@endpush

<div class="row">
    <!-- ===== Courses ===== -->
    <livewire:client.basket.item :items="$basket"/>
    <!-- ===== payment ===== -->
    <livewire:client.basket.payment :payment="$payment"/>

</div>

