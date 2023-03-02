@extends('app')

@section('content')

<style>
    .piececol{
        width: 250px;
        height: 300px;
        outline: 4px solid black;
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
        padding-top: 10px;
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
    
    <div class = "container-fluid" style = "border: 5px solid green">
        <div class = "contenedor" style = "background-color: grey; color: white ; border: 2px solid yellow">
        @if ($artistas->count() > 0)
            @foreach ($artistas as $p)
            
            <div class="col-4 piececol">
                <div class="row mx-auto" style="height:35%;background-color:blanchedalmond">
                    <svg class="imagen_cont mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M234.5 5.7c13.9-5 29.1-5 43.1 0l192 68.6C495 83.4 512 107.5 512 134.6V377.4c0 27-17 51.2-42.5 60.3l-192 68.6c-13.9 5-29.1 5-43.1 0l-192-68.6C17 428.6 0 404.5 0 377.4V134.6c0-27 17-51.2 42.5-60.3l192-68.6zM256 66L82.3 128 256 190l173.7-62L256 66zm32 368.6l160-57.1v-188L288 246.6v188z"/></svg>
                </div>
                <div class="salto"></div>
                <div class="info" style="font-size: 35px;color: black">
                    <a href="{{route('artist-show',[$p->id])}}" class="mx-auto" for="">{{$p->nombre}}</a>
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