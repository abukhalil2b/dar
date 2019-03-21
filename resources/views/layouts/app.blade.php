<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>  </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/card.css') }}" rel="stylesheet">

</head>
<body>
    
<div class="nav">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 " style="text-align: center;">
                <img class="header-logo-img" src="{{ asset('img/logo.png') }}" width="90" >
            </div>
            <div class="col-sm-12 col-lg-6 " style="text-align: center; margin-top: 20px;">
                <span class="body-title-lg" style="text-align: center;">مدرسة دار القرآن</span>
            </div>
        </div>
    </div>
</div><!--/navbar-->

<div class="nav-dn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                @if($user = Auth::user())
                <div style="display: block;">
                    <span >البرنامج:</span>
                    @if(App\Program::orderBy('id','desc')->first()!=null)
                    [{{App\Program::orderBy('id','desc')->first()->name}}]
                    [{{App\Program::orderBy('id','desc')->first()->created_at}}]
                    @endif
                
                </div>
                
                <div style="display: block;">
                    <span >المستخدم:</span>
                    [{{$user->first_name}} {{$user->second_name}}]
                </div>
                
                <a class="btn-logout" href="{{route('user.logout')}}">خروج</a>
                @endif
                    
            </div>
            <div class="col-lg-12 btn-main-menu-container" >
                @if($user = Auth::user())
                <a  href="{{route('welcome')}}" class="btn-mainmenu btn-sm btn btn-light-green" >القائمة</a>
                @endif   
            </div>
        </div>
    </div>
</div><!--/navbar-->

    @yield('content')


    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" ></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" ></script>
    @yield('javascript')
</body>
</html>
