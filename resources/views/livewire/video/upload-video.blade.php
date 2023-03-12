<div id="content-wrapper">
    <div class="container-fluid upload-details">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title">
                    <h6>Загрузка видео</h6>
                </div>
            </div>
            <livewire:components.thumbnail-video />
{{--            <div class="col-lg-2">--}}
{{--                <img src="{{asset('storage/image/1673800350_3.png')}}" alt="..." class="img-thumbnail">--}}
{{--            </div>--}}
            <div class="col-lg-10"
                 x-data="{ isUploading: false, progress: 0 }"
                 x-on:livewire-upload-start="isUploading = true"
                 x-on:livewire-upload-finish="isUploading = false, $wire.thumbnail()"
                 x-on:livewire-upload-error="isUploading = false"
                 x-on:livewire-upload-progress="progress = $event.detail.progress"
            >
{{--                <div class="osahan-title">Contrary to popular belief, Lorem Ipsum (2019) is not.</div>--}}
{{--                <div class="osahan-size">102.6 MB . 2:13 MIN Remaining {{$duration}}</div>--}}
                <div class="form-group" x-show="!isUploading">
                    <input class="btn btn-primary"  wire:model.defer="videoFile" type="file">
                </div>
                @error('videoFile') <span class="text-danger">{{ $message }}</span> @enderror
                <div class="osahan-progress" x-show="isUploading">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"
                             aria-valuemin="0" aria-valuemax="100" :style="`width: ${progress}%`"></div>
                    </div>
                    <div x-show="isUploading">

                       <h2>Идет загрузка: <span x-text="Math.round(progress) + '%'"></span></h2>
                    </div>

                    {{--                    <h2>Идет загрузка `${progress}%`</h2>--}}
{{--                    <div class="osahan-close">--}}
{{--                        <a href="#"><i class="fas fa-times-circle"></i></a>--}}
{{--                    </div>--}}
                </div>
{{--                <div class="osahan-desc">Your Video is still uploading, please keep this page open until it's done.</div>--}}
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
                                    <option selected value="">Список категорий</option>
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
                    <button wire:click="fileCompleted()" class="btn btn-outline-primary">Сохранить</button>
                </div>

            </div>
        </div>
    </div>

</div>
