<div class="row">
    <div class="align-items-center justify-content-center empty-cart position-relative d-flex flex-column "
         style="margin-top: 20px">

        @if($paymentStatus)
            <h3 class="text-secondary"> پرداخت موفق :)</h3>
            <i class="fa fa-check-circle m-5 text-success" style="font-size: 250px;color: #e81c4d"></i>
            <p class="text-white my-3 fs-3">تراکنش شماره:
                {{@$transaction->trans_number}}
            </p>
            <div class="bg-secondary text-white w-50 rounded-4 overflow-hidden">


                <!-- table title -->
                <table id="table" class="w-100 responsive_table" border="1">
                    <!-- thead -->

                    <!-- tbody -->
                    <tbody class="">
                    @forelse($transaction->order->orderItems as $item)
                        @php
                            $title=explode('_',$item->course->title);

                        @endphp

                        <tr wire:key="{{$loop->index+1}}"
                            class=" text-center">
                            <td data-label=": شرح تراکنش" class="p-3">
                                {{@$title[0]}}
                                <span class="text-primary d-inline-block">
                                 {{@$title[1]}}
                                 </span>
                                {{@$title[2]}}


                            </td>
                            <td data-label=": مبلغ" class="p-3 fw-normal">
                                <a class=" main-btn d-inline-block px-3 py-2 text-light bg-success"
                                   href="{{route('client.course',$item->course->url_slug)}}">شروع یادگیری</a>
                            </td>
                        </tr>

                    @empty
                    @endforelse

                    </tbody>
                </table>
            </div>

        @else
            <h3 class="text-secondary"> پرداخت ناموفق !</h3>
            <i class="fa fa-times-circle m-5" style="font-size: 250px;color: #e81c4d"></i>
            <a class="main-btn d-inline-block px-3 py-2 text-light"
               style="background:#e81c4d!important;margin: 30px 0 100px 0" href="{{route('client.basket')}}">
                پرداخت دوباره</a>
        @endif

    </div>

</div>
