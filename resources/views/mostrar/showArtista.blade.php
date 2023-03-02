@extends('app')

@section('content')

<style>
.ContAu{
    
    margin-top: 10%;
    background-color: #EB6666;
    height: max-content;
    border-radius: 15px;
    width: 90%;
    padding: 20px;
    box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.2);
}

.pad{
    padding: 5%;
}

.ContEtiquete{
    margin-top: 2%;
    background-color: #EB6666;
    border-radius: 15px;
    height: 80px;
    width: 90%;
    box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.2);
}

.ImagenAu{
    width: 200px;
    height: 250px;
    background-color: black;
}

.AutorInfo{
    display: block;
    margin-top: 50px;
    font-size: 40px;
    width: fit-content;
    color: black;
}
.labb{
    display: grid;
    font-size: 30px;
    padding-top: 25px;
    width: 35%;
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
    margin-top: 80px;
    justify-content: center;
    width: 20%;
    color: black;
    font-size: 40px;

}
</style>


<div class="ContAu container-fluid">
    <form action="{{route('artist-show',['id'=>$artista->id])}}" method='POST'>
    <div class="row">
        <img class="col-xs-4 ImagenAu" src="{{$artista->image_link}}"/>
        <label class="col-xs-8 AutorInfo pad">{{$artista->nombre}}</label>
        <label class="col-xs-2 AutorInfo pad">{{$artista->fecha_nacimiento}}</label>
        <label class="col-xs-2 AutorInfo pad">Nacio en: {{$artista->nacionalidad}}</label>
        <label class="col-xs-12 AutorBio">{{$artista->biografia}}</label>
    </div>

</div>;

<div class="container-fluid ContEtiquete"> 
    
        <label class="mx-auto labb"  for="">Obras disponibles del autor</label>
    
</div>

@if ($pinturas->count() > 0)
    @foreach ($pinturas as $p)

    @if($p->artista_id == $artista->id)

    <div class="ContAu container-fluid">
    <div class="row">
        <div class="row">
            <img class="ImagenAu mx-auto" src="{{$p->image_link}}"/>
        </div>
        <div class="row">
            <label class="AutorInfo mx-auto">{{$p->nombre}}</label>
        </div>
        <div class="row">
            <label class="AutorData col-ms-4 mx-auto">Tipo: {{$p->tipo}}</label>
            <div class="info">
                <label  class="mx-auto AutorInfo" for="">{{$artista->nombre}}</label>
            </div>
        </div>
        <div class="row">
            <label class="AutorInfo mx-auto"for="">Precio: {{$p->precio}}$</label>
             </div>
            </div>
        </form>
    </div>;

    @endif

    @endforeach
@endif


    </form>

@endsection