<!DOCTYPE html>
<html lang="en">
<head>
  <title>Simple Sidebar - Start Bootstrap Template</title>
  <meta charset="utf-8">
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
    }
    .btn-outline-success:focus,
    .btn-outline-success:hover,
    .btn-outline-success:active{
      background-color: purple !important;
      border-color: purple !important;
      color: white !important;
    }
    .input-file{
        display: none;
    }
    .btn-edit{
        position: absolute;
        margin-left: 75px;
    }
    .btn-navbar{
        border-color:#494e53;
    }
    
    .custom-control-input-green:focus~.custom-control-label::before {
        border-color: #28a745 !important;
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25) !important;
    }

    .custom-control-input-green:checked~.custom-control-label::before {
        border-color: #28a745 !important;
        background-color: #28a745 !important;
    }

    .custom-control-input-green:focus:not(:checked)~.custom-control-label::before {
        border-color: #5bd778 !important;
    }

    .custom-control-input-green:not(:disabled):active~.custom-control-label::before {
        background-color: #d6f5dd !important;
        border-color: #d6f5dd !important;
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
        <div class="container-fluid row justify-content-center">
            <div class="card col-7 mt-4">
                <div class="card-body">
                    <form action="?c=check_editUser" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <img 
                                    id="imagePreview" 
                                    src="img/<?=$user["id"].'/'.$user["foto"]?>" 
                                    class="rounded-circle" 
                                    width="100px" 
                                    height="100px"
                                >
                                <button class="btn btn-success rounded-circle btn-edit" type="button" onclick="escogerFoto()">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                    </svg>
                                </button>
                            </div>
                            <input type="file" onchange="imagenPrevia(this)" name="imagen" class="input-file" id="imagen">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre y Apellido</label>
                            <input type="text" value="<?=$user["nombre"]?>" class="form-control" id="nombre" name="nombre" aria-describedby="nombre">
                            <small id="nombre" class="form-text text-muted">Escriba nombre y apellido sin caracteres especiales.</small>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Eletrónico</label>
                            <input type="email" value="<?=$user["correo"]?>" class="form-control" id="email" name="correo" aria-describedby="email">
                            <small id="email" class="form-text text-muted">Escriba correo eletrónico con el formato usuario@ejemplo.com</small>
                        </div>
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <textarea class="form-control" id="direccion" name="direccion" rows="3"><?=$user["direccion"]?></textarea>
                            <small id="direccion" class="form-text text-muted">Escriba la dirección domiciliaria.</small>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" checked class="custom-control-input custom-control-input-green" name="activo" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">Usuario activo</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Aplicar</button>
                    </form>
                </div>
            </div>
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
    function imagenPrevia(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader()
            reader.onload = function(e){
                imgHtml = document.getElementById("imagePreview");
                imgHtml.src = e.target.result

            }
            reader.readAsDataURL(input.files[0])
        }
    }
    function escogerFoto(){
        document.getElementById('imagen').click()
    }
  </script>

</body>

</html>