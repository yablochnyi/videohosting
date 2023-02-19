<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <title>VIDOE - Video Streaming Website HTML Template</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="img/favicon.png">
    <!-- Bootstrap core CSS-->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/osahan.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/video.css')}}" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/owl.theme.css')}}">
{{--    <link href="https://vjs.zencdn.net/8.0.3/video-js.css" rel="stylesheet" />--}}
    @stack('video-css')
    @livewireStyles
</head>
<body id="page-top">
<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
    &nbsp;&nbsp;
    <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button> &nbsp;&nbsp;
    <a class="navbar-brand mr-1" href="/"><img class="img-fluid" alt="" src="{{asset('assets/img/logo.png')}}"></a>
    <!-- Navbar Search -->
    <livewire:components.search-component />
    <!-- Navbar -->
    @guest()
        <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
            <li class="nav-item mx-1">
                <a class="nav-link" href="{{route('login')}}">
                    Вход
                </a>
            </li>
        </ul>
    @endguest
    @auth()
        <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
            <li class="nav-item mx-1">
                <a class="nav-link" href="{{route('upload.video')}}">
                    <i class="fas fa-plus-circle fa-fw"></i>
                    Загрузить видео
                </a>
            </li>
{{--            <li class="nav-item dropdown no-arrow mx-1">--}}
{{--                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    <i class="fas fa-bell fa-fw"></i>--}}
{{--                    <span class="badge badge-danger">9+</span>--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">--}}
{{--                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>--}}
{{--                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="nav-item dropdown no-arrow mx-1">--}}
{{--                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    <i class="fas fa-envelope fa-fw"></i>--}}
{{--                    <span class="badge badge-success">7</span>--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">--}}
{{--                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>--}}
{{--                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>--}}
{{--                </div>--}}
{{--            </li>--}}
            <li class="nav-item dropdown no-arrow osahan-right-navbar-user">
                <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img alt="Avatar" src="{{asset('storage/avatar/avatar-' . auth()->id() . '.png')}}">
                    {{auth()->user()->name}}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{route('account')}}"><i class="fas fa-fw fa-user-circle"></i> &nbsp; Личный кабинет</a>
{{--                    <a class="dropdown-item" href="subscriptions.html"><i class="fas fa-fw fa-video"></i> &nbsp; Subscriptions</a>--}}
                    <a class="dropdown-item" href="{{route('channel.create')}}"><i class="fas fa-fw fa-cog"></i> &nbsp; Создать канал</a>
                    <div class="dropdown-divider"></div>
                    <livewire:components.logout-component />
                </div>
            </li>
        </ul>
    @endauth
</nav>
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="/">
                <i class="fas fa-fw fa-home"></i>
                <span>Главная</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('channel.index')}}">
                <i class="fas fa-fw fa-users"></i>
                <span>Каналы</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('upload.video')}}">
                <i class="fas fa-fw fa-cloud-upload-alt"></i>
                <span>Загрузить видео</span>
            </a>
        </li>
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="history-page.html">--}}
{{--                <i class="fas fa-fw fa-history"></i>--}}
{{--                <span>История</span>--}}
{{--            </a>--}}
{{--        </li>--}}
        @auth()
        <li class="nav-item channel-sidebar-list">
            <h6>Подписки</h6>
            <ul>
                @foreach(auth()->user()->subscribedChannels()->get() as $subscribe)
                <li>
                    <a href="{{route('channel.show', $subscribe)}}">
                        <img class="img-fluid" alt="" src="{{asset('assets/img/s1.png')}}"> {{$subscribe->name}}
                    </a>
                </li>
                @endforeach
            </ul>
        </li>
        @endauth
    </ul>
    {{$slot}}
    <!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Bootstrap core JavaScript-->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Core plugin JavaScript-->
<script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<!-- Owl Carousel -->
<script src="{{asset('assets/vendor/owl-carousel/owl.carousel.js')}}"></script>
<!-- Custom scripts for all pages-->
<script src="{{asset('assets/js/custom.js')}}"></script>
{{--<script src="https://vjs.zencdn.net/8.0.3/video.min.js"></script>--}}
@stack('video-script')
@livewireScripts
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
