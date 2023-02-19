<?php

namespace App\Http\Livewire\Video;

use App\Models\Video;
use Livewire\Component;

class NewComment extends Component
{
    public $video;
    public $body;
    public $col;

    public function mount(Video $video, $col)
    {
        $this->video = $video;
        $col == 0 ? $this->col = null : $this->col = $col;

    }

    public function resetForm()
    {
        $this->body = '';
    }

    public function store()
    {
        auth()->user()->comments()->create([
            'body' => $this->body,
            'video_id' => $this->video->id,
            'replay_id' => $this->col,
        ]);
        $this->resetForm();
        $this->emit('commentCreated');
    }

    public function render()
    {
        return view('livewire.video.new-comment');
    }
}
