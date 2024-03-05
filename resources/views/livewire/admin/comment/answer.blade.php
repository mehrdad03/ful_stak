<div class="content-wrapper-scroll">
    {{--    @dd($comment)--}}
    <style>
        .select2-results__option, .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
            text-transform: uppercase;
        }

    </style>
    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <!-- Card start -->
                <div class="card">
                    <div class="card-body">

                        <form id="myForm" wire:submit.prevent="submit(Object.fromEntries(new FormData($event.target)))">
                            <div class="row gutters">


                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-t">
                                    <h4 class="mb-4">پاسخ کامنت دوره ی : {{$comment->course->title}}</h4>
                                    <div class="bg-warning mb-5 p-4 text-secondary fw-normal fs-5">
                                        {{@$comment->answer->comment}}
                                    </div>

                                    <div class="field-wrapper" wire:ignore>
                                        <div class="field-placeholder">توضحیات بلند
                                            <span
                                                class="text-danger">*</span>
                                        </div>

                                        <textarea id="editor1"
                                                  class="form-control @error('description') error-input-border @enderror"
                                                  name="editor1">{{@$comment->long_description}}</textarea>
                                    </div>
                                    @foreach ($errors->get('editor1') as $message)
                                        <span wire:loading.remove
                                              class="alert alert-danger back d-block w-100 mb-4 mt-2">{{ $message}}</span>
                                    @endforeach

                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ma-ts text-left">
                                    <button type="submit" class="btn btn-primary ms-1">ذخیره</button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')



        <script>
            document.addEventListener('livewire:navigated', () => {
                const editor = CKEDITOR.replace('editor1', {
                    filebrowserUploadUrl: "{{route('admin.ck-upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form',
                    contentsLangDirection: 'rtl',
                    height: 700,

                });
                editor.on('change', function (event) {
                    console.log(event.editor.getData())
                @this.set('description', event.editor.getData());
                })
            })


        </script>

    @endpush

</div>
