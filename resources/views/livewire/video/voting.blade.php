<div>
    <a class="total-like @if($likeActive) active @endif" wire:click.prevent="like" href="#"><i class="fas fa-thumbs-up"></i> {{$like}}</a>
    <a class="total-like @if($dislikeActive) active @endif" wire:click.prevent="dislike" href="#"><i class="fas fa-thumbs-down"></i> {{$dislike}}</a>
</div>
