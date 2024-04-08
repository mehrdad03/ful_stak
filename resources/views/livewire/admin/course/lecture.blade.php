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
                                <div class="field-wrapper" x-data="{isUploading:false,progress:0 }"
                                   x-on:livewire-upload-start="isUploading=true"
                                   x-on:livewire-upload-finish="isUploading=false"
                                   x-on:livewire-upload-error="isUploading=false"
                                   x-on:livewire-upload-progress="progress=$event.detail.progress"
                                >
                                    <input style="display: -webkit-inline-box;" type="file"
                                           wire:model="video">

                                    <div class="mt-2" wire:loading wire:target="video">Uploading...</div>


                                    <div class="field-placeholder">ویدیو معرفی</div>

                                    <div x-show="isUploading" class="progress mt-3 ltr">
                                        <div class="progress-bar progress-bar-striped  bg-danger progress-bar-animated"
                                             role="progressbar" x-bind:style="`width:${progress}%`" aria-valuenow="10"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>



                                </div>
                                @error('video') <span
                                    class="text-danger d-block mb-2">{{ $message }}</span> @enderror

                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-start ma-ts">
                                <button wire:target="video" wire:loading.attr="disabled"
                                        class="btn  btn-primary add-success-noti-admin">
                                    <span wire:loading.remove wire:target="video">
                                        ذحیره
                                    </span>

                                    <span wire:loading wire:target="video" class="spinner-border text-white"
                                          role="status">

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
                                    <th>رایگان</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($lectures as $lecture)
                                    <tr wire:key="{{$loop->index}}">
                                        <td>{{$lecture->id}}</td>

                                        <td wire:ignore>
                                            <video width="320" height="240" controls wire:ignore>
                                                <source src="{{config('app.ftp_url').@$lecture->video->path }}"
                                                        wire:ignore
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
                                        <td>
                                            <div class="form-switch">
                                                <input style="width: 3rem;height: 1.5rem;cursor:pointer;"
                                                       class="form-check-input" type="checkbox"
                                                       {{$lecture->free?'checked=""' : ''}}  wire:change="isFree({{$lecture->id}})">
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $lectures->links('layouts.pagination-admin') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
