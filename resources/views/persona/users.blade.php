@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro de Ingresos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col"># documento</th>
                        <th scope="col">Nombres y Apellidos</th>
                        <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    @foreach($personas as $persona)
                        <tr>
                            <td>{{$persona->tipo_documento." ".$persona->number_id}}</td>
                            <td>{{$persona->name}}</td>
                            <td>
                            <a title="Registrar ingreso" href="{{route('ingreso.apoyo',$persona->id)}}">
                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-journal-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                    <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                </svg>
                            </a>
                            <a title="Registrar ingreso" data-toggle="modal" data-target="#exampleModal{{$persona->id}}">
                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-printer-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5z"/>
                                    <path fill-rule="evenodd" d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                                    <path fill-rule="evenodd" d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                </svg>
                            </a>
                            <div class="modal fade" id="exampleModal{{$persona->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Selecciona Mes</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <select name="mes" onchange="imprimir(this.value,{{$persona->id}})">
                                        <option>Selecciona una opción</option>
                                            <option value="01">Enero</option> 
                                            <option value="02">Febrero</option> 
                                            <option value="03">Marzo</option> 
                                            <option value="04">Abril</option> 
                                            <option value="05">Mayo</option> 
                                            <option value="06">Junio</option> 
                                            <option value="07">Julio</option> 
                                            <option value="08">Agosto</option> 
                                            <option value="09">Septiembre</option> 
                                            <option value="10">Octubre</option> 
                                            <option value="11">Noviembre</option> 
                                            <option value="12">Diciembre</option
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                                                       
                            </td>
                        </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

function imprimir(mes,id){
    
    let href="http://127.0.0.1:8000/imprimir-apoyo/"+id+"/"+mes;
    window.location = href;
}
</script>
@endsection
