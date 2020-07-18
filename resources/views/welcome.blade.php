<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta name="viewport" content="width=device-width">
        <meta charset="utf-8">
        <title>ADIK-RESTAURANT</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/76c970a45b.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png" sizes="32x32" href="home/favicons/favicon-32x32.png">
        <link rel="manifest" href="images/home/favicons//manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <style media="screen">
                ::placeholder, a, a:hover { color: inherit; }

                body { cursor: default; overflow-x: none; }
                body, button, input { font-family: 'Poppins', sans-serif; }
                body > section:not([id="landing"]) { background-color: white; }
                input { outline: none; border: none; }
                figure, p { margin: 0; }

                #logo{
                    position: fixed;
                    margin:15px;
                    margin-left: 50px;
                }
                #short-menu { padding: 3.6rem 0; }
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
                .bg-image 
                {
                    background: linear-gradient(rgba(20,20,20,.5), rgba(20,20,20,.5)),
                        url("images/HOTEL1.jpg");
                    height: 700px; 
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-attachment:fixed;  
                    
                    }
                
                    {{--filter: blur(1px);
                    -webkit-filter: blur(1px);
                    background-color: rgba(248, 247, 216, 0.7);--}}
                   

                .bg-text
                {
                    color:white;
                    font-weight: bold;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    z-index: 2;
                    width: 80%;
                    padding: 20px;
                    text-align: center;           
                }        

                  }
                  #deal{
                             margin-top: px-to-rem(50px);
                             display: flex;
                             align-items: center;
                             justify-content:space-around;
                  }
                  #details{
                                width: 40%;
                                padding-left: px-to-rem(50px);
                                h3{
                                  font-size: px-to-rem(36px);
                                }
                                p{
                                  font-size: px-to-rem(22px);
                                  line-height: 180%;
                                  font-weight: 300;
                                  margin: px-to-rem(20px) 0 px-to-rem(32px);
                                }
                                a{
                                  text-decoration: underline;
                                  font-size: px-to-rem(25px);
                                  line-height: 180%;
                                  font-weight: 300;
                                  margin: px-to-rem(20px) 0 px-to-rem(32px);
                                   &:hover{
                                     opacity: .4;
                                   }
                                }
                  }

                  
                            }
                .jumbotron h5{
                    text-align: center;
                    color: red;    
                    font-size:80px;
                }
                .jumbotron h6{
                    text-align: center;
                    font-size:45px;
                    color: #130d08; 
                    font-weight:medium;
                }
                .jumbotron{
                    padding: 20px;
                    margin-bottom: 0px;
                    /*background-color: #f5ef9b;*/
                    background-image: linear-gradient(90deg, white 35%, #f5ef9b 100%);
	            }

                .crop-image{
                max-height:400px;
                max-width:330px;
                display:block;
                margin-left: auto;
                margin-right: auto;
                }

      
.intro {
  height: 10vh;
  position: relative;
  color: #fff;
  /*top:98px;
  margin-bottom: 55px;*/
}


.intro .intro-subtitle {
  font-size: 3.3rem;
  font-weight: 300;
  text-align:center;
  line-height:5rem;
  color: #ff9900;
}

.intro .text-slider-items {
  display: none;
}


</style>
</head>

<body>
        @include('inc.navbar')
            {{-- navbar --}}
            <section class="text-white">
                {{-- @include('inc.carousel1') --}}
            </section>

            <div class="jumbotron">
                <div class="container">
                        <div class="img-fluid">
                            <img class="crop-image" src="images/ADIK_LOGO.jpg"/> 
                        </div>
                <h6 class="display-1">WELCOME TO ADIK RESTAURANT</h6>


  <!--/ Intro Skew Star /-->
  
  <div id="home" class="intro route bg-image" style=" background-image: url(img/intro-bg-blur.jpg)" >
              
              <p class="intro-subtitle"><span class="text-slider-items">Guidance on Preparing for Placements, Higher Studies and Career Guidance, Research and Innovations, Entrepreneurship Development, New Trends in Technology</span>
                <strong class="text-slider"></strong></p>
        </div>
  <!--/ Intro Skew End /-->
</div>
</div>
            
            {{-- vesit image--}}
            <div class="bg-image img-fluid"> </div>
            {{-- <div class="bg-text">
                <h1 style="font-size:50px"><b>V.E.S. INSTITUTE</b></h1>
                <h2 style="font-size:40px"><b>CANTEEN</b></h2>
            </div> --}}
            <br>
            <br>
            {{-- assure --}}
            <section>
                @include('inc.assure')
            </section>
            
           
              <br>
              {{-- footer --}}
              <section>
              @include('inc.footer')
              </section>


            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<!-- JavaScript Libraries -->
<script src="http://vesitreach.ves.ac.in/css/lib/typed/typed.min.js"></script>

    <script>
	/*--/ Star Typed /--*/
	if ($('.text-slider').length == 1) {
    var typed_strings = $('.text-slider-items').text();
		var typed = new Typed('.text-slider', {
			strings: typed_strings.split(','),
			typeSpeed: 80,
			loop: true,
			backDelay: 1100,
			backSpeed: 30
		});
	}


                
     </script>


    </body>
</html>

