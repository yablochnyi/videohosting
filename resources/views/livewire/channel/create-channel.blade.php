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
                            <label class="control-label">Facebook </label>
                            <input class="form-control {{ $errors->has('facebook') ? 'border-danger' : 'border-form-control' }}" wire:model.defer="facebook" placeholder="Ссылка на Facebook" type="text">
                            @error('facebook') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Twitter </label>
                            <input class="form-control {{ $errors->has('twitter') ? 'border-danger' : 'border-form-control' }}" wire:model.defer="twitter" placeholder="Ссылка на Twitter" type="text">
                            @error('twitter') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">О канале </label>
                            <textarea wire:model.defer="about" id="editor" class="form-control {{ $errors->has('about') ? 'border-danger' : 'border-form-control' }}"></textarea>
                            @error('about') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Загрузите аватарку <span class="required">*</span></label>
                            <input class="form-control {{ $errors->has('avatar') ? 'border-danger' : 'border-form-control' }}"  wire:model.defer="avatar" type="file">
                            @error('avatar') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Загрузите изображение <span class="required">*</span></label>
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

@push('video-script')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
{{--    <script>--}}
{{--        ClassicEditor--}}
{{--            .create( document.querySelector( '#editor' ) )--}}
{{--            .catch( error => {--}}
{{--                console.error( error );--}}
{{--            } );--}}
{{--    </script>--}}
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                editor.model.document.on( 'change:data', () => {
                @this.set('about', editor.getData());
                });
            })
            .catch( error => {
                console.error( error );
            });
    </script>
@endpush
