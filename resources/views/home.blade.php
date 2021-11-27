@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @auth
                    <div>
                        Bienvenido {{ auth()->user()->name }}
                    </div>
                    <div>
                        Rol de usuario : {{ auth()->user()->rol->key }}
                    </div>
                    @endauth
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                          <div class="card h-100">
                            <img src="{{  asset("images/img1.svg") }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <a href="{{ route('post.index') }}" >
                                <h5 class="card-title">Módulo Publicaciones</h5>
                              </a>
                              <p class="card-text">Descripción publicaciones</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100">
                            <img src="{{  asset("images/img2.svg") }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <a href="{{ route('category.index')}}">
                                <h5 class="card-title">Módulo Categorías</h5>
                              </a>
                              <p class="card-text">Descripción Categorías</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100">
                            <img src="{{  asset("images/img3.svg") }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <a href="{{ route("rol.create") }}">
                                <h5 class="card-title">Módulo gestión Roles</h5>
                              </a>
                              <p class="card-text">Descripción gestión roles</p>
                            </div>
                          </div>
                        </div>
                       
                      </div>
                </div>
                
            </div>
            
        </div>
        
    </div>
</div>
@endsection
