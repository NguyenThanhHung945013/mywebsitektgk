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
        function readALL($from_record_num,$records_per_page){
            $query="SELECT id,name,view,images,link,category_id FROM ".$this->table_name . " LIMIT {$from_record_num},{$records_per_page}";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }
        function hot($from_record_num,$records_per_page){
            $query="SELECT id,name,view,images,link,category_id FROM ".$this->table_name . " ORDER BY  modified DESC LIMIT {$from_record_num},{$records_per_page}";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }
    }
?>