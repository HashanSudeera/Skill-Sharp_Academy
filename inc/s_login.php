<?php 

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pwd   = $_POST['pwd'];

        require_once "conndb.php";
        require_once "function.php";
        
        //loguser($conn,$email,$pwd);


    }
    else{
        header("Location:../student_login.php");
        exit();
    }

  

    

