<?php

namespace App\Livewire\Admin\Course;

use App\Models\CourseSection;
use App\Models\CourseSectionLecture;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;


class Lecture extends Component
{
    use WithFileUploads;

    public $lectures,$lectureId=0,$sectionId,$title,$lecture;
    public $video, $videoError;
    public $section;


    public function mount($sectionId)
    {
        $this->sectionId=$sectionId;
        $this->section=CourseSection::query()->where('id',$sectionId)->first();

    }

   /* public function convertVideo($lectureId, CourseSectionLecture $courseSectionLecture)
    {


        $formData['video'] = $this->video;
        $formData['lectureId'] = $lectureId;

        $validator = Validator::make($formData, [
            'video' => 'required|mimes:mp4,avi,flv,wmv,mkv',
            'lectureId' => 'required|exists:course_section_lectures,id', // 50KB Max
        ], [
            '*.required' => 'فیلد ضروری',
            'video.mimes' => 'پسوندهای قابل قبول: mp4,avi,flv,wmv',
            'lectureId.exists' => 'ورودی نامعتبر',
        ]);

        if ($validator->fails()) {
            $error = $validator->errors()->first();
            $this->videoError = $lectureId . '_' . $error;
        } else {
            $this->videoError = '';
        }

        $lecture = CourseSectionLecture::query()->where('id', $lectureId)->with('courseSection.course')->first();
        $sectionTitle = $lecture->courseSection->title;
        $courseTitle = $lecture->courseSection->course->title;
        $lectureTitle = $lecture->title .'_'. $sectionTitle .'_'. $courseTitle;
       $validator->validate();
        $this->resetValidation();
        $courseSectionLecture->convertVideo($this->video, $lecture->courseSection->course->id, $lectureTitle,$lectureId);


    }*/
    public function saveLecture($formData, CourseSectionLecture $courseSectionLecture)
    {
        $validator = Validator::make($formData, [
            'title' => 'required | string',
        ], [
            '*.required' => ' فیلد ضروری است.',
            '*.string' => ' فیلد باید حروف باشد.',
        ]);
        $validator->validate();
        $this->resetValidation();
        $courseSectionLecture->saveLecture($formData,$this->lectureId, $this->sectionId);
        $this->reset('title');
        $this->dispatch('swal:alert-success');
        $this->redirect('/admin/course/section/'.$this->sectionId.'/lecture');
    }

    public function editLecture($lecture_id)
    {

        $lecture = CourseSectionLecture::query()->where('id', $lecture_id)->first();
        $this->title = $lecture->title;
        $this->lectureId = $lecture_id;

    }

    public function delete($section_id)
    {
        CourseSectionLecture::query()->where('id', $section_id)->delete();
        $this->dispatch('swal:alert-success');
    }

    public function render()
    {
        $lectures=$this->lectures  = CourseSectionLecture::query()->where('course_section_id', $this->sectionId)->get();
        return view('livewire.admin.course.lecture', ['lectures' => $lectures])->layout('layouts.app-admin');
    }
}
