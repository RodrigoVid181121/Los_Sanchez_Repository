@extends('Layouts.plantilla')
@section('content')

<div class="container">
    <form action="{{url('findUser')}}" method="get">

        <div class="input-group mb-3">
            <span class="input-group-text inp" id="basic-addon1">Telefono:</span>
            <input type="number" name="inputSearch" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
            <button class="btn btn-outline-secondary btn-buscar" type="submit">Buscar</button>
        </div>

    </form>
    <h2 class="text-xl font-semibold mb-4 F-col">Clientes</h2>
    <div class="space-y-4" style="margin:1vw;">

        @if ($user != null)
            @foreach ($user as $info)
            <form action="{{url('User')}}" method="get">
                <div class="bg-custom p-4 rounded-lg shadow-sm mb-3">
                    <div class="d-flex justify-content-between align-items-center">


                        <span>{{$info->name}}</span>


                        <span>{{$info->phone}}</span>

                        <input type="text"  name="inputDelete" value="{{$info->id}}" hidden></input>

                        <span>{{$info->email}}</span>

                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        



                    </div>
                </div>
                </form>
            @endforeach

            @else
            <div class="bg-custom p-4 rounded-lg shadow-sm mb-3">
                    <div class="d-flex justify-content-between align-items-center">


                        <span>No hay registros con el numero solicitado</span>

                    </div>
                </div>

        @endif
        <a href="{{url('user')}}" class="btn btn-success">Regresar</a>
    </div>


</div>

@stop