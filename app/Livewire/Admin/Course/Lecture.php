<?php

namespace App\Livewire\Admin\Course;

use App\Models\CourseLectureVideo;
use App\Models\CourseSectionLecture;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;


class Lecture extends Component
{
    use WithFileUploads;

    public $lectures;
    public $video, $videoError;


    public function mount($sectionId)
    {
        $this->lectures = CourseSectionLecture::query()->where('course_section_id', $sectionId)->get();

    }

    public function convertVideo($lectureId, CourseSectionLecture $courseSectionLecture)
    {


        $formData['video'] = $this->video;
        $formData['lectureId'] = $lectureId;
        $validator = Validator::make($formData, [
            'video' => 'required|mimes:mp4,avi,flv,wmv',
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
        $courseSectionLecture->convertVideo($this->video, $lecture->courseSection->course->id, $lectureTitle);


    }

    public function render()
    {

        return view('livewire.admin.course.lecture')->layout('layouts.app-admin');
    }
}
