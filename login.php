<!DOCTYPE html>
<!--
Programmer: Tarnue Korvah
Date: 10/16/2019
-->

<?php
if(!isset($userName)){$userName = '';}

if(!isset($password)){$password = '';}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title></title>
    </head>
    <main class="main">
        <body>
            <div class="wrapper1">
                <h1>Login Page</h1>

                <form action="index.php" method="post">
                    <input type="hidden" name="action" value="login">
                 
                    
                    <label>Username: </label><br>
                        <input type="text" name="username" autofocus="username" 
                               value="<?php xecho($userName); ?>"> &nbsp; <?php if (!empty($loginUserNameError)){ ?>
                        <span class="error"><?php xecho ($loginUserNameError); } ?></span><?php}?>
                        <br>
                        <label>Password: </label><br>
                        <input type="password" name="password" 
                               value="<?php xecho($password); ?>"> &nbsp; <?php if (!empty($loginPasswordError)){ ?>
                        <span class="error"><?php xecho ($loginPasswordError); } ?></span><?php}?>
                        <br>

                         <div id="buttons">
                        <label>&nbsp;</label>
                        <input type="submit" value="Login"><br>

                        </div>
                    <br>


                    <a href="registration.php">Create an Account</a><br>
                </form>
            </div>
        </body>
    </main>
</html>
