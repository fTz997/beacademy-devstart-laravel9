@extends('template.users')
@section('title', $title)
@section('body')

<h1 class="mt-4">Usuário {{$user->name}}</h1>
<br><br>
<table class="table">
  <thead class="table-dark">
    <tr class="text-center">
      <th>ID</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Data de cadastro</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <th>{{ $user->id }} </th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ date('d/m/Y H:i', strtotime($user->created_at ))}}</td>
      <td><a href="" class="btn btn-warning text-white text-right mr-1">EDITAR</a>
        <a href="" class="btn btn-danger text-white ml-1">EXCLUIR</a>
      </td>
    </tr>
  </tbody>
</table>
@endsection