<?php
    class Admin{
        private $conn ;
        private $table_name = "admins" ;
        private $email;
        private $password;
        public function __construct($db){
            $this->conn = $db ;
        }
        function ConnectAccount(){
            $query = "SELECT * FROM {$this->table_name}" ;
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        
        }
        function Account($id_admin){
            $query = "SELECT * FROM {$this->table_name} WHERE id={$id_admin}" ;
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }

    }

?>