@csrf
<div class="form-group row">
    <label for="rol" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>

    <div class="col-md-6">
        <input id="rol" type="text" class="form-control @error('rol') is-invalid @enderror" name="rol" value="{{ old('rol') }}" required autocomplete="rol" autofocus>

        @error('rol')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="key" class="col-md-4 col-form-label text-md-right">{{ __('Clave') }}</label>

    <div class="col-md-6">
        <input id="key" type="text" class="form-control @error('key') is-invalid @enderror" name="key" value="{{ old('key') }}" required autocomplete="key" autofocus>

        @error('key')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Funciones') }}</label>

    <div class="col-md-6">
        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="10"></textarea>

        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<button type="submit" class="btn btn-success">Aceptar</button>
<a class="btn btn-danger" href="{{ URL::previous()}}" >Cancelar</a>
   