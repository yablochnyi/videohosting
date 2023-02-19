<?php

namespace App\Http\Livewire\Video;

use App\Models\Video;
use Livewire\Component;

class Comment extends Component
{
    public $video;

    protected $listeners = ['commentCreated' => '$refresh'];

    public function mount(Video $video)
    {
        $this->video = $video;
    }

    public function render()
    {
        return view('livewire.video.comment');
    }
}
