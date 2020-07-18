@extends('layouts.app')
@section('head_extra')

<style>
.size
{
    height:200px;
    width:100%;
}
.csize
{
    width:80%;
}

</style>

@endsection
@section('content')

<div class="row">
@foreach($orders as $order)

<div class="col-md-3 col-sm-6 col-xs-6 ">
  <div class="card border-dark mb-3 csize " style="max-width: 18rem; margin-left:10px ">
  <div class="card-header bg-transparent border-dark text-center"><strong>ORDER ID  {{$order->order_id}}</strong></div>
    <div class="card-body text-dark">
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
    <div class="card-footer bg-transparent border-dark text-center">
      {{-- {{$order->name}}  --}}
      {!! Form::open(['route' => ['admin.done', 'id' => $order->order_id , 'method' => 'POST']]) !!}


          {{Form::submit('Done',['class' => 'btn btn-info btn-block  ','style'=>'text-align:center'])}}   
        
         
      {!! Form::close() !!}
    
    </div> 
  </div>
</div>

@endforeach
</div>
@endsection