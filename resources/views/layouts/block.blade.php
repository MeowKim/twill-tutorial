<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	@stack('additional_css')
	<title>Document</title>
</head>

<body>
	@yield('content')
</body>

</html>