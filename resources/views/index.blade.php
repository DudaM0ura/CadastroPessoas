@extends('layout.app')
@section('conteudo')
<h2>Pessoas Cadastradas</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
      <th scope="col">Email</th>
      <th scope="col">CPF</th>
      <th scope="col">Acoes</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($pessoa as $dados)
    <tr>
      <td>{{$dados->nome}}</td>
      <td>{{$dados->idade}}</td>
      <td>{{$dados->email}}</td>
      <td>{{$dados->cpf}}</td>
      <td>
        <a href="{{Route('edit.pessoa', $dados->id)}}" class="btn btn-primary">Editar</a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
@endsection