@extends('template.users')
@section('title', 'Listagem de usuários')
@section('body')

<h1 class="mb-3 mt-5">Listagem de usuários</h1>
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
    @foreach($users as $user)
    <tr class="text-center">
      <th>{{ $user->id }} </th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ date('d/m/Y H:i', strtotime($user->created_at ))}}</td>
      <td><a href="{{route('users.show', $user->id)}}" class="btn btn-info text-white text-right">Mais
          informações</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection