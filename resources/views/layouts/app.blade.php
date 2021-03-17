<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-
	scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/app.css')}} ">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>
<body class="bg-dark text-light" >

	@include('partials.header')

	<main>@yield('content')</main>
    
	@include('partials.footer')

<script src="{{ asset('js/app.js')}} "></script>
</body>
</html>