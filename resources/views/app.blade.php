<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Mis tareas" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://kit.fontawesome.com/349924a506.css" crossorigin="anonymous">

    <style>
        
        body{
            margin:0;
            padding:0;
            font-family:Arial;
        }
        .color-container{
            width:16px;
            height:16px;
            display: inline-block;
            border-radius:4px;
        }
        a{
            text-decoration:none;
            
        }
        nav{
            background-color: #545454;
            width: 95%;
            border-radius: 0px 0px 20px 20px;
            box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.2);
            

        }
        .navbar-logo{
          display: inline-block;
          vertical-align: middle;
          
          width: 70px;
        }
        .sign_logB{
            
            width: 150px;
            height: 10%;
            background-color: #A6A6A6;
            border radius: 10px;
            box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.2);
            
          
        }
        .log{
          width: 8%;
          height: 8%;
          padding-right: 20px;
          padding-left: 20px;
        }
        .Category-container{
          background-color: white;
          outline: 2px solid black;

        }
        .Tarea-container{
          background-color: white;
          outline: 2px solid black;
          align-self: center;

        }
        .searcher{
          width: fit-content;
          font-size: 50px;
          color: black;
          font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif
        }
    </style>
</head> 

<body style="background-color: black">
    <nav class="navbar navbar-expand-lg mx-auto">
        <div class="container-fluid">
          <svg xmlns="http://www.w3.org/2000/svg" class="log" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M512 256c0 .9 0 1.8 0 2.7c-.4 36.5-33.6 61.3-70.1 61.3H344c-26.5 0-48 21.5-48 48c0 3.4 .4 6.7 1 9.9c2.1 10.2 6.5 20 10.8 29.9c6.1 13.8 12.1 27.5 12.1 42c0 31.8-21.6 60.7-53.4 62c-3.5 .1-7 .2-10.6 .2C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm0-96a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM288 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm96 96a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
          <a href="" class="searcher mx-auto"style="color: black">Galeria</a>
            <form class="d-flex" >
                <a href="{{route('menuObra')}}" class="btn sign_logB me-3" type="submit">Lista Obras</a>
              <a href="{{route('menuArtista')}}" class="btn sign_logB me-3" type="submit">Lista Artistas</a>
            </form>
            <form class="d-flex" >
                <a href="{{route('addArtist')}}" class="btn sign_logB me-3" type="submit">Agregar Artista</a>
                <a href="{{route('addPintura')}}" class="btn sign_logB me-3" type="submit">Agregar Obra</a>
            </form>
          </div>
        </div>
      </nav>

@yield('content')
</body>
</html>