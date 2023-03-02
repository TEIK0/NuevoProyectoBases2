@extends('app')

@section('content')
<style>
.ContAu{
    margin-top: 50px;
    background-color: #545454;
    height: max-content;
    border-radius: 15px;
    width: 90%;
    padding: 20px;
    box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.2);
}

.ContEtiquete{
    margin-top: 2%;
    background-color: #545454;
    border-radius: 15px;
    height: 80px;
    width: 90%;
    box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.2);
}

.ImagenAu{
    width: 550px;
    height: 350px;
    background-color: white;
}

.AutorInfo{
    width:fit-content;
    margin-top: 50px;
    font-size: 40px;
    color: black;
}
.labb{
    display: grid;
    font-size: 30px;
    padding-top: 25px;
    width: 35%;
    color: black;
}
a{
    margin-top: 50px;
    margin-right: 50px;
    font-size: 40px;
    color: black;
    
}
.AutorBio{
    font-size: 20px;
    padding: 10px;
    gap: 10px;
    color: black;
}

.AutorData{
    display: grid;
    margin-top: 20px;
    justify-content: center;
    width:fit-content;
    color: black;
    font-size: 40px;

}
</style>

<div class="ContAu container-fluid">
    <form action="{{route('obra-show',['id'=>$pintura->id])}}" method='POST'>
    <div class="row">
        <div class="row">
            <svg class="ImagenAu mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M512 256c0 .9 0 1.8 0 2.7c-.4 36.5-33.6 61.3-70.1 61.3H344c-26.5 0-48 21.5-48 48c0 3.4 .4 6.7 1 9.9c2.1 10.2 6.5 20 10.8 29.9c6.1 13.8 12.1 27.5 12.1 42c0 31.8-21.6 60.7-53.4 62c-3.5 .1-7 .2-10.6 .2C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm0-96a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM288 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm96 96a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
        </div>
        <div class="row">
            <label class="AutorInfo mx-auto">Nombre de la obra: {{$pintura->nombre}}</label>
        </div>
        <div class="row">
            <label class="AutorData col-ms-4 mx-auto">Tipo: {{$pintura->tipo}}</label>
            <div class="row">
                    @foreach ($artistas as $a)

                        @if($a->id == $pintura->artista_id)

                            <a href="{{route('artist-show',[$a->id])}}" class="mx-auto" for="">{{$a->nombre}}</a>

                        @endif
                    
                    @endforeach
            </div>
        </div>
        <div class="row">
            <label class="AutorInfo mx-auto"for="">Precio: {{$pintura->precio}}$</label>
        </div>
       </div>
    </form>
</div>;

@endsection