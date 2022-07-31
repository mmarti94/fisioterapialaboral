<?php
include('../config/config.php');
include('user.php');

if (isset($_POST) && !empty($_POST)){
    $user = new user();

   

    $save = $user->save($_POST);
    if ($save){
        $error = '<div class="alert alert-success" role="alert">Usuario creado correctamente</div>';
    }else{
        $error = '<div class="alert alert-danger" role="alert">Error al crear usuario</div>';
}

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <?php include('../menu.php')?>
    <div class="container">
        <?php
        if (isset($error)){
            echo $error;
        }
        ?>
    <h2 class="text-center mb-5">Crear Usuario</h2>
    <form method="POST" enctype="multipart/form-data">
      <div class="row mb-2">
        <div class="col">
          <input type="text" name="firstName" id="firstName" placeholder="Nombres" require class="form-control"/> 
        </div>
        <div class="col">
          <input type="text" name="lastName" id="lastName" placeholder="Apellidos" require class="form-control"/>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col">
          <input type="datetime-local" name="sessionDate" id="sessionDate" require class="form-control"/>
        </div>
        <div class="col">
          <select class="form-select" name="profession" id="profession" require class="form-control">
            <option selected>Profesión</option>
            <option value="Estudiante">Estudiante</option>
            <option value="Docente">Docente</option>
            <option value="Profesional">Profesional</option>
          </select>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col">
          <select class="form-select" name="career" id="career" require class="form-control">
            <option selected>Carrera</option>
            <option value="Fisioterapia">Fisioterapia</option>
            <option value="Terapia Ocupacional">Terapia Ocupacional</option>
            <option value="Riesgos Laborales">Riesgos Laborales</option>
            <option value="Otro">Otro</option>
          </select>
        </div>
        <div class="col">
        <input type="email" name="email" id="email" placeholder="Correo Electrónico" require class="form-control"/>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col">
          <label for="floatingTextarea">Comentarios</label>
          <textarea name="comments" id="comments" cols="3" rows="5" require class="form-control"></textarea>
        </div>

        <button class="btn btn-success btn-success">Registrar</button>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </div>
  </body>
</html>