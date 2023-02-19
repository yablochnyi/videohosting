<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class ThumbnailVideo extends Component
{
    public $path;
    protected $listeners = ['thumbnail' => 'thumbnail'];

    public function thumbnail($path)
    {
        $this->path = $path;
    }

    public function render()
    {
        return view('livewire.components.thumbnail-video');
    }
}
