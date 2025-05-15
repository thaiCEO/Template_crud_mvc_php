<?php 
  class database {
     protected $conn;

     public function connect() {
         $this->conn = new mysqli("localhost", "root", "", "curd_mvc" , 3307);
         if ($this->conn->connect_error) {
             die("Connection failed: " . $this->conn->connect_error);
         }

        return $this->conn;
     }
  }
?>