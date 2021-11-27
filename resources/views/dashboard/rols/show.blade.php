{{-- Evita falsificacion  de peticiones--}}
@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <input readonly class="form-control" type="text" name="publication" id="publication" placeholder="Nombre publicacion"
        value="{{ $post->publication }}">
    </div>

    <div class="form-group">
        <select disabled class="form-control" name="state_publication" id="state_publication">
            <option value="">Publicado</option>
            <option value="">No Publicado</option>
            <option value="">En revision</option>
        </select>
    </div>

    <div class="form-group">
        <textarea readonly class="form-control" name="content_publication" id="content_publication" cols="30" rows="10"
        placeholder="Contenido de la publicacion">
        {{ $post ->content_publication }}
        </textarea>
    </div>

    <a class="btn btn-danger" href="{{ URL::previous()}}" >Volver</a>
@endsection
