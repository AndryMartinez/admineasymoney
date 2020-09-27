<?php
    require("conexion.php");
?>
<html>
    <head>
      <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
    <img src="icon.png" width="20" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    &nbsp;EasyMoney
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav  mr-auto">
      
  
    </ul>
    <form class="form-inline">
    <a href="logout.php" style="margin-top:15%;" class="btn btn-outline-danger ">Salir</a>
  </form>
  </div>
</nav>
        <div class="row" >

        <div class="col-sm-5 " style="margin:70px  ; width: 10rem;padding:0%" >
                <div class="card-body">
                <div class="card-title" style="font-size:25px" >Agregar  </div>
                 </div>
  
<?php

    if (isset($_GET["tarea"])) {
        ?>
<form action="add.php" method="post">
            <input type="text" class="form-control" style="width: 20rem;" placeholder="Url" name="url" ><br>
            <input type="text" class="form-control" style="width: 20rem;" placeholder="Valor" name="valor" ><br>
            <select class="form-control" style="width: 20rem;" name="tipo" >
                <option value="video" >Video</option>
                <option value="sub"  >Subscripcion</option>
            </select>
            <button type="submit"  class="btn btn-outline-success float-right" style="width: 8rem">
                Enviar
             </button>
</form>
        <?php   
    }

?>

                </div>

            </div>
         
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>

<?php

if (isset($_POST["url"])) {

    $url = $_POST["url"] ;

    if (isset($_POST["valor"])) {

        $valor = $_POST["valor"];

        if (isset($_POST["tipo"])) {

            $tipo = $_POST["tipo"];

            $mysqli->query("INSERT INTO tareas (tipo , url , valor  ) VALUES 
            ('$tipo' , '$url' , '$valor' )");

            echo '<p class="text-success" style="margin:30px auto" >Agregado</p>';
    
        }
    
    }
    
}

?>