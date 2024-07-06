@push('links')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
          rel="stylesheet">
@endpush
<section id="story">

    @include('livewire.client.course.stories.items-story')


    @if(!$latestStory ) @endif
        @include('livewire.client.course.stories.add-story-modal')



    @include('livewire.client.course.stories.show-story-modal')


    @push('scripts')

        <script>
            $(document).ready(function () {
                var showStoryModal = $('#show-story')
                showStoryModal.on('show.bs.modal', function (event) {

                    var button = $(event.relatedTarget);
                    var videoSrc = button.data('video');

                    var modal = $(this);
                    var mediaContainer = modal.find('.modal-body');

                    if (videoSrc.endsWith('.webp')) {
                        // Replace video tag with img tag for webp images
                        var imageHtml = '<img src="' + videoSrc + '" class="w-75 h-100 img-fluid">';
                        mediaContainer.html(imageHtml);
                    } else {
                        // Use video tag for other video types
                        var videoHtml = '<video id="storyVideo" controls class="w-75 h-100">';
                        videoHtml += '<source src="' + videoSrc + '" type="video/mp4">';
                        videoHtml += 'Your browser does not support the video tag.</video>';
                        mediaContainer.html(videoHtml);
                        var video = modal.find('#storyVideo')[0];
                        video.load();
                        video.play();
                    }
                    /*ارسال مسیر فایل استوری برای ثبت ویدیو*/
                @this.call('submitStoryView', videoSrc)
                    ;

                });

                showStoryModal.on('hidden.bs.modal', function (event) {
                    var modal = $(this);
                    modal.find('#storyVideo')[0].pause();
                });
            });
        </script>

        <script src="/frontend/js/filepond.js"></script>
        <script src="/frontend/js/filepond.jquery.js"></script>
        <script src="/frontend/js/filepond-plugin-image-preview.js"></script>
        <script src="/frontend/js/filepond-plugin-file-validate-size.js"></script>
        <script src="/frontend/js/filepond-plugin-file-validate-type.js"></script>
        <script>

            FilePond.registerPlugin(
                FilePondPluginImagePreview,
                FilePondPluginFileValidateSize,
                FilePondPluginFileValidateType
            );
            $("#filepond").filepond({
                allowImagePreview: true,
                allowImageFilter: true,
                imagePreviewHeight: 100,
                allowMultiple: false,
                allowFileTypeValidation: true,
                allowRevert: true,
                acceptedFileTypes: ["image/png", "image/jpeg", "image/jpg", "video/mp4"],
                maxFiles: 1,
                credits: false,
                server: {
                    headers: {
                        "X-CSRF-TOKEN": "{{csrf_token()}}",
                    },
                    url: "/upload/story",
                    process: false,
                    // revert: true,
                    restore: "temp/upload/delete",
                    fetch: false,
                },
            });

        </script>

        {{--manage submit btn in file uploading--}}
        <script>

            var filepond = $('#filepond');
            filepond.on('FilePond:addfile', function (e) {
                $('.add-story-btn').attr('disabled', 'disabled')
                $('form .fa-spinner').show()
            });
            filepond.on('FilePond:processfile', function (e) {
                $('.add-story-btn').removeAttr('disabled');
                $('form .fa-spinner').hide()
            });
            filepond.on('FilePond:processfileabort', function (e) {
                $('.add-story-btn').removeAttr('disabled');
                $('form .fa-spinner').hide()
            });
        </script>
        {{--manage submit btn in file uploading--}}

        <script>
            window.addEventListener('storyIsUploaded', event => {

                $('#add-story').modal('hide')

                Swal.fire({
                    position: 'content',
                    icon: 'success',
                    title: "استوری شما با موفقیت ارسال شد",
                    text: "بعد از تایید نمایش داده خواهد شد!",
                    showConfirmButton: false,
                    color: '#fff',
                    background: '#20222F',

                    timer: 4000
                })
            })
        </script>
    @endpush
</section>
