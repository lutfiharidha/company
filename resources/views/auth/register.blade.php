@extends('layouts.app')
@section('content')
<div class="uk-container uk-container-medium uk-position-center" uk-grid uk-scrollspy="cls: uk-animation-fade; delay: 500; repeat: false">
    <h1 class="uk-text-white">Register {{ config('app.name') }}</h1>
<form action="{{ route('register') }}" method="POST">
{{ csrf_field() }}
<div class="uk-card-secondary uk-overlay uk-overlay-primary">
    <div class="uk-margin">
            <input class="uk-input" id="inputName" name="name" type="text" placeholder="Name" required>
    </div>
    <div class="uk-margin">
            <input class="uk-input" value="{{ old('email') }}" id="inputEmail" name="email" type="text" placeholder="Email" required>
            @if ($errors->has('email'))
            <script>UIkit.notification({message: 'The email has already been taken.', pos: 'top-center'})</script>
            @endif
    </div>
    <div class="uk-margin">
            <input class="uk-input" id="inputPassword" name="password" type="password" placeholder="Password" required>
    </div>
    <div class="uk-margin">
            <input class="uk-input" id="inputPassword" name="password_confirmation" type="password" placeholder="Password Confirmation" required>
             @if ($errors->has('password'))
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
            @endif
    </div>
    <div class="uk-margin">
            <button class="uk-button uk-button-default">Register</button>
    </div>
    <div class="uk-margin">
        <a href="/login" class="uk-button uk-button-text">Login</a>
    </div>
    <div class="uk-margin">
    <p class="uk-text-center">&copy; 2018</p>
    </div>
</div>
</form>
</div>
@endsection