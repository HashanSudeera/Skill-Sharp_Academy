<?php 

include_once ("conndb.php");

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password   = $_POST['pwd'];
               
        require_once "function.php";
        
        loguser($conn,$email,$password);


    }
    else{
        header("Location:../student_login.php");
        exit();
    }

  

    

