@extends('layouts.app')

@section('head_extra')

<style>

body,.back
{
   /* background-image: url('../images/menu/menubg2.jpg');*/
    background-image : linear-gradient(rgba(255,255,255,0.8),rgba(255,255,255,0.8)), url({{ asset("/images/background-menu3.jpg") }}); 
}

.nav-custom{
    background-color:rgb(243,188,76);
}

</style>

@endsection




@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ADMIN DASHBOARD</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as Admin! You have All Admin Rights
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<br>
<nav class=" navbar navbar-expand-lg navbar-light nav-custom">
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto " >
        
        <li class="nav-item" style="text-align: center">
            <a  class="nav-link" onclick="myFunction4()">ADD-CUISINE</a>
        </li>
        <li class="nav-item" style="text-align: center">
            <a  class="nav-link" onclick="myFunction1()">ADD-ITEM</a>
        </li>
        <li class="nav-item" style="text-align: center">
            <a  class="nav-link" onclick="myFunction2()">ADD-COMBO</a> 
        </li>
        <li class="nav-item" style="text-align: center">
            <a class="nav-link"  onclick="myFunction3()" >TODAY's-SPECIAL</a>      
        </li>
        
    </ul>
      
    </div>
</nav>
<br>
                                        <!-- ADD Cusine -->
<div class="container" id="4" style="display:none;">

    {!! Form::open(['action' => 'AdminController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <div class="form-group">
        {{Form::label('cuisine_name', 'Cusine Name')}}
        {{Form::text('cuisine_name', '', ['class' => 'form-control', 'placeholder' => 'cuisine name'])}}
    </div>

    {{Form::submit('Submit',['class' => 'btn btn-primary','name'=>'add_cuisine'])}}
    {!! Form::close() !!}
</div>

                                 <!-- ADD ITEM -->
<div class="container" id="1" style="display:none;">

        {!! Form::open(['action' => 'AdminController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('item_name', 'ITEM NAME')}}
            {{Form::text('item_name', '', ['class' => 'form-control', 'placeholder' => 'item name'])}}
        </div>
        <div class="form-group">
            {{Form::label('item_price', 'PRICE')}}
            {{Form::number('item_price', '', ['class' => 'form-control', 'placeholder' => 'item price'])}}
        </div>
        <div class="form-group">
            {{Form::label('item_description', 'DESCRIPTION')}}
            {{Form::textarea('item_description', '', ['class' => 'form-control', 'placeholder' => 'item description'])}}
        </div>
        <div class="form-group">
            {{Form::label('availability', 'AVAILABLE:')}}&nbsp;&nbsp;
            {{Form::select('availability', array('1' => 'Yes', '0' => 'No'))}}
        </div>
        <div class="form-group">
            <label for="cuisine">Belong To</label>
            
            <select class="form-control" id="cuisine" name='cuisine'>
                @foreach($cuisines as $cuisine)
                    <option>{{$cuisine->cuisine_name}}</option>
                @endforeach
            </select>
           
        </div>
        
            <div class="form-group">
                <label for="item_image">Item Image</label>
                <input type="file" class="form-control-file" id="item_image" name="item_image">
            </div>
        
        {{Form::submit('Submit',['class' => 'btn btn-primary','name'=>'add_item'])}}
        {!! Form::close() !!}
</div>


                       <!-- ADD COMBO -->
<div class="container" id="2" style="display:none;">

        {!! Form::open(['action' => 'AdminController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
            {{Form::label('combo_name', 'COMBO NAME')}}
            {{Form::text('combo_name', '', ['class' => 'form-control', 'placeholder' => 'combo name'])}}
        </div>
        <div class="form-group">
            {{Form::label('combo_price', 'PRICE')}}
            {{Form::number('combo_price', '', ['class' => 'form-control', 'placeholder' => 'combo price'])}}
        </div>

        <!-- Multiple Checkboxes -->
        <div class="form-group">
            <label for="combo_items">Select Items</label>
            <select multiple class="form-control" id="items" name='items[]'>
                @foreach($items as $item)
                    <option>{{$item->item_name}}</option>
                @endforeach
            </select>
        </div>

        {{Form::submit('Submit',['class' => 'btn btn-primary','name'=>'add_combo'])}}
        {!! Form::close() !!}
</div>

                       <!-- TODAYS SPECIAL -->

<div class="container" id="3" style="display:none;">

    {!! Form::open(['action' => 'AdminController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
   
        <div class="form-group">
            <label >For {{ date('d-m-Y') }}</label>
            <br>
            <label for="today">Select Items</label>
            <select multiple class="form-control" id="items" name='items[]'>
                @foreach($items as $item)
                    <option>{{$item->item_name}}</option>
                @endforeach
            </select>
        </div>    

        {{Form::submit('Submit',['class' => 'btn btn-primary','name'=>'TodaysSpecial'])}}
    {!! Form::close() !!}
</div>





<script>
function myFunction1() {
         document.getElementById("1").style.display = "block";
         document.getElementById("2").style.display = "none";
         document.getElementById("3").style.display = "none";
         document.getElementById("4").style.display = "none";
        }

function myFunction2() {
         document.getElementById("1").style.display = "none";
         document.getElementById("2").style.display = "block";
         document.getElementById("3").style.display = "none";
         document.getElementById("4").style.display = "none";
        }

function myFunction3() {
         document.getElementById("1").style.display = "none";
         document.getElementById("2").style.display = "none";
         document.getElementById("3").style.display = "block";
         document.getElementById("4").style.display = "none";
        }

function myFunction4() {
        document.getElementById("1").style.display = "none";
        document.getElementById("2").style.display = "none";
        document.getElementById("3").style.display = "none";
        document.getElementById("4").style.display = "block";
}

</script>


@endsection