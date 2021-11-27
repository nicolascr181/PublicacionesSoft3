{{-- Evita falsificacion  de peticiones--}}
@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <input readonly class="form-control" type="text" name="name" id="name" placeholder="Nombre"
        value="{{ $user->name }}">
    </div>

    <div class="form-group">
        <input readonly class="form-control" type="text" name="surname" id="surname" placeholder="Nombre"
        value="{{ $user->surname }}">
    </div>

    <div class="form-group">
        <input readonly class="form-control" type="text" name="email" id="email" placeholder="Email"
        value="{{ $user->email }}">
    </div>

    

    <a class="btn btn-danger" href="{{ URL::previous()}}" >Volver</a>
@endsection
