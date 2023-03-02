@extends('app')

@section('content')

<style>
.ContAu{
    margin-top: 10%;
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
    width: 200px;
    height: 250px;
}

.AutorInfo{
    display: block;
    margin-top: 50px;
    font-size: 40px;
    width: 200px;
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
        <img class="col-xs-4 ImagenAu" src="data:image/jpeg;base64,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"/>
        <label class="col-xs-8 AutorInfo">{{$artista->nombre}}</label>
        <label class="col-xs-2 AutorData">{{$artista->fecha_nacimiento}}</label>
        <label class="col-xs-2 AutorData">Nacio en: {{$artista->nacionalidad}}</label>
        <label class="col-xs-12 AutorBio">{{$artista->biografia}}</label>
    </div>
    </form>
</div>;

<div class="container-fluid ContEtiquete"> 
    
        <label class="mx-auto labb"  for="">Obras disponibles del autor</label>
    
</div>

@endsection