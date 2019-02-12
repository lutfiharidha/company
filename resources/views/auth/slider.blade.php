@extends('layouts.app')
@section('content')
<div class="uk-container uk-container-medium uk-padding">
    <h3 class="uk-heading uk-text-left">Slider</h3>
    <div class="uk-heading uk-text-right">
        <a class="uk-button uk-button-text" href="{{ route('slider.create')}}">+ Add Slider</a>
    </div>
<table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Title</th>
            <th>Content</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
            @foreach($sliders as $key=>$slider)
        <tr>
          <td>{{++$key}}</td>
           <td><img width="150" height="150" src="{{asset($slider->img)}}"></td>
           <td>{{$slider->title}}</td>
           <td>{!!str_limit($slider->content,200,' ...')!!}</td>
           <td>{{$slider->status}}</td>
           <td>
            <a class="uk-button uk-button-text uk-text-primary" href="{{ route('edit.slider',$slider) }}">Update</a><br>
            <form action="{{ route('slider.destroy',$slider) }}" method="post">
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