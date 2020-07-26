@extends('layouts.app')
@section('head_extra')

<style>
body,.back
{
   /* background-image: url('../images/menu/menubg2.jpg');*/
    background-image : linear-gradient(rgba(255,255,255,0.8),rgba(255,255,255,0.8)), url({{ asset("/images/background-menu3.jpg") }}); 
    background-repeat: no-repeat;
    background-size: cover;
}

.table-custom{
    background-color:#130d08;
    color:white;
    font-size:30px;
    font-family:'Bahnschrift Light';
}

</style>

@endsection



@section('content') 

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<br>
<div class="container-fluid">
<table class="table table-striped table-custom">
    <thead>
      <tr>
        <th scope="col">ITEM</th>
        <th scope="col">PRICE PER ITEM</th>
        <th scope="col">QUANTITY</th>
        <th scope="col">OPTIONS</th>
      </tr>
    </thead>
    <tbody>
        @foreach($contents as $content)
    <tr>
        <td>{{$content['name']}}</td>
        <td>{{$content['price']}}</td>
        <td>{{$content['quantity']}}</td>
        <td>
          {!! Form::open(['route' => ['ordering.change', 'id' => $content['id'] , 'method' => 'POST']]) !!}

              {{Form::submit('+',['class' => 'btn btn-success','name'=>'plus'])}}
           

         {!! Form::close() !!}
        </td>
        <td>
         {!! Form::open(['route' => ['ordering.change', 'id' => $content['id'] , 'method' => 'POST']]) !!}

              
              {{Form::submit('-',['class' => 'btn btn-danger','name'=>'minus'])}}

         {!! Form::close() !!}
        </td>
        <td>
        {!! Form::open(['route' => ['ordering.remove', 'id' => $content['id'] , 'method' => 'POST']]) !!}

             {{Form::submit('X',['class' => 'btn btn-warning','name'=>'remove_item'])}}
        {!! Form::close() !!}

        </td>
    </tr>
        @endforeach
    </tbody>
  </table>
  <div>
  {!! Form::open(['route' => ['ordering.save' , 'method' => 'POST']]) !!}


         {{Form::submit('CONTINUE -> ->',['class' => 'btn btn-outline-success btn-lg btn-block','name'=>'continue'])}}
        {!! Form::close() !!}

@endsection

