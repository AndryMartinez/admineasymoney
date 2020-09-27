<div style="display:none;"><?php

    require("conexion.php");

echo '</div>';

    if (isset($_POST["usuario"]) && isset($_POST["contraseña"]) ) {
       $user = $_POST["usuario"]; $pass = $_POST["contraseña"];

       if ($user == "aldo" && $pass== "aldo3456" ) {
        $_SESSION["activo"]=1;

       }else{echo "usuario o clave incorrectos";}
       
    }else{}

    
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
    </head>
    <body>
        <div class="row" >

            <div class="col-sm-5 card" style="margin:250px auto ; width: 12rem;padding:0%" >
                <div class="card-body">
                
                    <img class="thumbnail" src="icon.png" width="60" height="90" 
                    style="margin-left:240px " >
                    <form action="index.php" method="post">
                    <input type="text" class="form-control" style="width: 20rem;margin:20px auto" placeholder="Usuario" name="usuario" >
                    <input type="password" class="form-control" style="width: 20rem;margin:20px auto" placeholder="Contraseña" name="contraseña">
                    <button type="submit" class="btn btn-info" style="background:purple;margin-left:110px ">Entrar</button>
                    </form>
                    </div>
                    
                
                </div>

            </div>
        
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>

