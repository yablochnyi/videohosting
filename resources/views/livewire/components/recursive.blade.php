@foreach($comments as $comment)
    <div class="reviews-members" x-data="{ open: false, openReplay: false }">
        <div class="media">
            <a href="#"><img class="mr-3" src="{{asset('assets/img/s2.png')}}"
                             alt="Generic placeholder image"></a>
            <div class="media-body">
                <div class="reviews-members-header">
                    <h6 class="mb-1"><a class="text-black" href="#">{{$comment->user->name}}</a> <small
                            class="text-gray">{{\Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</small>
                    </h6>
                </div>
                <div class="reviews-members-body">
                    <p> {{$comment->body}}</p>
                </div>
                <livewire:video.voting-comment :comment="$comment" :key="time().$comment->id"/>
                @if($comment->reply->count())
                    <a href="#" @click.prevent="open = !open">{{$comment->reply->count()}} ответа</a>
                @endif
                <a href="#" @click.prevent="openReplay = !openReplay">Ответить</a>
                <div x-show="open">
                        @include('livewire.components.recursive', ['comments' => $comment->reply])
                    </div>



                <div style="padding-top: 13px" x-show="openReplay">
                    <livewire:video.new-comment :video="$video" :col="$comment->id" :key="time().$comment->id"/>
                </div>
            </div>
        </div>
    </div>
@endforeach

