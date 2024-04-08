<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        @if(isset($_GET['courseId']))
                            ویرایش دوره :
                            {{@$course->title}}
                        @else
                            افزودن دوره
                        @endif
                    </div>
                </div>
                <div class="card-body">

                    <form wire:submit.prevent="createCourse(Object.fromEntries(new FormData($event.target)))">
                        <!-- Row start -->
                        <div class="row gutters">
                            <div class="col-md-6">
                                <div class="col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text" placeholder="" name="title"
                                               value="{{@$course->title}}">
                                        <div class="field-placeholder">عنوان <span class="text-danger">*</span></div>
                                    </div>
                                    @error('title') <span
                                        class="text-danger d-block mb-2">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text" placeholder="" name="price"
                                               value="{{@$course->price}}">
                                        <div class="field-placeholder">قیمت <span class="text-danger"></span></div>
                                    </div>
                                    @error('price') <span
                                        class="text-danger d-block mb-2">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text" placeholder="" name="discount"
                                               value="{{@$course->discount}}">
                                        <div class="field-placeholder">تخفیف <span class="text-danger"></span></div>
                                    </div>
                                    @error('discount') <span
                                        class="text-danger d-block mb-2">{{ $message }}</span> @enderror

                                </div>

                                <div class="col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <select class=" " name="categoryId" wire:ignore
                                                title="Select Product Category">
                                            @foreach($categories as $item)
                                                <option wire:key="{{$item->id}}"
                                                        @if($item->id==@$course->category_id)
                                                            selected
                                                        @endif
                                                        value="{{ @$item->id }}">{{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                        <div class="field-placeholder">دسته بندی</div>
                                    </div>
                                    @error('title') <span
                                        class="text-danger d-block mb-2">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <select class="" name="teacherId" wire:ignore
                                                title="Select Product Category">
                                            @foreach($teachers as $item)
                                                <option wire:key="{{$item->id}}" value="{{ @$item->id }}"
                                                        @if($item->id==@$course->teacher_id)
                                                            selected
                                                    @endif

                                                >{{ $item->user->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="field-placeholder">مدرس</div>
                                    </div>
                                    @error('teacherId') <span
                                        class="text-danger d-block mb-2">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input style="display: -webkit-inline-box;" type="file"
                                               wire:model="courseThumbnail" name="courseThumbnail">
                                        <div wire:loading wire:target="courseThumbnail">Uploading...</div>
                                        <div class="field-placeholder">کاور دوره</div>

                                    </div>
                                    @error('courseThumbnail') <span
                                        class="text-danger d-block mb-2">{{ $message }}</span> @enderror
                                    @if(@$course->coverImage->path)
                                        <div class="w-100 mb-4">
                                            <img src="{{config('app.ftp_url').@$course->coverImage->path }}"
                                                 style="width: 307px;border-radius: 5%"
                                                 class=" ms-2 media-avatar"
                                                 alt="Product">

                                        </div>
                                    @endif


                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                    <textarea class="form-control" name="requirements"
                                              rows="3">{{@$course->requirements}}</textarea>
                                        <div class="field-placeholder">پیش نیازها</div>
                                    </div>
                                    @error('requirements') <span
                                        class="text-danger d-block mb-2">{{ $message }}</span> @enderror

                                </div>
                                <div class="mt-4 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                    <textarea class="form-control" name="what_you_will_learn"
                                              rows="3">{{@$course->what_you_will_learn}}</textarea>
                                        <div class="field-placeholder">بعد از گذراندن این دوره</div>
                                    </div>
                                    @error('what_you_will_learn') <span
                                        class="text-danger d-block mb-2">{{ $message }}</span> @enderror

                                </div>
                                <div class="mt-4 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                    <textarea class="form-control" name="short_description"
                                              rows="3">{{@$course->short_description}}</textarea>
                                        <div class="field-placeholder">توضیحات کوتاه</div>
                                    </div>
                                    @error('short_description') <span
                                        class="text-danger d-block mb-2">{{ $message }}</span> @enderror

                                </div>
                                <div class="mt-4 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                    <textarea class="form-control" name="short_description"
                                              rows="3">{{@$course->short_description}}</textarea>
                                        <div class="field-placeholder">توضیحات کوتاه</div>
                                    </div>
                                    @error('short_description') <span
                                        class="text-danger d-block mb-2">{{ $message }}</span> @enderror

                                </div>
                                <div class="mt-4 col-12">

                                    <div class="field-wrapper">
                                        <input style="display: -webkit-inline-box;" type="file"
                                               wire:model="courseIntroVideo">
                                        <div wire:loading wire:target="courseIntroVideo">Uploading...
                                            <div class="field-placeholder">ویدیو معرفی</div>
                                        </div>
                                        @error('courseIntroVideo') <span
                                            class="text-danger d-block mb-2">{{ $message }}</span> @enderror
                                        @if(@$course->coverVideo->path)
                                            <div class="w-100 mb-4">

                                                <video width="320" height="240" controls>
                                                    <source src="{{config('app.ftp_url').@$course->coverVideo->path }}"
                                                            type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>

                                            </div>
                                        @endif


                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <div class="text-start">
                                        <button wire:target="courseIntroVideo" wire:loading.attr="disabled"
                                                class="btn btn-primary ms-1">
                                             <span wire:loading.remove wire:target="courseIntroVideo">
                                        ذحیره
                                    </span>

                                            <span wire:loading wire:target="courseIntroVideo"
                                                  class="spinner-border text-white"
                                                  role="status">

                                    </span>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
