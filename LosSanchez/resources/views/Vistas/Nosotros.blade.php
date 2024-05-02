@extends('Layouts.plantilla')
@section('content')

<div class="container" style="margin-top:1vw;margin-bottom:2vw;">
            <div class="row">
                <div class="container col-md-7 F-col">
                    <h2 class="enfasis">Comida Mexicana</h2>
                    <p>El Sazon de Los Sanchez es para ti, somos un restaurante con estilo Mexicano brindando nuestros productos con la mayor Calidad e Higiene.</p>
                    <p class="enfasis2">Al visitarnos no compras un producto si no una Experiencia con quienes mas amas!</p>
                </div>
                <div class="container col-md-2 F-col">
                    <img src="../../img/logo-icono.png" style="height:6vw;">
                </div>
            </div>
            <div class="row">
                <div class="col-md F-col">
                    <gmp-map center="13.73909337186432, -89.35724644907415" zoom="18" map-id="DEMO_MAP_ID">
                    <gmp-advanced-marker position="13.73909337186432, -89.35724644907415" title="Los Sanchez Mexican Food & Pupusas"></gmp-advanced-marker>
                    </gmp-map>
                </div>
                <div class="col-md F-col">
                <ul>
                    <li>
                    <h4 class="enfasis">Dirección</h4>
                    <p>Calle Principal Residencial las Arboledas, No 7-C, Lourdes, El Salvador</p>  
                    </li>   
                    <li>
                    <h4 class="enfasis">Horarios de atención</h4>
                    <p>Lunes - Jueves 14:30 PM - 21:00 PM <br> Viernes - Domingo 11:00 AM - 21:00 PM</p>  
                    </li>   
                    <li>
                    <h4 class="enfasis">Contactos</h4>
                    <p>Para consultas o envíos domicilio puede contactarnos por los siguientes medios:</p> 
                    <ul>
                        <li class="">
                        <i class="fa-solid fa-phone"></i>
                        <span>7094 9512 - Envío a domicilio</span></li>
                        <li>
                        <i class="fa-solid fa-envelope"></i>
                        <span>bardeideas@gmail.com</span>
                        </li>
                        <li>
                        <i class="fa-brands fa-facebook"></i>
                        <span>@lossanchezSV</span></li>
                    </ul> 
                    </li>   
                </ul>   
                </div>
            </div>
        </div>

@stop