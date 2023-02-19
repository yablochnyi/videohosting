<?php

namespace App\Http\Livewire\Channel;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateChannel extends Component
{
    use withFileUploads;

    public $name, $facebook, $twitter, $about, $image, $avatar;

    protected $rules = [
        'image' => [
            'required',
            'max:1024',
            'mimes:jpeg,jpg,png',
//            'dimensions:width=1500,max_height=386'
        ],
        'avatar' => [
            'required',
            'max:1024',
            'mimes:jpeg,jpg,png',
            'dimensions:width=80,height=80'
        ],
        'name' => [
            'required', 'string'
        ],
        'facebook' => [
            'nullable', 'string',
        ],
        'twitter' => [
            'nullable', 'string',
        ],
        'about' => [
            'nullable', 'string',
        ],

    ];

    protected $messages = [
        'image.required' => 'Загрузите изображение',
        'image.mimes' => 'Изображение должно быть в формате - jpeg,jpg,png',
        'image.dimensions' => 'Размер изображения должен быть 1500 х 386 px',
        'avatar.required' => 'Загрузите изображение',
        'avatar.mimes' => 'Изображение должно быть в формате - jpeg,jpg,png',
        'avatar.dimensions' => 'Размер изображения должен быть 80 х 80 px',
        'name' => 'Введите название',
    ];

    public function uploadCoverImage()
    {

        $cover_name = time() . '_' . $this->image->getClientOriginalName();
        $avatar = time() . '_' . $this->avatar->getClientOriginalName();

        $this->image->storeAs('image', $cover_name, 'public');
        $this->avatar->storeAs('image', $avatar, 'public');

        \App\Models\Channel::create([
            'user_id' => Auth::id(),
            'name' => $this->name,
            'image' => $cover_name,
            'avatar' => $avatar,
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'about' => $this->about,
            'slug' => Str::slug($this->name),
        ]);
    }

    public function save()
    {
        $this->validate();

        $this->uploadCoverImage();

        $this->reset();

        return redirect()->route('index');
    }

    public function render()
    {
        return view('livewire.channel.create-channel');
    }
}
