<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mi sesión</title>
  <!--llamamos los estilos css de bootstrap-->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
   <!--assets va a mi carpeta public-->
  {{ HTML::style('assets/css/dash.css') }}
</head>
<body>
  <div class="container">
    <div class="col-md-4 col-md-offset-4">
      {{ Form::open(['url' => 'login', 'autocomplete' => 'off', 'class' => 'form-signin', 'role' => 'form']) }}

      @if(Session::has('error_message'))
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('error_message') }}
      </div>
      @endif

      <h2 class="form-signin-heading">Iniciar Sesión</h2>

      {{ Form::label('username', 'Username', ['class' => 'sr-only']) }}
      {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Usuario', 'autofocus' => '']) }}

      {{ Form::label('password', 'Password', ['class' => 'sr-only']) }}
      {{ Form::password('passwordPrueba', ['class' => 'form-control', 'placeholder' => 'Contraseña']) }}

      <div class="checkbox">
        <label>
          {{ Form::checkbox('remember', true) }} Recordar contraseña
        </label>
      </div>

      {{ Form::submit('Entrar', ['class' => 'btn btn-primary btn-block']) }}

      {{ Form::close() }}
      <a class="btn btn-success" href="{{ action('AuthController@registerUser') }}">Crear nuevo usuario</a>
      <a class="btn btn-success" href="{{ action('UserController@showPassRecovery') }}">¿olvidaste tu contraseña?</a>
    </div>
  </div>
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
