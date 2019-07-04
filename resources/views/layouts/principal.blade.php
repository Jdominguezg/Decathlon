<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#0082c3">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Jose Manuel Domínguez Galván">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" type="image/png" href="{{ asset('imgs/favicon/favicon-32x32.png') }}" sizes="32x32">
	<link rel="mask-icon" href="{{ asset('imgs/favicon/favicon.svg') }}" color="#0080c4">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<title>{{ trans('index.title') }}</title>
	<script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
	@include('layouts.header')
	@yield('content')

</body>
</html>