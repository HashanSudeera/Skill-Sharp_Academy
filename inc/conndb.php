<?php

    $server = "localhost";
    $username = "sudeera";
    $password = "";
    $database = "skill_sharp_academy";

    $conn = mysqli_connect($server,$username,$password,$database);

    if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_errno());
      }

