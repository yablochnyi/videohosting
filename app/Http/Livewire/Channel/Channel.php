<?php

namespace App\Http\Livewire\Channel;

use App\Models\Subscription;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Channel extends Component
{
    use WithPagination;
    use withFileUploads;

    public $channel;
//    public $name, $facebook, $twitter, $about, $image;

    public function mount(\App\Models\Channel $channel)
    {
        $this->channel = $channel;
//        $this->name = $channel->name;
//        $this->facebook = $channel->facebook;
//        $this->twitter = $channel->twitter;
//        $this->about = $channel->about;
//        $this->image = $channel->image;
    }

//    protected $rules = [
//        'image' => [
//            'required',
//            'max:1024',
//            'mimes:jpeg,jpg,png',
//            'dimensions:width=1500,height=386'
//        ],
//        'name' => [
//            'required', 'string'
//        ],
//        'facebook' => [
//            'nullable', 'string',
//        ],
//        'twitter' => [
//            'nullable', 'string',
//        ],
//        'about' => [
//            'nullable', 'string',
//        ],
//
//    ];
//
//    protected $messages = [
//        'image.required' => 'Загрузите изображение',
//        'image.mimes' => 'Изображение должно быть в формате - jpeg,jpg,png',
//        'image.dimensions' => 'Размер изображения должен быть 1500 х 386 px',
//        'name' => 'Введите Ваше имя',
//    ];
//
//    public function uploadCoverImage()
//    {
//
//        $cover_name = time() . '_' . $this->image->getClientOriginalName();
//
//        $this->image->storeAs('image', $cover_name, 'public');
//
//        $this->channel->update([
//            'user_id' => 1,
//            'name' => $this->name,
//            'image' => $cover_name,
//            'facebook' => $this->facebook,
//            'twitter' => $this->twitter,
//            'about' => $this->about,
//        ]);
//        $this->channel->save();
//
//
//
//    }
//
//    public function save()
//    {
//        $this->validate();
//
//        $this->uploadCoverImage();
//
//        $this->reset();
//
//    }

    public function render()
    {
        $videos = Video::where('channel_id', $this->channel->id)->where('visibility', 'public')->paginate(12);
        return view('livewire.channel.channel', compact('videos'));
    }
}
