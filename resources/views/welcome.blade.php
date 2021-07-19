@extends('layouts.app', ['class' => 'bg-black'])

@section('content')
<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
    <div class="container px-4">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('argon') }}/img/brand/white.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="/">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navbar items -->
            <ul class="navbar-nav ml-auto">
                @if(Route::has('login'))
                @auth
                @else
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="/ScholarRegister">
                        <i class="ni ni-circle-08"></i>
                        <span class="nav-link-inner--text">{{ __('APPLY SCHOLARSHIP') }}</span>
                    </a>
                </li>    
                @endauth
                @endif
                <li class="nav-item">
                    @if(Route::has('login'))
                        @auth
                        <a class="nav-link nav-link-icon" href="{{ route('login') }}">
                            <i class="ni ni-key-25"></i>
                            <span class="nav-link-inner--text">{{ __('Go Back') }}</span>
                        </a>
                        @else
                        <a class="nav-link nav-link-icon" href="{{ route('login') }}">
                            <i class="ni ni-key-25"></i>
                            <span class="nav-link-inner--text">{{ __('Login') }}</span>
                        </a>
                        @endauth
                           
                    @endif
                   
                </li>

            </ul>
        </div>
    </div>
</nav>
    <div class="header bg-gradient-black py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <img class="img-thumbnail" alt="..." src="{{ asset('argon') }}/img/ECAP_LOGO.png"> 
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>

    <footer class="py-5">
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; {{ now()->year }} <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a> &amp;
                        <a href="https://www.updivision.com" class="font-weight-bold ml-1" target="_blank">Updivision</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.updivision.com" class="nav-link" target="_blank">Updivision</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection
