@extends('Layouts.plantilla')
@section('content')
<script src="{{ asset('js/Reservations.js') }}"></script>

<div class="max-w-4xl mx-auto p-4">
        <div class="bg-zinc-100 p-4 rounded-lg shadow-md">
            <p class="text-sm text-zinc-600 mb-4 reminder-text">Recuerde iniciar sesión antes de reservar una mesa</p>
            <form id="Create">
            @csrf
            <div class="d-flex justify-content-between align-items-center gap-4 mb-4">
                <div>
                    <button class="btn btn-outline-custom dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Fecha y hora 
                    </button>
                    <input type="datetime-local" id="datetime" name="datetime" placeholder="Seleccione una fecha"/>
                </div>
                
                <div>
                    <label for="cantidad_personas" class="mb-0">Cantidad de personas:</label>
                    <input type="number" id="cantidad_personas" placeholder="" class="form-control-sm border border-zinc-300 rounded-lg" name="cantidad_personas"                        
                    />
                </div>
                <a href="#" class="btn btn-disponibilidad rounded-pill btn-lg col-auto">Ver Disponibilidad</a>
            </div>

            <h2 class="text-xl font-semibold mb-4">Mesas Disponibles</h2>
            <input type="hidden" id="TableID" name="TableID"/>
            <div class="space-y-4" id="freeTables">
                
            </div>
            </form>
            
            <form id="Cancel">
                @csrf
            <h2 class="text-xl font-semibold mb-4">Mis Reservaciones</h2>
            
            <input type="hidden" id="ReservationID" name="ReservationID"/>
            <input type="hidden" id="TableCancelID" name="TableCancelID"/>
            <div id="ReservationsTable" class="space-y-4">
            </form>
            </div>            
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

@stop