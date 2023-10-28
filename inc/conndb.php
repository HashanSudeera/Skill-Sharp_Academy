<?php

//conncet the data base..

    $server = "localhost";
    $username = "sudeera";
    $password = "";
    $database = "skill_sharp_academy";

    $conn = new mysqli($server,$username,$password,$database);

    if ($conn -> connect_error) {
        die("Connection failed: " . $conn -> connect_error);
      }

