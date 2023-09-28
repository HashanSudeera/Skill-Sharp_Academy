<html>
    <head>
        <title>Student login</title>
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="login_page">
    <div class = "main_title">
            <h1>Skill-<font style="color :white;">Sharp</font> Academy</h1>
        </div>

        <div class = "form_space">
            <h2 class="form_name">Student Login</h2>
            <form action="inc/s_login.php" method="POST">
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
                <img src="img/1.png" alt="image not found">
            </div>
            <font>New to Academy </font><a href="student_singup.php">Join Now</a>
        </div>

    </body>
</html>