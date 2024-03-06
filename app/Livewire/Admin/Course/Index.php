<?php

namespace App\Livewire\Admin\Course;

use App\Models\Course;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    use WithFileUploads;


    public $search = '';
    public $fileExtension, $extensions = ['jpeg', 'jpg', 'png', 'gif'], $oldPhoto = '', $file;
    public $courseThumbnail, $courseThumbnailError;

    public function updatedFile()
    {
        $this->oldPhoto = '';
        $this->fileExtension = $this->file->getClientOriginalExtension();
        $this->validate([
            'file' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:1024', // 1MB Max
        ], [
            'file.required' => 'فیلد ضروری',
            'file.max' => 'حداکثر حجم تصویر : 1MB',
            /* 'file.dimensions' => 'ایعاد تصاویر باید w:500 , h:500 px باشد',*/
            'file.image' => 'پسوندهای قابل قبول: webp ,jpeg ,jpg , png , gif',
        ]);
    }

    public function categoryThumbnail($courseId, $oldPhoto, Course $course,)
    {

        $this->courseThumbnailError = '';

        $formData['courseThumbnail'] = $this->courseThumbnail;

        $validator = Validator::make($formData, [
            'courseThumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,webp', // 50KB Max
        ], [
            '*.required' => 'فیلد ضروری',
            'courseThumbnail.image' => 'پسوندهای قابل قبول: webp ,jpeg ,jpg , png , gif',
            'courseThumbnail.max' => 'حجم مجاز 100 کیلوبایت',
        ]);

        if ($validator->fails()) {
            $error = $validator->errors()->first();
            $this->courseThumbnailError = $courseId . '_' . $error;
        } else {
            $this->courseThumbnailError = '';
        }
        $validator->validate();
        $this->resetValidation();
        $course->courseThumbnail($courseId, $oldPhoto, $this->courseThumbnail);

    }

    public function deleteCourse($courseId)

    {
        Course::query()->where('id', $courseId)->delete();
        $this->dispatch('swal:alert-success');

    }

    public function render()
    {
        $courses = Course::query()
            ->with('category', 'coverImage', 'coverVideo')
            ->orderBy('category_id');

        return view('livewire.admin.course.index', [
                'courses' => $courses->paginate(10)
            ]
        )->layout('layouts.app-admin')->title('دوره ها');
    }
}
