<?php 

include_once ("conndb.php");

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password   = $_POST['pwd'];
               
        require_once "function.php";
        
        teacher_log($conn,$email,$password);


    }
    else{
        header("Location:../teacher_login.php");
        exit();
    }