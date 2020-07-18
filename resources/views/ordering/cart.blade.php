@extends('layouts.app')
@section('content') 

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Item</th>
        <th scope="col">Price per item</th>
        <th scope="col">Quantity</th>
        <th scope="col">Options</th>
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
  {!! Form::open(['route' => ['ordering.save' , 'method' => 'POST']]) !!}


         {{Form::submit('CONTINUE -> ->',['class' => 'btn btn-outline-success btn-lg btn-block','name'=>'continue'])}}
        {!! Form::close() !!}

@endsection

