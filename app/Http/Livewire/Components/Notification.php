<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notification extends Component
{
    public $notifications;
    public $count;
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function read($id)
    {
        \App\Models\Notification::where('channel_id', $id)
            ->where('user_id', Auth::id())
            ->update(['is_viewed' => true]);
        $this->emit('refreshComponent');
    }
    public function mount()
    {
        $this->notifications = \App\Models\Notification::query()
            ->where('is_viewed', '=', false)
            ->where('user_id', '=', Auth::id())
            ->get();
        $this->count = $this->notifications->count();
    }
    public function render()
    {
        return view('livewire.components.notification');
    }
}
