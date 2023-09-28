<html>
    <head>
        <link rel="shortcut icon" href="img/favicon.png">
        <title>Student Registration</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="student_register_page">
    <div class = "main_title">
            <h1>Skill-<font style="color :white;">Sharp</font> Academy</h1>
        </div>
    
        <div class = "singup_form_space">
        <?php
            if (isset($_GET['error'])){

                if($_GET['error'] == 'alradyemail'){
                    echo '<div class="error">Email address alrady exits</div>';
                }
            }
            ?>
            <h2 style="color: white; font-size:35px;">Student Registration</h2>

            <form action="inc/s_singup.php" method="POST">
                <div class = "table_align">
                <table>
                    <tr>
                        <td class="firstcolum"><label>FirstName</label></td>
                        <td class="firstcolum1"><label>LastName</label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="firstname" class="input1" required></td>
                        <td class="firstcolum1"><input type="text" name="lastname" class="input1" required></td>
                    </tr>
                    <tr>
                        <td><label>Birth date</label></td>
                        <td class="firstcolum1"><label>City</label></td>
                       
                    </tr>
                    <tr>
                    <td><input type="date" name = "dob" class="date_of" required></td>
                    <td class="firstcolum1"><input type="text" name="city" class="input1" required></td>
                    </tr>
                    <tr>
                        <td><label>Email</label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="email" name="email" class="inputemail" required></td>
                    </tr>
        
                    <tr>
                        <td><label>Password</label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="password" name="password" class="inputemail" onChange="onChange()" required></td>
                    </tr>
                    <tr>
                        <td><label>Confirm Password</label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="password" name="confirm" class="inputemail" onChange="onChange()" required></td>
                      
                    </tr>
                    <script type="text/javascript">
                        function onChange() {
                        const password = document.querySelector('input[name=password]');
                        const confirm = document.querySelector('input[name=confirm]');
                        if (confirm.value === password.value) {
                            confirm.setCustomValidity('');
                        } else {
                            confirm.setCustomValidity('Passwords do not match');
                        }
}
                    </script>
                 
                    <tr>
                        <td colspan="2" class="r_button"><input type="submit" value="Register" name="singup" class="register_button"></td>
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