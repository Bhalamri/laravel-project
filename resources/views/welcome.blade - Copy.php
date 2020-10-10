<!-- @extends('master')

@section('header')
<div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">My account</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>                         
                        @endif
                    @endauth
                </div>
            @endif
        </div> 

  <h3 class="text-muted">  Quran Blog </h3>
@stop

@section('sidebar-up')
<center>
  <h1> مدونة القرأن الكريم </h1>
  <p class="lead">تعليم القرآن الكريم
  </br>
تعلم بطريقة سهلة و ميسرة</p></center>
@stop

 
@section('sidebar-right')
<h1>عناوين المدونة</h1>
 
@if(count($topic) > 1)
    @foreach($topic as $top)
        <div class="container">
        <h3>{{$top->title}}</h3>
        
        <small>تاريخ النشر {{$top->created_date}}</small>
        </div>
        </br>
    @endforeach
@else
<p>No Topic Found!!</p>

@endif
@stop

 
@section('footer')
  <p>&copy; 2020 Quran Blog </p>
@stop -->

@extends('master')

@section('header')
<div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>                         
                        @endif
                    @endauth
                </div>
            @endif
        </div> 

  <h3 class="text-muted">  Quran Blog </h3>
@stop

@section('sidebar-up')
<center>
  <h1> مدونة القرأن الكريم </h1>
  <p class="lead">تعليم القرآن الكريم
  </br>
تعلم بطريقة سهلة و ميسرة</p></center>
@stop

 
@section('sidebar-right')
<h1>عناوين المدونة</h1>
 
@if(count($topic) > 1)
    @foreach($topic as $top)
        <div class="container">
        <h3>{{$top->title}}</h3>
        <small>تاريخ النشر {{$top->created_date}}</small>
        </div>
        </br>
    @endforeach
@else
<p>No Topic Found!!</p>

@endif
@stop


@section('footer')
  <p>&copy; 2020 Quran Blog </p>
@stop