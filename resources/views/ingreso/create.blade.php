@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de Ingreso') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ingreso.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="temperatura_ingreso" class="col-md-4 col-form-label text-md-right">{{ __('Temperatura Ingreso') }}</label>

                            <div class="col-md-6">
                                <input id="temperatura_ingreso" type="text" class="form-control" name="temperatura_ingreso" value="{{ old('temperatura_ingreso') }}" required autocomplete="temperatura_ingreso" >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="number_phone" class="col-md-4 col-form-label text-md-right">{{ __('¿En tu barrio, edificio, condominio o lugar de residencia hay casos confirmados de COVID-19?') }}</label>

                            <div class="col-md-6">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="respuesta_1" value="Si">Si 
                                        <input type="radio" name="respuesta_1" value="No" checked>No 
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="number_id" class="col-md-4 col-form-label text-md-right">{{ __('¿Has estado en Contacto con personas diagnosticadas con COVID-19 y bajo sospecha?') }}</label>

                            <div class="col-md-6">
                            <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="respuesta_2" value="Si">Si 
                                        <input type="radio" name="respuesta_2" value="No" checked>No 
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="tipo_documento" class="col-md-4 col-form-label text-md-right">{{ __('¿Hace parte usted del personal de salud activo o en linea directa de atencion a urgencias?') }}</label>

                            <div class="col-md-6">
                            <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="respuesta_3" value="Si">Si 
                                        <input type="radio" name="respuesta_3" value="No" checked>No 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label>¿Has presentado en los ultimos dos(2) dias los siguientes sintomas?</label>
                        <div class="form-group row">
                            <label for="edad" class="col-md-4 col-form-label text-md-right">{{ __('Fiebre o cuadro febril superior a 38 Grados Celsius') }}</label>

                            <div class="col-md-6">
                            <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="respuesta_4" value="Si">Si 
                                        <input type="radio" name="respuesta_4" value="No" checked>No 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Tos') }}</label>

                            <div class="col-md-6">
                            <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="respuesta_5" value="Si">Si 
                                        <input type="radio" name="respuesta_5" value="No" checked>No 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cargo" class="col-md-4 col-form-label text-md-right">{{ __('Fatiga') }}</label>

                            <div class="col-md-6">
                            <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="respuesta_6" value="Si">Si 
                                        <input type="radio" name="respuesta_6" value="No" checked>No 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dificultad Respiratoria') }}</label>

                            <div class="col-md-6">
                            <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="respuesta_7" value="Si">Si 
                                        <input type="radio" name="respuesta_7" value="No" checked>No 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombre_contacto" class="col-md-4 col-form-label text-md-right">{{ __('Bronquitis/Neumonia') }}</label>

                            <div class="col-md-6">
                            <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="respuesta_8" value="Si">Si 
                                        <input type="radio" name="respuesta_8" value="No" checked>No 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="numero_contacto" class="col-md-4 col-form-label text-md-right">{{ __('Diarrea o alteraciones del sistemas gastro intestinal') }}</label>

                            <div class="col-md-6">
                            <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="respuesta_9" value="Si">Si 
                                        <input type="radio" name="respuesta_9" value="No" checked>No 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="numero_contacto" class="col-md-4 col-form-label text-md-right">{{ __('Deshidratacion') }}</label>

                            <div class="col-md-6">
                            <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="respuesta_10" value="Si">Si 
                                        <input type="radio" name="respuesta_10" value="No" checked>No 
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="numero_contacto" class="col-md-4 col-form-label text-md-right">{{ __('Perdida del Olfato(Anosmia)') }}</label>

                            <div class="col-md-6">
                            <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="respuesta_11" value="Si">Si 
                                        <input type="radio" name="respuesta_11" value="No" checked>No 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="numero_contacto" class="col-md-4 col-form-label text-md-right">{{ __('Perdida o cambio del gusto(Disgeusia/Ageusia)') }}</label>

                            <div class="col-md-6">
                            <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="respuesta_12" value="Si">Si 
                                        <input type="radio" name="respuesta_12" value="No" checked>No 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="persona_id" value="{{$id}}">
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
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
