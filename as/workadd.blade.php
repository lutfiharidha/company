@extends('layouts.app')
@section('content')
<div class="uk-container uk-container-medium uk-card uk-card-secondary" uk-scrollspy="cls: uk-animation-fade; repeat: true">
<form action="{{ route('work.store') }}"  enctype="multipart/form-data" method="post">
   <fieldset class=" uk-margin-top uk-fieldset">
      {{ csrf_field() }}
      <legend class="uk-legend ">Add Work</legend>
      <div class="uk-margin">
         Work Name
         <input class="uk-input" type="text" name="workname" placeholder="Work Name...">
      </div>
      
      <div class="uk-margin">
         Image
         <div uk-form-custom>
            <input type="file" name="file">
            <button class="uk-button uk-button-default" type="button" tabindex="-1">Select</button>
         </div>
      </div>      
      <div class="uk-margin">
         Content
         <textarea class="uk-textarea ckeditor" id="ckedtor" name="content" rows="5"></textarea>
      </div>
      
      <div class="uk-margin">
         Status
         <div class="uk-form-controls">
            <select class="uk-select" id="form-stacked-select" name="status">
               <option placeholder="Publish">Publish</option>
               <option placeholder="Not">Not Publish</option>
            </select>
         </div>
      </div>
   </fieldset>
   <div class="uk-margin">
      <input  class="uk-button uk-button-default" type="submit" placeholder="Post">
</form>
</div>
@if(session()->has('message'))
<script>UIkit.notification({message: 'Work Has Been Added', pos: 'bottom-center'})</script>
@endif
@endsection