<?php
    require("conexion.php");

    if (!isset($_SESSION["activo"])) {
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
                <div class="card-title" style="font-size:25px" >Tareas
                <a href="add.php?tarea=1"  class="btn btn-outline-success float-right" style="width: 8rem">Agregar
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
    </a>
                </div>
            
                 </div>
                    
                 <div class="list-group">
                   <?php 

                     $data = $mysqli->query("");

                   ?>

  <button type="button" class="list-group-item list-group-item-action">Totorial cambio de fondo after effects <span class="badge badge-primary badge-pill">1</span></button>
  <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
  <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
  <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
    <br>


</div>


                </div>

            </div>
         
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>

