<div class="content-wrapper">
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div wire:ignore class="table-responsive">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="field-wrapper">
                                <input style="background: #ffffff" class="form-control" type="text"
                                       wire:model.live.debounce.150ms="search">
                                <div class="field-placeholder">جستجو <span class="text-danger">*</span></div>
                            </div>
                            {{ $users->links('layouts.pagination-admin') }}
                        </div>
                        <table class="table v-middle">
                            <thead>
                            <tr role="row">
                                <th>#</th>
                                <th>کاربر</th>
                                <th>نام</th>
                                <th>ایمیل</th>
                                <th>شماره همراه</th>
                                <th>لیست سفارشات</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)
                                <tr role="row" class="odd">
                                    <td>{{$user->id}}</td>
                                    <td>
                                        <div class="media-box d-flex align-items-center ">
                                            <img src="{{$user->picture}}" width="50" class=" ms-2 media-avatar"
                                                 alt="Product">
                                            <div class="media-box-body ms-2">
                                                <span class="text-warning">
                                                    ( {{@$user->created_at->diffForHumans()}} )
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>   {{ $user->name }}</td>
                                    <td>   {{ $user->email }}</td>
                                    <td>   {{ $user->mobile }}</td>
                                    <td>
                                        <a target="_blank" class="btn btn-sm btn-light"
                                           href="/admin/orders?user_id={{$user->id}}&status=all"> سفارشات
                                            <span class="text-warning me-1">({{$user->orders_count}})</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $users->links('layouts.pagination-admin') }}
                    </div>

                </div>
            </div>

        </div>
    </div>
    @push('script')
        <script>
            window.addEventListener('swal:alert-success', event => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'عملیات با موفقیت انجام شد',
                    showConfirmButton: false,
                    timer: 1500
                })
            })
        </script>
    @endpush
</div>

