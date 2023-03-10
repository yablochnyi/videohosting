<?php

namespace App\Http\Livewire\Video;

use App\Jobs\convertVideoForStreaming;
use App\Jobs\createThumbnailFromVideo;
use App\Models\Channel;
use App\Models\Notification;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class UploadVideo extends Component
{
    use withFileUploads;

    public $videoFile, $videoName, $title, $description, $channel, $visibility = 'public', $duration, $category;

    protected $rules = [

        'videoFile' => [
            'required', 'mimes:mp4,avi,mov,wmv,flv,webm,mkv,3gp,mpeg,vob,mpg'
        ],
        'title' => [
            'required', 'string'
        ],
        'description' => [
            'nullable', 'string',
        ],
        'visibility' => [
            'required',
        ],
        'channel' => [
            'required',
        ],
        'category' => [
            'nullable',
        ],

    ];

    protected $messages = [
        'videoFile.required' => 'Загрузите видео',
        'videoFile.mimes' => 'Видео должно быть в формате - mp4',
        'title' => 'Введите название',
        'channel' => 'Выберите канал',
        'category' => 'Выберите категорию',
    ];

    public function thumbnail()
    {
        $this->validate(['videoFile' => 'required|mimes:mp4']);

        $this->videoName = time() . '_' . $this->videoFile->getClientOriginalName();

        $this->videoFile->storeAs('video', $this->videoName, 'public');

        $media = FFMpeg::fromDisk('public')
            ->open('video/' . $this->videoName)
            ->getFrameFromSeconds(2)
            ->export()
            ->toDisk('public')
            ->save('video_image/' . $this->videoName . '.png');

        $this->duration = gmdate('H:i:s', $media->getDurationInSeconds());

        $this->emit('thumbnail', 'video_image/' . $this->videoName . '.png');

    }

    public function fileCompleted()
    {
        $this->validate();

        $video = Video::create([
            'user_id' => Auth::id(),
            'channel_id' => $this->channel,
            'title' => $this->title,
            'category_id' => $this->category,
            'description' => $this->description,
            'visibility' => $this->visibility,
            'path' => $this->videoName,
            'slug' => Str::slug($this->title),
            'thumbnail' => 'video_image/' . $this->videoName . '.png',
            'duration' => $this->duration
        ]);

        $this->notification($this->channel);

        return redirect('watch/' . $video->slug);

    }

    public function notification($channelId)
    {
        $users = User::whereHas('subscribedChannels', function($query) use ($channelId) {
            $query->where('channel_id', $channelId);
        })->get();
        foreach ($users as $user)
        {
            Notification::create([
                'user_id' => $user->id,
                'channel_id' => $this->channel,
                'content' => 'Добавлено новое видео'
            ]);
        }

    }

    public function render()
    {
        $channels = auth()->user()->channels()->get();
        $categories = \App\Models\Category::all();
        return view('livewire.video.upload-video', compact('channels', 'categories'));
    }
}
