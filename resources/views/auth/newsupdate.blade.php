@extends('layouts.app')
@section('content')
<div class="uk-container uk-container-medium uk-card uk-card-secondary" uk-scrollspy="cls: uk-animation-fade; repeat: true">
<form action="{{ route('update.news', $news) }}"  enctype="multipart/form-data" method="post">
   <fieldset class=" uk-margin-top uk-fieldset">
      {{ csrf_field() }}
      {{ method_field('PATCH')}}
      <legend class="uk-legend ">Work Update</legend>
      <div class="uk-margin">
         Work Name
         <input class="uk-input" type="text" name="title" value="{{$news->title}}">
      </div>
      <div class="uk-margin">
         Image
          <img width="150" height="150" src="{{url($news->img)}}">
         <div uk-form-custom>
            <input type="file" name="file">
            <button class="uk-button uk-button-default" type="button" tabindex="-1">Select</button>
         </div>
      </div>
         <div class="uk-margin">
            Content
         <textarea class="uk-textarea ckeditor" id="ckedtor" name="content" rows="5">{{$news->content}}</textarea>
      </div>
       <div class="uk-margin">
         Writer
         <input class="uk-input" type="text" name="writer" value="{{$news->writer}}">
      </div>
      <div class="uk-margin">
         Keywords
         <input class="uk-input" type="text" name="keyword" value="{{$news->keywords}}">
      </div>
      <div class="uk-margin">
         Status
         <div class="uk-form-controls">
            <select class="uk-select" id="form-stacked-select" name="status">
               @if($news->status == "Publish")
               <option value="{{$news->status}}">{{$news->status}}</option>
               <option value="Not Publish">Not Publish</option>
               @else
               <option value="{{$news->status}}">{{$news->status}}</option>
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
<script>UIkit.notification({message: 'News Has Been Updated', pos: 'bottom-center'})</script>
@endif
@endsection