<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuário {{$user->name}}</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
  <div class="container">
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
  </div>
</body>

</html>