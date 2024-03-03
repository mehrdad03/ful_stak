<div class="content-wrapper-scroll">
    <div class="content-wrapper">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="field-wrapper">
                                <input style="background: #ffffff" class="form-control" type="text" wire:model.debounce.500ms="search">
                                <div class="field-placeholder">جستجو <span class="text-danger">*</span></div>
                            </div>
                            {{ $transactions->links('layouts.pagination-admin') }}
                        </div>
                        <div class="table-responsive">
                            <table class="table v-middle">
                                <thead>
                                <tr>
                                    <th>نام کاربری</th>
                                    <th>قیمت</th>
                                    <th>شماره کارت</th>
                                    <th>کدارجاع</th>
                                    <th>وضعیت</th>
                                    <th>تاریخ تراکنش</th>
                                    <th>سفارش</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($transactions as $transaction)

                                    @php
                                        $class='';

                                        if ($transaction->status==0){
                                            $class='danger';
                                        }elseif ($transaction->status==1){
                                            $class='success';
                                        }
                                    @endphp
                                    <tr>
                                        <td>{{$transaction->user->name}}</td>
                                        <td class="text-warning"><h6>{{number_format($transaction->amount)}}</h6></td>
                                        <td style="direction: ltr;text-align: right">{{$transaction->cardPan}}</td>
                                        <td>{{$transaction->referenceId}}</td>
                                        @if($transaction->status==0)
                                            <td class="text-danger">
                                                <i class="fa fa-times fs-3"></i>
                                            </td>
                                        @elseif($transaction->status==1)
                                            <td class="text-success">
                                                <i class="fa fa-check-square fs-3"></i>
                                            </td>
                                        @endif
                                        <td>
                                            {{jdate($transaction->created_at)->format('d M Y | h:i')}}
                                            <br>
                                            {{$transaction->created_at->diffForHumans()}}
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-warning"
                                               href="{{--{{route('admin.orders.detail',$transaction->order_id)}}--}}">جزییات
                                                سفارش</a>

                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>

                        </div>
                        {{ $transactions->links('layouts.pagination-admin') }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
