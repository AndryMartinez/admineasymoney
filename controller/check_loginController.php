<?php
    if (!isset($_POST["user"]) && !isset($_POST["password"])){
        echo "No se recibieron parámetros";
        exit();
    }
    include_once("model/Admin.php");
    $admin = new Admin();
    if ($admin->login($_POST["user"],$_POST["password"])){
        $_SESSION["activo"]=1;
        header("Location:./");
    }else{
        header("Location:?error");
    }
?>