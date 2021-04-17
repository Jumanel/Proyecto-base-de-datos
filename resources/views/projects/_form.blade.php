@csrf

    <div class="form-group">
        <label for="title">Titulo del proyecto </label>
    		<input class="form-control border-0 bg-light shadow-sm"
            id="title"
            type="text"
            name="title"
            value="{{ old('title',$project->title) }}">
    </div>


    <div class="form-group">
    	<label for="url">Url del proyecto</label>
    		<input class="form-control border-0 bg-light shadow-sm"
            id="url"
            type="text"
            name="url"
            value="{{ old('url',$project->url) }}">
    </div>

    <div class="form-group">
    	<label for="descripcion">Descripcion</label>
    		<textarea class="form-control border-0 bg-light shadow-sm"
            name="descripcion"
            >{{ old('descripcion',$project->descripcion) }}</textarea>
    </div>
<br>
<button class="btn btn-primary btn-lg btn-block">{{ $btntext }}</button>
<a class="btn btn-link btn-block"
    href="{{ route('projects.index') }}">
    Cancelar
</a>