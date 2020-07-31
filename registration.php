<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Registration</title>
    </head>
    <body>
            <header>
                <h1>Site Name</h1>
            </header>
        <div class="wrapper1">
                    <h2>Registration Form</h2>
                    <form action="index.php" method="post">
                        
                        <label>Username: </label><br>
                        <input type="text" name="username" value='<?php if (!empty($username)){  xecho ($username); } ?>'/>
                        <?php if (!empty($userNameError)){  xecho ($userNameError); } ?>
                        <br>
                        <label>Password: </label><br>
                        <input type="password" name="password" value='<?php if (!empty($password)){  xecho ($password); } ?>'/>
                        <?php if (!empty($passwordError)){  xecho ($passwordError); } ?>
                        <br><br>
                        <input type="hidden" name="action" value="register">

                        <input type="submit" value="GO" />
                        
                    </form>
                    <a href="index.php?action=gotoLogin">Have an Account? Login Here</a>
            
        </div>
    </body>
</html>
