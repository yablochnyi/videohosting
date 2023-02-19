<div>
    <body class="login-main-body">
    <section class="login-main-wrapper">
        <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
                <div class="col-md-5 p-5 bg-white full-height">
                    <div class="login-main-left" wire:ignore.self>
                        <div class="text-center mb-5 login-main-left-header pt-4">
                            <img src="{{asset('assets/img/favicon.png')}}" class="img-fluid" alt="LOGO">
                            <h5 class="mt-3 mb-3">Welcome to Vidoe</h5>
                            <p>It is a long established fact that a reader <br> will be distracted by the readable.</p>
                        </div>
                        <form wire:submit.prevent="store">
                            @csrf
                            <div class="form-group">
                                <label>Ваше имя</label>
                                <input type="text" wire:model.defer="name"
                                       class="form-control {{ $errors->has('name') ? 'border-danger' : '' }}"
                                       placeholder="Введите Ваше имя">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" wire:model.defer="email"
                                       class="form-control {{ $errors->has('email') ? 'border-danger' : '' }}"
                                       placeholder="Введите Ваш mail">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label>Пароль</label>
                                <input type="password" wire:model.defer="password"
                                       class="form-control {{ $errors->has('password') ? 'border-danger' : '' }}"
                                       placeholder="Введите пароль">
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label>Повторите пароль</label>
                                <input type="password" wire:model.defer="password_confirmation"
                                       class="form-control {{ $errors->has('password') ? 'border-danger' : '' }}"
                                       placeholder="Повторите пароль">
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mt-4">
                                <button class="btn btn-outline-primary btn-block btn-lg">Зарегестрироваться</button>
                            </div>
                        </form>
                        <div class="text-center mt-5">
                            <p class="light-gray">У Вас уже есть аккаунт? <a href="{{route('login')}}">Войти</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7" wire:ignore>
                    <div class="login-main-right bg-white p-5 mt-5 mb-5">
                        <div class="owl-carousel owl-carousel-login">
                            <div class="item">
                                <div class="carousel-login-card text-center">
                                    <img src="{{asset('assets/img/login.png')}}" class="img-fluid" alt="LOGO">
                                    <h5 class="mt-5 mb-3">​Watch videos offline</h5>
                                    <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it
                                        to make a type specimen book. It has survived not <br>only five centuries</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel-login-card text-center">
                                    <img src="{{asset('assets/img/login.png')}}" class="img-fluid" alt="LOGO">
                                    <h5 class="mt-5 mb-3">Download videos effortlessly</h5>
                                    <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it
                                        to make a type specimen book. It has survived not <br>only five centuries</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel-login-card text-center">
                                    <img src="{{asset('assets/img/login.png')}}" class="img-fluid" alt="LOGO">
                                    <h5 class="mt-5 mb-3">Create GIFs</h5>
                                    <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it
                                        to make a type specimen book. It has survived not <br>only five centuries</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
</div>
