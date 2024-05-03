@extends('Layouts.plantilla')
@section('content')

<div class="container">
                <div class="input-group mb-3">
                    <span class="input-group-text inp" id="basic-addon1">Nombre:</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    <button class="btn btn-outline-secondary btn-buscar" type="button">Buscar</button>
                </div>
                <h2 class="text-xl font-semibold mb-4 F-col">Clientes</h2>
            <div class="space-y-4" style="margin:1vw;">
                <div class="bg-custom p-4 rounded-lg shadow-sm mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Carlos Ramirez</span>
                        <span>23456789</span>
                        <span>carlos.ramirez@gmail.com</span>
                        <a href="#" class="btn btn-danger">Eliminar</a> 
                    </div>
                </div>
                <div class="bg-custom p-4 rounded-lg shadow-sm mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Carlos Ramirez</span>
                        <span>23456789</span>
                        <span>carlos.ramirez@gmail.com</span>
                        <a href="#" class="btn btn-danger">Eliminar</a> 
                    </div>
                </div>
                <div class="bg-custom p-4 rounded-lg shadow-sm mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Carlos Ramirez</span>
                        <span>23456789</span>
                        <span>carlos.ramirez@gmail.com</span>
                        <a href="#" class="btn btn-danger">Eliminar</a> 
                    </div>
                </div>
            </div>
            </div>

@stop