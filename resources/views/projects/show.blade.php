@extends('layout')
@section('title', $project->title)

@section('content')
<div class="container">
	<div class="bg-white p-5 shadow rounded">
		<h1>{{ $project->title }}</h1>
		<p class="text  secondary">
		 	{{ $project->descripcion }}
		</p>
		<p class="text-black-50">
		 	{{ $project->created_at->diffforhumans() }}
		</p>
		<div class="d-flex justify-content-between align-item-center">
			<a href="{{ route('projects.index') }}">
				Regresar
			</a>
		
		 	<div class="btn-group btn-group-sm">
		   	<a class="btn btn-primary"
		   	href="{{ route('projects.edit', $project) }}">editar</a>
		   	<a class="btn btn-danger"
		   	href="#" onclick="document.getElementById('delete-project').submit()">Eliminar</a>
		   	</div>

		   	<form id="delete-project" class="d-none" method="post" action="{{ route('projects.destroy', $project) }}">
		   		@csrf @method('DELETE')
		   	</form>
		
		</div>
	</div>
</div>
@endsection
