<?php

if (isset($_POST['singup'])){
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $birthdate = $_POST['dob'];
    $city      = $_POST['city'];
    $email     = $_POST['email'];
    $password  = $_POST['password'];

    //include database connection and function php
    require_once "conndb.php";
    require_once "function.php";
    //check email
    $emailexist = emailExits($conn,$email);
    if ($emailexist !== false){
        header('Location:../student_singup.php?error= emailexists');
        exit();
    }
    //insert value for the data base using this function
    createuser($conn,$firstname,$lastname,$birthdate,$city,$email,$password);

}
else{
    header('Location:../student_singup.php');
}