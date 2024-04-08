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
                                <div class="field-wrapper">
                                    <input style="display: -webkit-inline-box;" type="file"
                                           wire:model="video">

                                    <div wire:loading  wire:target="video">Uploading...</div>
                                    <div class="field-placeholder">ویدیو معرفی</div>
                                </div>
                                @error('video') <span
                                    class="text-danger d-block mb-2">{{ $message }}</span> @enderror

                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-start ma-ts">
                                <button wire:target="video"  wire:loading.attr="disabled" class="btn  btn-primary add-success-noti-admin">
                                    <span wire:loading.remove wire:target="video">
                                        ذحیره
                                    </span>

                                    <span wire:loading  wire:target="video" class="spinner-border text-white" role="status">

                                    </span>
                                </button>
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
                                    <th>ID</th>
                                    <th>ویدیو</th>
                                    <th>عنوان</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($lectures as $lecture)
                                    <tr>
                                        <td>{{$lecture->id}}</td>

                                        <td>
                                            <video width="320" height="240" controls>
                                                <source src="{{config('app.ftp_url').@$lecture->video->path }}"
                                                        type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>


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
