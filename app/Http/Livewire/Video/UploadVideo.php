<?php

namespace App\Http\Livewire\Video;

use App\Jobs\convertVideoForStreaming;
use App\Jobs\createThumbnailFromVideo;
use App\Models\Channel;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class UploadVideo extends Component
{
    use withFileUploads;

    public $videoFile, $videoName, $title, $description, $channel, $visibility = 'public', $duration;

    protected $rules = [

        'videoFile' => [
            'required', 'mimes:mp4'
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

    ];

    protected $messages = [
        'videoFile.required' => 'Загрузите видео',
        'videoFile.mimes' => 'Видео должно быть в формате - mp4',
        'title' => 'Введите название',
        'channel' => 'Выберите канал',
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
            'description' => $this->description,
            'visibility' => $this->visibility,
            'path' => $this->videoName,
            'slug' => Str::slug($this->title),
            'thumbnail' => 'video_image/' . $this->videoName . '.png',
            'duration' => $this->duration
        ]);

        return redirect('watch/' . $video->slug);

    }

    public function render()
    {
        $channels = auth()->user()->channels()->get();
        return view('livewire.video.upload-video', compact('channels'));
    }
}
