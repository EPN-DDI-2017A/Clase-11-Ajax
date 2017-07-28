<!DOCTYPE html>
<html>
<head>
    <title>Ajax</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<div class="container">

<form>
    <div class="form-group row">
      <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
      </div>
    </div>

    <div class="form-group row">
      <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
      </div>
    </div>

        <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
      </div>
    </div>

    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="password" placeholder="Password">
      </div>
    </div>

    <div class="form-group row">
      <label for="password2" class="col-sm-2 col-form-label">Repita su password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="password2" placeholder="Repita su password">
      </div>
    </div>

    <div class="form-group row">
        <button id="enviar" class="btn btn-primary">Enviar</button>
    </div>
</form>
</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>