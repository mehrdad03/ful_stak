<video class="w-100" controls poster="/{{@$course->coverImage->path}}" loading="lazy">
    <source src="{{config('app.ftp_url').@$course->coverVideo->path }}"
            type="video/mp4">
    Your browser does not support the video tag.
</video>

