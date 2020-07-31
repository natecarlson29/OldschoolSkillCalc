<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <label>Username: </label><br>
                        <input type="text" name="username" autofocus="username" value='<?php if (!empty($userName)){  xecho ($userName); } ?>'/>
                        <?php if (!empty($loginUserNameError)){  xecho ($loginUserNameError); } ?>
                        <br>
                        <label>Password: </label><br>
                        <input type="password" name="password" value='<?php if (!empty($password)){  xecho ($password); } ?>'/>
                        <?php if (!empty($loginPasswordError)){  xecho ($loginPasswordError); } ?>
                        
                        
                   
                        <br><br>
        
                        
                        
                        
                        
                        <input type="text" name="username" 
                        value='<?php if (!empty($username)){  xecho ($username); } ?>'/>
                        <?php if (!empty($userNameError)){  xecho ($userNameError); } ?>
                        <br>
                        <label>Password: </label><br>
                        <input type="password" name="password" value='<?php if (!empty($password)){  xecho ($password); } ?>'/>
                        <?php if (!empty($passwordError)){  xecho ($passwordError); } ?>
                        <br><br>
        
        
        
    </body>
</html>
