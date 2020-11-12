<!DOCTYPE html>
<html lang="en">
<head>
  <title>EasyMoney - Usuarios</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <link href="simple-sidebar.css" rel="stylesheet">
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
    .btn-outline-success{
        border-color: purple !important;
        color: purple !important;
        outline: none !important;
    }
    .btn-outline-success:focus,
    .btn-outline-success:hover,
    .btn-outline-success:active{
      outline: none !important;
      background-color: purple !important;
      border-color: purple !important;
      color: white !important;
    }
    .btn-navbar{
        border-color:#494e53;
    }
  </style>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <a class="" style="color:white;" href="#">
          <img src="icon.png" width="15" height="25" class="d-inline-block align-top" alt="" loading="lazy">
          &nbsp;EasyMoney
        </a>
      </div>
      <div class="list-group list-group-flush">
        <a href="./" class="list-group-item list-group-item-action list-group-item-secondary">Usuarios</a>
        <a href="?c=tareas" class="list-group-item list-group-item-action">Tareas</a>
        <a href="?c=admin" class="list-group-item list-group-item-action">Administración</a>
        <a href="?c=pagos" class="list-group-item list-group-item-action">Pagos</a>
        <a href="?c=statistics" class="list-group-item list-group-item-action">Estadísticas</a>
        <a href="?c=config" class="list-group-item list-group-item-action">Configuración del Sistema</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
        <button class="btn btn-dark btn-navbar" id="menu-toggle">
          <span class="navbar-toggler-icon"></span>
        </button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="?c=logout">Salir</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container-fluid">
        <div class="card-body">
          <div class="card-title align-items-center row" style="font-size:25px">
            <h1 class="display-4 col-auto mr-auto">Usuarios</h1>
            <a href=""  class="btn btn-outline-info float-right px-4 col-auto">
              Agregar
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
            </a>
          </div>
        </div>
        <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th class="text-center" scope="col">Fotos</th>
              <th class="text-center" scope="col">Nombre</th>
              <th class="text-center" scope="col">Correo Eletrónico</th>
              <th class="text-center" scope="col">Ver</th>
              <th class="text-center" scope="col">Editar</th>
              <th class="text-center" scope="col">Desactivar</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0; $i < count($users); $i++) { ?>
              <tr>
                <td class="text-center align-middle"><img src="img/<?=$users[$i]["id"].'/'.$users[$i]["foto"]?>" class="rounded-circle" width="50px" height="50px"></td>
                <td class="text-center align-middle"><?=$users[$i]["nombre"]?></td>
                <td class="text-center align-middle"><?=$users[$i]["correo"]?></td>
                <td class="text-center align-middle"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#verUsuario<?=$users[$i]["id"]?>">Ver</button></td>
                <td class="text-center align-middle"><a href="?c=editUser&u=<?=$users[$i]["id"]?>" class="btn btn-success">Editar</a></td>
                <?php if ($users[$i]["activo"]) { ?>
                  <td class="text-center align-middle"><a href="" class="btn btn-dark">Desactivar</a></td>
                  <?php } else {?>
                  <td class="text-center align-middle"><a href="" class="btn btn-secondary px-4">Activar</a></td>
                <?php }?>
              </tr>
              <div class="modal fade" id="verUsuario<?=$users[$i]["id"]?>" tabindex="-1" aria-labelledby="verUsuario<?=$users[$i]["id"]?>" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Usuario: <?=$users[$i]["nombre"]?></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row justify-content-center">
                        <img src="img/<?=$users[$i]["id"].'/'.$users[$i]["foto"]?>" 
                            class="rounded-circle" 
                            width="100px" height="100px"
                        >
                      </div>
                      <ul class="list-group mt-3">
                        <li class="list-group-item"><strong>Nombre:</strong> <?=$users[$i]["nombre"]?></li>
                        <li class="list-group-item"><strong>Dirección:</strong> <?=$users[$i]["direccion"]?></li>
                        <li class="list-group-item"><strong>Correo Eletrónico:</strong> <?=$users[$i]["correo"]?></li>
                        <li class="list-group-item"><strong>Monedas:</strong> <?=$users[$i]["monedas"]?></li>
                      </ul>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      <a href="?c=editUser&u=<?=$users[$i]["id"]?>" class="btn btn-success">Editar</a>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>