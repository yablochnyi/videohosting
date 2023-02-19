<?php

namespace App\Http\Livewire\Video;

use App\Models\Dislike;
use App\Models\Like;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Voting extends Component
{
    public $video;
    public $like;
    public $dislike;
    public $likeActive;
    public $dislikeActive;

    protected $listeners = ['load_values' => '$refresh'];

    public function like()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if ($this->video->doesUserLikedVideo()) {
            Like::where('user_id', auth()->id())->where('video_id', $this->video->id)->delete();
            $this->likeActive = false;
        } else {
            $this->video->likes()->create([
                'user_id' => auth()->id()
            ]);
            $this->likeActive = true;
        }
        $this->disableDislike();
        $this->emit('load_values');

    }

    public function dislike()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if ($this->video->doesUserDislikedVideo()) {
            Dislike::where('user_id', auth()->id())->where('video_id', $this->video->id)->delete();
            $this->dislikeActive = false;
        } else {
            $this->video->dislikes()->create([
                'user_id' => auth()->id()
            ]);
            $this->dislikeActive = true;
        }
        $this->disableLike();
        $this->emit('load_values');

    }

    public function checkIfLiked()
    {
        $this->video->doesUserLikedVideo() ? $this->likeActive = true : $this->likeActive = false;
    }

    public function checkIfDisliked()
    {
        $this->video->doesUserDislikedVideo() ? $this->dislikeActive = true : $this->dislikeActive = false;
    }

    public function disableDislike()
    {
        Dislike::where('user_id', auth()->id())->where('video_id', $this->video->id)->delete();
        $this->dislikeActive = false;
    }

    public function disableLike()
    {
        Like::where('user_id', auth()->id())->where('video_id', $this->video->id)->delete();
        $this->likeActive = false;
    }

    public function mount(Video $video)
    {
        $this->video = $video;
        $this->checkIfLiked();
        $this->checkIfDisliked();
    }

    public function render()
    {
        $this->like = $this->video->likes->count();
        $this->dislike = $this->video->dislikes->count();
        return view('livewire.video.voting');
    }
}
