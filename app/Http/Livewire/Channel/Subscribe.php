<?php

namespace App\Http\Livewire\Channel;

use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Subscribe extends Component
{
    public $channel;
    public $userSubscribed = false;

    public function mount()
    {

        if (Auth::check()) {
            if (auth()->user()->isSubscribedTo($this->channel)) {
                $this->userSubscribed = true;
            }

        }
    }

    public function toggle()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (auth()->user()->isSubscribedTo($this->channel)) {
            Subscription::where('user_id', auth()->id())->where('channel_id', $this->channel->id)->delete();
            $this->userSubscribed = false;
        } else {
            Subscription::create([
                'user_id' => auth()->id(),
                'channel_id' => $this->channel->id
            ]);
            $this->userSubscribed = true;
        }
    }

    public function render()
    {
        return view('livewire.channel.subscribe');
    }
}
