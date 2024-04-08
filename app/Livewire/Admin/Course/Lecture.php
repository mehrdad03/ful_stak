<?php

namespace App\Livewire\Admin\Course;

use App\Models\CourseSection;
use App\Models\CourseSectionLecture;
use App\Models\Media;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;


class Lecture extends Component
{
    use WithFileUploads;

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

        $formData['video']=$this->video;

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

        $courseSectionLecture->saveLecture($formData, $this->lectureId, $this->sectionId, $this->courseId,$this->oldLectureVideo);

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
        $this->oldLectureVideo =$oldLectureVideo;

    }

    public function delete($section_id)
    {
        CourseSectionLecture::query()
            ->where('id', $section_id)
            ->delete();
        $this->dispatch('swal:alert-success');
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
