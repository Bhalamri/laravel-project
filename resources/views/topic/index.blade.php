<!-- @extends('master') -->
<!-- @extends('layouts.app') -->

@section('header')
  <!-- <nav >
    <ul class="nav nav-pills pull-right">
      <li role="presentation" class="active"><a href="{{ url('/welcome') }}">Home</a></li>
      <li role="presentation"><a href="{{ url('/subject1') }}">About</a></li>
      <li role="presentation"><a href="#">Contact</a></li>
    </ul>
  </nav> -->

  <!-- <div class="flex-center position-ref">
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
        </div>  -->

  <h3 class="text-muted">  Quran Blog </h3>
@stop


<!-- @section('sidebar-up')
<center>
  <h1> مدونة القرأن الكريم </h1>
  <p class="lead">تعليم القرآن الكريم
  </br>
تعلم بطريقة سهلة و ميسرة</p></center>
@stop

@section('content')
<div class="container">


@endsection -->

<!-- @section('sidebar-right')
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
@stop -->