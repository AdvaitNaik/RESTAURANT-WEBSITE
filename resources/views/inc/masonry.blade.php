{{-- <link rel="stylesheet" href="/resources/sass/masonry.scss"> --}}
<script src="{{ asset('js/masonry.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('css/masonry.css') }}">


{{-- 
<div class="header">
  <h1>Responsive Masonry.js Grid</h1>
  <p>A horizontal image card grid built with masonry.js</p>
</div>

<div class="container">
  <div class="grid-sizer"></div>
  <div class="gutter-sizer"></div>
  <a class="item" href="#">
    <img src="http://placehold.it/350x300">
    <h3>Image Title</h3>
    <p>Image Description</p>
  </a>
  <a class="item" href="#">
    <img src="http://placehold.it/350x200">
    <h3>Image Title</h3>
    <p>Image Description</p>
  </a>
  <a class="item" href="#">
    <img src="http://placehold.it/300x290">
    <h3>Image Title</h3>
    <p>Image Description</p>
  </a>
  <a class="item" href="#">
    <img src="http://placehold.it/400x300">
    <h3>Image Title</h3>
    <p>Image Description</p>
  </a>
  <a class="item" href="#">
    <img src="http://placehold.it/350x350">
    <h3>Image Title</h3>
    <p>Image Description</p>
  </a>
  <a class="item" href="#">
    <img src="http://placehold.it/400x300">
    <h3>Image Title</h3>
    <p>Image Description</p>
  </a>
  <a class="item" href="#">
    <img src="http://placehold.it/400x500">
    <h3>Image Title</h3>
    <p>Image Description</p>
  </a>
</div> --}}

<div class="grid-wrapper">
	{{-- <div>
		<img {{--src="https://images.unsplash.com/photo-1588117472013-59bb13edafec?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60"  src="storage/images/{{$items[1]->item_image}}" alt="">
	</div>
	<div>
		<img src="https://images.unsplash.com/photo-1588282322673-c31965a75c3e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1351&amp;q=80" alt="" />
	</div> --}}

	<div class="big zoom">
		<img {{--src="https://images.unsplash.com/photo-1588117472013-59bb13edafec?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" --}} src="storage/images/{{$items[0]->item_image}}" alt="">
	</div>

	<div class="tall zoom">
		 <img {{--src="https://images.unsplash.com/photo-1588117472013-59bb13edafec?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" --}} src="storage/images/{{$items[5]->item_image}}" alt="">
	</div>
	<div class="wide zoom">
		<img {{--src="https://images.unsplash.com/photo-1588117472013-59bb13edafec?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" --}} src="storage/images/{{$items[2]->item_image}}" alt="">
	</div>
	<div class="tall zoom">
		<img {{--src="https://images.unsplash.com/photo-1588117472013-59bb13edafec?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" --}} src="storage/images/{{$items[1]->item_image}}" alt="" />
	</div>
	<div id="hide" class="tall zoom">
		<img {{--src="https://images.unsplash.com/photo-1588117472013-59bb13edafec?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" --}} src="storage/images/{{$items[4]->item_image}}" alt="">
	</div>

	<div id="hide" class="wide zoom">
		<img {{--src="https://images.unsplash.com/photo-1588117472013-59bb13edafec?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" --}} src="storage/images/{{$items[3]->item_image}}" />
	</div>
	{{-- <div id="hide" class="wide zoom">
		<img {{--src="https://images.unsplash.com/photo-1588117472013-59bb13edafec?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60"  src="storage/images/{{$items[2]->item_image}}"  alt="">
	</div> --}}
	{{-- <div class="big">
		<img src="https://images.unsplash.com/photo-1572914857229-37bf6ee8101c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1951&amp;q=80" alt="" />
	</div>
	<div class="tall">
		<img src="https://images.unsplash.com/photo-1588453862014-cd1a9ad06a12?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" alt="" />
	</div>
	<div>
		<img src="https://images.unsplash.com/photo-1588414734732-660b07304ddb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=675&amp;q=80" alt="" />
	</div>
	<div>
		<img src="https://images.unsplash.com/photo-1588224575346-501f5880ef29?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=700&amp;q=80" alt="" />
	</div>
	<div>
		<img src="https://images.unsplash.com/photo-1574798834926-b39501d8eda2?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="" />
	</div>
	<div>
		<img src="https://images.unsplash.com/photo-1547234935-80c7145ec969?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1353&amp;q=80" alt="" />
	</div>
	<div class="wide">
		<img src="https://images.unsplash.com/photo-1588263823647-ce3546d42bfe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=675&amp;q=80" alt="" />
	</div>
	<div>
		<img src="https://images.unsplash.com/photo-1587732608058-5ccfedd3ea63?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80" alt="" />
	</div>
	<div>
		<img src="https://images.unsplash.com/photo-1587897773780-fe72528d5081?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1489&amp;q=80" alt="" />
	</div>
	<div class="wide">
		<img src="https://images.unsplash.com/photo-1588083949404-c4f1ed1323b3?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1489&amp;q=80" alt="" />
	</div>
	<div>
		<img src="https://images.unsplash.com/photo-1587572236558-a3751c6d42c0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80" alt="" />
	</div>
	<div class="wide">
		<img src="https://images.unsplash.com/photo-1583542225715-473a32c9b0ef?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80" alt="" />
	</div>
	<div class="big">
		<img src="https://images.unsplash.com/photo-1527928159272-7d012024eb74?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80" alt="" />
	</div>
	<div>
		<img src="https://images.unsplash.com/photo-1553984840-b8cbc34f5215?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80" alt="" />
	</div>
	<div>
		<img src="https://images.unsplash.com/photo-1433446787703-42d5bf446876?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1351&amp;q=80" alt="" />
	</div>
	<div class="big">
		<img src="https://images.unsplash.com/photo-1541187714594-731deadcd16a?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=700&amp;q=80" alt="" />
	</div>
	<div class="tall">
		<img src="https://images.unsplash.com/photo-1540979388789-6cee28a1cdc9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" alt="" />
	</div>
	<div>
		<img src="https://images.unsplash.com/photo-1421930866250-aa0594cea05c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1355&amp;q=80" alt="" />
	</div>
	<div>
		<img src="https://images.unsplash.com/photo-1493306454986-c8877a09cbeb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1381&amp;q=80" alt="" />
	</div>
	<div class="wide">
		<img src="https://images.unsplash.com/photo-1536466528142-f752ae7bdd0c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80" alt="" />
	</div> --}}
</div>