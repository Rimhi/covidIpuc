@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de Ingreso') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ingreso.apoyostore') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="temperatura_ingreso" class="col-md-4 col-form-label text-md-right">{{ __('Temperatura Ingreso') }}</label>

                            <div class="col-md-6">
                                <input id="temperatura_ingreso" type="text" class="form-control" name="temperatura_ingreso" value="{{ old('temperatura_ingreso') }}" required autocomplete="temperatura_ingreso" >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="temperatura_salida" class="col-md-4 col-form-label text-md-right">{{ __('Temperatura Salida') }}</label>

                            <div class="col-md-6">
                                <input id="temperatura_salida" type="text" class="form-control" name="temperatura_salida" value="{{ old('temperatura_salida') }}" required autocomplete="temperatura_ingreso" >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="epp" class="col-md-4 col-form-label text-md-right">{{ __('EPP') }}</label>

                            <div class="col-md-6">
                                <input id="epp" type="text" class="form-control" name="epp" value="{{ old('epp') }}" required autocomplete="epp" >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sintomas" class="col-md-4 col-form-label text-md-right">{{ __('Sintomas de alarma') }}</label>

                            <div class="col-md-6">
                                <textarea id="sintomas"  class="form-control" name="sintomas" value="{{ old('sintomas') }}" required autocomplete="sintomas" ></textarea>

                            </div>
                        </div>
                        <input type="hidden" name="user_id" value="{{$id}}">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
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
