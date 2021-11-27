@extends('dashboard.master')
@section('content')
    <h6>Editar publicacion</h6>
    <form action="{{ route('post.update', $post -> id) }}" method="POST">
        @method('PUT')
        @include('dashboard.posts._form')
    </form>
@endsection