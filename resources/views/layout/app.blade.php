<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title>Cadastro</title>
  <style>
    h2{ 
      text-align: center;
    }
  </style>
</head>
<body>

  <div class="container">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{Route('index.pessoa')}}">Principal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{Route('create.pessoa')}}">Novo Cadastro</a>
      </li>
    </ul>
  </div>
  @if(session('message'))
  <div class="alert alert-success" role="alert">
    {{session('message')}}
  </div>
  @endif
  <div class="container">
    @yield('conteudo')
  </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>m