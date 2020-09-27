<?php

require("../conexion.php");

//TAREAS
//get.php?tareas=a
if (isset($_GET['tareas'])){

   $data=  $mysqli->query("SELECT * FROM tareas");


   $result = [];
   $i = 0;
   while($dd = mysqli_fetch_array($data)){
       $result[$i]= $dd;
       ++$i;
   }

   echo json_encode($result);

  
}


// Retiros pendientes
//get.php?rpendientes=d&userId=1
if (isset($_GET['rpendientes'])){

    $id = $_GET['userId'];

    $data=  $mysqli->query("SELECT * FROM pagos WHERE usuario='$id'");
 
    $result = [];
    $i = 0;
    while($dd = mysqli_fetch_array($data)){
        $result[$i]= $dd;
        ++$i;
    }
 
    echo json_encode($result);
 
   
 }

 // Registro de gancias 
 //get.php?rdeganancias=a&userId=1
 if (isset($_GET['rdeganancias'])){

    $id = $_GET['userId'];

    $data=  $mysqli->query("SELECT * FROM u_t WHERE id_u='$id'");
 
    $result = [];
    $i = 0;
    while($dd = mysqli_fetch_array($data)){
        $result[$i]= $dd;
        ++$i;
    }
 
    echo json_encode($result);
 
   
 }


//INFORMACION DE USUARIO
//get.php?userData=a&userId=1
 if (isset($_GET['userData'])){

    $id = $_GET['userId'];

    $data=  $mysqli->query("SELECT * FROM usuarios WHERE id='$id'");
 
 
    $result = [];
    $i = 0;
    while($dd = mysqli_fetch_array($data)){
        $result[$i]= $dd;
        ++$i;
    }
 
    echo json_encode($result);
 
   
 }

?>