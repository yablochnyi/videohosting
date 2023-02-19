<div id="content-wrapper">
    <div class="container-fluid pb-0">
        <div class="top-mobile-search">
            <div class="row">
                <div class="col-md-12">
                    <form class="mobile-search">
                        <div class="input-group">
                            <input type="text" placeholder="Search for..." class="form-control">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <hr>
        <div class="video-block section-padding">
            <div class="row">
                <div class="col-md-12">
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
                        <h6>Показаны результаты по запросу: {{$q}}</h6>
                    </div>
                </div>
                @foreach($videos as $video)
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                            <div class="video-card-image">
                                <a class="play-icon" href="{{route('watch.video', $video)}}"><i class="fas fa-play-circle"></i></a>
                                <a href="#"><img class="img-fluid" src="{{'storage/'.$video->thumbnail}}" alt=""></a>
                                <div class="time">{{$video->duration}}</div>
                            </div>
                            <div class="video-card-body">
                                <div class="video-title">
                                    <a href="{{route('watch.video', $video)}}">{{$video->title}}</a>
                                </div>
                                <div class="video-page text-success">
                                    {{$video->channel->name}}  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                </div>
                                <div class="video-view">
                                    {{$video->views}} <i class="fas fa-eye"></i> &nbsp;<i class="fas fa-calendar-alt"></i>
                                    {{\Carbon\Carbon::parse($video->created_at)->diffForHumans()}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

