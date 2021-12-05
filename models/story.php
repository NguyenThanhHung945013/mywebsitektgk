<?php
    class Story {
        private $conn ;
        private $table_name = "list" ;
        public $id ;
        public $name ;
        public $view ;
        public $likes ;
        public $images ;
        public $link ;
        public $nation ;
        public $category_id ;
        public $timestamp ;
        public function __construct($db){
            $this->conn = $db ;
        }
        function readALL($from_record_num,$records_per_page){
            $query="SELECT * FROM ".$this->table_name . " LIMIT {$from_record_num},{$records_per_page}";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }
        function hot($from_record_num,$records_per_page){
            $query="SELECT * FROM ".$this->table_name . " ORDER BY  modified DESC LIMIT {$from_record_num},{$records_per_page}";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }
        function hay($from_record_num,$records_per_page){
            $query="SELECT * FROM ".$this->table_name . " ORDER BY  view DESC LIMIT {$from_record_num},{$records_per_page}";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }
        function nation($from_record_num,$records_per_page,$na){
            $query="SELECT * FROM ".$this->table_name . " WHERE nation='$na' LIMIT {$from_record_num},{$records_per_page}";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }
        function likes($from_record_num,$records_per_page){
            $query="SELECT * FROM ".$this->table_name . " ORDER BY likes DESC LIMIT {$from_record_num},{$records_per_page}";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }
    }
?>