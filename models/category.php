<?php
    class Category{
        private $conn ;
        private $table_name = "categories" ;
        public $id ;
        public $name ;
        public function __construct($db){
            $this->conn = $db ;
        }
    }
?>