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
        function update($id_){
            $this->timestamp = date('Y-m-d H:i:s');
            $query = "UPDATE ".$this->table_name."SET name={$this->name},images={$images},link={$link} nation={$this->nation},category={$category_id},modified={$timestamp} WHERE id='$id_'";
            $stmt = $this->conn->prepare($query);
            if($stmt->execute()){
                return true;
            }else{
                return false;
            }
            
        }
        function insert($id_){
            $this->timestamp = date('Y-m-d H:i:s');
            $query = "INSERT INTO ".$this->table_name."VALUE name={$this->name},images={$images},link={$link} nation={$this->nation},category={$category_id},created={$timestamp}";
            $stmt = $this->conn->prepare($query);
            if($stmt->execute()){
                return true;
            }else{
                return false;
            }
            
        }
        function delete($id_){
            $query = "DELETE FROM products WHERE id='$id_'";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            header('location:./main.php');
        }
    }
?>