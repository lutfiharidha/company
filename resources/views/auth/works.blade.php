@extends('layouts.app')
@section('content')
<div class="uk-container uk-container-medium uk-padding">
    <h3 class="uk-heading uk-text-left uk-text-bold">Works</h3>
    <div class="uk-heading uk-text-right">
        <a class="uk-button uk-button-text" href="{{ route('work.create')}}">+ Add Work</a>
    </div>
<table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>No</th>
            <th>Work Name</th>
            <th>Content</th>
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
            @foreach($works as $key=>$work)
        <tr>
          <td>{{++$key}}</td>
           <td>{{$work->workname}}</td>
           <td>{!!str_limit($work->content,200,' ...')!!}</td>
           <td><img width="150" height="150" src="{{asset($work->img)}}"></td>
           <td>{{$work->status}}</td>
           <td>
            <a class="uk-button uk-button-text uk-text-primary" href="{{ route('edit.work',$work) }}">Update</a><br>
            <form action="{{ route('work.destroy',$work) }}" method="post">
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