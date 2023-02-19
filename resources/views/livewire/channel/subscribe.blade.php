<div>
    <div class="float-right">
        <button wire:click.prevent="toggle" class="btn {{$userSubscribed ? 'btn-success' : 'btn-danger'}}" type="button">{{$userSubscribed ? 'Вы подписаны' : 'Подписаться'}} </button>
{{--        <button class="btn btn btn-outline-danger" type="button"><i class="fas fa-bell"></i></button>--}}
    </div>

</div>
