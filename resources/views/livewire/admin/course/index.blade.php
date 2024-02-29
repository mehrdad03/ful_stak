<div class="content-wrapper-scroll">
    <style>
        i {
            font-size: 20px !important;
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
                                <a href="{{route('admin.course.create')}}"  wire:navigate  class="btn btn-success">افزودن دوره</a>
                                {{ $courses->links('layouts.pagination-admin') }}
                            </div>
                            <table class="table v-middle">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>کاور</th>
                                    <th>عنوان</th>
                                    <th>دسته بندی</th>
                                    <th>سرفصل ها</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($courses as $course)
                                    <tr wire:key="{{$course->id}}" class="position-relative">
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$course->id}}</td>
                                        <td class="sorting_1">
                                            <div class="media-box  align-items-center row">
                                                <img src="/{{@$course->image->file}}"
                                                     style="width: 307px;border-radius: 5%"
                                                     class=" ms-2 media-avatar"
                                                     alt="Product">
                                            </div>
                                            <form class="mt-2 d-inline-flex align-items-center p-1"
                                                  style="background: #575757;border-radius: 5px"
                                                  wire:submit="categoryThumbnail({{$course->id}},'{{@$course->image->file}}')">
                                                <input style="display: -webkit-inline-box;" type="file"
                                                       wire:model="courseThumbnail">
                                                <button class="btn btn-sm btn-success" type="submit">
                                                    ذخیره
                                                    <div wire:loading
                                                         wire:target="courseThumbnail({{$course->id}},'{{@$course->image->file}}')"
                                                         class="spinner-border spinner-border-sm"></div>
                                                </button>

                                            </form>
                                            @if($courseThumbnailError and explode('_',$courseThumbnailError)[0] == $course->id)

                                                <span style="position: absolute;top: 7px;height: 75%;border-radius: 10px;width: 285px;background: #c65148f0!important;"
                                                      class="alert alert-danger position-absolute d-flex align-items-center justify-content-center">{{@explode('_',$courseThumbnailError)[1]}}</span>
                                            @endif
                                        </td>
                                        <td>{{$course->title}}</td>
                                        <td>{{$course->category->title}}</td>
                                        <td>
                                            <a class="btn btn-outline-warning" wire:navigate
                                               href="{{route('admin.course.section',$course->id)}}">سرفصل ها</a>
                                        </td>
                                        <td>
                                            <a href="javascript:0"
                                               wire:confirm="با حذف این دوره فصول و دروس مرتبط با دوره هم حذف خواهند شد!"
                                               wire:click="deleteCourse({{$course->id}})"
                                               data-bs-toggle="tooltip" data-bs-placement="bottom"
                                               data-bs-original-title="صفحه دسته بندی">
                                                <i class="fa fa-trash text-danger  ms-2"></i>
                                            </a>
                                            <a href="{{route('admin.course.seo',$course->id)}}"
                                               data-bs-toggle="tooltip" data-bs-placement="bottom"
                                               data-bs-original-title="تنظیمات سئو">
                                                <i class="fa fa-pencil  text-white ms-2"></i>
                                            </a>
                                            <a wire:navigate href="{{route('admin.course.create')}}?courseId={{$course->id}}"
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
