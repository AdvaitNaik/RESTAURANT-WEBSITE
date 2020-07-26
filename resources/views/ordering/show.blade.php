@foreach($today as $item)
    <div class="col-md-3 col-sm-6 col-xs-6 ">
        <div class="card csize my-2" >
            <img class="card-img-top size" src="/storage/images/{{$item->item_image}}" alt="Card image cap">
            <div class="card-body">
            <h5 style="color: white; background-color:rgb(10, 10, 10); text-align:center"><strong>TODAY'S SPECIAL</strong></h5>
            <h5 class="card-title">{{$item->item_name}}<br><small>PRICE: {{$item->item_price}}</small></h5>
            
            <p class="card-text"></p>
            {!! Form::open (['route' => ['ordering.add', 'id' =>$item->item_id , 'method' => 'POST']]) !!}
                    <div class="form-group">
                        <input type="number" class="form-control" id="quantity" name='quantity' placeholder="Enter Quantity">
                    </div>
                    <input type="submit" class="btn btn-success" value="ADD TO CART">
            {!! Form::close() !!}
            </div>
    </div>
    
    </div>
@endforeach

@foreach($combos as $combo)
    <div class="col-md-3 col-sm-6 col-xs-6 ">
        <div class="card csize my-2" >
            <img class="card-img-top size" src="../images/combo.jpg" alt="Card image cap">
            <div class="card-body">
                <br>
            <h5 class="card-title">{{$combo->combo_name}}&nbsp;
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ITEMS
                </button>
                <div class="dropdown-menu">
                    @php
                        $combo_items=DB::table('combo_item')
                                    ->join('items', 'item_id_fk', '=', 'item_id')
                                    ->where('combo_id_fk',$combo->combo_id)
                                    ->get();
                        foreach($combo_items as $i)
                        {
                            echo '<a style="color: rgb(214, 212, 253); background-color:black" class="dropdown-item" >'.$i->item_name.'</a>';   
                        }
                    @endphp
                </div>
               
                <br>
                <small>Price: {{$combo->combo_price}}</small></h5>
            
            <p class="card-text"></p>
            {!! Form::open (['route' => ['ordering.add', 'id' =>$combo->combo_id , 'method' => 'POST']]) !!}
                    <div class="form-group">
                        <input type="number" class="form-control" id="quantity" name='quantity' placeholder="Enter Quantity">
                    </div>
                    <input type="submit" class="btn btn-success" value="ADD TO CART" name='combo'>
            {!! Form::close() !!}
            </div>
        </div>

    </div>
@endforeach



@foreach($items as $item)
    <div class="col-md-3 col-sm-6 col-xs-6 ">
        <div class="card csize my-2" >
            <img class="card-img-top size" src="/storage/images/{{$item->item_image}}" alt="Card image cap">
            <div class="card-body">
                <br>
            <h5 class="card-title">{{$item->item_name}}<br><small>PRICE: {{$item->item_price}}</small></h5>
            
            <p class="card-text"></p>
            {!! Form::open (['route' => ['ordering.add', 'id' =>$item->item_id , 'method' => 'POST']]) !!}
                <div class="form-group">
                    <input type="number" class="form-control" id="quantity" name='quantity' placeholder="Enter Quantity">
                </div>
                <input type="submit" class="btn btn-success" value="ADD TO CART">
            {!! Form::close() !!}
            </div>
        </div>
    </div>
@endforeach

