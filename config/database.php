<?php
    class Database {
        private $host = "localhost"; 
        private $dbName = "story"; 
        private $username = "root";  
        private $password = "";     
        public $connection;

        public function getConnection(){
            $this->connection = null;
            try{
                $this->connection = new PDO("mysql:host={$this->host};dbname={$this->dbName}",$this->username, $this->password);
            }catch(PDOException $ex){
                die("Connection error {$ex->getMessage()}");
            }
            return $this->connection;
        }
    }
    
?>