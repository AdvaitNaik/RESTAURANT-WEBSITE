@extends('layouts.app')
@section('head_extra')
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="home/favicons/favicon-32x32.png">
    <link rel="manifest" href="home/favicons//manifest.json">



    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">




    <style media="screen">

    ::placeholder, a, a:hover {
    color: inherit; }

    body {
    cursor: default;
    overflow-x: none; 
    /* background-image: linear-gradient(90deg, white 55%, #f5ef9b 100%);*/
    background-image : linear-gradient(rgba(255,255,255,0.8),rgba(255,255,255,0.8)),  url({{ asset("/images/background-menu5.jpg") }});
    }

    body, button, input {
    font-family: 'Bahnschrift Light', sans-serif; }

    body > section:not([id="landing"]) {
    background-color: white; }

    input {
    outline: none;
    border: none; }

    figure, p {
    margin: 0; }

    #short-menu { 
        padding: 3.6rem 0;
        /*background-color: white; 
        background-image : linear-gradient(rgba(255,255,255,0.5),rgba(255,255,255,0.5)),  url({{ asset("/images/background-menu.jpg") }});
        */
    }
    #short-menu img {
    height: 190px;
    object-fit: cover;
    }
    #short-menu i { transition: opacity .2s; }
    #short-menu i:hover { opacity: .5; }
    #short-menu .card > div {
    background-color: rgba(30, 30, 30, .7);
    transform: translateX(-100%);
    transition: transform .35s;
    }
    #short-menu .card:hover > div { transform: translateX(0); }

    p{
    font-size: px-to-rem(22px);
    line-height: 180%;
    font-weight: 300;
    margin: px-to-rem(20px) 0 px-to-rem(32px);
    }


    .img {
    height: 85vh;
    background-position: center bottom;
    background-position: center;
    background-size: cover; }

    /* .carousel-inner div:nth-child(1) .img {
    background-image: url("images/home/offersliderimg/offerslider1.jpg"); }

    .carousel-inner div:nth-child(2) .img {
    background-image: url("images/home/offersliderimg/offerslider2.jpg"); }

    .carousel-inner div:nth-child(3) .img {
    background-image: url("images/home/offersliderimg/offerslider3.jpg"); }

    .carousel-inner div:nth-child(4) .img {
    background-image: url("images/home/offersliderimg/offerslider4.jpg"); }

    .carousel-inner div:nth-child(5) .img {
    background-image: url("images/home/offersliderimg/offerslider5.jpg"); } */

    .controller {
    opacity: 1 !important; }

    .controller span {
    opacity: 3;
    height: 80px;
    width: 70px;
    background-size: 30px;
    background-color: #3B3B3B;
    opacity: .8; }

    .controller span:hover {
    opacity: .4; }

        #masonry { 
            /*background-color: white; 
            background-image : linear-gradient(rgba(255,255,255,0.3),rgba(255,255,255,0.3)),  url({{ asset("/images/background-menu5.jpg") }});
            */
        }

</style>

@endsection


@section('content') 
<br>
@if (session('cash'))
<script>
window.onload = function(){
    document.getElementById('notification').click();
  }
</script>
<!-- Button trigger modal -->
<button type="button" id="notification" class="btn btn-primary" style="display:none"data-toggle="modal" data-target="#exampleModalCenter">
    Notification
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Payment Notification</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            Please pay the amount at the canteen counter!!
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
         
        </div>
      </div>
    </div>
  </div>
@endif
<section id="fullsite">
                                        {{-- carousel --}}
<section>
    @include('inc.carousel1') 
</section>
                                       
<br>
<br>
                                        {{-- serve --}}

<section id="short-menu">
    <div class="container">
        <header>
            <h2 class="font-weight-medium text-center" style="color:black;font-size:40px;font-weight: 900">WE SERVE </h2>
        </header>
    </div>
    <div class="container">
        <div class="row mt-4 ">
            <div class="col-lg-3 col-md-6 mt4">
                <div class="card overflow-hidden">
                    <img class="cars-img"src="images/home\menu-iteams\Indianfood.jpg" alt="Indianfood">
                    <div class="position-absolute text-white text-center w-100 h-100 py-2 d-flex flex-column justify-content-center">
                        <h3>INDIAN FOOD</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt4">
                <div class="card overflow-hidden">
                    <img class="cars-img"src="images/home\menu-iteams\Chinesefood.jpg" alt="Chinese food">
                    <div class="position-absolute text-white text-center w-100 h-100 py-2 d-flex flex-column justify-content-center">
                            <h3>CHINESE FOOD</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt4">
                <div class="card overflow-hidden">
                    <img class="cars-img"src="images/home\menu-iteams\SouthIndianFood.jpg" alt="SouthIndianFood">
                    <div class="position-absolute text-white text-center w-100 h-100 py-2 d-flex flex-column justify-content-center">
                            <h3>SOUTH-INDIAN <br>FOOD</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt4">
                <div class="card overflow-hidden">
                    <img class="cars-img"src="images/home\menu-iteams\Juiceshake.jpg" alt="Juiceshake">
                    <div class="position-absolute text-white text-center w-100 h-100 py-2 d-flex flex-column justify-content-center">
                        <h3>JUICES <br> AND <br>SHAKES</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br>

                                        {{-- MASONRY --}}
<section id="masonry">
    <br>
    <div class="container">
        <header>
            <h2 class="font-weight-medium text-center" style="color:black;font-size:40px;font-weight: 900">BEST-SELLER </h2>
        </header>
    </div>
    <br>
    <div class="container-fluid">

    <section>
        @include('inc.masonry') 
    </section>

    </div>
<br>
</section>

<script>
    function payauto(){}
</script>

@endsection


