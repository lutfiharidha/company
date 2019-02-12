@extends('layouts.app')
@section('content')
<div class="uk-container uk-container-medium uk-padding">
    <h3 class="uk-heading uk-text-left">Page</h3>
    @if(DB::table('pages')->count() <= 3)
    <div class="uk-heading uk-text-right">
        <a class="uk-button uk-button-text" href="{{ route('pages.create')}}">+ Add Page</a>
    </div>
    @endif
<table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Page</th>
            <th>Content</th>
            <th>Image</th>
            <th>Update</th>

        </tr>
    </thead>
    <tbody>
            @foreach($pages as $page)
        <tr>
           <td>{{$page->page}}</td>
           <td>{!!str_limit($page->content,200,' ...')!!}</td>
           <td><img width="150" height="150" src="{{asset($page->img)}}"></td>
           <td><a class="uk-button uk-button-primary" href="{{ route('update.pages',$page->id) }}">Update</a></td>
        </tr>
           @endforeach
    </tbody>
</table>
</div>
@endsection