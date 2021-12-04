<?php
    class Story {
        private $conn ;
        private $table_name = "list" ;
        public $id ;
        public $name ;
        public $view ;
        public $images ;
        public $link ;
        public $category_id ;
        public $timestamp ;
        public function __construct($db){
            $this->conn = $db ;
        }
        function readALL(){
            $query="SELECT id,name,view,images,link FROM ".$this->table_name . " ORDER BY  name ASC ";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }
        
    }
?>