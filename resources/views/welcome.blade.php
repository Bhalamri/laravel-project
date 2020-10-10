@extends('master')

@section('title') 
Home
@stop
  

@section('header')
مدونة القرأن الكريم
@stop


@section('details')
تعليم القرآن الكريم
  </br>
تعلم بطريقة سهلة و ميسرة
@stop


@section('content')
 
<div class="col-md-6 mb-4">

    <div class="card h-100">
      
  
        <div class="card-body">   
      
         
          <div class="container">
          
          @foreach($post as $top)
          @if($top->status==1)
          <div class="container">
          <img src="{{asset('storage').'/'.$top->image}}" class="card-img-top">
          <h4 class="card-title"> <a  href="{{ url('show/' . $top->id) }}">{{$top->title}}</a></h4>
          <small>تاريخ النشر {{$top->created_date}}</small>
          </div>
          <hr/>
         
          @endif
      
          @endforeach
         
          
          
        </div>


    </div>
           
</div>
@stop

         

          
