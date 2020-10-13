@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de personas') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('persona.update',$persona->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $persona->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ $persona->lastname }}" required autocomplete="lastname" >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="number_phone" class="col-md-4 col-form-label text-md-right">{{ __('Numero de Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="number_phone" type="number" class="form-control" name="number_phone" value="{{ $persona->number_phone }}" required autocomplete="number_phone" >

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="number_id" class="col-md-4 col-form-label text-md-right">{{ __('Numero de identificacion') }}</label>

                            <div class="col-md-6">
                                <input id="number_id" type="number" class="form-control" name="number_id" value="{{ $persona->number_id }}" required autocomplete="number_id" >

                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="tipo_documento" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de documento') }}</label>

                            <div class="col-md-6">
                               <!-- <input id="tipo_documento" type="text" class="form-control" name="tipo_documento" value="{{ $persona->tipo_documento }}" required autocomplete="number_id" >-->
                                <select class="form-control" id="tipo_documento" name="tipo_documento" required>
                                    <option>C.C</option>
                                    <option>T.I</option>
                                    <option>C.E</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edad" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>

                            <div class="col-md-6">
                                <input id="edad" type="number" class="form-control" name="edad" value="{{ $persona->edad }}" required autocomplete="edad" >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ $persona->direccion }}" required autocomplete="direccion" >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cargo" class="col-md-4 col-form-label text-md-right">{{ __('Cargo') }}</label>

                            <div class="col-md-6">
                                <input id="cargo" type="text" class="form-control" name="cargo" value="{{ $persona->cargo }}" required autocomplete="cargo" >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Direccion de correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $persona->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="eps" class="col-md-4 col-form-label text-md-right">{{ __('EPS') }}</label>

                            <div class="col-md-6">
                                <input id="eps" type="text" class="form-control" name="eps" value="{{ $persona->eps }}" required autocomplete="eps" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="arl" class="col-md-4 col-form-label text-md-right">{{ __('ARL') }}</label>

                            <div class="col-md-6">
                                <input id="arl" type="text" class="form-control" name="arl" value="{{ $persona->arl }}" required autocomplete="arl" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombre_contacto" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de contacto') }}</label>

                            <div class="col-md-6">
                                <input id="nombre_contacto" type="text" class="form-control" name="nombre_contacto" value="{{ $persona->nombre_contacto }}" required autocomplete="nombre_contacto" >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="numero_contacto" class="col-md-4 col-form-label text-md-right">{{ __('Numero de contacto') }}</label>

                            <div class="col-md-6">
                                <input id="numero_contacto" type="text" class="form-control" name="numero_contacto" value="{{ $persona->numero_contacto }}" required autocomplete="nombre_contacto" >

                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
