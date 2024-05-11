@extends('Layouts.plantilla')
@section('content')

<!-- Agregar un context box para mostrar imágenes locales -->
<div class="container text-center">
    <a href="#" class="btn btn-disponibilidad rounded-pill btn-lg btn-orange">Reservar mesa Ahora!</a>
</div>
<div class="context-box">
    <div class="image-container">
        <img src="../../img/combos.jpg" class="img-fo">
        <img src="../../img/asados.jpg" class="img-fo">
        <img src="../../img/complementos.jpg" class="img-fo">
        
    </div>
</div>

<!-- Estilos CSS para el context box y las imágenes -->
<style>
    body {
        overflow-y: scroll; 
    }

    .container {
        margin-top: 50px; 
    }

    .btn-orange {
        background-color: orange; 
        color: white; 
    }

    .context-box {
        width: 100%; 
        max-height: calc(100vh - 100px); 
        overflow-y: auto; 
        border: 1px solid #ccc; 
        padding: 10px; 
    }

    /* Estilos para las imágenes dentro del context box */
    .context-box .image-container {
        display: flex; 
        flex-direction: column; 
        align-items: center; 
        width: 100%; 
    }

    .context-box img {
        margin-bottom: 10px; 
        max-width: 100%; 
    }
</style>

@stop