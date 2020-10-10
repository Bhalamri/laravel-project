@extends('master')
 
@section('title') 
إنشاء موضوع  
@stop

@section('header')
 إنشاء موضوع جديد 
@stop
 
@section('content')

 <div class="container mt-5">

<form action="{{ action('PostsController@store') }}" method="post" enctype="multipart/form-data">

    <!-- CROSS Site Request Forgery Protection -->
    @csrf

    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" id="title">
    </div>

    <div class="form-group">
        <label>Post content</label>
        <textarea class="form-control" name="post" id="post" rows="4"></textarea>
    </div>

    <div class="form-group">
        <label>Image</label>
        <input class="form-control" type="file" name="image" />
    </div>

    <div class="form-group">
    <button class="btn btn-primary btn-block" >Submit</button>
    </div>
  
  
</form>
</div>
@stop

 
 