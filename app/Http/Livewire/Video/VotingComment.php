<?php

namespace App\Http\Livewire\Video;

use App\Models\Dislike;
use App\Models\DislikeComment;
use App\Models\Like;
use App\Models\LikeComment;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VotingComment extends Component
{
    public $comment;
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
        if ($this->comment->doesUserLikedVideo()) {
            LikeComment::where('user_id', auth()->id())->where('comment_id', $this->comment->id)->delete();
            $this->likeActive = false;
        } else {
            $this->comment->likes()->create([
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
        if ($this->comment->doesUserDislikedVideo()) {
            DislikeComment::where('user_id', auth()->id())->where('comment_id', $this->comment->id)->delete();
            $this->dislikeActive = false;
        } else {
            $this->comment->dislikes()->create([
                'user_id' => auth()->id()
            ]);
            $this->dislikeActive = true;
        }
        $this->disableLike();
        $this->emit('load_values');

    }

    public function checkIfLiked()
    {
        $this->comment->doesUserLikedVideo() ? $this->likeActive = true : $this->likeActive = false;
    }

    public function checkIfDisliked()
    {
        $this->comment->doesUserDislikedVideo() ? $this->dislikeActive = true : $this->dislikeActive = false;
    }

    public function disableDislike()
    {
        DislikeComment::where('user_id', auth()->id())->where('comment_id', $this->comment->id)->delete();
        $this->dislikeActive = false;
    }

    public function disableLike()
    {
        LikeComment::where('user_id', auth()->id())->where('comment_id', $this->comment->id)->delete();
        $this->likeActive = false;
    }

    public function mount(\App\Models\Comment $comment)
    {
        $this->comment = $comment;
        $this->checkIfLiked();
        $this->checkIfDisliked();
    }

    public function render()
    {
        $this->like = $this->comment->likes->count();
        $this->dislike = $this->comment->dislikes->count();
        return view('livewire.video.voting-comment');
    }
}
