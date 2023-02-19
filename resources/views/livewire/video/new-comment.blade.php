<div>
    <div class="media">
        <a href="#"><img class="mr-3" src="{{asset('assets/img/s1.png')}}"
                         alt="Generic placeholder image"></a>
        <div class="media-body">
            <div class="form-members-body">
                                <textarea rows="2" wire:model="body" placeholder="Напишите комментарий"
                                          class="form-control"></textarea>
            </div>
            <div class="form-members-footer text-right mt-2">

                @if($body)
                <button wire:click.prevent="resetForm" class="btn btn-outline-danger btn-sm" >Отменить</button>
                <button wire:click.prevent="store" class="btn btn-danger btn-sm" type="button">Добавить комментарий</button>
                @endif
            </div>

        </div>
    </div>
</div>
