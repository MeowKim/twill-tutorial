<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ mix('css/tailwindcss.css') }}">
	<title>Document</title>
</head>

<body>
	<!-- HEADER -->
	<header class="container mx-auto py-8 px-10"></header>

	@yield('content')

	<!-- FOOTER -->
	<footer class="my-10 px-10"></footer>
</body>

</html>