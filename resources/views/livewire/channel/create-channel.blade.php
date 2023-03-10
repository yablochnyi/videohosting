<div id="content-wrapper">
        <div class="container-fluid upload-details">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title">
                        <h6>Создание канала</h6>
                    </div>
                </div>
            </div>
            <form wire:submit.prevent="save">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Название <span class="required">*</span></label>
                            <input class="form-control {{ $errors->has('name') ? 'border-danger' : 'border-form-control' }}" wire:model.defer="name" placeholder="Название канала" type="text">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Псевдоним </label>
                            <input class="form-control {{ $errors->has('slug') ? 'border-danger' : 'border-form-control' }}" wire:model.defer="slug" placeholder="Псевдоним" type="text">
                            @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Facebook </label>
                            <input class="form-control {{ $errors->has('facebook') ? 'border-danger' : 'border-form-control' }}" wire:model.defer="facebook" placeholder="Ссылка на Facebook" type="text">
                            @error('facebook') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Twitter </label>
                            <input class="form-control {{ $errors->has('twitter') ? 'border-danger' : 'border-form-control' }}" wire:model.defer="twitter" placeholder="Ссылка на Twitter" type="text">
                            @error('twitter') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Telegram </label>
                            <input class="form-control {{ $errors->has('telegram') ? 'border-danger' : 'border-form-control' }}" wire:model.defer="telegram" placeholder="Ссылка на Telegram" type="text">
                            @error('telegram') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Instagram </label>
                            <input class="form-control {{ $errors->has('instagram') ? 'border-danger' : 'border-form-control' }}" wire:model.defer="instagram" placeholder="Ссылка на Instagram" type="text">
                            @error('instagram') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Страна </label>
                            <input class="form-control {{ $errors->has('country') ? 'border-danger' : 'border-form-control' }}" wire:model.defer="country" placeholder="Страна" type="text">
                            @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
{{--                <div class="row">--}}
{{--                    --}}

{{--                </div>--}}

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">О канале </label>
                            <textarea wire:model.defer="about" rows="4" class="form-control {{ $errors->has('about') ? 'border-danger' : 'border-form-control' }}"></textarea>
                            @error('about') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Загрузите аватарку 80x80 <span class="required">*</span></label>
                            <input class="form-control {{ $errors->has('avatar') ? 'border-danger' : 'border-form-control' }}"  wire:model.defer="avatar" type="file">
                            @error('avatar') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Загрузите изображение 1500x400<span class="required">*</span></label>
                            <input class="form-control {{ $errors->has('image') ? 'border-danger' : 'border-form-control' }}"  wire:model.defer="image" type="file">
                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 text-right">
                        <button class="btn btn-success border-none"> Создать канал </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.container-fluid -->
    </div>

