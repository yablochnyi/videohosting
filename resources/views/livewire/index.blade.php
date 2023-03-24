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
        <div class="top-category section-padding mb-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-carousel-category owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(-2468px, 0px, 0px); transition: all 1s ease 0s; width: 4320px; margin-top: 25px">
                                @foreach($categories as $category)'
                                    <div class="owl-item" style="width: 154.275px;">
                                        <div class="item">
                                            <div class="category-item">
                                                <a href="{{route('category.video', $category)}}">
                                                    <h6>{{$category->title}}</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
{{--                        <div class="owl-nav">--}}
{{--                            <button type="button" role="presentation" class="owl-prev"><i--}}
{{--                                    class="fa fa-chevron-left"></i></button>--}}
{{--                            <button type="button" role="presentation" class="owl-next"><i--}}
{{--                                    class="fa fa-chevron-right"></i></button>--}}
{{--                        </div>--}}
{{--                        <div class="owl-dots">--}}
{{--                            <button role="button" class="owl-dot"><span></span></button>--}}
{{--                            <button role="button" class="owl-dot active"><span></span></button>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="video-block section-padding">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title">
                        {{--                        <div class="btn-group float-right right-action">--}}
                        {{--                            <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true"--}}
                        {{--                               aria-expanded="false">--}}
                        {{--                                Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>--}}
                        {{--                            </a>--}}
                        {{--                            <div class="dropdown-menu dropdown-menu-right">--}}
                        {{--                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>--}}
                        {{--                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>--}}
                        {{--                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <h6>Последние видео</h6>
                    </div>
                </div>
                @foreach($videos as $video)
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                            <div class="video-card-image">
                                <a class="play-icon" href="{{route('watch.video', $video)}}"><i
                                        class="fas fa-play-circle"></i></a>
                                <a href="#"><img class="img-fluid" src="{{asset('storage/'.$video->thumbnail)}}" alt=""></a>
                                <div class="time">{{$video->duration}}</div>
                            </div>
                            <div class="video-card-body">
                                <div class="video-title">

                                    <a href="{{route('watch.video', $video)}}">{{ Str::limit($video->title, 30, '...') }}</a>
                                </div>
                                <div class="video-page text-success">
                                    {{$video->channel->name}} <a title="" data-placement="top" data-toggle="tooltip"
                                                                 href="#" data-original-title="Verified"><i
                                            class="fas fa-check-circle text-success"></i></a>
                                </div>
                                <div class="video-view">
                                    {{$video->views}} <i class="fas fa-eye"></i> &nbsp;<i
                                        class="fas fa-calendar-alt"></i>
                                    {{\Carbon\Carbon::parse($video->created_at)->diffForHumans()}}
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
                        {{--                        <div class="btn-group float-right right-action">--}}
                        {{--                            <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true"--}}
                        {{--                               aria-expanded="false">--}}
                        {{--                                Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>--}}
                        {{--                            </a>--}}
                        {{--                            <div class="dropdown-menu dropdown-menu-right">--}}
                        {{--                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>--}}
                        {{--                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>--}}
                        {{--                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <h6>Популярные видео</h6>
                    </div>
                </div>
                {{--                    <livewire:components.favorite-channel :channels="$channels" :key="time()" />--}}
                @foreach($popularVideos as $popularVideo)
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                            <div class="video-card-image">
                                <a class="play-icon" href="{{route('watch.video', $popularVideo)}}"><i
                                        class="fas fa-play-circle"></i></a>
                                <a href="#"><img class="img-fluid" src="{{asset('storage/'.$popularVideo->thumbnail)}}" alt=""></a>
                                <div class="time">{{$popularVideo->duration}}</div>
                            </div>
                            <div class="video-card-body">
                                <div class="video-title">
                                    <a href="{{ route('watch.video', $popularVideo) }}">{{ Str::limit($popularVideo->title, 30) }}</a>
                                </div>


                                <div class="video-page text-success">
                                    {{$popularVideo->channel->name}} <a title="" data-placement="top" data-toggle="tooltip"
                                                                 href="#" data-original-title="Verified"><i
                                            class="fas fa-check-circle text-success"></i></a>
                                </div>
                                <div class="video-view">
                                    {{$popularVideo->views}} <i class="fas fa-eye"></i> &nbsp;<i
                                        class="fas fa-calendar-alt"></i>
                                    {{\Carbon\Carbon::parse($popularVideo->created_at)->diffForHumans()}}
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
    <footer class="sticky-footer">
        <section class="section-padding footer-list">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="footer-logo mb-4"><a class="logo" href="index.html"><img alt=""
                                                                                             src="{{asset('assets/img/logo.png')}}"
                                                                                             class="img-fluid"></a>
                        </div>
                        <p>86 Petersham town, New South wales Waedll Steet, Australia</p>
                        <p class="mb-0"><a href="#" class="text-dark"><i class="fas fa-mobile fa-fw"></i> +61 525 240
                                310</a></p>
                        <p class="mb-0"><a href="#" class="text-dark"><i class="fas fa-envelope fa-fw"></i>
                                iamosahan@gmail.com</a></p>
                        <p class="mb-0"><a href="#" class="text-dark"><i class="fas fa-globe fa-fw"></i>
                                www.askbootstrap.com</a></p>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <h6 class="mb-4">Company</h6>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Legal</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <h6 class="mb-4">Features</h6>
                        <ul>
                            <li><a href="#">Retention</a></li>
                            <li><a href="#">People</a></li>
                            <li><a href="#">Messages</a></li>
                            <li><a href="#">Infrastructure</a></li>
                            <li><a href="#">Platform</a></li>
                            <li><a href="#">Funnels</a></li>
                            <li><a href="#">Live</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <h6 class="mb-4">Solutions</h6>
                        <ul>
                            <li><a href="#">Enterprise</a></li>
                            <li><a href="#">Financial Services</a></li>
                            <li><a href="#">Consumer Tech</a></li>
                            <li><a href="#">Entertainment</a></li>
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Analytics</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <h6 class="mb-4">NEWSLETTER</h6>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email Address...">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button"><i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                        <small>It is a long established fact that a reader will be distracted by..</small>
                        <h6 class="mb-2 mt-4">DOWNLOAD APP</h6>
                        <div class="app">
                            <a href="#"><img alt="" src="{{asset('assets/img/google.png')}}"></a>
                            <a href="#"><img alt="" src="{{asset('assets/img/apple.png')}}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </footer>
</div>

