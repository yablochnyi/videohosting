<?php

namespace Database\Factories;


use App\Models\Category;
use App\Models\Channel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ChannelFactory extends Factory
{
    protected $model = Channel::class;

    public function definition()
    {
        return [
            'user_id' => 2,
            'name' => fake()->name,
            'image' => fake()->image,
            'avatar' => fake()->image,
            'slug' => Str::slug(fake()->name)
        ];
    }
}
