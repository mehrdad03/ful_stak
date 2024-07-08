<div class="modal fade" id="add-story" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     wire:ignore.self
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="exampleModalLabel">افزودن استوری</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="upload-requirements rounded mb-3">
                    <p class="text-primary my-2 mx-3 fw-bold">شرایط :</p>
                    <ul class="text-white ">
                        <li>زمانی که داری آموزش های ما رو میبینی میتونی ویدیو بگیری</li>
                        <li>ویدوهات میتونه آهنگ داشته باشه</li>
                        <li>میتونی نظر خودت رو در قالب تصوبر یا ویدیو (میتونه به صورت سلفی هم باشه) آپلود کنی</li>
                        <li>
                            حداکثر حجم فایل ویدویی
                            <span class="text-danger d-inline-block">50 مگابایت</span>
                            و
                            برای تصویر
                            <span class="text-danger d-inline-block">1 مگابایت</span>
                            است
                        </li>

                    </ul>
                </div>
                <form wire:submit.prevent="addStory(Object.fromEntries(new FormData($event.target)))">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="title" class="mb-2 text-white">عنوان</label>
                            <input name="title" class="form-control" id="title">
                        </div>
                        @error('title')
                        <span
                            class="alert alert-danger d-block my-2">{{ $message }}</span>
                        @enderror
                        <div class="form-group mt-2" wire:ignore>
                            <label for="file" class="mb-2 text-white">ویدیو یا تصویر</label>
                            <input
                                data-max-file-size="50MB"
                                type="file" name="filepond" id="filepond"
                                accept="image/png, image/jpg,image/jpeg, video/mp4"/>

                        </div>

                    </div>
                    @error('fileSize')
                    <span
                        class="alert alert-danger d-block my-1">{{ $message }}</span>
                    @enderror
                    <div class="mt-3 submit ">
                        <button class="main-btn py-1 px-3 add-story-btn ">

                            <i class="fa fa-spinner fa-spin" wire:loading></i>
                            <span wire:loading.remove> ذخیره</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
