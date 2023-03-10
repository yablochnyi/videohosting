<div id="content-wrapper">
    <div class="container-fluid upload-details">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title">
                    <h6>Редактирование видео: {{$video->title}}</h6>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="osahan-form">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="e1">Название видео</label>
                                <input wire:model.defer="title" type="text" placeholder="Название видео" id="e1" class="form-control">
                                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="e2">Описание видео</label>
                                <textarea wire:model.defer="description" rows="3" id="e2" name="e2" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="e4">Приватность</label>
                                <select id="e4" wire:model="visibility" class="custom-select">
                                    <option value="private">Приватное</option>
                                    <option value="public">Публичное</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="e4">Выберите канал</label>
                                <select id="e4" wire:model="channel" class="custom-select">
                                    <option selected>Список каналов</option>
                                    @foreach($channels as $channel)
                                        <option value="{{$channel->id}}">{{$channel->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('channel') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="e4">Выберите категорию</label>
                                <select id="e4" wire:model="category" class="custom-select">
                                    <option selected>Список категорий</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                    </div>
                </div>
                <div class="osahan-area text-center mt-3">
                    <button wire:click="update" class="btn btn-outline-primary">Сохранить</button>
                </div>

            </div>
        </div>
    </div>

</div>
