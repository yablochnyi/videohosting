<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DislikeComment extends Model
{
    use HasFactory;

    protected $table = 'dislike_comments';
    protected $fillable = [
        'user_id',
        'comment_id',
    ];

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
