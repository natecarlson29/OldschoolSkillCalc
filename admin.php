<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php if(!isset($_SESSION['role'])){ 
        header("Location: index.php"); 
        exit();
}?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="scripts.js"></script>
        <title>Old School Skill Calc</title>
    </head>
    <body>
        <header>
            <a href=""></a>
            <a href="admin.php">Add training page</a>
            <?php if (!isset($_SESSION['user_logged'])){echo '<a href="index.php?action=login_page">Login</a>';} else {echo '<a href="index.php?action=logout">Logout ' . $_SESSION['user_logged'] . '</a>';}?>
        </header>
        <main>
            <article>
                <div class="wrapper1">
                    <h1>Create Training Method</h1>
                <form action="index.php" method="post">
                    <label>Skill Name</label>
                    <input type="text" name="skill"><br>
                    <label>Level Required</label>
                    <input type="text" name="lvlRequired"><br>
                    <label>Exp</label>
                    <input type="text" name="exp"><br>
                    <label>Image URL</label>
                    <input type="text" name="imageURL"><br>
                    <label>Training Method Name</label>
                    <input type="text" name="trainingMethodName"><br>
                    <input type="hidden" name="action" value="addNewTrainingMethod"><br>
                    <input type="submit" value="Add Method">
                </form>
                    <h2><?php if(isset($response)){echo $response;}?></h2>
                </div>
                <br><br>
            <div class="wrapper1">
                <h1>Delete Training Method</h1>
            <form action="index.php" method="post">
                <label>Skill Name</label>
                <input type="text" name="skillD"><br>
                <label>Training Method Name</label>
                <input type="text" name="trainingMethodNameD"><br>
                <input type="hidden" name="action" value="deleteTrainingMethod"><br>
                <input type="submit" value="Delete Method">
            </form>
                <h2><?php if(isset($responseD)){echo $responseD;}?></h2>
            </div>
            </article><br><br>

        </main>
        <footer>@Copyright</footer>
    </body>
</html>
