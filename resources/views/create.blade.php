@extends('layout.app')
@section('conteudo')
<h2>Insira os dados:</h2>
<form action="{{Route('store.pessoa')}}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nome:</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Idade:</label>
    <input type="text" class="form-control" name="idade">
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Email:</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">CPF:</label>
      <input type="text" class="form-control" name="cpf">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
    
@endsection