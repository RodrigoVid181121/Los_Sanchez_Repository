@extends('Layouts.plantilla')
@section('content')
<script src="{{ asset('js/ReservationsEmployee.js') }}"></script>
<div class="max-w-4xl mx-auto p-4">
        <div class="bg-zinc-100 p-4 rounded-lg shadow-md">
            <form id="Search">
                @csrf
            <div class="input-group mb-4">
                <label for="phoneNumber" class="mb-0">Número de teléfono:</label>
                <input
                    type="number"
                    placeholder=""
                    class="form-control-buscar-sm border border-zinc-300 rounded-lg"
                    name="phoneNumber"
                    id="phoneNumber"
                />
                <div class="input-group-append">
                    <button type="submit" id="btnSearch" class="btn btn-buscar rounded-pill">Buscar</button>
                </div>
            </div>
            </form>
        
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
                
            </div>

            <h2 class="text-xl font-semibold mb-4">Mesas Disponibles</h2>
            <input type="hidden" id="TableID" name="TableID"/>
            <div class="space-y-4" id="freeTables">
                
            </div>
            </form>
            
            <form id="Cancel">
                @csrf
            <h2 class="text-xl font-semibold mb-4">Mesas Reservadas</h2>
            
            <input type="hidden" id="ReservationID" name="ReservationID"/>
            <input type="hidden" id="TableCancelID" name="TableCancelID"/>
            <div id="ReservationsTable" class="space-y-4">
            </div>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@stop