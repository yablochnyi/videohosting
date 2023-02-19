<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Livewire\Component;

class SearchVideo extends Component
{
    public $q;
    public $search_term;

    public function mount()
    {
        $this->fill(request()->only('q'));
        $this->search_term = '%' . $this->q . '%';
    }

    public function render()
    {
        $videos = Video::where('title', 'like', $this->search_term)->orderByDesc('created_at')->take(8)->get();
        return view('livewire.search-video', compact('videos'));
    }
}
