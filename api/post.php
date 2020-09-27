<?php
require("../conexion.php");

if (isset($_POST['userId'])) {
    $userId = $_POST['userId'];
}

if (isset($_POST['tareahecha'])) {
    $id_t = $_POST['tareahecha'];
    $fecha = '26/09/2020'; // obtener con php
    $renovacion = "27/09/2020"; //calcular

    $comp = $mysqli->query("SELECT * FROM  u_t WHERE id_u='$userId' AND id_t='$id_t' ");

    if (mysqli_num_rows($comp)>0) {
        //si existe
 $res = $mysqli->query("UPDATE u_t
                SET views=views+1 , 
                fecha='$fecha',
                renovacion='$renovacion' 
                WHERE id_u='$userId' AND id_t='$id_t' ");

if ($res) {
    # code...
}else{
    $data[0] = "Error";
    echo json_encode($data);
}

       
    }else{
        //no existe

        $res =  $mysqli->query("INSERT INTO u_t (id_u , id_t , views , fecha , renovacion ) VALUES 
        ( '$userId' , '$id_t' , '0' , '$fecha' , '$renovacion' )");

if ($res) {
    # code...
}else{
    $data[0] = "Error";
    echo json_encode($data);
}

    }

   
}

if (isset($_POST['name'])) {
  $name = $_POST['name'] ;
   $res = $mysqli->query("UPDATE usuarios
    SET nombreCompleto = '$name'
    WHERE id = $userId;");

    if ($res) {
        # code...
    }else{
        $data[0] = "Error";
        echo json_encode($data);
    }
}

if (isset($_POST['adress'])) {
    $adress = $_POST['adress'] ;
    $res = $mysqli->query("UPDATE usuarios
     SET Direccion = '$adress'
     WHERE id = $userId;");
 
     if ($res) {
         # code...
     }else{
         $data[0] = "Error";
         echo json_encode($data);
     }
}

if (isset($_POST['correo'])) {
    $email = $_POST['correo'] ;
    $res = $mysqli->query("UPDATE usuarios
     SET correoPaypal = '$adress'
     WHERE id = $userId;");
 
     if ($res) {
         # code...
     }else{
         $data[0] = "Error";
         echo json_encode($data);
     }
}

if (isset($_POST['saldo'])) {
    $email = $_POST['saldo'] ;
    $res = $mysqli->query("UPDATE usuarios
     SET monedas = '$adress'
     WHERE id = $userId;");
 
     if ($res) {
         # code...
     }else{
         $data[0] = "Error";
         echo json_encode($data);
     }
}

if (isset($_POST['pago'])) {
    $monto = $_POST['pago'];
    $fecha = "hoy";
    $status = "pendiente";
    $res = $mysqli->query("INSERT INTO pagos (monto , fecha , status , usuario) VALUES 
     ('$monto' , '$fecha' , '$status' , '$userId')");
 
     if ($res) {
         # code...
     }else{
         $data[0] = "Error";
         echo json_encode($data);
     }
}

if (isset($_POST['Rganancias'])) {
    # code...
}


?>