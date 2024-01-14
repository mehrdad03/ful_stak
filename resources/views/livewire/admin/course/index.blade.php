<div class="content-wrapper-scroll">
    <div class="content-wrapper">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card">

                    <div class="card-body">

                        <div class="table-responsive">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="field-wrapper w-25">
                                    <input style="background: #ffffff" class="form-control" type="text"
                                           wire:model.debounce.500ms="search">
                                    <div class="field-placeholder">جستجو <span
                                            class="text-danger">*</span></div>
                                </div>
                                {{ $courses->links('layouts.pagination-admin') }}
                            </div>
                            <table class="table v-middle">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>عنوان</th>
                                    <th>سرفصل ها</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($courses as $course)
                                    <tr  wire:key="{{$course->id}}">
                                        <td>{{$course->id}}</td>
                                        <td>{{$course->title}}</td>
                                        <td>
                                            <a class="btn btn-outline-warning"
                                               href="">سرفصل ها</a>
                                        </td>
                                        <td>
                                            <a href="" target="_blank"
                                               data-bs-toggle="tooltip" data-bs-placement="bottom"
                                               data-bs-original-title="صفحه دسته بندی">
                                                <i class="icon-open_in_new text-white ms-2"></i>
                                            </a>
                                            <a href=""
                                               data-bs-toggle="tooltip" data-bs-placement="bottom"
                                               data-bs-original-title="تنظیمات سئو">
                                                <i class="icon-edit-2 text-white ms-2"></i>
                                            </a>
                                            <a href=""
                                               data-bs-toggle="tooltip" data-bs-placement="bottom"
                                               data-bs-original-title="ویژگی">
                                                <i class="icon-add_box text-white ms-2"></i>
                                            </a>
                                            <a href=""
                                               data-bs-toggle="tooltip" data-bs-placement="bottom"
                                               data-bs-original-title="قوانین">
                                                <i class="icon-attach_file text-danger ms-2"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $courses->links('layouts.pagination-admin') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
