<?php
    class Admin{
        private $conn ;
        private $table_name = "admin" ;
        private $email;
        private $password;
        public function __construct($db){
            $this->conn = $db ;
        }

    }

?>