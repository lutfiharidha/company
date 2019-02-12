@extends('layouts.app')
@section('content')
<div class="uk-container uk-container-medium uk-card uk-card-secondary" uk-scrollspy="cls: uk-animation-fade; repeat: true">
<form action="{{ route('update.work', $works) }}"  enctype="multipart/form-data" method="post">
   <fieldset class=" uk-margin-top uk-fieldset">
      {{ csrf_field() }}
      {{ method_field('PATCH')}}
      <legend class="uk-legend ">Work Update</legend>
      <div class="uk-margin">
         Work Name
         <input class="uk-input" type="text" name="workname" value="{{$works->workname}}">
      </div>
      <div class="uk-margin">
         Image
          <img width="150" height="150" src="{{url($works->img)}}">
         <div uk-form-custom>
            <input type="file" name="file">
            <button class="uk-button uk-button-default" type="button" tabindex="-1">Select</button>
         </div>
      </div>
         <div class="uk-margin">
            Content
         <textarea class="uk-textarea ckeditor" id="ckedtor" name="content" rows="5">{{$works->content}}</textarea>
      </div>
      
      <div class="uk-margin">
         Status
         <div class="uk-form-controls">
            <select class="uk-select" id="form-stacked-select" name="status">
               @if($works->status == "Publish")
               <option value="{{$works->status}}">{{$works->status}}</option>
               <option value="Not Publish">Not Publish</option>
               @else
               <option value="{{$works->status}}">{{$works->status}}</option>
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
<script>UIkit.notification({message: 'works Has Been Updated', pos: 'bottom-center'})</script>
@endif
@endsection