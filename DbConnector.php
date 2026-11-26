<?php

class DbConnector{
    private $host="localhost";
    private $user="root";
    private $db="comment";
    private $pass="";
    
    public function getConnection() {
        $dsn="mysql:host=".$this->host.";dbname=".$this->db;
        
        try{
            $conn=new PDO($dsn,$this->user,$this->pass);
            return $conn;
        } catch (PDOException $ex) {
            die("Connection failed ".$ex->getMessage());
        }
    }
}

?>