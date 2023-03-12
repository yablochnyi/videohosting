<div>
    @push('video-css')
        <link href="//vjs.zencdn.net/7.10.2/video-js.min.css" rel="stylesheet">
    @endpush
    <div id="content-wrapper">
        <div class="container-fluid pb-0">
            <div class="video-block-right-list section-padding">
                <div class="row mb-4">
                    <div class="col-md-8" >
                        <div class="video-container" wire:ignore>
                        <video id="video" class="video-js vjs-styles=defaults vjs-fill vjs-big-play-centered" controls preload="auto"  poster="{{asset('storage/'. $video->thumbnail)}}" data-setup="{}">
                            <source src="{{asset('storage/video/'. $video->path)}}" type="video/mp4" />
                            <p class="vjs-no-js">
                                To view this video please enable JavaScript, and consider upgrading to a
                                web browser that
                                <a href="https://videojs.com/html5-video-support/" target="_blank"
                                >supports HTML5 video</a
                                >
                            </p>
                        </video>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="video-slider-right-list">
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v1.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">Here are many variati of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list active">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v2.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v3.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">Culpa qui officia deserunt mollit anim</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v4.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">Deserunt mollit anim id est laborum.</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v5.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">Exercitation ullamco laboris nisi ut.</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v6.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v6.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v6.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v6.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                            <div class="video-card video-card-list">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v6.png" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-8">
                        <div class="single-video-left">
                            <div class="single-video-title box mb-3">
                                <div class="float-right">
                                    <livewire:video.voting :video="$video"/>
                                </div>
                                @if (strlen($video->title) > 50)
                                    <h2>{{ wordwrap($video->title, 50, "\n", true) }}</h2>
                                @else
                                    <h2>{{ $video->title }}</h2>
                                @endif

{{--                                <h2>{{ Str::limit($video->title, 50, '...') }}</h2>--}}
                                <p class="mb-0"><i class="fas fa-eye"></i> {{$video->views}} просмотров</p>

                            </div>

                            <div class="single-video-author box mb-3">
                                <livewire:channel.subscribe :channel="$video->channel"/>
                                <img class="img-fluid" src="{{asset('assets/img/s4.png')}}" alt="">
                                <p><a href="{{route('channel.show', $video->channel)}}"><strong>{{$video->channel->name}}</strong></a> <span title=""><i
                                            class=" text-success"></i></span></p>
                                <small><strong>{{$video->channel->subscribers()}} подписчиков</strong></small>
                            </div>
                            <div class="single-video-info-content box mb-3">
                                <p>{{$video->description}}</p>
{{--                                <p class="tags mb-0">--}}
{{--                                    <span><a href="#">Uncharted 4</a></span>--}}
{{--                                    <span><a href="#">Playstation 4</a></span>--}}
{{--                                    <span><a href="#">Gameplay</a></span>--}}
{{--                                    <span><a href="#">1080P</a></span>--}}
{{--                                    <span><a href="#">ps4Share</a></span>--}}
{{--                                    <span><a href="#">+ 6</a></span>--}}
{{--                                </p>--}}
                            </div>
                            <livewire:video.comment :video="$video" :key="time().$video->id"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-video-right">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="adblock">
                                        <div class="img">
                                            Google AdSense<br>
                                            336 x 280
                                        </div>
                                    </div>
                                    <div class="main-title">
                                        <div class="btn-group float-right right-action">
                                            <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                            </div>
                                        </div>
                                        <h6>Up Next</h6>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="video-card video-card-list">
                                        <div class="video-card-image">
                                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                            <a href="#"><img class="img-fluid" src="{{asset('assets/img/v1.png')}}" alt=""></a>
                                            <div class="time">3:50</div>
                                        </div>
                                        <div class="video-card-body">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                                </div>
                                            </div>
                                            <div class="video-title">
                                                <a href="#">Here are many variati of passages of Lorem</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video-card video-card-list">
                                        <div class="video-card-image">
                                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                            <a href="#"><img class="img-fluid" src="{{asset('assets/img/v2.png')}}" alt=""></a>
                                            <div class="time">3:50</div>
                                        </div>
                                        <div class="video-card-body">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                                </div>
                                            </div>
                                            <div class="video-title">
                                                <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video-card video-card-list">
                                        <div class="video-card-image">
                                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                            <a href="#"><img class="img-fluid" src="{{asset('assets/img/v3.png')}}" alt=""></a>
                                            <div class="time">3:50</div>
                                        </div>
                                        <div class="video-card-body">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                                </div>
                                            </div>
                                            <div class="video-title">
                                                <a href="#">Culpa qui officia deserunt mollit anim</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video-card video-card-list">
                                        <div class="video-card-image">
                                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                            <a href="#"><img class="img-fluid" src="{{asset('assets/img/v4.png')}}" alt=""></a>
                                            <div class="time">3:50</div>
                                        </div>
                                        <div class="video-card-body">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                                </div>
                                            </div>
                                            <div class="video-title">
                                                <a href="#">Deserunt mollit anim id est laborum.</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video-card video-card-list">
                                        <div class="video-card-image">
                                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                            <a href="#"><img class="img-fluid" src="{{asset('assets/img/v5.png')}}" alt=""></a>
                                            <div class="time">3:50</div>
                                        </div>
                                        <div class="video-card-body">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                                </div>
                                            </div>
                                            <div class="video-title">
                                                <a href="#">Exercitation ullamco laboris nisi ut.</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video-card video-card-list">
                                        <div class="video-card-image">
                                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                            <a href="#"><img class="img-fluid" src="{{asset('assets/img/v6.png')}}" alt=""></a>
                                            <div class="time">3:50</div>
                                        </div>
                                        <div class="video-card-body">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                                </div>
                                            </div>
                                            <div class="video-title">
                                                <a href="#">There are many variations of passages of Lorem</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="adblock mt-0">
                                        <div class="img">
                                            Google AdSense<br>
                                            336 x 280
                                        </div>
                                    </div>
                                    <div class="video-card video-card-list">
                                        <div class="video-card-image">
                                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                            <a href="#"><img class="img-fluid" src="{{asset('assets/img/v1.png')}}" alt=""></a>
                                            <div class="time">3:50</div>
                                        </div>
                                        <div class="video-card-body">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                                </div>
                                            </div>
                                            <div class="video-title">
                                                <a href="#">Here are many variati of passages of Lorem</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video-card video-card-list">
                                        <div class="video-card-image">
                                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                            <a href="#"><img class="img-fluid" src="{{asset('assets/img/v2.png')}}" alt=""></a>
                                            <div class="time">3:50</div>
                                        </div>
                                        <div class="video-card-body">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                                </div>
                                            </div>
                                            <div class="video-title">
                                                <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        <!-- Sticky Footer -->
    </div>
        @push('video-script')
            <script src="//vjs.zencdn.net/7.10.2/video.min.js"></script>
            <script>
                var player = videojs('video')
                player.on('timeupdate', function() {
                    if (this.currentTime() > 3) {
                    this.off('timeupdate')
                        Livewire.emit('VideoViewed')
                    }
                })
            </script>
        @endpush

</div>
{{--<script>--}}
{{--    video.addEventListener("timeupdate", function() {--}}
{{--        if (video.currentTime >= 3)--}}
{{--            // this.off('timeupdate')--}}
{{--            Livewire.emit('VideoViewed');--}}
{{--    }, false);--}}
{{--    // var myVideo = document.getElementById("video");--}}
{{--    // // var player = videojs('video')--}}
{{--    // myVideo.onplay('timeupdate', function () {--}}
{{--    //     if (this.currentTime() > 3) {--}}
{{--    //         console.log('test')--}}
{{--        // this.off('timeupdate')--}}
{{--        //     Livewire.emit('VideoViewed')--}}
{{--    //     }--}}
{{--    // })--}}
{{--    // player.on('timeupdate', function() {--}}
{{--    //     console.log('tets')--}}
{{--        // if (this.currentTime() > 3) {--}}
{{--        // this.off('timeupdate')--}}
{{--        //     Livewire.emit('VideoViewed')--}}
{{--        // }--}}
{{--    // })--}}
{{--</script>--}}
