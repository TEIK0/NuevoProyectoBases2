@extends('app')

@section('content')

<style>
    .piececol{
        width: 250px;
        height: 500px;
        background-color: white;
        outline: 4px solid black;
    }

    .ImagenAu{
    width: 200px;
    height: 250px;
    background-color: black;
    }

    .colorer{
        color: #1E1818;
    }

    .contenedor{
        display:grid;
        grid-template-columns: repeat(auto-fill,250px);
        gap: 40px;
        padding: 40px;
        justify-content: center;
    }
    .info{
        display:grid;
        padding-top: 30px;
        justify-content: center;
        color: #1E1818;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .imagen_cont{
        width: 150px; height: 100px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    .salto{
        width: 100%;
        height: 2.5px;
        border: 2.5px solid black;
    }
    
</style>

<div class="row py-5">
    <form action="{{route('menuArtista')}}" method="GET"></form>
    
    <div class = "container-fluid" >
        <div class = "contenedor" >
        @if ($artistas->count() > 0)
            @foreach ($artistas as $p)
            
            <div class="col-4 piececol">
                <div class="row mx-auto">
                    <img class="col-xs-4 ImagenAu mx-auto" src="{{$p->image_link}}"/>
                </div>
                <div class="salto"></div>
                <div class="info" style="font-size: 35px;color: black">
                    <a href="{{route('artist-show',[$p->id])}}" class="mx-auto colorer" for="">{{$p->nombre}}</a>
                </div>
                <div class="info" style="font-size:25px">
                    <label class="mx-auto" for="">{{$p->nacionalidad}}</label>
                </div>
                <div class="info" style="font-size:25px">
                    <label class="mx-auto" for="">{{$p->fecha_nacimiento}}</label>
                </div>
            </div>
            @endforeach
        @endif
        </div>
        

@endsection