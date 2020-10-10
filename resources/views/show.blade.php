@extends('master')
@section('title') 
Details
@stop
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	<h2>{{$post->title}}</h2>
                </div>

                <div class="card-body">
                <img src="{{asset('storage').'/'.$post->image}}" class="card-img-top">
                </div>
                <p>
                	{{$post->post}}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
