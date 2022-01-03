<?php
    class Admin{
        public $conn ;
        private $table_name = "admins" ;
        public $email;
        public $password;
        public $avatar ;
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
        function update($id_){
            $query = "UPDATE 
                " . $this->table_name . "
                SET
                name=:name, password=:password , avatar=:avatar WHERE id='$id_'";
                $stmt = $this->conn->prepare($query);
                $this->name=htmlspecialchars(strip_tags($this->name));
                $this->password=htmlspecialchars(strip_tags($this->password));
                $this->avatar=htmlspecialchars(strip_tags($this->avatar));            
                $stmt->bindParam(":name", $this->name);
                $stmt->bindParam(":password", $this->password);
                $stmt->bindParam(":avatar", $this->avatar);
                if($stmt->execute()){
                    return true;
                }else{
                    return false;
                }
            
        }
        

    }

?>