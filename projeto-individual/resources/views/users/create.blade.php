@extends('template.users')
@section('title', "Cadastrar usuário")
@section('body')

<h1>Novo Usuário</h1>
<form action="{{route('users.store')}}" method="POST">
  @csrf
  <div>
    <label for="name" class="form-label"> Seu nome</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="Nome">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Seu email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Seu senha</label>
    <input type="password" class="form-control" id="password" name="passwodr">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection