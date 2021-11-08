{{-- Evita falsificacion  de peticiones--}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    <input class="form-control" type="text" name="category_name" id="category_name" placeholder="Nombre categoría"
    value="{{ $category->category_name }}">
</div>

<div class="form-group">
    <textarea class="form-control" name="content_publication" id="content_publication" cols="30" rows="10"
    placeholder="Contenido de la categoría">
    {{ old('content_publication,$category->content_publication') }}
    </textarea>
</div>

<button type="submit" class="btn btn-success">Aceptar</button>
<a class="btn btn-danger" href="{{ URL::previous()}}" >Cancelar</a>
   
