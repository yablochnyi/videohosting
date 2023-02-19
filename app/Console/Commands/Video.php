<?php

namespace App\Console\Commands;

use FFMpeg\Format\Video\X264;
use Illuminate\Console\Command;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class Video extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'video:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $low = (new X264('aac'))->setKiloBitrate(500);
        $high = (new X264('aac'))->setKiloBitrate(1000);


        $lowBitrate = (new X264)->setKiloBitrate(250);
        $midBitrate = (new X264)->setKiloBitrate(500);
        $highBitrate = (new X264)->setKiloBitrate(1000);

        FFMpeg::fromDisk('public')
            ->open('video/1674343832_test.mp4')
            ->exportForHLS()
            ->setSegmentLength(10) // optional
            ->setKeyFrameInterval(48) // optional
            ->addFormat($lowBitrate)
            ->addFormat($midBitrate)
            ->addFormat($highBitrate)
            ->save('test/adaptive_steve.m3u8');
//        FFMpeg::fromDisk('public')
//            ->open('video/1674343832_test.mp4')
//            ->exportForHLS()
//            ->addFormat($low, function ($filters) {
//                $filters->resize(640, 480);
//            })
//            ->addFormat($high, function ($filters) {
//                $filters->resize(1280, 720);
//            })
//            ->toDisk('public')
//            ->save('/test/file.m3u8');
    }
}
