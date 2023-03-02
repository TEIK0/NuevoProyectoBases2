@extends('app')

@section('content')

<style>
    .piececol{
        width: 250px;
        height: 500px;
        outline: 4px solid black;
        background-color: white;
    }
    .contenedor{
        display:grid;
        grid-template-columns: repeat(auto-fill,250px);
        gap: 40px;
        padding: 40px;
        justify-content: center;
    }
    .ImagenAu{
    width: 250px;
    height: 200px;
    background-color: black;
    }
    .info{
        display:grid;
        padding-top: 10px;
        justify-content: center;
        color: #1E1818;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .colorer{
        color: #1E1818;
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
    <form action="{{route('menuObra')}}" method="GET"></form>
    
    <div class = "container-fluid" >
        <div class = "contenedor" >
        @if ($pinturas->count() > 0)
            @foreach ($pinturas as $p)
            
            <div class="col-4 piececol">
                <div class="row mx-auto">
                    <img class="col-xs-4 ImagenAu mx-auto" src="{{$p->image_link}}"/>
                </div>
                <div class="salto"></div>
                <div class="info" style="font-size: 35px;color: black">
                    <a href="{{route('obra-show',[$p->id])}}" class="mx-auto colorer" for="">{{$p->nombre}}</a>
                </div>
                <div class="info" style="font-size:25px">
                    @foreach ($artistas as $a)

                        @if($a->id == $p->artista_id)

                            <a href="{{route('artist-show',[$a->id])}}" class="mx-auto colorer" for="">{{$a->nombre}}</a>

                        @endif
                    
                    @endforeach
                </div>
                <div class="info" style="font-size:25px">
                    <label class="mx-auto" for="">{{$p->precio}}</label>
                </div>
                <div class="info" style="font-size:30px">
                    <label class="mx-auto" for="">{{$p->tipo}}</label>
                </div>
                <div class="info" style="font-size:30px">
                    <label class="mx-auto" for="">{{$p->fecha_creacion}}</label>
                </div>
            </div>
            @endforeach
        @endif
        </div>
        

@endsection