<?php
    if (!isset($_SESSION['activo'])) {
        header("location:./");
    }
    include_once("view/pagosView.php");