@extends('Layouts.plantilla')
@section('content')

<div class="max-w-4xl mx-auto p-4">
        <div class="bg-zinc-100 p-4 rounded-lg shadow-md">
            <p class="text-sm text-zinc-600 mb-4 reminder-text">Recuerde iniciar sesión antes de reservar una mesa</p>
            <div class="d-flex justify-content-between align-items-center gap-4 mb-4">
                <div class="dropdown">
                    <button class="btn btn-outline-custom dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Fecha y hora 
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <!-- Aquí puedes añadir opciones si lo deseas -->
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
            @foreach($tables as $table)
            <div class="space-y-4">
                <div class="bg-custom p-4 rounded-lg shadow-sm mb-3"> <!-- Añadir margen inferior -->
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Mesa {{$table->table_number}} - Mesa exterior</span>
                        <a href="#" class="btn btn-reserva rounded-pill btn-lg col-auto">Reservar</a> <!-- Botón más grande y ovalado -->
                    </div>
                </div>
                
            </div>
            @endforeach
            

        </div>
    </div>

@stop