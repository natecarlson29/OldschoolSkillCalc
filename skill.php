<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
$skill = $_SESSION['skill'];
if (!isset($statsList) || count($statsList) == 0){$statsList = [1, 32, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1];}
    if($skill == 'attack'){
        $skillIndex = 4;
    }else if($skill == 'hitpoints'){
        $skillIndex = 13;
    }else if($skill == 'mining'){
        $skillIndex = 46;
    }else if($skill == 'strength'){
        $skillIndex = 10;
    }else if($skill == 'agility'){
        $skillIndex = 52;
    }else if($skill == 'smithing'){
        $skillIndex = 43;
    }else if($skill == 'defence'){
        $skillIndex = 7;
    }else if($skill == 'herblore'){
        $skillIndex = 49;
    }else if($skill == 'fishing'){
        $skillIndex = 34;
    }else if($skill == 'ranged'){
        $skillIndex = 16;
    }else if($skill == 'thieving'){
        $skillIndex = 55;
    }else if($skill == 'cooking'){
        $skillIndex = 25;
    }else if($skill == 'prayer'){
        $skillIndex = 19;
    }else if($skill == 'crafting'){
        $skillIndex = 40;
    }else if($skill == 'firemaking'){
        $skillIndex = 37;
    }else if($skill == 'magic'){
        $skillIndex = 22;
    }else if($skill == 'fletching'){
        $skillIndex = 31;
    }else if($skill == 'woodcutting'){
        $skillIndex = 28;
    }else if($skill == 'runecrafting'){
        $skillIndex = 64;
    }else if($skill == 'slayer'){
        $skillIndex = 58;
    }else if($skill == 'farming'){
        $skillIndex = 61;
    }else if($skill == 'construction'){
        $skillIndex = 70;
    }else if($skill == 'hunter'){
        $skillIndex = 67;
    }else{
        $skillIndex = 1;
    }
?>
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
            <a href="index.php">Home</a>
            <?php if (!isset($_SESSION['user_logged'])){echo '<a href="index.php?action=login_page">Login</a>';} else {echo '<a href="index.php?action=logout">Logout ' . $_SESSION['user_logged'] . '</a>';}?>
        </header>
        <main> 
            <article>
                <h2><?php echo ucfirst($skill); ?> Calculator</h2>
                <div class='calcInput'>
                    <div class="displayName">
                        <form action="index.php" method="post">
                            <label><b><?php if(isset($accExistsError)){echo($accExistsError);} ?></b></label><br>
                            <label>Display Name:</label>
                            <input type="text" name="osrsusername" maxlength="12" minlength="1" value="<?php if(isset($osrsusername)){echo($osrsusername);} ?>"><br>
                            <input type="hidden" name="action" value="gotoSkillUser"><br>
                            <input type="hidden" name="skill" value="<?php echo($skill); ?>"><br>
                            <input type="submit" value="<?php echo('Fetch ' . ucfirst($skill) . ' Level');?>"><br>
                        </form>
                    </div>
                    
                    <div class="levelEXP">
                        <div class="levelEXPSection">
                            <label>Current Level:</label>
                            <input type="text" name="currentLevel" id="currentLevel" value="<?php if(isset($osrsusername)){echo($statsList[$skillIndex]);}else{echo(1);} ?>"> 
                        </div>
                        <div class="levelEXPSection">
                            <label>Target Level:</label>
                            <input type="text" name="targetLevel" id="targetLevel" value="<?php if(isset($osrsusername)){echo($statsList[$skillIndex]+1);}else{echo(2);} ?>">  
                        </div>
                        <div class="levelEXPSection">
                            <label>Current EXP:  </label>
                            <input type="text" name="currentEXP" id="currentEXP" value="<?php if(isset($osrsusername)){echo($statsList[$skillIndex+1]);} ?>">
                        </div>
                        <div class="levelEXPSection">
                            <label>Target EXP:  </label>
                            <input type="text" id="targetEXP" name="targetEXP" value="">  
                        </div>
                    </div>
                </div>


                <div class="trainingMethodsList">
                    <div class="trainingMethodsList_Titles">
                        <p>Level Required</p>
                        <p>Action/Product</p>
                        <p>Exp</p>
                        <p>Number</p>
                    </div>
                    <?php                       
                        foreach ($trainingMethods as &$trainingMethod) {
                            echo "<div class='trainingMethodsList_Item'>" .
                                    "<p>" . $trainingMethod->getLvlRequired() . "</p>" .
                                    "<div style='padding-top: 5px;'><img src=" . $trainingMethod->getImageURL() . " height='50' width='50'><p>" . $trainingMethod->getTrainingMethodName() ."</p></div>" .
                                    "<p class='exp'>" . $trainingMethod->getExp() ."</p>" .
                                    "<p class='numLeft'>0</p>" .
                                 "</div>";
                        }
                    ?>
                </div>
                <?php echo(include 'comment_form.php');?>
                
            </article>
            <aside>
                <table>
                    <tr>
                        <th>Account List</th>
                    </tr>
                <?php if (!isset($_SESSION['user_logged'])){echo '<tr><th>Log in to view your account list. </th></tr>';} 
                else { foreach($_SESSION['user_accounts'] as $account)
                {echo '<tr><th> <a href=index.php?action=loadStatsFromList&accountToLoad=' . str_replace(" ", "_", $account) . '&skill=' . $skill . '>' . $account . '</a></th></form><form action=\'index.php?action=deleteAccount\' method=\'post\'><th><input type=\'submit\' value=\'Delete\'><input type=\'hidden\' id=\'accNameToDel\' name=\'accNameToDel\' value=\'' . $account . '\'></form></th></tr>';}} ?>
                </table>
                
            </aside>
        </main>
        <footer>@Copyright</footer>
    </body>
</html>
