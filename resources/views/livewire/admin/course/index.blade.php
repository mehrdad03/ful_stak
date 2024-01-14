<div class="content-wrapper-scroll">
    <style>
        i{
            font-size:20px!important;
        }
    </style>
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
                                               href="{{route('admin.course.section',$course->id)}}">سرفصل ها</a>
                                        </td>
                                        <td>
                                            <a href="javascript:0" wire:confirm="با حذف این دوره فصول و دروس مرتبط با دوره هم حذف خواهند شد!"  wire:click="deleteCourse({{$course->id}})"
                                               data-bs-toggle="tooltip" data-bs-placement="bottom"
                                               data-bs-original-title="صفحه دسته بندی">
                                                <i class="fa fa-trash text-danger  ms-2"></i>
                                            </a>
                                            <a href=""
                                               data-bs-toggle="tooltip" data-bs-placement="bottom"
                                               data-bs-original-title="تنظیمات سئو">
                                                <i class="fa fa-pencil  text-white ms-2"></i>
                                            </a>
                                            <a href="{{route('admin.course.create')}}?courseId={{$course->id}}"
                                               data-bs-toggle="tooltip" data-bs-placement="bottom"
                                               data-bs-original-title="ویرایش">
                                                <i class="fa fa-edit  ms-2"></i>
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
    @push('script')
        <script>
            window.addEventListener('swal:alert-success', event => {
                Swal.fire({
                    position: 'content',
                    icon: 'success',
                    title: 'عملیات با موفقیت انجام شد',
                    showConfirmButton: false,
                    timer: 1500
                })
            })
        </script>
    @endpush

</div>
