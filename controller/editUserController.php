<?php
    if (!isset($_SESSION['activo']) || !isset($_GET['u'])) {
        header("location:./");
    }
    include_once("model/Usuario.php");
    $usersAdmin = new Usuario();
    $user = $usersAdmin->getUsuario($_GET['u']);
    if ($user) {
        include_once("view/editUserView.php");
    }else{
        header("HTTP/1.0 404 Not Found");
    }
?>