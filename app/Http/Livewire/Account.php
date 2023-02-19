<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Account extends Component
{
    public function render()
    {
        $channels = Auth::user()->channels()->get();
        $subscribes = Auth::user()->subscribedChannels()->get();
        $videos = Video::where('user_id', Auth::id())->get();
        return view('livewire.account', compact('channels', 'subscribes', 'videos'));
    }
}
