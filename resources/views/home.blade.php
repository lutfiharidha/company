@extends('layouts.app')
@section('content')
<div class="uk-container uk-container-medium uk-padding">
    <h3 class="uk-heading uk-text-left">Visitor <span class="uk-label uk-label-primary">{{DB::table('visitlogs')->count()}}</span></h3>
<table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>No</th>
            <th>IP Address</th>
            <th>Country</th>
            <th>Region</th>
            <th>City</th>
            <th>User</th>
            <th>Device</th>
            <th>Browser</th>
            <th>Last Activity</th>
        </tr>
    </thead>
    <tbody>
            @foreach($visit as $key=>$v)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$v->ip}}</td>
            <td>{{$v->region_code}}</td>
            <td>{{$v->region_name}}</td>
            <td>{{$v->city}}</td>
            <td>{{$v->user_name}}</td>
            <td>{{$v->os}}</td>
            <td>{{$v->browser}}</td>
            <td>{{$v->last_visit}}</td>
        </tr>
            @endforeach
    </tbody>
</table>
</div>
@endsection