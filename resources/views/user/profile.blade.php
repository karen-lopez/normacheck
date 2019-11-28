<?php use \App\Http\Controllers\CheckListsController; ?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Perfil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>

  <header class="container">
    <nav>
      <h1>Perfil</h1>
    </nav>
  </header>

  <section class="container">
    <p>{{$user->name}}</p>
    <p>{{$user->email}}</p>
  </section>
  <section class="container">
    @if(isset($lists))
      <h3>Tus check lists</h3>
      @foreach ($lists as $list)
        <p>{{ $list->name}}</p>
      @endforeach
    @endif
    <br>
    <form class="form" action="{{action('CheckListsController@addList')}}" method="POST">
      @csrf
      <label for="name">Escriba un nombre para la lista</label>
      <input type="name" name="nameList">
      <input type="submit" value="Agregar"/>
    </form>
  </section>

  <footer class="footer">
    <p> NormaCheck &#169; 2019. All rights reserved. </p>
  </footer>

</body>

</html>
