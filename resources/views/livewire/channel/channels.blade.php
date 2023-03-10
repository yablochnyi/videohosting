<div>
    <div id="content-wrapper">
        <div class="container-fluid pb-0">
            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
{{--                            <div class="btn-group float-right right-action">--}}
{{--                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown"--}}
{{--                                   aria-haspopup="true" aria-expanded="false">--}}
{{--                                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top--}}
{{--                                        Rated</a>--}}
{{--                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;--}}
{{--                                        Viewed</a>--}}
{{--                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>--}}
{{--                                        &nbsp; Close</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <h6>Каналы</h6>
                        </div>
                    </div>
                    @foreach($channels as $channel)
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="channels-card">
                                <div class="channels-card-image">
                                    <a href="{{route('channel.show', $channel)}}"><img class="img-fluid"
                                                                                       src="{{asset('storage/image/' . $channel->avatar)}}" alt=""></a>
                                    <div class="channels-card-image-btn">
                                        @auth()
                                            <button wire:click.prevent="toggle({{ $channel->id }})"
                                                    class="btn {{auth()->user()->isSubscribedTo($channel) ? 'btn-success' : 'btn-danger'}}"
                                                    type="button">{{auth()->user()->isSubscribedTo($channel) ? 'Вы подписаны' : 'Подписаться'}} </button>
                                        @endauth
                                        @guest()
                                            <button wire:click.prevent="toggle({{ $channel->id }})"
                                                    class="btn btn-danger" type="button">Подписаться
                                            </button>
                                        @endguest
                                    </div>
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
                {{ $channels->links('livewire.components.pagination') }}
            </div>
            <hr>

        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->

    </div>
    <!-- /.content-wrapper -->


</div>
