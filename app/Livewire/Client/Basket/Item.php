<?php

namespace App\Livewire\Client\Basket;

use App\Models\Basket;
use App\Models\Course;
use App\Models\RequirementCourse;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Item extends Component
{
    public $items;

    public $requirementsCourse = [];
    public $isMasterCourse = false;

    public function deleteConfirm($id)
    {
        $basketItem = Basket::query()->where('id', $id)->first();


        if ($basketItem->course->category->url_slug == 'master-courses') {
            $this->isMasterCourse = true;

            $this->dispatch('swal:confirm', [
                'id' => $id,
                'msg' => 'درصورت حذف دوره مسترکلاس ، دوره های پیش نیاز این دوره (غیر رایگان) خواهند شد! ',
            ]);

            $this->requirementsCourse = RequirementCourse::query()->where('course_id', $basketItem->course->id)->get();

        } else {

            $this->dispatch('swal:confirm', [
                'id' => $id,
                'msg' => 'آیا از حذف دوره مطمئن هستید؟ ',
            ]);

        }
    }


    #[On('deleteCourse')]
    public function deleteCourse($id)
    {
        if (count($this->requirementsCourse) && $this->isMasterCourse ) {


            foreach ($this->requirementsCourse as $item) {
                Basket::query()->where([
                    'user_id' => Auth::id(),
                    'course_id' => $item->course->id
                ])->update([
                    'price' => $item->course->price
                ]);
            }


        }

        Basket::query()->where([
            'user_id' => Auth::id(),
            'id' => $id,
        ])->delete();


        $this->redirectRoute('client.basket');

    }


    public function render()
    {

        return view('livewire.client.basket.item');
    }
}
