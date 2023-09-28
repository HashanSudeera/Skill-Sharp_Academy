<?php 
    //start session
        session_start();
?>
<html>
    <head>
        <title>Skill-Sharp-Academy</title>
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="main_page">
        <div class = "main_title">
            <h1>Skill-<font style="color :white;">Sharp</font> Academy</h1>
            <?php 
        if (isset($_SESSION['firstname'])){
            //this can use for profile page go path
            echo '<a href="#" class = "u_n">'.'hi..'.$_SESSION['firstname'].'</a>' ;
            echo '<a href="inc/log_out.php" class = "u_n1">'.'Logout'.'</a>';
        }
        else{
            echo '<a href="s_t_interfac.php" class = "u_n1">'. "Login".'</a>';
        }
        ?></div>

        </div>
        <div class="box">
        
        <h2 class="title"><?php
        if(isset($_SESSION['firstname'])){
            echo 'Hi,'.$_SESSION['firstname']. '!';
        }
        else{
            echo 'Hi, User! ';
        }
        ?></h2>
        <img src="img/hellooo.png" alt="image here" class="img_hi">
    
        <p class="quats">"Live as if you were to die tomorrow. <br> Learn as if you were to live Forever."<br></p>
        </div>
    </body>
</html>