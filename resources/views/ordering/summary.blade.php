@extends('layouts.app')
@section('head_extra')
<style>
    .abc123{
        text-align: center;
    }
    .height {
        min-height: 200px;
    }
    
    .icon {
        font-size: 47px;
        color: #5CB85C;
    }
    
    .iconbig {
        font-size: 77px;
        color: #5CB85C;
    }
    
    .table > tbody > tr > .emptyrow {
        border-top: none;
    }
    
    .table > thead > tr > .emptyrow {
        border-bottom: none;
    }
    
    .table > tbody > tr > .highrow {
        border-top: 3px solid;
    }
    </style>
@endsection

@section('content')
<br>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                <h3 class="text-xs-center"><strong>Order Summary                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;              Order Id - {{$order_id}}</strong></h3>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <td><strong>Item Name</strong></td>
                                    <td class="text-xs-center"><strong>Item Price</strong></td>
                                    <td class="text-xs-center"><strong>Item Quantity</strong></td>
                                    <td class="text-xs-right"><strong>Total</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contents as $content)
                                <tr>
                                    <td>{{$content['name']}}</td>
                                    <td class="text-xs-center">{{$content['price']}}</td>
                                    <td class="text-xs-center">{{$content['quantity']}}</td>
                                    <td class="text-xs-right">{{$content['price']*$content['quantity']}}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-xs-center"><strong>Subtotal</strong></td>
                                    <td class="highrow text-xs-right">{{$totalprice}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="abc123">
                        {!! Form::open(['route' => ['payment.pay', 'id' => $order_id , 'method' => 'POST']]) !!}


                                {{Form::submit('Cash',['class' => 'btn btn-warning btn-lg','name'=>'cash'])}}
                                    &nbsp;
                                    {{-- {{Form::submit('Paytm',['class' => 'btn btn-warning btn-lg','name'=>'paytm'])}} --}}
                                {!! Form::close() !!}   


                                <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
