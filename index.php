<?php
    session_start();
    if (isset($_GET["c"])){
        if (file_exists("controller/".$_GET["c"]."Controller.php")) {
            include_once("controller/".$_GET["c"]."Controller.php");
        }else{
            include_once("view/404View.html");
            exit();
        }
    }else{
        if (isset($_SESSION["activo"])){
            include_once("controller/usuarioController.php");
        }else {
            include_once("controller/loginController.php");
        }
    }
?>