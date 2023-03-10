<?php

namespace App\Http\Livewire\Channel;

use App\Models\Subscription;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Channel extends Component
{
    use WithPagination;

    public $channel;

    public function deleteVideo($id)
    {
        $video = Video::find($id);
        $video->delete();
    }

    public function mount(\App\Models\Channel $channel)
    {
        $this->channel = $channel;
    }

    public function render()
    {
        $videos = Video::where('channel_id', $this->channel->id)->where('visibility', 'public')->paginate(12);
        return view('livewire.channel.channel', compact('videos'));
    }
}
