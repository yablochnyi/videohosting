<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['title', 'slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function channels()
    {
        return $this->hasMany(Channel::class);
    }
}
