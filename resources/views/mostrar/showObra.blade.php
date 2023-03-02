@extends('app')

@section('content')
<style>
.ContAu{
    margin-top: 50px;
    background-color: #EB6666;
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

.info{
        display:grid;
        padding-top: 10px;
        justify-content: center;
        color: #1E1818;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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
            <img class="ImagenAu mx-auto"  src="{{$pintura->image_link}}"/>
        </div>
        <div class="row">
            <label class="AutorInfo mx-auto">{{$pintura->nombre}}</label>
        </div>
        <div class="row">
            <label class="AutorData col-ms-4 mx-auto">Tipo: {{$pintura->tipo}}</label>
            <div class="info">
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