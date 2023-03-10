<?php

namespace App\Http\Livewire\Video;

use App\Models\Video;
use Livewire\Component;

class Category extends Component
{
    public $category;

    public function mount(\App\Models\Category $category)
    {
        $this->category = $category;
    }
    public function render()
    {
        $videos = Video::where('category_id', $this->category->id)->get();
        return view('livewire.video.category', compact('videos'));
    }
}
