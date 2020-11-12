<?php

    include_once("model/Connect.php");
    class Usuario extends Connect{
        public function __construct() {
            parent::__construct();
        }
        public function getUsuarios(){
            $sql =  "SELECT * FROM usuarios";
            try {
                $query = $this->instance_db->prepare($sql);
                $query->setFetchMode(PDO::FETCH_ASSOC);
                if($query->execute()){
                    return $query->fetchAll();
                }else{
                    return null;
                }
            } catch (PDOException $e) {
                echo "error de consulta: ".$e->getMessage();
                exit();
            }
        }
        public function getUsuario($id)
        {
            $sql =  "SELECT * FROM usuarios where id = :id";
            try {
                $query = $this->instance_db->prepare($sql);
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $query->bindParam(':id',$id);
                if($query->execute()){
                    $result = $query->fetchAll();
                    return count($result)?$result[0]:null;
                }else{
                    return null;
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
