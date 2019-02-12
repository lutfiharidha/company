@extends('layouts.app')
@section('content')
<div class="uk-container uk-container-medium uk-card uk-card-secondary" uk-scrollspy="cls: uk-animation-fade; repeat: true">
<form action="{{ route('update.slider', $slider) }}"  enctype="multipart/form-data" method="post">
   <fieldset class=" uk-margin-top uk-fieldset">
      {{ csrf_field() }}
      {{ method_field('PATCH')}}
      <legend class="uk-legend ">Slider Update</legend>
      
      <div class="uk-margin">
         Title
         <input class="uk-input" type="text" name="title" value="{{$slider->title}}">
      </div>
      
      <div class="uk-margin">
         Image
          <img width="150" height="150" src="{{url($slider->img)}}">
         <div uk-form-custom>
            <input type="file" name="file">
            <button class="uk-button uk-button-default" type="button" tabindex="-1">Select</button>
         </div>
      </div>
      
      <div class="uk-margin">
         Content
         <textarea class="uk-textarea ckeditor" id="ckedtor" name="content" rows="5">{{$slider->content}}</textarea>
      </div>
      
      <div class="uk-margin">
         Status
         <div class="uk-form-controls">
            <select class="uk-select" id="form-stacked-select" name="status">
               @if($slider->status == "Publish")
               <option value="{{$slider->status}}">{{$slider->status}}</option>
               <option value="Not Publish">Not Publish</option>
               @else
               <option value="{{$slider->status}}">{{$slider->status}}</option>
               <option value="Publish">Publish</option>
               @endif
            </select>
         </div>
      </div>
   </fieldset>
   <div class="uk-margin">
      <input  class="uk-button uk-button-default" type="submit" placeholder="Post">
</form>
</div>
@if(session()->has('message'))
<script>UIkit.notification({message: 'Slider Has Been Updated', pos: 'bottom-center'})</script>
@endif
@endsection