@extends('dashboard.master')
@section('content')

<a href="{{ route('user.create') }}"  class="btn btn-info btn-small mb-3">Crear usuario</a>
    <h6>Listar usuarios</h6>
        <table class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">Rol</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead> 
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id}} </th>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->surname}}</td>
                        <td>{{ $user->email}}</td>
                        <td>{{ $user->rol_id}}</td>
                        <td>
                            <a href="{{ route('user.edit', $user -> id) }}" class="btn btn-info btn-sm">Editar</a>
                            <a href="{{ route('user.show', $user -> id)}}" class="btn btn-info btn-sm">Ver</a>
                            <button data-toggle="modal" class="btn btn-danger btn-sm" data-id="{{ $user -> id }}"
                                data-target="#exampleModal">Eliminar</button>
    
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
@endsection

{{ $users -> links() }}
  

<!--Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Seguro deseas eliminar el usuario?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form id="deletePost" action="{{ route('post.destroy', 0) }}" method="POST"
                    data-action="{{ route('post.destroy', 0) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

  <script>
       window.onload = function() {
        $('#exampleModal').on('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = $(event.relatedTarget)
            var id = button.data('id')
            action = $('#deletePost').attr('data-action').slice(0,-1)
            action += id
            console.log(action)
            $('#deletePost').attr('action', action)
            var modal = $(this)
            modal.find('.modal-title').text('Vas a eliminar el usuario: ' + id)
        })
    }

  </script>
