@push('video-css')

@endpush
<div>
    <div class="single-channel-page" id="content-wrapper">
        <div class="single-channel-image">
            <img class="img-fluid" alt="" src="{{asset('storage/image/' . $channel->image)}}">
            <div class="channel-profile">
                <img class="channel-profile-img" alt="" src="{{asset('storage/image/' . $channel->avatar)}}">
                <div class="social hidden-xs">
                    @if($channel->facebook)
                        <a class="fb" href="{{$channel->facebook}}">Facebook</a>
                    @endif
                    @if($channel->twitter)
                        <a class="tw" href="{{$channel->twitter}}">Twitter</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="single-channel-nav">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="channel-brand">{{$channel->name}} <span title="" data-placement="top" data-toggle="tooltip"
                                                                  data-original-title="Verified"><i
                            class="fas fa-check-circle text-success"></i></span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
{{--                    <div class="box mb-3 single-video-comment-tabs">--}}
                        <ul class="navbar-nav mr-auto nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="retro-comments-tab" data-toggle="tab" href="#retro-comments" role="tab" aria-controls="retro" aria-selected="false">Видео</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="disqus-comments-tab" data-toggle="tab" href="#disqus-comments" role="tab" aria-controls="disqus" aria-selected="true">О канале</a>
                            </li>
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" id="facebook-comments-tab" data-toggle="tab" href="#facebook-comments" role="tab" aria-controls="facebook" aria-selected="false">Редактировать</a>--}}
{{--                            </li>--}}
                        </ul>
                    @if(\Illuminate\Support\Facades\Auth::check())
                        @if($channel->isOwnedBy(\Illuminate\Support\Facades\Auth::id()))
                            <livewire:channel.subscribe :channel="$channel"/>
                        @endif
                    @else
                        <form class="form-inline my-2 my-lg-0">
                            <a href="{{route('login')}}">
                            <button class="btn btn-outline-danger btn-sm" type="button">Подписаться</button>
                            </a>
                        </form>
                    @endif
                </div>
            </nav>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="disqus-comments" role="tabpanel" aria-labelledby="disqus-comments-tab">
                <div class="single-video-info-content box mb-3">
                    {!!$channel->about!!}
                </div>
            </div>
{{--            <div class="tab-pane fade" id="facebook-comments" role="tabpanel" aria-labelledby="facebook-comments-tab">--}}
{{--                <form wire:submit.prevent="save">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <div class="form-group">--}}
{{--                                <label class="control-label">Название <span class="required">*</span></label>--}}
{{--                                <input class="form-control {{ $errors->has('name') ? 'border-danger' : 'border-form-control' }}" wire:model.defer="name" placeholder="Название канала" type="text">--}}
{{--                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <div class="form-group">--}}
{{--                                <label class="control-label">Facebook </label>--}}
{{--                                <input class="form-control {{ $errors->has('facebook') ? 'border-danger' : 'border-form-control' }}" wire:model.defer="facebook" placeholder="Ссылка на Facebook" type="text">--}}
{{--                                @error('facebook') <span class="text-danger">{{ $message }}</span> @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <div class="form-group">--}}
{{--                                <label class="control-label">Twitter </label>--}}
{{--                                <input class="form-control {{ $errors->has('twitter') ? 'border-danger' : 'border-form-control' }}" wire:model.defer="twitter" placeholder="Ссылка на Twitter" type="text">--}}
{{--                                @error('twitter') <span class="text-danger">{{ $message }}</span> @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12">--}}
{{--                            <div class="form-group" >--}}
{{--                                <label class="control-label">О канале </label>--}}
{{--                                <textarea id="editor" wire:model.defer="about" class="form-control {{ $errors->has('about') ? 'border-danger' : 'border-form-control' }}">{!! $about !!}</textarea>--}}
{{--                                @error('about') <span class="text-danger">{{ $message }}</span> @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <div class="form-group">--}}
{{--                                <label class="control-label">Загрузите изображение <span class="required">*</span></label>--}}
{{--                                <input class="form-control {{ $errors->has('image') ? 'border-danger' : 'border-form-control' }}"  wire:model.defer="image" type="file">--}}
{{--                                @error('image') <span class="text-danger">{{ $message }}</span> @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12 text-right">--}}
{{--                            <button class="btn btn-success border-none"> Обновить </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
            <div class="tab-pane fade show active" id="retro-comments" role="tabpanel" aria-labelledby="retro-comments-tab">
                <div class="container-fluid">
                    <div class="video-block section-padding">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-title">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp;
                                                Close</a>
                                        </div>
                                    </div>
                                    <h6>Videos</h6>
                                </div>
                            </div>
                            @foreach($videos as $video)
                                <div class="col-xl-3 col-sm-6 mb-3">
                                    <div class="video-card">
                                        <div class="video-card-image">
                                            <a class="play-icon" href="{{route('watch.video', $video)}}"><i
                                                    class="fas fa-play-circle"></i></a>
                                            <a href="#"><img class="img-fluid" src="{{asset('storage/'.$video->thumbnail)}}"
                                                             alt=""></a>
                                            <div class="time">{{$video->duration}}</div>
                                        </div>
                                        <div class="video-card-body">
                                            <div class="video-title">
                                                <a href="{{route('watch.video', $video)}}">{{$video->title}}</a>
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
                        {{ $videos->links('livewire.components.pagination') }}
                    </div>
                </div>

                <!-- /.container-fluid -->

            </div>
        </div>


    </div>
</div>
{{--@push('video-script')--}}
{{--    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>--}}
{{--    <script>--}}
{{--        ClassicEditor--}}
{{--            .create( document.querySelector( '#editor' ) )--}}
{{--            .then( editor => {--}}
{{--                editor.model.document.on( 'change:data', () => {--}}
{{--                @this.set('about', editor.getData());--}}
{{--                });--}}
{{--            })--}}
{{--            .catch( error => {--}}
{{--                console.error( error );--}}
{{--            });--}}
{{--    </script>--}}
{{--@endpush--}}
