<?php
    if (!isset($_SESSION['activo'])) {
        header("location:./");
    }
    include_once("model/Usuario.php");
    $user = new Usuario();
    $users = $user->getUsuarios();
    include_once("view/usuarioView.php");
?>