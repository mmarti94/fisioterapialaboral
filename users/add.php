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
    <link rel="stylesheet" href="../CSS/inicio.css">
  </head>
  <body>
  <header> 
        <nav class="navbar navbar-expand-lg bg-ligth bg-gradient sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="../Imagenes/LogoNav.jpg" alt="LogoNavbar"
                        class="img-fluid" alt="logo" width="100" height="70">FisioLaboral</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pausasActivas.html">Pausas Activas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../ejercicios.html">Ejercicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="add.php">Contáctenos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> 


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
    <footer class="py-3 text-sm-center text-md-center text-lg-center text-xl-center">
    <div class="card text-center">
        <div class="footer1 card-header bg-secondary bg-gradient">
          Un agradecimiento a
        </div>
        <div class="card-body bg-secondary bg-gradient">
          <a href="https://www.ibero.edu.co/" target="_blank"><img src="../Imagenes/PiePagina.png" alt="Logo Ibero" class="img-fluid" alt="logo" width="200" height="100"></a>
        </div>
        <div class="footer2 card-footer bg-secondary">
          Todos los derechos reservados 2022
        </div>
      </div>
   </footer>
  </body>
</html>