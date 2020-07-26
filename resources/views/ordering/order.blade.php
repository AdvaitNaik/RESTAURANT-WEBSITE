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

body,.back
{
   /* background-image: url('../images/menu/menubg2.jpg');*/
    background-image : linear-gradient(rgba(255,255,255,0.4),rgba(255,255,255,0.4)), url({{ asset("/images/background-menu.jpg") }}); 
/*
    background-repeat: no-repeat;
    background-size: cover;*/
}

.nav-custom1{
    background-color:#130d08;
}

</style>

@endsection
@section('content')

<nav class="navbar navbar-expand-lg navbar-dark nav-custom1">
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-5">
        
        @foreach($cuisines as $cuisine)
            <li class="nav-item  mx-2">
                <div class="checkbox">
                    <label style="color: white; font-size:35px;text-transform:uppercase;"><input type="checkbox" class="cuisine" value="{{$cuisine->cuisine_name}}" > {{$cuisine->cuisine_name}}</label>
               </div>
            </li> 
        @endforeach
        <li class="nav-item  mx-2">
            <div class="checkbox">
                <label style="color: white; font-size:35px"><input type="checkbox" class="cuisine" value="combos" > COMBOS</label>
           </div>
        </li>
        
    </ul>
      
    </div>
</nav>
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<div class="row fetch-data">
    
    @include('ordering.show')
    
</div>
@endsection

@section('script_extra')
<script>
    $(document).ready(function()
    {
      function filter_data()
      {

           var cuisine = get_filter('cuisine');
        //    console.log(cuisine)
           $.ajax({
                url:"{{route ('ordering.order') }}",
                type:"POST",
                data:{'_token': '{!! csrf_token() !!}','cuisine':cuisine},
                success:function(data){
                     $('.fetch-data').html(data);
                },error:function(e){
                     alert("error!!!!"+e);
                }
                });
        }

      function get_filter(class_name){
           var filter = [];
           $('.' + class_name + ':checked').each(function(){
                filter.push($(this).val());
           });
           return filter;
      }

      $('.cuisine').click(function(){
      filter_data();
      });


    });
</script>
@endsection