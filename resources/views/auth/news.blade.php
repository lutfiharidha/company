@extends('layouts.app')
@section('content')
<div class="uk-container uk-container-medium uk-padding">
    <h3 class="uk-heading uk-text-left uk-text-bold">News</h3>
    <div class="uk-heading uk-text-right">
        <a class="uk-button uk-button-text" href="{{ route('news.create')}}">+ Add News</a>
    </div>
<table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>Writer</th>
            <th>Status</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
            @foreach($news as $key=>$new)
        <tr>
          <td>{{++$key}}</td>
           <td>{{$new->title}}</td>
           <td>{!!str_limit($new->content,200,' ...')!!}</td>
           <td><img width="150" height="150" src="{{asset($new->img)}}"></td>
           <td>{{$new->writer}}</td>
           <td>{{$new->status}}</td>
           <td>
            <a class="uk-button uk-button-text uk-text-primary" href="{{ route('edit.news',$new) }}">Update</a><br>
            <form action="{{ route('news.destroy',$new) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
            <button class="uk-button uk-button-text uk-text-danger">Delete</button>
               </form>
           </td>
        </tr>
           @endforeach
    </tbody>
</table>
</div>
@endsection