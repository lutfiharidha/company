@extends('layouts.app')
@section('content')
<div class="uk-container uk-container-medium uk-background-muted uk-position-center" uk-grid uk-scrollspy="cls: uk-animation-fade; delay: 500; repeat: false">
    <h1 class="uk-text-bold">Login {{ config('app.name') }}</h1>
<form action="{{ route('login') }}" method="POST">
    {{ csrf_field() }}
<div class="uk-card-secondary uk-overlay uk-overlay-primary">
    <div class="uk-margin">
            <input class="uk-input" name="email" type="text" placeholder="Email" required>
             @if ($errors->has('email'))
            <script>UIkit.notification({message: 'Email/Password Wrong', pos: 'top-center'})</script>
            @endif
    </div>
    <div class="uk-margin">
            <input class="uk-input" name="password" type="password" placeholder="Password" required>
    </div>
    <div class="uk-margin">
        <label><input class="uk-checkbox" type="checkbox" value="remember-me"> Remember Me</label>
    </div>
    <div class="uk-margin">
            <button class="uk-button uk-button-default">Login</button>
    </div>
    <div class="uk-margin">
        <a href="/register" class="uk-button uk-button-text">Register</a>
    </div>
    <div class="uk-margin">
    <p class="uk-text-center">&copy; 2018</p>
    </div>
</div>
</form>
</div>
@endsection