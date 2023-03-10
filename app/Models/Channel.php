<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;

    protected $table = 'channels';
    protected $fillable = ['user_id', 'name', 'image', 'avatar', 'facebook', 'twitter', 'about', 'slug', 'instagram', 'telegram', 'country'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function subscribers()
    {
        return $this->subscriptions()->count();
    }

    public function isOwnedBy($user)
    {
        return $this->user_id !== $user;
    }
}
