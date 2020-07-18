{{-- @extends('layouts.app')
@section('head_extra')
{{-- font: normal 20px 'Cookie', cursive; 
  
<style>
body {
  font: normal 15px 'Cookie', cursive;; 
    }
.titlebox{
  float: left;
  padding: 0 5px;
  margin: -20px 0 0 30px;
  background: #000;
  border: 2px solid #FFF;
  
}


</style>
@endsection
@section('content') 
<div style="background-image: url('../images/menu/menubg2.jpg'); background-repeat: repeat;">
    <br>
    
    <div class="container">
          <div class="row">
      
      <div class="col-sm-4">
        <h2 style="color: #ffffff;
        font: normal 36px 'Cookie', cursive;
        margin: 0; text-align: center;">
        Food<span style="color: rgb(189, 21, 21)">स्थल</span> Menu</h2>        
    
        <img src="../images/menu/line.png" class="img-fluid mx-auto d-block">
        <img src="../images/menu/rice.png" class="img-fluid"><br>
        <div class="d-lg-none">
          <img src="../images/menu/sep1.png" class="img-fluid mx-auto d-block" ><br>
                </div>
                <div class="d-none d-lg-block"><br><img src="../images/menu/emb.png" class="img-fluid mx-auto d-block" ></div>
        
        
      </div>
      <div class="col-sm">  
        <div id="content" style="	border: 2px solid #FFF;
        padding: 10px;
        color: white;">
            <div class="titlebox">Maharashtrian</div>
            <ul>
              <br>
              <li>Pav Bhaji <span style="float:right;">50/-</span></li>
              <li>Poha<span style="float:right;">70/-</span></li>
              <li>Misal Pav<span style="float:right;">75/-</span></li>
              <li>Upma<span style="float:right;">40/-</span></li>
            </ul>
            </div>
            <div>&nbsp;</div>
            <div id="content" style="	border: 2px solid #FFF;
        padding: 10px;
        color: white;">
            <div class="titlebox">South-Indian</div>
            <ul>
              <br>
              <li>Plain Dosa <span style="float:right;">30/-</span></li>
              <li>Masala Dosa<span style="float:right;">50/-</span></li>
              <li>Idli<span style="float:right;">35/-</span></li>
              <li>Medu Vada<span style="float:right;">55/-</span></li>
            </ul>
            </div>
            <div>&nbsp;</div>
            <div id="content" style="	border: 2px solid #FFF;
            padding: 10px;
            color: white;">
                <div class="titlebox">Snacks</div>
                <ul>
                  <br>
                  <li>Vada Pav<span style="float:right;">20/-</span></li>
                  <li>Samosa<span style="float:right;">15/-</span></li>
                  <li>Cutlets<span style="float:right;">50/-</span></li>
                  <li>Chhole Pattis<span style="float:right;">40/-</span></li>
                </ul>
                </div>
                <div>&nbsp;</div>
                <div id="content" style="	border: 2px solid #FFF;
            padding: 10px;
            color: white;">
                <div class="titlebox" >Cakes</div>
                <ul>
                  <br>
                  <li>Black Forest<span style="float:right;">250/-</span></li>
                  <li>Vanilla cupcakes<span style="float:right;">70/-</span></li>
                  <li>Red Velvet<span style="float:right;">450/-</span></li>
                  <li>Oreo Cheesecake<span style="float:right;">470/-</span></li>
                </ul>
                </div>
                <div>&nbsp;</div>

          </div>

          <div class="col-sm">  
            <div id="content" style="	border: 2px solid #FFF;
            padding: 10px;
            color: white;">
                <div class="titlebox">Chinese</div>
                <ul>
                  <br>
                  <li>Schezwan Noodles<span style="float:right;">70/-</span></li>
                  <li>Hakka Noodles<span style="float:right;">80/-</span></li>
                  <li>Manchow Soup<span style="float:right;">50/-</span></li>
                  <li>Triple Schezwan Rice<span style="float:right;">120/-</span></li>
                </ul>
                </div><div>&nbsp;</div>
                <div id="content" style="	border: 2px solid #FFF;
            padding: 10px;
            color: white;">
                <div class="titlebox">Italian</div>
                <ul>
                  <br>
                  <li>Pasta<span style="float:right;">70/-</span></li>
                  <li>Bruschetta<span style="float:right;">70/-</span></li>
                  <li>Risotta<span style="float:right;">100/-</span></li>
                  <li>Spaghetti<span style="float:right;">95/-</span></li>
                </ul>
                </div><div>&nbsp;</div>
                <div id="content" style="	border: 2px solid #FFF;
            padding: 10px;
            color: white;">
                <div class="titlebox">Beverages</div>
                <ul>
                  <br>
                  <li>Pepsi<span style="float:right;">30/-</span></li>
                  <li>Sprite<span style="float:right;">40/-</span></li>
                  <li>Slice<span style="float:right;">30/-</span></li>
                  <li>Fanta<span style="float:right;">25/-</span></li>
                </ul>
                </div><div>&nbsp;</div>
                <div id="content" style="	border: 2px solid #FFF;
            padding: 10px;
            color: white;">
                <div class="titlebox">Sweet dish</div>
                <ul>
                  <br>
                  <li>Ice-Cream<span style="float:right;">50/-</span></li>
                  <li>Pudding<span style="float:right;">40/-</span></li>
                  <li>Chocolate Mousse<span style="float:right;">55/-</span></li>
                  <li>Fruit Custard<span style="float:right;">70/-</span></li>
                </ul>
                </div><div>&nbsp;</div>


              </div>

      </div>
      
        <br>
        <br>
        
    </div>
  </div>

  @endsection --}}

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
		background-color:rgb(21,21,21)  /*#1E1E20*/;
		/*background-image : url({{ asset("/images/menu/menu_bg2.jpg") }});*/
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
		background-color: rgb(51,51,49);
		/*background-image : url({{ asset("/images/menu/menu_bg.jpg") }}); */
		/*background-color: white;*/
		padding: 2%;
	}
    
	.field_set{
		border: 3px solid white;
		border-radius: 0.5rem;
	}

	legend{
		width:auto;
		font-family: Agency FB;
		font-size: 35px;
		font-weight: light;
		font-size: 3rem;
	    margin-bottom: 0rem;
		color: rgb(243,188,76);
	}
    
	h4{
		font-family: Agency FB;
		font-size: 35px;
		padding: 2%;
		color: rgb(243,188,76);
	}

	h5{
		font-family:Bahnschrift Light;
		font-size: 25px;
		color: rgb(243,188,76);
	}

    #full-menu ul{
		font-family: Agency FB ;
		font-weight: light;
		font-size: 30px;
		margin-bottom: 0.5rem;
	}

    @media screen and (max-width: 600px) {
    #mobile_view{
		visibility: hidden;
		display: none;
	}
	#full-menu ul{
		font-size: 20px;	
	}
	}

	h4 span{
    font-size: 40px;
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
                        &nbsp;
				<h4>Food<span>ADIK</span>RESTAURANT</h4>

				        &nbsp;
                        &nbsp;
				<!--<h5 class="font-weight-light text-center">Good Food Good Mood</h5>-->
				<img id="mobile_view" src="\images\menu\chef_1.png" alt="menu_img"/>
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
