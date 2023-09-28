<?php
function emailExits($conn,$email){
    $sql = "SELECT * FROM student_table WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt , $sql)){
        header("Location:../student_singup.php?error = stmtfaild");
        exit();
    }
    mysqli_stmt_bind_param($stmt ,'s',$email);
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
    $insert_value = "INSERT INTO student_table(f_name,l_name,dob,city,email,s_pwd) VALUES(?,?,?,?,?,?) ;";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt , $insert_value)){
        header("Location:../student_singup.php?error = stmtfaild");
        exit();
    }
    $hasedpwd = password_hash($password , PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt ,'ssssss',$firstname,$lastname,$birthdate,$city,$email,$hasedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location:../student_login.php?error=none");
    exit();

}
function loguser($conn,$email,$password){
    $emailExists = emailExits($conn,$email);
    if ($emailExists === false){
        header("Location:../student_login.php?error=wrongemail");
        exit();
    }
    $pwdHashed = $emailExists['stu_pwd'];
    $checkpwd = password_verify($password , $pwdHashed);
    if ($checkpwd === false){
        header("Location:../student_login.php?error= wrong_password");
        exit();
    }
    else if($checkpwd === true){
        header("Location:../student_login.php?error=successsafefce");
        exit();

    }

}