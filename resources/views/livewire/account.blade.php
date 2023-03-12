<div>
    <div id="content-wrapper">
        <div class="container-fluid pb-0">
            <hr>
            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
{{--                            <div class="btn-group float-right right-action">--}}
{{--                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>--}}
{{--                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>--}}
{{--                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <h6>Мои видео</h6>
                        </div>
                    </div>
                    @foreach($videos as $video)
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                            <div class="video-card-image">
                                <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                <a href="#"><img class="img-fluid" src="{{'storage/'.$video->thumbnail}}" alt=""></a>
                                <div class="time">{{$video->duration}}</div>
                            </div>
                            <div class="video-card-body">
                                <div class="video-title">
                                    <a href="{{route('watch.video', $video)}}">{{ Str::limit($video->title, 30, '...') }}</a>
                                </div>
                                <div class="video-page text-success">
                                    {{$video->channel->name}}  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                </div>
                                <div class="video-view">
                                    {{$video->views}} <i class="fas fa-eye"></i> &nbsp;<i class="fas fa-calendar-alt"></i>
                                    {{\Carbon\Carbon::parse($video->created_at)->diffForHumans()}}
                                    @if($video->user_id == \Illuminate\Support\Facades\Auth::id())
                                        <div class="btn-group float-right right-action">
                                            <a href="#" class="right-action-link text-gray"
                                               data-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                 x-placement="bottom-end"
                                                 style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(23px, 21px, 0px);">
                                                <a wire:click="deleteVideo({{$video->id}})"
                                                   class="dropdown-item" href="#"><i
                                                        class="fas fa-regular fa-trash"></i> &nbsp; Удалить</a>
                                                <a class="dropdown-item"
                                                   href="{{route('edit.video', $video)}}"><i
                                                        class="fas fa-regular fa-pen"></i> &nbsp;
                                                    Редактировать</a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <hr class="mt-0">
            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
{{--                            <div class="btn-group float-right right-action">--}}
{{--                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>--}}
{{--                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>--}}
{{--                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <h6>Мои каналы</h6>
                        </div>
                    </div>
                    @foreach($channels as $channel)
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="channels-card">
                                <div class="channels-card-image">
                                    <a href="{{route('channel.show', $channel)}}"><img class="img-fluid" src="{{asset('storage/image/' . $channel->avatar)}}" alt=""></a>
                                </div>
                                <div class="channels-card-body">
                                    <div class="channels-title">
                                        <a href="{{route('channel.show', $channel)}}">{{$channel->name}}</a>
                                    </div>
                                    <div class="channels-view">
                                        {{$channel->subscribers()}} подписчиков
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <hr class="mt-0">
            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
{{--                            <div class="btn-group float-right right-action">--}}
{{--                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>--}}
{{--                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>--}}
{{--                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <h6>Мои подписки</h6>
                        </div>
                    </div>
                    @foreach($subscribes as $subscribe)
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="channels-card">
                                <div class="channels-card-image">
                                    <a href="{{route('channel.show', $subscribe)}}"><img class="img-fluid" src="{{asset('storage/image/' . $subscribe->avatar)}}" alt=""></a>
                                </div>
                                <div class="channels-card-body">
                                    <div class="channels-title">
                                        <a href="{{route('channel.show', $subscribe)}}">{{$subscribe->name}}</a>
                                    </div>
                                    <div class="channels-view">
                                        {{$subscribe->subscribers()}} подписчиков
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
    </div>
</div>
