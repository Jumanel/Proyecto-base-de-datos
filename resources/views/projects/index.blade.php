@extends('layout')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-item-center mb-3">
        <h1 class="display-4 mb-0">Portafolio</h1>

      
                <a class="btn btn-primary"
                href="{{ route('projects.create') }}"
                >Crear nuevo proyecto</a>
     
    </div>
         <ul class="list-group">
        <p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
    	@forelse($projects as $project)
	    <li class="list-group-item border-0 mb-3 shadow-sm">
            <a class="text-secondary d-flex justify-content-between align-item-center"
            href="{{ route('projects.show', $project) }}">
                <span class="font-weight-bold">
                    {{ $project->title }}
                </span>
                <span class="text-black-50">
                    {{ $project->created_at->format('d/m/Y') }}
                </span>
            </a>
        </li>

	    @empty
	    	<li class="list-group-item border-0 mb-3 shadow-sm">
                no hay proyectos
            </li>
	    @endforelse
	    {{ $projects->links()}}
    </ul>
</div>
@endsection
@section('title','portafolio')