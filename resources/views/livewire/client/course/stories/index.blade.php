@push('links')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
          rel="stylesheet">
@endpush
<section id="story">

    @include('livewire.client.course.stories.items-story')


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
                    var video = modal.find('#storyVideo');
                    video.find('source').attr('src', videoSrc);
                    video[0].load();
                    video[0].play();
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

    @endpush
</section>
