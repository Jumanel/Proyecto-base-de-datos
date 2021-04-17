<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet"  href="/css/app.css">
	<script src="/js/app.js" defer></script>

</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between ">

		<header>
			<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
			<div class="container">
			<a class="navbar-brand" href="{{ route('Home') }}">
				{{ config('app.name') }}
			</a>

			<button class="navbar-toggler" type="button"
			data-toggle="collapse"
			data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent"
			aria-expanded="false"
			aria-label="{{ __('Toggle navigation') }}">
	        <span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				 <ul class="nav nav-pills">
				 	<li class="nav-item">
				 		<a class="nav-link {{ setactive('Home') }}" href="{{ route('Home') }}">Inicio
				 		</a>
				 	</li>
				 	<li class="nav-item">
				 		<a class="nav-link {{ setactive('about') }}" href="{{ route('about') }}">Mas
				 		</a>
				 	</li>
				 	<li class="nav-item">
				 		<a class="nav-link {{ setactive('contact') }}" href="{{ route('contact') }}">Contactame
				 		</a>
				 	</li>
				 	<li class="nav-item">
				 		<a class="nav-link {{ setactive('projects.*') }}" href="{{ route('projects.index') }}">Portafolio
				 		</a>
				 	</li>
				 	
				 </ul>
			</div>
			</nav>
			
			@include('partials.ss')
		</header>

		<main class="py-3">
			@yield('content')
		</main>

		<footer class="bg-white text-black-50 text-center py-3 shadow">
			{{ config('app.name') }} | Copyright @ {{ date('Y') }}
		</footer>
	</div>

</body>
</html>