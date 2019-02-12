<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name') }}</title>
          <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- UIkit CSS -->
<link rel="stylesheet" href="{{url('css/uikit.min.css')}}" />
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300" rel="stylesheet">
<!-- UIkit JS -->
<script src="{{url('js/uikit.min.js')}}"></script>
<script src="{{url('js/uikit-icons.min.js')}}"></script>
      <script src="{{ asset('unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
      <script src="{{ asset('unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>
</head>
<body>
    <nav class="uk-navbar-container" uk-navbar uk-sticky>
        <div class="uk-navbar-left uk-margin-medium-left">
                <a class="uk-navbar-item uk-logo" href="/">Company</a>
        </ul>
    </div>
@guest
@else
    <div class="uk-navbar-right uk-navbar-item uk-margin-medium-right">
        <ul class="uk-navbar-nav">
            <li class="uk-active">
                <a class="uk-navbar-item" href="/home">Dashboard</a>
            </li>
            <li class="uk-active">
                <a href="{{route('pages')}}">About</a>
            </li>
            <li class="uk-active">
                <a href="{{route('slider')}}">Slider</a>
            </li>
            <li class="uk-active">
                <a href="{{route('work')}}">Works</a>
            </li>
            <li class="uk-active">
                <a href="#">Service</a>
            </li>
            <li class="uk-active">
                <a href="{{route('news')}}">News</a>
            </li>
            <li class="uk-active">
               <a class="uk-navbar-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                           </form>
            </li>
        </ul>
    </div>
@endguest      
</nav>
@yield('content')
</body>
</html>