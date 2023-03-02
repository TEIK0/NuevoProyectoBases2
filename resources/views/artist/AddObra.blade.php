@extends('app')

@section('content')

<style>

    .Tittle{
    
    width:fit-content;
    font-size: 30px;
    color: black;
    padding-left: 35%;
    }

    .ImageB{
        width:fit-content;
        height:fit-content;
        background-color: #A6A6A6;
        border radius: 10px;
        box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.2);
    }

    .Cont{
        margin-top: 50px;
        background-color: #545454;
        height: max-content;
        border-radius: 15px;
        width: 90%;
        padding: 20px;
        box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.2);
    }

    .DateInput{
        width:150px;
        height: 50px;
    }

    .NewUser{
        font-size: 30px;
        width: 45%;
    }

    .row{
        padding-top: 10px;
        padding-bottom: 10px;
    }
    textarea{
        font-size: 25px;
    }
    select{
        font-size: 30px;
        width: 45%;
    }

    .submit{
        width: 250px;
        height: 50px;
    }

</style>

    <div class="container-fluid Cont">
        <form action="{{route('addPintura')}}" method='POST'>
        @csrf
        @if(session('success'))
            <h6 class='alert alert-success'>{{session('success')}}</h6>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div>
            @endforeach
        @endif
        <div class="row">
            <input class="NewUser mx-auto" type="text" name="nombre" id="" placeholder="Nombre Obra">
        </div>
        <div class="row">
        <input class="DateInput mx-auto" min="1000-01-01" max="2023-01-31" name="fecha_creacion" id="dob" type="date" class="form-control" placeholder="Date of birth" value="{{ date('m/d/Y') }}"/>
        </div>
        <div class="row">
            <select class="NewUser mx-auto" style="height:60px" name="artista_id" id="">
                @foreach ($artistas as $a)
                    <option value="{{$a->id}}">{{$a->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <label class="NewUser mx-auto" style="color: black; width:fit-content" for="">No esta registrado el artista?</label>
        </div>
        <div class="row">
            <a href="{{route('addArtist')}}" class="ImageB  mx-auto">Agregar artista</a>
        </div>
        <div class="row">
            <input class="NewUser mx-auto" type="number" name="precio" step="any" id="" min="1" placeholder="Precio">
        </div>
        <div class="row">
            <label class="NewUser mx-auto" style="color: black; width:fit-content" for="">Tipo</label>
        </div>
        <div class="row">
            <select class="NewUser mx-auto" style="height:60px" name="tipo" id="">
                <option value="pintura">Pintura</option>
                <option value="fotografia">Fotografia</option>
                <option value="escultura">Escultura</option>
                <option value="orfebreria">Orfebreria</option>
                <option value="ceramica">Ceramica</option>
            </select>
        </div>
        <div class="row">
            <button class="mx-auto submit">Ingresar</button>
        </div>
        </form>
    </div>


@endsection