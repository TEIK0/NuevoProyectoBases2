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
</style>

        
    <div class="container-fluid Cont">
    <form action="{{route('addArtist')}}" method="POST">
        @csrf
        @if(session('success'))
            <h6 class='alert alert-success'>{{session('success')}}</h6>
        @endif

        @error('title')
            <h6 class='alert alert-danger'>{{$message}}</h6>
        @enderror
        <div class="row">
            <input class="NewUser mx-auto" type="text" name="nombre" id="" placeholder="Nombre autor">
        </div>
        <div class="row">
        <input min="1000-01-01" max="2023-01-31" name="fecha_nacimiento" id="dob" type="date" class="form-control" placeholder="Date of birth" value="{{ date('m/d/Y') }}"/>
        </div>
        <div class="row">
            <input class="NewUser mx-auto" type="text" name="nacionalidad" id="" placeholder="Nacionalidad">
        </div>
        <div class="row">
            <textarea name="biografia" id="" cols="30" rows="10" placeholder="ingrese biografia"></textarea>
        </div>
        <div class="row">
            <button class="mx-auto">Ingresar</button>
        </div>

        </div>
    </form>

@endsection