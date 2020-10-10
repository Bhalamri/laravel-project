@extends('master')

@section('title') 
First Page
@stop
  
@section('header')       
Welcome 
@stop

@section('details')
Welcome  {{ Auth::user()->name }}  you are logged in!
@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">  
            <center>
                <div class="card-header"> 
              
                 <a href="{{ url('/create') }}">إنشاء موضوع جديد</a>
                
                 </div>
                <div class="card-header"> قائمة المواضيع </div>
            </center>
                <div class="card-body">               
         
                    <table class="table">
                        <tr>
                            <td>#</td>
                            <td>title</td>
                            <td>status</td>
                            <td>
                                posted by
                            </td>
                            @if(auth()->user()->type=='Admin')
                            <td>control user</td>
                            @else    
                            <td>Normal user</td>
                            @endif
                        </tr>
                       
                        @foreach($post as $top)
                        <tr>
                        <td>
                        {{$top->id}}
                        </td>
                        <td>
                                <a href="{{ url('show/' . $top->id) }}">{{$top->title}}</a>
                        </td>
                        <td>
                                <p class="{{$top->status==1?'active':'deactive'}}">
                                    {{$top->status==1?'active':'deactive'}}
                                </p>
                        </td>
                        <td>
                        {{$top->user}}
                 
                        </td>
                        @if(auth()->user()->type=='Admin')
                            <td>
                                @if($top->status==0)
                                <a href="{{url('approve',['id'=>$top->id])}}">Activate</a>
                                @else
                                <a href="{{url('reject',['id'=>$top->id])}}">Disactivate</a>
                                @endif
                            </td>
                            @endif

                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
      
@endsection
