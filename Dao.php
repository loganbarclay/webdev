<?php

class Dao {
             private $host = "localhost";
             private $db = "tables";
             private $user = "root";
	     private $pass = "root";
	     public function getConnection () {
                  return
                   new PDO("mysql:host={$this->host};dbname={$this->db}", $user, $pass);
          }
 
  }

?>
