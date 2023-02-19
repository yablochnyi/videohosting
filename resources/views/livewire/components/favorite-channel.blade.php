@foreach($channels as $channel)
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="channels-card">
            <div class="channels-card-image">
                <a href="#"><img class="img-fluid" src="{{asset('storage/image/' . $channel->avatar)}}" alt=""></a>
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
                    <a href="#">{{$channel->name}}</a>
                </div>
                <div class="channels-view">
                    {{$channel->subscribers()}} подписчиков
                </div>
            </div>
        </div>
    </div>
@endforeach
