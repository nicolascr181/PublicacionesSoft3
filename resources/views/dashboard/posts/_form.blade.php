{{-- Evita falsificacion  de peticiones--}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    <input class="form-control" type="text" name="publication" id="publication" placeholder="Nombre publicacion"
    value="{{ $post->publication }}">
</div>

<div class="form-group">
    <select name="category_id" id="category_id" class="custom-select" aria-label="Default">
        <option selected disabled>Selecciona una categoria</option>
        @foreach ($categories as $category_name => $id)
            <option {{ $post ->category_id == $id ? 'selected ="selected"': ''}} 
                value="{{ $id }}">
                {{ $category_name }}
            </option>
        @endforeach
    </select>
</div>

{{-- Lista desplegable estatica para estado de las publicaciones --}}
<div class="form-group">
    <select class="custom-select" name="state_publication" id="state_publication">
        @include('dashboard.components.state_options',[ 'val' => $post->state_publication ])
    </select>
</div>

{{-- Lista deplegable dinámica para categorías --}}
<div class="form-group">
    <textarea class="form-control" name="content_publication" id="content_publication" cols="30" rows="10"
    placeholder="Contenido de la publicacion">
    {{ old('content_publication,$post->content_publication') }}
    </textarea>
</div>

<button type="submit" class="btn btn-success">Aceptar</button>
<a class="btn btn-danger" href="{{ URL::previous()}}" >Cancelar</a>
   
