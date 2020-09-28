<?php

$username = 'root';
$password = '';
$pdo = new PDO('mysql:host=localhost;dbname=test',$username,$password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

?>