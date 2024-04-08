<?php

namespace App\Livewire\Admin\Course;

use App\Models\CourseSection;
use App\Models\CourseSectionLecture;
use App\Models\Media;
use App\Trait\UploadFiles;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;


class Lecture extends Component
{
    use WithFileUploads, UploadFiles;

    public $lectures, $lectureId = 0, $sectionId, $title, $lecture, $courseId;
    public $video;
    public $section;
    public $oldLectureVideo;


    public function mount($sectionId)
    {
        $this->sectionId = $sectionId;
        $this->section = CourseSection::query()
            ->where('id', $sectionId)->first();
        $this->courseId = $this->section->course_id;


    }

    public function saveLecture($formData, CourseSectionLecture $courseSectionLecture)
    {

        $formData['video'] = $this->video;

        $validator = Validator::make($formData, [
            'video' => 'nullable|mimes:mp4',
            'title' => 'required | string',
        ], [
            '*.required' => ' فیلد ضروری است.',
            '*.string' => ' فیلد باید حروف باشد.',
            'mimes' => 'فرمت باید mp4 باشد',
        ]);

        $validator->validate();
        $this->resetValidation();

        $courseSectionLecture->saveLecture($formData, $this->lectureId, $this->sectionId, $this->courseId, $this->oldLectureVideo);

        $this->reset('title');
        $this->dispatch('swal:alert-success');
        $this->redirect('/admin/course/section/' . $this->sectionId . '/lecture');
    }

    public function editLecture($lecture_id)
    {

        $lecture = CourseSectionLecture::query()
            ->where('id', $lecture_id)
            ->first();


        $oldLectureVideo = Media::query()
            ->where('lecture_id', $lecture_id)
            ->pluck('path')->first();
        $this->title = $lecture->title;
        $this->lectureId = $lecture_id;
        $this->oldLectureVideo = $oldLectureVideo;

    }

    public function delete($lectureId)
    {

        CourseSectionLecture::query()
            ->where('id', $lectureId)
            ->delete();


        $lecture = Media::query()->where([
            'id' => $lectureId,
            'type' => 'lecture-video',
            'course_id' => $this->courseId,
        ])->first();

        $this->removeOldFile($lecture->path);

        $lecture->delete();

        $this->redirectRoute('admin.course.section.lecture', $this->sectionId);


    }

    public function render()
    {
        $lectures = $this->lectures = CourseSectionLecture::query()
            ->where('course_section_id', $this->sectionId)
            ->with('courseSection')
            ->get();
        return view('livewire.admin.course.lecture', ['lectures' => $lectures])
            ->layout('layouts.app-admin');
    }
}
