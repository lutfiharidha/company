@extends('layouts.navb')
@section('content')
<div class="uk-container uk-container-small uk-padding">
<ul uk-accordion>
    @foreach($works as $work)

    <li>

        <a class="uk-accordion-title uk-text-capitalize" href="#">{{$work->workname}}</a>
        <div class="uk-accordion-content">
            <div class="uk-panel">
    <img class="uk-align-center uk-align-right@m uk-margin-remove-adjacent" src="{{asset($work->img)}}" alt="{{$work->workname}}" width="225" height="150"><div class="uk-text-muted"> Publised at {{date('d-M-Y', strtotime($work->created_at))}}</div>
    <div class="uk-text-justify">{!!$work->content!!}</div>
</div>
        </div>
    </li>
     @endforeach

</ul>
{!!$works->render()!!}
</div>
@endsection