<?php
    require("conexion.php");
    $incorrecto = false;
    if (isset($_POST["user"]) && isset($_POST["password"]) ) {
        $user = $_POST["user"]; $pass = $_POST["password"];
        if ($user == "aldo" && $pass== "aldo3456" ) {
            $_SESSION["activo"]=1;
        }else{
            $incorrecto = true;
        }
    }
    if (isset($_SESSION["activo"])) {
        echo '<script>location.href="panel.php";</script>';
    }
?>

<html>
    <head>
      <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <style>
            .btn-primary {
                background-color: purple !important;
                border-color: purple !important;
            }
            .btn-primary:hover,
            .btn-primary:active,
            .btn-primary:visited,
            .btn-primary:focus {
                background-color: purple !important;
                border-color: purple !important;
            }
            .btn-link{
                color:purple !important;
            }
        </style>
    </head>
    <body style="background-color:f9f9f9;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="icon.png" width="20" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                EasyMoney
            </a>
        </nav>
        <div class="row col-12 d-flex justify-content-center">
            <div class="card-body card col-3 mt-4">
                <div class="col-12 d-flex justify-content-center pb-3 pt-1">
                    <img class="thumbnail" src="icon.png" width="60" height="90">
                </div>
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de Usuario</label>
                        <input type="text" class="form-control" placeholder="Usuario" name="user">
                        <small class="form-text text-muted">No incluir caracteres especiales.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" placeholder="Contraseña" name="password">
                    </div>
                    <div class="form-group">
                        <a type="button" class="btn btn-link btn-sm">¿Olvidó su contraseña?</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>
        <?php 
            if ($incorrecto) {
                echo 
                '
                    <div class="container pt-4">
                        <div class="alert alert-danger" role="alert">
                        Usuario o contraseña incorrectos, por favor verifique los datos ingresados al formulario.
                        </div>
                    </div>
                '
                ;
            }
        ?>
    </body>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>

