<?php
    include_once("model/Connect.php");
    class Admin extends Connect{
        public function __construct(){
            parent::__construct();
        }
        public function login($user,$pass){
            $sql =  "SELECT usuario,clave  
                     FROM administrador 
                     where usuario = :usuario 
                     AND clave = :clave 
                    ";
            try {
                $query = $this->instance_db->prepare($sql);
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $query->bindParam(':usuario',$user);
                $query->bindParam(':clave',$pass);
                if ($query->execute() && $query->fetchAll()) {
                    return true;
                }else{
                    return false;
                }
            } catch (PDOException $e) {
                echo "error de consulta: ".$e->getMessage();
                exit();
            }
        }

        public function __destruct() {
            parent::__destruct();
        }
    }