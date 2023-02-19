<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos';
    protected $fillable = ['channel_id', 'user_id', 'title', 'description', 'visibility', 'path', 'thumbnail', 'slug', 'views', 'duration'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function dislikes()
    {
        return $this->hasMany(Dislike::class);
    }

    public function doesUserLikedVideo()
    {
        return $this->likes()->where('user_id', auth()->id())->exists();
    }

    public function doesUserDislikedVideo()
    {
        return $this->dislikes()->where('user_id', auth()->id())->exists();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('replay_id');
    }

    public function allCommentsCount()
    {
        return $this->hasMany(Comment::class)->count();
    }
}
