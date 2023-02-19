<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dislike extends Model
{
    use HasFactory;
    protected $table = 'dislikes';
    protected $fillable = ['user_id', 'video_id'];

    public function video()
    {
        return $this->belongsTo(Video::class);
    }
}
