<?php

namespace App\Http\Livewire\Video;

use App\Models\Video;
use Livewire\Component;

class Edit extends Component
{
    public $video;
    public $title;
    public $description;
    public $visibility;
    public $channel;
    public $category;

    public function update()
    {
        $this->video->update([
            'title' => $this->title,
            'description' => $this->description,
            'visibility' => $this->visibility,
            'channel_id' => $this->channel,
            'category_id' => $this->category,
        ]);
        $this->video->save();

        return redirect('watch/' . $this->video->slug);
    }

    public function mount(Video $video)
    {
        $this->video = $video;
        $this->title = $video->title;
        $this->description = $video->description;
        $this->visibility = $video->visibility;
        $this->channel = $video->channel_id;
        $this->category = $video->category_id;
    }
    public function render()
    {
        $channels = auth()->user()->channels()->get();
        $categories = \App\Models\Category::all();
        return view('livewire.video.edit', compact('channels', 'categories'));
    }
}
