@extends('layouts.app')

@section('head_extra')
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="home/favicons/favicon-32x32.png">
    <link rel="manifest" href="home/favicons//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">



    <style media="screen">

	#full-menu { padding: 0.5rem 0; }
	
	body{
		background-color: white;
		/*background-image : url({{ asset("/images/menu/menu_bg.jpg") }});*/
		margin: 0px;
		color:white
	}

	.col-md-3{
		/*background-color: #130d08; /*crgb(21,21,21) #1E1E20*/
		background-image : linear-gradient(rgba(255,255,255,0.3),rgba(255,255,255,0.3)),  url({{ asset("/images/background-menu.jpg") }}); 
		color:white;
		padding: 2%;
	}
	.contact-info img{
		margin-bottom: 5%;
		width:100%;
	}

	#mobile_view{
		display:block;
		margin-left:auto;
		margin-right:auto;
		margin-bottom: 20%;
		width: 70%;
	}

	
	.contact-info h4{
		margin-bottom: 20%;
		text-align: center;
	}
	.col-md-9{
		/*background-color:  #724119; /*rgb(51,51,49);*/
		background-image : linear-gradient(rgba(255,255,255,0.8),rgba(255,255,255,0.8)), url({{ asset("/images/background-menu3.jpg") }}); 

		/*opacity: 0.5;
		/*background-color: white;*/
		padding: 2%;
	}
    
	.field_set{
		border: 5px solid black;
		border-radius: 0.5rem;
		opacity:1;
	}

	legend{
		width:auto;
		font-family: Agency FB;
		font-weight: bold;
		font-size: 3.5rem;
	    margin-bottom: 0rem;
		/*color: rgb(243,188,76);*/
		color: #cf6209;
	}
    
	h4{
		font-family: Agency FB;
		font-size: 55px;
		padding: 2%;
		/*color: rgb(243,188,76);*/
		color:black;
		font-weight: bold;
	}

	h5{
		font-family:Bahnschrift Light;
		font-size: 25px;
		color: rgb(243,188,76);
	}

    #full-menu ul{
		font-family: Agency FB ;
		font-weight: bolder;
		font-size: 30px;
		margin-bottom: 0.5rem;
		color:black;
	}

    @media screen and (max-width: 600px) {
    #mobile_view{
		visibility: hidden;
		display: none;
	}
	#full-menu ul{
		font-size: 20px;	
	}
	h4{
		font-size: 40px;
	}
	}

	h4 span{
    font-size: 50px;
	color:  #ff3333;
    }

    </style>
@endsection


@section('content') 

<section id="full-menu">

	<div class="container-fluid contact">
	<div class="row">
		
		<div class="col-md-3">
			<div class="contact-info">
				<img src="\images\menu\menu_img.png" alt="menu_img"/>
				        &nbsp;
                       
				<h4>Food<span>ADIK</span>Restaurant</h4>

				        &nbsp;
                        
				<!--<h5 class="font-weight-light text-center">Good Food Good Mood</h5>-->
				{{-- <img id="mobile_view" src="\images\menu\chef_1.png" alt="menu_img"/> --}}
				<!--<img id="mobile_view" src="images\menu\chef_3.png" alt="menu_img"/>-->
				{{-- <img id="mobile_view" src="\images\menu\chef_2.png" alt="menu_img"/> --}}
			</div>
		</div>

		<div class="col-md-9">
        {{-- Section1 --}}
		<fieldset class="field_set">
		<legend class="text-center">SOUP</legend>
		<div class="container-fluid">
		    <div class="row text-center text-lg-center text-sm-center">
				
                <div class="col-xl-4 col-sm-4 col-6">
					<ul class="list-unstyled">
						<li>VEG SOUP</li>
						<li>CHICKEN SOUP</li>
						<li>SPECIAL SOUP</li>
                    </ul>
                </div>

                <div class="col-xl-2 col-sm-2 col-6">
					<ul class="list-unstyled">
						<li>24/-</li>
						<li>56/-</li>
						<li>56/-</li>
                    </ul>
                </div>
                
				<div class="col-xl-4 col-sm-4 col-6">
					<ul class="list-unstyled">
						<li>HOT & SOUR SOUP</li>
						<li>MONCHOW SOUP</li>
                    </ul>
                </div>

                <div class="col-xl-2 col-sm-2 col-6">
					<ul class="list-unstyled">
						<li>24/-</li>
						<li>56/-</li>
                    </ul>
                </div>
			</div>	
		</div>
        </fieldset>

        {{-- Section2 --}}
		<fieldset class="field_set">
		<legend class="text-center">NOODLES</legend>
		<div class="container-fluid">
		    <div class="row text-center text-lg-center text-sm-center">
				
                <div class="col-xl-4 col-sm-4 col-6">
				    <!--<h5 class="font-weight-light text-center">ITEMS</h5>-->
					<ul class="list-unstyled">
						<li>VEG CHOW</li>
						<li>EGG CHOW</li>
						<li>CHICKEN CHOW</li>
                    </ul>
                </div>

                <div class="col-xl-2 col-sm-2 col-6">
                    <!--<h5 class="font-weight-light text-center">PRICE</h5>-->
					<ul class="list-unstyled">
						<li>24/-</li>
						<li>56/-</li>
						<li>56/-</li>
                    </ul>
                </div>
                
				<div class="col-xl-4 col-sm-4 col-6">
				    <!--<h5 class="font-weight-light text-center">ITEMS</h5>-->
					<ul class="list-unstyled">
						<li>SEZWAN CHOW</li>
                        <li>SEZWAN CHICKEN</li>
						<li>SEZWAN CHOW(EGG)</li>
                    </ul>
                </div>

                <div class="col-xl-2 col-sm-2 col-6">
                    <!--<h5 class="font-weight-light text-center">PRICE</h5>-->
					<ul class="list-unstyled">
						<li>24/-</li>
						<li>56/-</li>
						<li>56/-</li>
                    </ul>
                </div>
			</div>	
		</div>
		</fieldset>

        {{-- Section3 --}}
		<fieldset class="field_set">
        <legend class="text-center">ROLLS</legend>
		<div class="container-fluid">
		    <div class="row text-center text-lg-center text-sm-center">
				
                <div class="col-xl-4 col-sm-4 col-6">
					<ul class="list-unstyled">
						<li>VEG CHOW</li>
						<li>EGG CHOW</li>
						<li>CHICKEN CHOW</li>
                    </ul>
                </div>

                <div class="col-xl-2 col-sm-2 col-6">
					<ul class="list-unstyled">
						<li>24/-</li>
						<li>56/-</li>
						<li>56/-</li>
                    </ul>
                </div>
                
				<div class="col-xl-4 col-sm-4 col-6">
					<ul class="list-unstyled">
						<li>SEZWAN CHOW</li>
                        <li>SEZWAN CHICKEN</li>
						<li>SEZWAN CHOW(EGG)</li>
                    </ul>
                </div>

                <div class="col-xl-2 col-sm-2 col-6">
					<ul class="list-unstyled text-center">
						<li>24/-</li>
						<li>56/-</li>
						<li>56/-</li>
                    </ul>
                </div>
			</div>	
		</div>
		</fieldset>


    
	{{-- Section4 --}}
    <div class="container-fluid">
	<div class="row">
    <div class="col-xl-6 col-sm-6 col-12">

        <fieldset class="field_set">
        <legend class="text-center">SNACKS</legend>
		<div class="container-fluid">
		    <div class="row text-center text-lg-center text-sm-center">
				
                <div class="col-xl-8 col-sm-8 col-6">
					<ul class="list-unstyled">
					    <li>WADA PAV</li>
						<li>MISAL PAV</li>
						<li>CHINESE SAMOSA</li>
						<li>SANDWICHA</li>
                    </ul>
                </div>
    
                <div class="col-xl-4 col-sm-4 col-6">
					<ul class="list-unstyled">
						<li>24/-</li>
						<li>24/-</li>
						<li>56/-</li>
						<li>56/-</li>
                    </ul>
                </div>
                
			</div>	
		</div>
		</fieldset>
    </div>

    <div class="col-xl-6 col-sm-6 col-12">
        
		<fieldset class="field_set">
		<legend class="text-center">ICE CREAM</legend>
		<div class="container-fluid">
		    <div class="row text-center text-lg-center text-sm-center">
				
                <div class="col-xl-8 col-sm-8 col-6">
					<ul class="list-unstyled">
						<li>FROZEN ORANGE</li>
						<li>FROZEN PINEAPPLE</li>
						<li>FROZEN FRUIT</li>
                        <li>ZOOPER DOOPER</li>
                    </ul>
                </div>

                <div class="col-xl-4 col-sm-4 col-6">
					<ul class="list-unstyled">
						<li>24/-</li>
						<li>56/-</li>
						<li>56/-</li>
						<li>56/-</li>
                    </ul>
                </div>
                
			</div>	
		</div>
		</fieldset>
	</div>
	</div>	
	</div>


        {{-- Section5 --}}
		<fieldset class="field_set">
		<legend class="text-center">FRIED RICE</legend>
		<div class="container-fluid">
		    <div class="row text-center text-lg-center text-sm-center">
				
                <div class="col-xl-4 col-sm-4 col-6">
					<ul class="list-unstyled">
						<li>VEG FRIED RICE</li>
						<li>EGG FRIED RICE</li>
						<li>SEZWAN FRIED RICE</li>
                    </ul>
                </div>

                <div class="col-xl-2 col-sm-2 col-6">
					<ul class="list-unstyled">
						<li>24/-</li>
						<li>56/-</li>
						<li>56/-</li>
                    </ul>
                </div>
                
				<div class="col-xl-4 col-sm-4 col-6">
					<ul class="list-unstyled">
                        <li>SEZWAN CHICKEN</li>
						<li>EGG CHICKEN FRIED RICE</li>
                    </ul>
                </div>

                <div class="col-xl-2 col-sm-2 col-6">
					<ul class="list-unstyled">
						<li>24/-</li>
						<li>56/-</li>
                    </ul>
                </div>
			</div>	
		</div>
		</fieldset>

    
	{{-- Section6 --}}
    <div class="container-fluid">
	<div class="row">
    <div class="col-xl-6 col-sm-6 col-12">

        <fieldset class="field_set">
        <legend class="text-center">MOMO</legend>
		<div class="container-fluid">
		    <div class="row text-center text-lg-center text-sm-center">
				
                <div class="col-xl-8 col-sm-8 col-6">
					<ul class="list-unstyled">
						<li>STEAM MOMO</li>
						<li>FRIED MOMO</li>
						<li>PAN FRIED MOMO</li>
                    </ul>
                </div>
    
                <div class="col-xl-4 col-sm-4 col-6">
					<ul class="list-unstyled">
						<li>24/-</li>
						<li>56/-</li>
						<li>56/-</li>
                    </ul>
                </div>
                
			</div>	
		</div>
		</fieldset>
    </div>

    <div class="col-xl-6 col-sm-6 col-12">
        
		<fieldset class="field_set">
		<legend class="text-center">DESERTS</legend>
		<div class="container-fluid">
		    <div class="row text-center text-lg-center text-sm-center">
				
                <div class="col-xl-8 col-sm-8 col-6">
					<ul class="list-unstyled">
						<li>BROWNIE</li>
						<li>CHEESECAKE</li>
						<li>CHOCOLATE</li>
                    </ul>
                </div>

                <div class="col-xl-4 col-sm-4 col-6">
					<ul class="list-unstyled">
						<li>24/-</li>
						<li>56/-</li>
						<li>56/-</li>
                    </ul>
                </div>
                
			</div>	
		</div>
		</fieldset>
	</div>
	</div>	
	</div>



        {{-- Section7 --}}
		<fieldset class="field_set">
        <legend class="text-center">DRINKS(200ml)</legend>
		<div class="container-fluid">
		    <div class="row text-center text-lg-center text-sm-center">
				
                <div class="col-xl-4 col-sm-4 col-6">
					<ul class="list-unstyled">
						<li>CHOCOLATE</li>
						<li>STRAWBERRY</li>
						<li>ICED COFFEE</li>
                    </ul>
                </div>

                <div class="col-xl-2 col-sm-2 col-6">
					<ul class="list-unstyled">
						<li>24/-</li>
						<li>56/-</li>
						<li>56/-</li>
                    </ul>
                </div>
                
				<div class="col-xl-4 col-sm-4 col-6">
					<ul class="list-unstyled">
                        <li>FRUIT JUICE(250ml)</li>
						<li>WATER(600ml)</li>
                    </ul>
                </div>

                <div class="col-xl-2 col-sm-2 col-6">
					<ul class="list-unstyled">
						<li>24/-</li>
						<li>56/-</li>
                    </ul>
                </div>
			</div>	
		</div>
		</fieldset>


		</div>
		
	</div>
	</div>
</section>

@endsection
