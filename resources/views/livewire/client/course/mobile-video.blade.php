<video loading="lazy" class="w-100 mb-4 d-lg-none rounded-5" controls poster="/{{@$course->coverImage->path}}" >
    <source src="{{config('app.ftp_url').@$course->coverVideo->path }}"
            type="video/mp4">
    Your browser does not support the video tag.
</video>

