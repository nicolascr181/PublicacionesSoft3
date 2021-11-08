{{-- Evita falsificacion  de peticiones--}}
@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <input readonly class="form-control" type="text" name="category" id="category" placeholder="Nombre categoría"
        value="{{ $category->category_name }}">
    </div>

    <div class="form-group">
        <textarea readonly class="form-control" name="content_publication" id="content_publication" cols="30" rows="10"
        placeholder="Contenido de la categoría">
        {{ $category ->content_publication }}
        </textarea>
    </div>

    <a class="btn btn-danger" href="{{ URL::previous()}}" >Volver</a>
@endsection
