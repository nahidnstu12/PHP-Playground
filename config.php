<?php

class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'test';

    private $error;

    public function __construct()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname";
        $options = array(
            PDO::ATTR_PERSISTENT =>true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        // create PDO instance
        try{
            $this->dbh = new PDO($dsn,$this->user,$this->pass,$options);
        }catch(PDOException $e){
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    
}