<li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        @if($count > 0)
        <span class="badge badge-danger">{{$count}}</span>
        @endif
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">

        @if($notifications)
            @foreach($notifications as $notify)
            <a wire:click="read({{$notify->channel_id}})" class="dropdown-item" href="{{route('channel.show', $notify->channel)}}">На канале: <strong>{{$notify->channel->name}}</strong><br>{{$notify->content}}</a>
            @endforeach
        @endif

    </div>
</li>
