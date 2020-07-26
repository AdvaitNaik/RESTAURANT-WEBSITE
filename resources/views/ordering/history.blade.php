@extends('layouts.app')
@section('head_extra')

<style>
body,.back
{
   /* background-image: url('../images/menu/menubg2.jpg');*/
    background-image : linear-gradient(rgba(255,255,255,0.4),rgba(255,255,255,0.4)), url({{ asset("/images/background-menu.jpg") }}); 
    /*background-repeat: no-repeat;
    background-size: cover;*/
}

.table-custom{
    background-color:white;
    color:#130d08;
    font-size:30px;
    font-family:'Bahnschrift Light';
}

</style>

@endsection



@section('content') 
<br>
<div class="container-fluid">
<table class="table table-striped table-custom">
    <thead>
      <tr>
        <th scope="col">ORDER ID</th>
        <th scope="col">AMOUNT</th>
        <th scope="col">DATE</th>
        
        <th scope="col">DETAILS</th>
      </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
    <tr>
        <td><b>{{$order->order_id}}</b>
            <br>
        <span>
            @if($order->payment == 0)
                <span style="font-size: 20px; color: red"><b>PAYMENT PENDING</b></span>
            @else
                @if($order->status == 0)
                    <span style="color: orange; font-size: 20px"><b>TO BE SERVED</b></span>
                @else
                    <span style="color:rgb(7, 250, 7); font-size: 20px"><b>ORDER READY</b></span>
                @endif
            @endif
        </span>
        </td>
        <td>{{$order->total_price}}</td>
        <td>@php echo date( "d F Y", strtotime($order->created_at)) @endphp</td>
        
        <td>
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ITEMS
            </button>
            <div class="dropdown-menu">
                @php
                $items=DB::table('item_order')
                            ->join('items', 'item_id_fk', '=', 'item_id')
                            ->where('order_id_fk',$order->order_id)
                            ->get();
                $combos=DB::table('combo_order')
                        ->join('combos', 'combo_id_fk', '=', 'combo_id')
                        ->where('order_id_fk',$order->order_id)
                        ->get();
                foreach($items as $item)
                {
                    echo '<a style="color: rgb(214, 212, 253); background-color:black" class="dropdown-item" >'.$item->quantity.'&nbsp; &nbsp;'. $item->item_name.'</a>';   
                }
    
                foreach($combos as $combo)
                {
                    echo '<a style="color: rgb(214, 212, 253); background-color:black" class="dropdown-item" >'.$combo->quantity.'&nbsp; &nbsp;'. $combo->combo_name.'</a>';   
                }
                @endphp
            </div>
        </td>
    </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection

