<?php
    if (
        !isset($_SESSION['activo']) ||
        !isset($_POST["nombre"]) || 
        !trim($_POST["nombre"]) || 
        !isset($_POST["correo"]) ||
        !trim($_POST["correo"]) || 
        !isset($_POST["direccion"]) ||
        !trim($_POST["direccion"]) || 
        !isset($_GET['u']) ||
        !trim($_GET["u"])
    ){
        header();
    }
    if(
        isset($_FILES["imagen"]["tmp_name"]) && 
        !getimagesize($_FILES["imagen"]["tmp_name"])
    ){
        header("Location:?c=editUser&error&u=".$_GET["u"]);
    }
    $activo = isset($_POST['activo']);
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
?>