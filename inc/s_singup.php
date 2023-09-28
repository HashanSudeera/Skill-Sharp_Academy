<?php

include_once ("conndb.php");

if (isset($_POST['singup'])){
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $birthdate = $_POST['dob'];
    $city      = $_POST['city'];
    $email     = $_POST['email'];
    $password  = $_POST['password'];

    require_once "function.php";

    $emailalrady = emailExits($conn,$email);

    if ($emailalrady !== false){
        header("Location:../student_singup.php?error=alradyemail");
        exit();
    }

    createuser($conn,$firstname,$lastname,$birthdate,$city,$email,$password);

    //this is helpful my error fix 
    //$hash = password_hash($password , PASSWORD_DEFAULT);
    /*$add = "INSERT INTO student_table(f_name,l_name,dob,city,email,s_pwd)
    VALUES('{$firstname}','{$lastname}','{$birthdate}','{$city}','{$email}','{$password}')";


    $check = mysqli_query($conn,$add);

    if ($check){
    }
    else{
        echo "Error: " . $add . "<br>" . mysqli_error($conn);
    }*/
    mysqli_close($conn);


}