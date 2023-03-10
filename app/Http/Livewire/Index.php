<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Channel;
use App\Models\Subscription;
use App\Models\Video;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $channels = [];

    public function mount()
    {
        $this->channels = Channel::withCount('subscriptions')
            ->orderBy('subscriptions_count', 'desc')
            ->take(4)
            ->get();
    }
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
        $categories = Category::all();
        $videos = Video::orderByDesc('created_at')->where('visibility', 'public')->take(8)->get();
        return view('livewire.index', compact('videos', 'categories'));
    }
}
