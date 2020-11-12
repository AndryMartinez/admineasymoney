<?php
    include_once("config/config_db.php");

    class Connect
    {
        private $server = SERVER;
        private $user_db = USER;
        private $pass_db = PASS;
        private $name_db = DB;
        private $ms = MS;
        private $port = PORT;
        protected $instance_db;
        
        public function __construct(){
            try {
                $dsn = $this->ms.':host='.$this->server.';dbname='.$this->name_db.';port='.$this->port;
                $this->instance_db = new PDO($dsn,$this->user_db,$this->pass_db);
            } catch (PDOException $e) {
                echo "error de conexión: ".$e->getMessage();
                exit();
            }
        }
        public function __destruct(){
            $this->instance_db = null;
        }
    }
    
    
    