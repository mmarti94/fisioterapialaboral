<?php
include('../config/config.php');
include('user.php');
$p = new user();

$alluser = $p->getAll();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $remove = $p->remove($_GET['id']);
    if ($remove){
        header('Location:' . ROOT . 'users/index.php');
    }else {
        $msj = "<div class='alert alert-danger' rol='alert'>Error al eliminar Comentario</div>";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <?php include('../menu.php')?>
    <div class="container">
    <h2 class="text-center mb-5">Lista de Usuarios</h2>

    <div class="row">
        <?php
        while ($user = mysqli_fetch_object($alluser)) {
            $imput = $user->sessionDate;
            echo "<div class='col-6'>";
            echo "<div class='border border-info p-2>'";
            echo "<h5>
            <b>Nombres:</b>
            $user->firstName $user->lastName
            </h5>";
            echo "<p> <b>Fecha:</b> ".date("D", strtotime($imput)) . "" . date("d.M.Y H:i", strtotime($imput))."</p>";
            echo "<div class='text-center'><a class='btn btn-success' href='".ROOT."/users/edit.php?id=$user->id'>Modificar</a> - <a class='btn btn-danger' href='" . ROOT . "/users/index.php?id=$user->id'>Eliminar</a> </div>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </div>
  </body>
</html>