<?php
function emailExits($conn,$email){
    $sql = "SELECT * FROM student WHERE Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt , $sql)){
        header("Location:../student_singup.php?error = stmtfaild");
        exit();
    }
    mysqli_stmt_bind_param($stmt ,'ss',$email);
    mysqli_stmt_execute($stmt);
    $resultDate = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultDate)){
        return $row;
    }
    else{
        return false;
    }

    mysqli_stmt_close($stmt);

}

function createuser($conn,$firstname,$lastname,$birthdate,$city,$email,$password){
    $insert_value = "INSERT INTO student(Firstname,Lastname,Birthdate,City,Email,Password) VALUES(?,?,?,?,?,?) ;";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt , $insert_value)){
        header("Location:../student_singup.php?error = stmtfaild");
        exit();
    }

}