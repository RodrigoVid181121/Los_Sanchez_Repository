@extends('Layouts.plantilla')
@section('content')

<div class="max-w-4xl mx-auto p-4">
        <div class="bg-zinc-100 p-4 rounded-lg shadow-md">
        <div class="input-group mb-4">
                <label for="cantidad_personas" class="mb-0">Nombre:</label>
                <input
                    type="text"
                    placeholder=""
                    class="form-control-buscar-sm border border-zinc-300 rounded-lg"
                />
                <div class="input-group-append">
                    <a href="#"  class="btn btn-buscar rounded-pill">Buscar</a>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center gap-4 mb-4">
                <div class="dropdown">
                    <button class="btn btn-outline-custom dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Fecha y hora
                        
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      
                    </div>
                </div>
                <div>
                    <label for="cantidad_personas" class="mb-0">Cantidad de personas:</label>
                    <input
                        type="number"
                        id="cantidad_personas"
                        placeholder=""
                        class="form-control-sm border border-zinc-300 rounded-lg"
                    />
                </div>
                <a href="#" class="btn btn-disponibilidad rounded-pill btn-lg col-auto">Ver Disponibilidad</a>
            </div>
            <div class="bg-custom p-4 rounded-lg shadow-sm mb-4 d-flex justify-content-between align-items-center">
                <div>
                    <span>Mesa 2 - Mesa exterior:</span>
                    <t><span class="text-center">01-04-2024</span></t>
                </div>
                <a href="#" class="btn btn-cancelar rounded-pill btn-lg col-auto">Cancelar</a>
            </div>


            <h2 class="text-xl font-semibold mb-4">Mesas Disponibles</h2>
            <div class="space-y-4">
                <div class="bg-custom p-4 rounded-lg shadow-sm mb-3"> 
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Mesa 1 - Mesa exterior</span>
                        <a href="#" class="btn btn-reserva rounded-pill btn-lg col-auto">Reservar</a> 
                    </div>
                </div>
                <div class="bg-custom p-4 rounded-lg shadow-sm mb-3"> 
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Mesa 3 - Mesa exterior</span>
                        <a href="#" class="btn btn-reserva rounded-pill btn-lg col-auto">Reservar</a> 
                    </div>
                </div>
                <div class="bg-custom p-4 rounded-lg shadow-sm"> 
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Mesa 4 - Mesa interior</span>
                        <a href="#" class="btn btn-reserva rounded-pill btn-lg col-auto">Reservar</a> 
                    </div>
                </div>
            </div>

        </div>
    </div>


@stop