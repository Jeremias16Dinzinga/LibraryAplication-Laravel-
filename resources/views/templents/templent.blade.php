<!DOCTYPE html>
<html lang="pt" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Livraria</title>
	<!-- Required meta tags -->
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="This is my first Laravel contact" />
	<meta name="author" content="Jeremias Dinzinga" />
	<link rel="icon" href="{{asset('assets/bootstrap/iconic/png/book.png')}}" />

	<!-- Bootstrap core CSS -->
	
	<link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link rel="Stylesheet" href="{{asset('assets/bootstrap/iconic/font/css/open-iconic-bootstrap.css')}}">

	<!-- Custom styles for this template -->
	<link href="{{asset('assets/bootstrap/css/style.css" rel="stylesheet')}}" />
</head>
<body>

		<section class="layout-content">
            @yield('content')
		</section>


	<script src="{{asset('assets/js/javaScript.js')}}"></script>	
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{asset('assets/bootstrap/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('assets/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<script	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</body>
</html>
