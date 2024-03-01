<div class="content-wrapper-scroll">
    <style>
        .actions i {
            font-size: 18px;
        }

        .ma-t {
            margin-top: 40px;
        }

        .ma-ts {
            margin-top: 20px;
        }

        .t1 {
            align-items: center;
            display: flex;
        }

    </style>
    <div class="content-wrapper">
        <div class="row gutters">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="card position-sticky" style="top: 0">
                    <div class="card-header">
                        <div class="card-title">
                            ویرایش دورس فصل :
                            {{$section->title}}
                        </div>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="saveLecture(Object.fromEntries(new FormData($event.target)))">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="field-wrapper">
                                    <input name="title" id="title" value="{{@$title}}"
                                           class="form-control @error('title') error-input-border @enderror"
                                           type="text">
                                    <div class="field-placeholder">عنوان<span class="text-danger">*</span>
                                    </div>
                                    @foreach ($errors->get('title') as $message)
                                        <div wire:loading.remove
                                             class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                    @endforeach
                                </div>

                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-start ma-ts">
                                <button type="submit" class="btn  btn-primary add-success-noti-admin">ذحیره</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="d-flex justify-content-between align-items-center">
                               {{-- <div class="field-wrapper w-25">
                                    <input style="background: #ffffff" class="form-control" type="text"
                                           wire:model.debounce.500ms="search">
                                    <div class="field-placeholder">جستجو <span
                                            class="text-danger">*</span></div>
                                </div>--}}
                            </div>
                            <table class="table v-middle">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>ویدیو</th>
                                    <th>عنوان</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($lectures as $lecture)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$lecture->id}}</td>

                                        <td>
                                            <div class="media-box  align-items-center row">
                                                <img src="/{{@$category->image->file}}"
                                                     style="width: 307px;border-radius: 5%"
                                                     class=" ms-2 media-avatar"
                                                     alt="Product">
                                            </div>
                                            <form class="mt-2 d-inline-flex align-items-center p-1" enctype="multipart/form-data"
                                                  style="background: #575757;border-radius: 5px"
                                                 action="{{route('admin.upload-video',[$lecture->courseSection->course->id,$lecture->title,$lecture->id,$lecture->courseSection->id])}}" method="post">
                                                @csrf

                                                <input style="display: -webkit-inline-box;" type="file" name="video"
                                                    >
                                                <button class="btn btn-sm btn-success" type="submit">
                                                    ذخیره
                                                    <div wire:loading
                                                         wire:target="convertVideo({{$lecture->id}})"
                                                         class="spinner-border spinner-border-sm"></div>
                                                </button>

                                            </form>
                                            {{@explode('_',$videoError)[1]}}
                                            @if($videoError and explode('_',$videoError)[0] == $lecture->id)

                                               {{-- <span
                                                    style="position: absolute;top: 7px;height: 75%;border-radius: 10px;width: 285px;background: #c65148f0!important;"
                                                    class="alert alert-danger position-absolute d-flex align-items-center justify-content-center">{{@explode('_',$videoError)[1]}}</span>--}}
                                            @endif
                                        </td>

                                        <td>{{$lecture->title}}</td>
                                        <td>
                                            <div class="actions t1">
                                                <a href="javascript:0"
                                                   wire:click="editLecture({{$lecture->id}})"
                                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="ویرایش">
                                                    <i class="fa fa-edit text-info ms-2"></i>
                                                </a>
                                                <a href="javascript:0"
                                                   wire:confirm="با حذف این فصل دروس مرتبط با این درس هم حذف خواهند شد!"
                                                   wire:click="delete({{$lecture->id}})"
                                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="حذف">
                                                    <i class="fa fa-trash text-danger ms-2"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
