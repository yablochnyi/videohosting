<?php

namespace App\Http\Livewire\Channel;

use App\Models\Channel;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Channels extends Component
{
    use WithPagination;

    public function toggle($channelId)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $channel = Channel::find($channelId);

        if (!$channel) {
            return;
        }

        if (auth()->user()->isSubscribedTo($channel)) {
            Subscription::where('user_id', auth()->id())->where('channel_id', $channel->id)->delete();
            $this->userSubscribed = false;
        } else {
            Subscription::create([
                'user_id' => auth()->id(),
                'channel_id' => $channel->id
            ]);
            $this->userSubscribed = true;
        }
    }

    public function render()
    {
        $channels = Channel::paginate(12);
        return view('livewire.channel.channels', compact('channels'));
    }
}
