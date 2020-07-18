@extends('layouts.app')
@section('content')

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">OrderId</th>
        <th scope="col">Name</th>
        <th scope="col">Amount</th>
        <th scope="col">Options</th>
      </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
    <tr>
        <td>{{$order->order_id}}</td>
        <td>{{$order->name}}</td>
        <td>{{$order->total_price}}</td>
        <td>
          {!! Form::open(['route' => ['admin.paid', 'id' =>$order->order_id , 'method' => 'POST']]) !!}

              {{Form::submit('Paid',['class' => 'btn btn-success','name'=>'paid'])}}
           

         {!! Form::close() !!}
        </td>
      </tr>
        @endforeach
    </tbody>
</table>
@endsection