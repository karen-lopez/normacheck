<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Profile</title>
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
    @if(isset($checklist))
      <h3>Tus checks: </h3>
      @foreach ($allChecks as $check)
        <p>{{ $check->description}}</p>
      @endforeach
    @endif
  </section>

  <footer class="footer">
    <p> NormaCheck &#169; 2019. All rights reserved. </p>
  </footer>

</body>

</html>
