<html>
    <head>
        <link rel="shortcut icon" href="img/favicon.png">
        <title>Teacher Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="teacher_login_page">
    <div class = "main_title">
            <h1>Skill-<font style="color :white;">Sharp</font> Academy</h1>
        </div>

        <div class = "form_space">
        <?php
            if (isset($_GET['error'])){

                if($_GET['error'] == 'wrongemail'){
                    echo '<div class="error">Incorrect email address</div>';
                }
                else if($_GET['error'] == 'wrong_password'){
                    echo '<div class="error">Incorrect password</div>';
                }

            }
            ?>
            <h2 class="form_name">Teacher Login</h2>
            <form action="inc/t_login.php" method="POST">
                <table>
                    <tr>
                        <td><label>Email</label></td>
                    </tr>
                    <tr>
                        <td><input type = "email" name = "email" class="input" required> </td>
                    </tr>
                    <tr>
                        <td><label>Password</label></td>
                    </tr>
                    <tr>
                        <td><input type = "password" name = "pwd" class="input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Login" class="submit_button" name="login"></td>
                    </tr>
                    
                </table>
            </form>
            <div class="logimage">
                <img src="img/t_logside.png" alt="image not found">
            </div>
            <font>New to Academy </font><a href="teacher_singup.php">Join Now</a>
        </div>

    </body>
</html>