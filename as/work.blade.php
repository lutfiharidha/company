@extends('layouts.navb')
@section('content')
<div class="uk-container uk-container-medium ">
        <div class="uk-margin uk-text-center uk-padding">

    <div class="uk-child-width-1-3@m" uk-grid>

@foreach($works as $work)
   <div class="uk-text-center">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img class="uk-width-medium uk-transition-scale-up uk-transition-opaque" src="{{asset($work->img)}}" alt="{{$work->workname}}">
             <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                <h2>{{$work->workname}}</h2>
                <a class="uk-button uk-button-text uk-margin-remove" href="{{ route('work.show', [$work->id,urlencode(date('dmy', strtotime($work->created_at))), urlencode($work->workname)]) }}">View Detail</a>
            </div>
        </div>
    </div>
 @endforeach
</div>
</div>
</div>
@endsection