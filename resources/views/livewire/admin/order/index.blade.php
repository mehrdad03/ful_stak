<div class="content-wrapper-scroll">
    <div class="content-wrapper">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="field-wrapper w-25">
                                    <input  style="background: #ffffff" class="form-control" type="text" wire:model.debounce.500ms="search">
                                    <div class="field-placeholder">جستجو براساس شماره سفارش و قیمت <span class="text-danger">*</span></div>
                                </div>
                                {{ $orders->links('layouts.pagination-admin') }}
                            </div>
                            <table class="table v-middle">
                                <thead>
                                <tr>
                                    <th>#شماره سفارش</th>
                                    <th>سفارش</th>
                                    <th>قیمت</th>
                                    <th>تخفیف</th>
                                    <th>کاربر</th>
                                    <th>ثیت شده در</th>
                                    <th>وضعیت سفارش</th>
                                    <th>وضعیت پرداخت</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($orders as $order)

                                    @php
                                        $class='';
                                        $iconClass='';

                                        if ($order->status ){
                                            $class='success';
                                            $iconClass='check-square';
                                        }else{
                                            $class='danger';
                                             $iconClass='times';
                                        }
                                        if ($order->transaction->status){
                                            $tr_class='success';
                                            $tr_iconClass='check-square';
                                        }else{
                                            $tr_class='danger';
                                             $tr_iconClass='times';
                                        }
                                    @endphp
                                    <tr>
                                        <td>{{$order->order_number}}</td>

                                        <td>
                                            <div class="media-box">
                                               @forelse($order->orderItems as $item)

                                                    <a  href="{{@route('client.course',['course'=>$item->course->url_slug])}}" target="_blank"> {{$item->course->title}}</a>
                                                    <br>
                                                @empty
                                               @endforelse
                                            </div>

                                        </td>
                                        <td class="text-warning"><h6>{{number_format($order->amount)}}</h6></td>
                                        <td class="text-warning"><h6>{{number_format($order->discount)}}</h6></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div><img width="50" src="{{$order->user->picture}}" alt=""></div>
                                                <div class="me-2">
                                                    {{@$order->user->name}}
                                                    <br>
                                                    {{@$order->user->email}}
                                                    <br>
                                                    {{@$order->user->mobile}}
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            {{--<span class="badge bg-{{$class}}">{{$order->status->title}}</span>--}}
                                            {{jdate($order->created_at)->format('d M Y | h:i')}}
                                            <br>
                                            {{$order->created_at->diffForHumans()}}
                                        </td>
                                        <td>
                                            <i class="fa fa-{{$iconClass}} fs-3  text-{{$class}}"></i>
                                        </td>
                                        <td>
                                            <i class="fa fa-{{$tr_iconClass}} fs-3  text-{{$tr_class}}"></i>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-warning"
                                               href="{{--{{route('admin.orders.detail',$order->id)}}--}}">جزییات</a>
                                        </td>

                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $orders->links('layouts.pagination-admin') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
