<?php

include ("../db.php");

// $stm = $pdo->query("select * from users");
// while($row = $stm->fetch()){
//     echo $row->email .'<br />';
// }

if(isset($_POST['submit'])){
    $name = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim( $_POST['email']);

    $password = password_hash($password,PASSWORD_DEFAULT);
    
    if(!empty($name) && !empty($password) && !empty($email)){

        $query = $pdo->prepare("insert into users (username,email,password)  values (:username,:email,:password)");
        
        $query->execute(['username'=>$name,'email'=>$email,'password'=>$password]);
        header("location:index.php");
        // <script>alert('post added')</script>
    }

}

function getUsers (){
    include("../db.php");
    $stm = $pdo->query("select * from users order by id desc");
    while($row = $stm->fetch()){

        echo "<li class='list-group-item list-group-item-primary my-1'>
           Name: $row->username  & Email: $row->email
           <button class='btn btn-danger' style='margin-left:52%'>X</button>
        </li>"; 
    }
}

?>
 