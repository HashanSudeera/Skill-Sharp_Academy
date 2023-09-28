<html>
    <head>
        <link rel="shortcut icon" href="img/favicon.png">
        <title>Teacher Registration</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="teacher_register_page">
    <div class = "main_title">
            <h1>Skill-<font style="color :white;">Sharp</font> Academy</h1>
        </div>
    
        <div class = "singup_form_space">
            <h2 style="color: white; font-size:35px;">Teacher Registration</h2>
            <form>
                <div class = "table_align">
                <table>
                    <tr>
                        <td class="firstcolum"><label>FirstName</label></td>
                        <td class="firstcolum1"><label>LastName</label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="firstname" class="input1"></td>
                        <td class="firstcolum1"><input type="text" name="lastname" class="input1"></td>
                    </tr>
                    <tr>
                        <td><label>Birth date</label></td>
                        <td class="firstcolum1"><label>City</label></td>
                       
                    </tr>
                    <tr>
                    <td><input type="date" name = "dob" class="date_of"></td>
                    <td class="firstcolum1"><input type="text" name="city" class="input1"></td>
                    </tr>
                    <tr>
                        <td><label>Email</label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="email" class="inputemail"></td>
                    </tr>
                    <tr>
                        <td><label>Password</label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="password" name="password" class="inputemail"></td>
                    </tr>
                    <tr>
                        <td><label>Retype Password</label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="password" name="confirm_password" class="inputemail"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="r_button"><input type="submit" value="Register" class="register_button"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="reset" value="Clear form" class="clear"></td>
                    </tr>
                    <tr>
                        <td><font style="color: white;">Alraday have an account </font><a href="student_login.php" style="color: rgb(70, 226, 50);">Log in</a></td>
                    </tr>

                    
                </table>
                </div>
            </form>
        </div>
    
    </body>
</html>