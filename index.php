<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//template with old code to use for new program ************************************************************

require_once('database.php');
require_once('User.php');
require_once('UserDB.php');
require_once('TrainingMethod.php');
require_once('trainingMethodsDB.php');
require_once('comment.php');
require_once('CommentDB.php');

session_start();

if (!isset($_SESSION['user_logged'])) {
    $_SESSION['user_logged'] = NULL;
}

$action = filter_input(INPUT_POST, 'action');
if ($action == null) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == null) {
        $action = 'gotoHome';
    }
}

function xssafe($data, $encoding = 'UTF-8') {
    return htmlspecialchars($data, ENT_QUOTES | ENT_HTML401, $encoding);
}

function xecho($data) {
    echo xssafe($data);
}

switch ($action) {
    case 'register':
        include('registrationConfirmation.php');
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        $options = [
            //DO set a cost factor, experiment to find a number that is sufficiently high but doesn't kill your performance
            'cost' => 12
                //DON'T supply your own salt like this, let password_hash do that for you
                //'salt' => "notgoodnotgoodnotgoodnotgoodnotgood",
        ];
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);
        $user = new User($username, $hashedPassword, 'user');
        UserDB::addUser($user);
        $_SESSION['user_logged'] = $username;
        include('login.php');
        die();
        break;
    case 'gotoRegistration':
        include 'registration.php';
        die();
        break;

    case 'login':
        include('loginConfirmation.php');
        $username = filter_input(INPUT_POST, 'username');
        $_SESSION['user_logged'] = $username;
        $_SESSION['user_accounts'] = UserDB::getAccounts($username);
        $currentUserObject = UserDB::getUser($username);
        if($currentUserObject->getRole() == 'admin'){
            $_SESSION['role'] = 'admin';
            include "admin.php";
        }else{ 
            include "home.php";
        }
        die();
        break;
    
    case 'logout':
        $_SESSION['user_logged'] = NULL;
        $_SESSION['role'] = NULL;
        include('login.php');
        die();
        break;

    case 'login_page':
        include('login.php');
        die();
        break;
    
    case 'gotoLogin':
        $_SESSION['user_logged'] = NULL;
        $_SESSION['role'] = NULL;
        include 'login.php';
        die();
        break;
    case 'gotoSkill':
        $skill = filter_input(INPUT_GET, 'skill');
        $_SESSION['skill'] = $skill;
        $trainingMethods = trainingMethodsDB::getAllOfSkill($skill);
        $skillsComments = commentDB::getComments($skill);
        //$skillID = $_SESSION['skill']->getTrainingMethodID();
        include 'skill.php';
        die();
        break;
    case 'gotoSkillUser':
        $skill = filter_input(INPUT_POST, 'skill');
        $trainingMethods = trainingMethodsDB::getAllOfSkill($skill);
        $osrsusername = filter_input(INPUT_POST, 'osrsusername');
        $stats = @file_get_contents('https://secure.runescape.com/m=hiscore_oldschool/index_lite.ws?player=' . $osrsusername);
        $skillsComments = commentDB::getComments($skill);
        if($stats != null){
            $accExistsError = '';
            $statsNoSpace = preg_replace('/\s+/', ',', $stats);
            $statsList = explode(',', $statsNoSpace, -21);
        }else{
            $statsList = [1, 32, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1];
            $accExistsError = 'That account does not exist.';
            include 'skill.php';
            die();
            break;
        }
        include 'skill.php';
        die();
        break;
    case 'deleteAccount':
        $currentUser = $_SESSION['user_logged'];
        //get account name and store it here
        $accountName = filter_input(INPUT_POST, 'accNameToDel');
        userDB::deleteAccount($currentUser, $accountName);
        $_SESSION['user_accounts'] = UserDB::getAccounts($currentUser);
        include 'home.php';
        die();
        break;
    case 'addNewAccount':
        $currentUser = $_SESSION['user_logged'];
        $osrsusername = filter_input(INPUT_POST, 'osrsusername');
        if (strlen($osrsusername) < 1) {
            include 'home.php';
            die();
            break;
        }
        $stats = @file_get_contents('https://secure.runescape.com/m=hiscore_oldschool/index_lite.ws?player=' . $osrsusername);
        if($stats != null){
            $accExistsError = '';
            $statsNoSpace = preg_replace('/\s+/', ',', $stats);
            $statsList = explode(',', $statsNoSpace, -21);
            UserDB::addAccount($currentUser, $osrsusername);
            $_SESSION['user_accounts'] = UserDB::getAccounts($currentUser);
        }else{
            $accExistsError = 'That account does not exist.';
            include 'home.php';
            die();
            break;
        }
        include 'home.php';
        die();
        break;
    case 'loadAccountFromList':
        $currentUser = $_SESSION['user_logged'];
        $osrsusername = filter_input(INPUT_GET, 'accountToLoad');
        try{
            $stats = file_get_contents('https://secure.runescape.com/m=hiscore_oldschool/index_lite.ws?player=' . $osrsusername);
            $statsNoSpace = preg_replace('/\s+/', ',', $stats);
            $statsList = explode(',', $statsNoSpace, -21);
        } catch (Exception $ex) {
            $statsList = [1, 32, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1];
        }
        include 'home.php';
        die();
        break;
    case 'loadStatsFromList':
        $skill = $_SESSION['skill'];
        $currentUser = $_SESSION['user_logged'];
        $trainingMethods = trainingMethodsDB::getAllOfSkill($skill);
        $skillsComments = commentDB::getComments($skill);
        $osrsusername = filter_input(INPUT_GET, 'accountToLoad');
        try {
            $stats = file_get_contents('https://secure.runescape.com/m=hiscore_oldschool/index_lite.ws?player=' . $osrsusername);
            $statsNoSpace = preg_replace('/\s+/', ',', $stats);
            $statsList = explode(',', $statsNoSpace, -21);
        } catch (Exception $ex) {
            $statsList = [1, 32, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1];
        }
        include 'skill.php';
        die();
        break;
    case 'add_comment':
        //$trainingMethods = trainingMethodsDB::getAllOfSkill($currentSkill);
        $comText = filter_input(INPUT_POST, 'comment');
        $skill = $_SESSION['skill'];
        $commenter = $_SESSION['user_logged'];
        $comTime = date('Y-m-d');
        
        if ($comText == FALSE) {
            $errorMessageComment = 'comment cannot be empty';
        }else if(strlen($comText) > 280){
            $errorMessageComment = 'comment must be less than 280 characters';
        }else {
            $errorMessageComment = '';
        }
        
        if($errorMessageComment != ''){
          //include 'index.php?action=gotoSkill&skill='.$skill;
            $trainingMethods=trainingMethodsDB::getAllOfSkill($skill);
        $skillsComments = commentDB::getComments($skill);
        include 'skill.php';
            exit();
        }

        $comment1 = new Comment($skill, $comText, $commenter, $comTime);
        CommentDB::addComment($comment1);
        $trainingMethods=trainingMethodsDB::getAllOfSkill($skill);
        $skillsComments = commentDB::getComments($skill);
        include 'skill.php';
        die();
        break;
    case 'gotoHome':
        $currentUser = $_SESSION['user_logged'];
            include "home.php";
        die();
        break;
    case 'addNewTrainingMethod':
        $skill = filter_input(INPUT_POST, 'skill');
        $lvlRequired = filter_input(INPUT_POST, 'lvlRequired');
        $exp = filter_input(INPUT_POST, 'exp');
        $imageURL = filter_input(INPUT_POST, 'imageURL');
        $skillData = trainingMethodsDB::checkSkill($skill);
        $trainingMethodName = filter_input(INPUT_POST, 'trainingMethodName');
        if(trainingMethodsDB::isUniqueTrainingMethodName($trainingMethodName)){
            if($skill == '' || $lvlRequired == '' || $exp == '' || $imageURL == '' || $trainingMethodName == ''){
                $response = "Cannot leave fields blank";
            }else if(!isset($skillData)){
                $response = "Invalid skill name";
            }else{
                trainingMethodsDB::addTrainingMethod($skill, $lvlRequired, $exp, $imageURL, $trainingMethodName);
                $response = "Successfully added training method";
            }
        }else{
            $response = "Training method name already exists";
        }
        include "admin.php";
        die();
        break;
    case 'deleteTrainingMethod':
        $skillD = filter_input(INPUT_POST, 'skillD');
        $trainingMethodNameD = filter_input(INPUT_POST, 'trainingMethodNameD');
        $skillData = trainingMethodsDB::checkSkill($skillD);
        $trainingMethodData = trainingMethodsDB::checkTrainingMethodName($trainingMethodNameD);
        if(!isset($skillData)){
            $responseD = "Invalid skill";
        }else if(!isset($trainingMethodData)){
            $responseD = "Training method does not exist";
        }else if($skillD == '' || $trainingMethodNameD == ''){
            $responseD = "Cannot leave fields blank";
        }else{
            trainingMethodsDB::deleteTrainingMethod($skillD, $trainingMethodNameD);
            $responseD = "Successfully delete training method";
        }
        
        include "admin.php";
        die();
        break;
        
        
    //old code below -------------- code being used above
    /*case 'gotoNewFoodEntry':
        $currentUser = $_SESSION['user_logged'];
        $foods = dbMethods::getDefaultFoods();
        include 'newFoodEntry.php';
        die();
        break;
    case 'gotoAddNewFood':
        include 'addNewFood.php';
        die();
        break;
    case 'deleteLog':
        $logsID = filter_input(INPUT_POST, 'logsID');
        dbMethods::deleteLog($logsID);
        $currentUser = $_SESSION['user_logged'];
        $logs = dbMethods::getLog($currentUser);
        include 'home.php';
        die();
        break;
    case 'addEntry':
        include('entryConfirmation.php');
        $currentUser = $_SESSION['user_logged'];
        dbMethods::addEntry($currentUser, $foodID, $date);
        $logs = dbMethods::getLog($currentUser);
        include('home.php');
        die();
        break;
    case 'addTempFood':
        include('entryConfirmationTemp.php');
        $currentUser = $_SESSION['user_logged'];
        dbMethods::addFood($foodName, $calories, $protein, $currentUser);
        $foods = dbMethods::getAvailableFoods($currentUser);
        $foodID = end($foods)->getFoodID();
        dbMethods::addEntry($currentUser, $foodID, $date);
        $logs = dbMethods::getLog($currentUser);
        include('home.php');
        die();
        break;
    case 'addFood':
        include('foodConfirmation.php');
        $currentUser = $_SESSION['user_logged'];
        dbMethods::addFood($foodName, $calories, $protein, $currentUser);
        $logs = dbMethods::getLog($currentUser);
        include('home.php');
        die();
        break;
    
    
    case 'logout':
        $_SESSION = array();
        session_destroy();
        include 'home.php';
        die();
        break;*/
}
