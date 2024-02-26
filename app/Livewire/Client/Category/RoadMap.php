<?php

namespace App\Livewire\Client\Category;

use App\Models\Category;
use Livewire\Component;
use function Laravel\Prompts\error;

class RoadMap extends Component
{
    public $category;

    public function mount($category)
    {
        $this->category = $category;
        if (!in_array($category, ['fullstack-road-map', 'backend-road-map', 'frontend-road-map'])) {
            abort(404);
        }
    }

    public function render()
    {

        $view = '';
        if ($this->category == 'frontend-road-map') {
            $view = 'frontend-road-map';
        }elseif ($this->category == 'backend-road-map'){
            $view = 'backend-road-map';
        } elseif ($this->category == 'fullstack-road-map') {
            $view = 'fullstack-road-map';
        }

        return view('livewire.client.category.'.$view);
    }
}
