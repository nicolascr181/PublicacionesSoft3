@extends('dashboard.master')
@section('content')
    <h6>Crear Usuario</h6>
    <form action="{{ route('user.store') }}" method="POST">
        @include('dashboard.users._form')
    </form>
@endsection