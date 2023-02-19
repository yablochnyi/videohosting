<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable = [
        'user_id',
        'video_id',
        'replay_id',
        'body',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    public function reply()
    {
        return $this->hasMany(Comment::class, 'replay_id', 'id');
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function likes()
    {
        return $this->hasMany(LikeComment::class);
    }

    public function dislikes()
    {
        return $this->hasMany(DislikeComment::class);
    }

    public function doesUserLikedVideo()
    {
        return $this->likes()->where('user_id', auth()->id())->exists();
    }

    public function doesUserDislikedVideo()
    {
        return $this->dislikes()->where('user_id', auth()->id())->exists();
    }
}
