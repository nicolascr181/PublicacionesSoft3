@extends('dashboard.master')
@section('content')
    <h6>Crear Rol</h6>
    <form action="{{ route('rol.store') }}" method="POST">
        @include('dashboard.rols._form')
    </form>
@endsection