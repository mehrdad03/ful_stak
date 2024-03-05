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
                                           wire:model.debounce.500ms="search">
                                    <div class="field-placeholder">جستجو براساس شماره سفارش و قیمت <span
                                            class="text-danger">*</span></div>
                                </div>
                                {{ $comments->links('layouts.pagination-admin') }}
                            </div>
                            <table class="table v-middle">
                                <thead>
                                <tr>
                                    <th>#شماره سفارش</th>
                                    <th>متن سوال</th>
                                    <th>کاربر</th>
                                    <th>دوره</th>
                                    <th>ثیت شده در</th>
                                    <th>وضعیت نمایش</th>
                                    <th>وضعیت پرداخت</th>
                                    <th>پاسخ</th>
                                </tr>
                                </thead>
                                <tbody>

                                @forelse($comments as $comment)

                                    @php
                                        $class='';
                                        $iconClass='';

                                        if ($comment->status ){
                                            $class='success';
                                            $iconClass='check-square';
                                        }else{
                                            $class='danger';
                                             $iconClass='times';
                                        }

                                    @endphp
                                    <tr wire:key="{{$loop->index}}">
                                        <td>{{$loop->index+1}}</td>

                                        <td>{{$comment->comment}}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div><img width="50" src="{{$comment->user->picture}}" alt=""></div>
                                                <div class="me-2">
                                                    {{@$comment->user->name}}
                                                    <br>
                                                    {{@$comment->user->email}}
                                                    <br>
                                                    {{@$comment->user->mobile}}
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{$comment->course->url_slug}}"
                                               target="_blank">{{@$comment->course->title}}</a>
                                        </td>
                                        <td wire:ignore>
                                            {{--<span class="badge bg-{{$class}}">{{$comment->status->title}}</span>--}}
                                            {{jdate($comment->created_at)->format('d M Y | h:i')}}
                                            <br>
                                            {{$comment->created_at->diffForHumans()}}
                                        </td>
                                        <td>
                                            <i class="fa fa-{{$iconClass}} fs-3  text-{{$class}}"></i>
                                        </td>
                                        <td>
                                            <div class="form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                       style="width: 3rem;height: 1.5rem;cursor:pointer;"
                                                       id="showEmailNotifications"
                                                       wire:change="changeStatus({{$comment->id}},{{$comment->user_id}})"
                                                    {{$comment->status?'checked=""' : ''}}>
                                                <label class="form-check-label" for="showEmailNotifications"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a wire:navigate href="{{route('admin.comments.answer',$comment->id)}}">
                                                <i class="fa fa-edit fs-3"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $comments->links('layouts.pagination-admin') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
