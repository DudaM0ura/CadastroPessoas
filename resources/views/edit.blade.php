@extends('layout.app')
@section('conteudo')
<h2>Editar os dados:</h2>
<form action="{{Route('update.pessoa', $pessoa->id)}}" method="POST">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nome:</label>
    <input type="text" class="form-control" name="nome" value="{{$pessoa->nome}}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Idade:</label>
    <input type="text" class="form-control" name="idade" value="{{$pessoa->idade}}">
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Email:</label>
      <input type="email" class="form-control" name="email" value="{{$pessoa->email}}">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">CPF:</label>
      <input type="text" class="form-control" name="cpf" value="{{$pessoa->cpf}}">
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
  </div>
</form>
  <form action="{{Route('delete.pessoa', $pessoa->id)}}" method="POST">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn btn-danger">Excluir</button>
  </form>
    
@endsection