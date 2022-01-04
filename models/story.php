<?php
    class Story {
        public $conn ;
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
            $query = "UPDATE 
                " . $this->table_name . "
                SET
                name=:name, link=:link, images=:images,nation=:nation,
                category_id=:category_id, modified=:modified WHERE id='$id_'";
                $stmt = $this->conn->prepare($query);
        

                $this->name=htmlspecialchars(strip_tags($this->name));
                $this->link=htmlspecialchars(strip_tags($this->link));
                $this->images=htmlspecialchars(strip_tags($this->images));
                $this->nation=htmlspecialchars(strip_tags($this->nation));
                $this->category_id=htmlspecialchars(strip_tags($this->category_id));
                $this->timestamp = date('Y-m-d H:i:s');
            
               
                $stmt->bindParam(":name", $this->name);
                $stmt->bindParam(":link", $this->link);
                $stmt->bindParam(":images", $this->images);
                $stmt->bindParam(":nation", $this->nation);
                $stmt->bindParam(":category_id", $this->category_id);
                $stmt->bindParam(":modified", $this->timestamp);
                if($stmt->execute()){
                    return true;
                }else{
                    return false;
                }
            
        }
        function insert(){
            $query = "INSERT INTO 
                " . $this->table_name . "
                SET
                name=:name, link=:link, images=:images,nation=:nation,
                category_id=:category_id, created=:created ";
                $stmt = $this->conn->prepare($query);
        

                $this->name=htmlspecialchars(strip_tags($this->name));
                $this->link=htmlspecialchars(strip_tags($this->link));
                $this->images=htmlspecialchars(strip_tags($this->images));
                $this->nation=htmlspecialchars(strip_tags($this->nation));
                $this->category_id=htmlspecialchars(strip_tags($this->category_id));
                $this->timestamp = date('Y-m-d H:i:s');
            
               
                $stmt->bindParam(":name", $this->name);
                $stmt->bindParam(":link", $this->link);
                $stmt->bindParam(":images", $this->images);
                $stmt->bindParam(":nation", $this->nation);
                $stmt->bindParam(":category_id", $this->category_id);
                $stmt->bindParam(":created", $this->timestamp);
                if($stmt->execute()){
                    return true;
                }else{
                    return false;
                }
        }
        function delete($id_){
            $query = "DELETE FROM list WHERE id='$id_'";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            header('location:./main.php');
        }
        function category($from_record_num,$records_per_page,$id){
            $query="SELECT * FROM ".$this->table_name . " WHERE category_id='$id' LIMIT {$from_record_num},{$records_per_page}";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }
    }
?>