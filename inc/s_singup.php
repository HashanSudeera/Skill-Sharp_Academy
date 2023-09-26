<?php

if (isset($_POST['singup'])){
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $birthdate = $_POST['dob'];
    $city      = $_POST['city'];
    $email     = $_POST['email'];
    $password  = $_POST['password'];

    echo $firstname . $lastname . $birthdate . $city . $email . $password;


}
else{
    header('Location../student_singup.php');
}