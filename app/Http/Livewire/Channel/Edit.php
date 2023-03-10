<?php

namespace App\Http\Livewire\Channel;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Edit extends Component
{
    use withFileUploads;

    public $channel;

    public $name;
    public $image;
    public $avatar;
    public $facebook;
    public $twitter;
    public $about;
    public $slug;
    public $instagram;
    public $telegram;
    public $country;

    protected function rules()
    {
        $rules = [
            'image' => [
                'nullable',
                'max:1024',
                'mimes:jpeg,jpg,png',
//            'dimensions:width=1500,max_height=386'
            ],
            'avatar' => [
                'nullable',
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
            'instagram' => [
                'nullable', 'string',
            ],
            'telegram' => [
                'nullable', 'string',
            ],
            'about' => [
                'nullable', 'string',
            ],
            'slug' => [
                'required',
                'string',
                'max:255',
                Rule::unique('channels')->ignore($this->channel)
            ]
        ];

        return $rules;
    }

    protected $messages = [
        'image.required' => 'Загрузите изображение',
        'image.mimes' => 'Изображение должно быть в формате - jpeg,jpg,png',
        'image.dimensions' => 'Размер изображения должен быть 1500 х 386 px',
        'name' => 'Введите Ваше имя',
    ];

    public function uploadCoverImage()
    {
        $channel = $this->channel->update([
            'user_id' => Auth::id(),
            'name' => $this->name,
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'about' => $this->about,
            'instagram' => $this->instagram,
            'telegram' => $this->telegram,
            'country' => $this->country,
        ]);

        $this->channel->fresh();

        if ($this->avatar)
        {
            $avatar = time() . '_' . $this->avatar->getClientOriginalName();
            $this->avatar->storeAs('image', $avatar, 'public');
            $channel->update(['avatar' => $avatar]); // use $channel instead of $this->channel
        }

        if ($this->image)
        {
            $cover_name = time() . '_' . $this->image->getClientOriginalName();
            $this->image->storeAs('image', $cover_name, 'public');
            $channel->update(['image' => $cover_name]); // use $channel instead of $this->channel
        }

//        return redirect('/');
    }

    public function save()
    {
        $this->validate();

        $this->uploadCoverImage();

        $this->reset();

        return redirect('/');

    }
    public function mount(\App\Models\Channel $channel)
    {
        $this->channel = $channel;
        $this->name = $channel->name;
        $this->facebook = $channel->facebook;
        $this->twitter = $channel->twitter;
        $this->about = $channel->about;
        $this->slug = $channel->slug;
        $this->instagram = $channel->instagram;
        $this->telegram = $channel->telegram;
        $this->country = $channel->country;
    }
    public function render()
    {
        return view('livewire.channel.edit');
    }
}
