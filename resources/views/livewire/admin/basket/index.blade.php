<div class="content-wrapper-scroll">
    <div class="content-wrapper">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="field-wrapper w-25">
                                    <input style="background: #ffffff" class="form-control" type="text"
                                           wire:model.live.debounce.150ms="search">
                                    <div class="field-placeholder">جستجو براساس شماره سفارش و قیمت <span
                                            class="text-danger">*</span></div>
                                </div>
                                {{ $baskets->links('layouts.pagination-admin') }}
                            </div>
                            <table class="table v-middle">
                                <thead>
                                <tr>
                                    <th>#شماره سفارش</th>
                                    <th>دوره</th>
                                    <th>قیمت</th>
{{--                                    <th>تخفیف</th>--}}
                                    <th>کاربر</th>
                                    <th>ثیت شده در</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{-- @dd($orders)--}}
                                @forelse($baskets as $item)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>

                                        <td>
                                            <div class="media-box">
                                                <a href="{{@route('client.course',['course'=>$item->course->url_slug])}}"
                                                   target="_blank"> {{$item->course->title}}</a>
                                                <br>
                                            </div>

                                        </td>
                                        <td class="text-warning"><h6>{{number_format($item->price)}}</h6></td>
                                     {{--   <td class="text-warning"><h6>{{number_format($item->discount)}}</h6></td>--}}
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div><img width="50" src="{{@$item->user->picture}}" alt=""></div>
                                                <div class="me-2">
                                                    {{@$item->user->name}}
                                                    <br>
                                                    {{@$item->user->email}}
                                                    <br>
                                                    {{@$item->user->mobile}}
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            {{--<span class="badge bg-{{$class}}">{{$item->status->title}}</span>--}}
                                            {{jdate($item->created_at)->format('d M Y | h:i')}}
                                            <br>
                                            {{$item->created_at->diffForHumans()}}
                                        </td>

                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $baskets->links('layouts.pagination-admin') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
