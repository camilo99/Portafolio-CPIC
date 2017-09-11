<!DOCTYPE html>
<html lang="es">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/gallerybox.css')}}">

    
    <link rel="stylesheet" href="{{ asset('css/master.css')}}">
  </head>
  <body>
   @include('layout-app.navbar')


	<div class="row">
		@yield('content')
	</div>

	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/carousel.js') }}"></script>
	<script src="{{ asset('js/jquery.gallerybox.js') }}"></script>
  <script>

    $('.container-gallery').gallery({
      height: 750,
      items: 10,
      480: {
        items: 2,
        height: 400,
        thmbHeight: 100
      },
      768: {
        
        items: 3,
        height: 500,
        thmbHeight: 120
      },
      600: {
        
        items: 4
      },
      992 : {
        
        items: 5,
        height: 350
      }

    });

  </script>


 
  </body>
</html>