<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

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
            <a href="index.php?action=gotoHome">Old School Skill Calc</a>
            <?php if (!isset($_SESSION['user_logged'])){echo '<a href="index.php?action=login_page">Login</a>';} else {echo '<a href="index.php?action=logout">Logout ' . $_SESSION['user_logged'] . '</a>';}?>
        </header>
        <main> 
            <form action="index.php" method="post">
                <label><b><?php if(isset($accExistsError)){echo($accExistsError);} ?></b></label><br>
                <label>Account name</label>
                <input type="text" name="osrsusername" maxlength="12" minlength="1"><br>
                <input type="hidden" name="action" value="addNewAccount"><br>
                <input type="submit" value="Show account stats">
            </form>
            <p><?php if (!isset($statsList)){$statsList = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];} ?></p>          
            <article>
                <div id="skillsWrapper">
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=attack">
                        <div class="skill" id="attack">
                            <svg>
                            <mask id='m' fill="#484B4A">
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='15' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img  src="https://oldschool.runescape.wiki/images/f/fe/Attack_icon.png?b4bce">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="attackLevel"><?php echo($statsList[4] . '/' . $statsList[4])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=hitpoints">
                        <div class="skill" id="hitpoints">
                            <svg>
                            <mask id='m' fill='#484B4A'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/9/96/Hitpoints_icon.png?a4819">
                                </div>
                                <div class="skillContentsItem  skillContentsItemText" id="hitpointsLevel"><?php echo($statsList[13] . '/' . $statsList[13])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=mining">
                        <div class="skill" id="mining">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/4/4a/Mining_icon.png?00870">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="miningLevel"><?php echo($statsList[46] . '/' . $statsList[46])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=strength">
                        <div class="skill" id="strength">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/1/1b/Strength_icon.png?e6e0c">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="strengthLevel"><?php echo($statsList[10] . '/' . $statsList[10])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=agility">
                        <div class="skill" id="agility">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/8/86/Agility_icon.png?22e10">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="agilityLevel"><?php echo($statsList[52] . '/' . $statsList[52])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=smithing">
                        <div class="skill" id="smithing">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/d/dd/Smithing_icon.png?d26c5">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="smithingLevel"><?php echo($statsList[43] . '/' . $statsList[43])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=defence">
                        <div class="skill" id="defence">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/b/b7/Defence_icon.png?ca0cd">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="defenceLevel"><?php echo($statsList[7] . '/' . $statsList[7])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=herblore">
                        <div class="skill" id="herblore">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/0/03/Herblore_icon.png?ffa9e">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="herbloreLevel"><?php echo($statsList[49] . '/' . $statsList[49])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=fishing">
                        <div class="skill" id="fishing">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/3/3b/Fishing_icon.png?15a98">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="fishingLevel"><?php echo($statsList[34] . '/' . $statsList[34])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=ranged">
                        <div class="skill" id="ranged">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r'  mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/1/19/Ranged_icon.png?01b0e">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="rangedLevel"><?php echo($statsList[16] . '/' . $statsList[16])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=thieving">
                        <div class="skill" id="thieving">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/4/4a/Thieving_icon.png?56b20">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="thievingLevel"><?php echo($statsList[55] . '/' . $statsList[55])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=cooking">
                        <div class="skill" id="cooking">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/d/dc/Cooking_icon.png?a0156">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="cookingLevel"><?php echo($statsList[25] . '/' . $statsList[25])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=prayer">
                        <div class="skill" id="prayer">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/f/f2/Prayer_icon.png?ca0dc">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="prayerLevel"><?php echo($statsList[19] . '/' . $statsList[19])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=crafting">
                        <div class="skill" id="crafting">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/c/cf/Crafting_icon.png?a1f71">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="craftingLevel"><?php echo($statsList[40] . '/' . $statsList[40])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=firemaking">
                        <div class="skill" id="firemaking">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/9/9b/Firemaking_icon.png?45ea0">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="firemakingLevel"><?php echo($statsList[37] . '/' . $statsList[37])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=magic">
                        <div class="skill" id="magic">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/5/5c/Magic_icon.png?334cf">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="magicLevel"><?php echo($statsList[22] . '/' . $statsList[22])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=fletching">
                        <div class="skill" id="fletching">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/9/93/Fletching_icon.png?15cda">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="fletchingLevel"><?php echo($statsList[31] . '/' . $statsList[31])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=woodcutting">
                        <div class="skill" id="woodcutting">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/f/f4/Woodcutting_icon.png?6ead4">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="woodcuttingLevel"><?php echo($statsList[28] . '/' . $statsList[28])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=runecrafting">
                        <div class="skill" id="runecrafting">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/6/63/Runecraft_icon.png?c278c">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="runecraftingLevel"><?php echo($statsList[64] . '/' . $statsList[64])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=slayer">
                        <div class="skill" id="slayer">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/2/28/Slayer_icon.png?cd34f">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="slayerLevel"><?php echo($statsList[58] . '/' . $statsList[58])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=farming">
                        <div class="skill" id="farming">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/f/fc/Farming_icon.png?558fa">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="farmingLevel"><?php echo($statsList[61] . '/' . $statsList[61])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=construction">
                        <div class="skill" id="construction">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/f/f6/Construction_icon.png?f9bf7">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="constructionLevel"><?php echo($statsList[70] . '/' . $statsList[70])?></div>
                            </div>
                        </div>
                    </a>
                    <a class="skillWrapper" href="index.php?action=gotoSkill&skill=hunter">
                        <div class="skill" id="hunter">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="skillContents">
                                <div class="skillContentsItem">
                                    <img src="https://oldschool.runescape.wiki/images/d/dd/Hunter_icon.png?8762f">
                                </div>
                                <div class="skillContentsItem skillContentsItemText" id="hunterLevel"><?php echo($statsList[67] . '/' . $statsList[67])?></div>
                            </div>
                        </div>
                    </a>
                    <div class="skillWrapper">
                        <div class="skill" id="total">
                            <svg>
                            <mask id='m' fill='#fff'>
                                <rect id='r' width='100%' height='100%' />
                                <circle id='c' r='25' fill='#000' />
                                <use xlink:href='#c' x='100%' />
                                <use xlink:href='#c' y='100%' />
                                <use xlink:href='#c' x='100%' y='100%' />
                            </mask>
                            <use xlink:href='#r' mask='url(#m)' />
                            </svg>
                            <div class="totalLevelContents">
                                <div class="skillContentsItem">
                                    <p>Total Level:</p>
                                </div>
                                <div class="skillContentsItem">
                                <p><?php echo($statsList[1]) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside>
                <table>
                    
                    <tr>
                        <th>Account List</th>
                    </tr>
                <?php if (!isset($_SESSION['user_logged'])){echo '<tr><th>Log in to view your account list. </th></tr>';} 
                else { foreach($_SESSION['user_accounts'] as $account)
                {echo '<tr><th> <a href=index.php?action=loadAccountFromList&accountToLoad=' . str_replace(" ", "_", $account) . '>' . $account . '</a></th></form><form action=\'index.php?action=deleteAccount\' method=\'post\'><th><input type=\'submit\' value=\'Delete\'><input type=\'hidden\' id=\'accNameToDel\' name=\'accNameToDel\' value=\'' . $account . '\'></form></th></tr>';}} ?>
                </table>
                
            </aside>
        </main>
        <footer>@Copyright</footer>
    </body>
</html>
