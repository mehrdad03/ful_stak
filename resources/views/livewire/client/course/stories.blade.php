@push('links')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
          rel="stylesheet">
@endpush
<section id="story">

    @include('livewire.client.course.stories.items-story')
    @include('livewire.client.course.stories.show-story-modal')
    @if(\Illuminate\Support\Facades\Auth::check())
        @include('livewire.client.course.stories.add-story-modal')
    @endif

    @push('scripts')

        <script>
            $(document).ready(function () {

                $('#storyModal').on('show.bs.modal', function (event) {

                    var button = $(event.relatedTarget);
                    var videoSrc = button.data('video');
                    var modal = $(this);
                    modal.find('#storyVideo source').attr('src', videoSrc);
                    modal.find('#storyVideo')[0].load();
                });

                $('#storyModal').on('hidden.bs.modal', function (event) {
                    var modal = $(this);
                    modal.find('#storyVideo')[0].pause();
                });
            });
        </script>

    @endpush
</section>
