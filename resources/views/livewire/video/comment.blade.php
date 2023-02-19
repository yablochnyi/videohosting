<div>
    <div class="box mb-3 single-video-comment-tabs">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="retro-comments-tab" data-toggle="tab" href="#retro-comments" role="tab"
                   aria-controls="retro" aria-selected="false">{{$video->allCommentsCount()}} Комментариев</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="retro-comments" role="tabpanel"
                 aria-labelledby="retro-comments-tab">
                <div class="reviews-members pt-0">
                    <livewire:video.new-comment :video="$video" :col="0" :key="time().$video->id"/>
                </div>
                @include('livewire.components.recursive', ['comments' => $video->comments()->latestFirst()->get()])
            </div>
        </div>
    </div>
</div>
