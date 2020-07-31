<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of trainingMethodsDB
 *
 * @author jn665423
 */
class trainingMethodsDB {
    
    public static function getAllOfSkill($skill) {
        $db = Database::getDB();
        
        $query = 'SELECT * FROM trainingmethods WHERE skill = :skill';
        $statement = $db->prepare($query);
        $statement->bindValue(':skill', $skill);
        $statement->execute();
        $results = $statement->fetchAll();


        $trainingMethods = array();
        foreach ($results as $row) {
            $trainingMethod = new TrainingMethod($row['trainingMethodID'], $row['skill'], $row['lvlRequired'],$row['exp'], $row['imageURL'], $row['trainingMethodName']);
            $trainingMethods[] = $trainingMethod;
        }
        return $trainingMethods;
    }
    
    public static function addTrainingMethod($skill,$lvlRequired,$exp,$imageURL,$trainingMethodName) {
        $db = Database::getDB();

        $query = 'INSERT INTO trainingmethods
                 (skill, lvlRequired, exp, imageURL, trainingMethodName)
              VALUES
                 (:skill, :lvlRequired, :exp, :imageURL, :trainingMethodName)';
        $statement = $db->prepare($query);
        $statement->bindValue(':skill', $skill);
        $statement->bindValue(':lvlRequired', $lvlRequired);
        $statement->bindValue(':exp', $exp);
        $statement->bindValue(':imageURL', $imageURL);
        $statement->bindValue(':trainingMethodName', $trainingMethodName);
        $statement->execute();
        $statement->closeCursor();
    }
    
    public static function deleteTrainingMethod($skill, $trainingMethodName) {
        $db = Database::getDB();
        
        $query = 'DELETE FROM trainingmethods
                  WHERE skill = :skill AND trainingMethodName = :trainingMethodName';
        $statement = $db->prepare($query);
        $statement->bindValue(':skill', $skill);
        $statement->bindValue(':trainingMethodName', $trainingMethodName);
        $statement->execute();
        $statement->closeCursor();
    }
    
    public static function isUniqueTrainingMethodName($trainingMethodName) {
        $db = Database::getDB();
        $query = 'SELECT trainingMethodName FROM trainingmethods WHERE trainingMethodName = :trainingMethodName';
        $statement = $db->prepare($query);
        $statement->bindValue(':trainingMethodName', $trainingMethodName);
        $statement->execute();
        $existing = $statement->fetchAll();
        if ($existing === array()) {
            return true;
        } else {
            return false;
        }
    }
    
    public static function checkSkill($skill) {
        $db = Database::getDB();

        $query = 'SELECT * FROM trainingmethods WHERE skill=:skill';
        $statement = $db->prepare($query);
        $statement->bindValue(':skill', $skill);
        $statement->execute();
        $userOne = $statement->fetch();
        $statement->closeCursor();

        $user_name = $userOne['skill'];

        return $user_name;
    }
    
        public static function checkTrainingMethodName($trainingMethodName) {
        $db = Database::getDB();

        $query = 'SELECT * FROM trainingmethods WHERE trainingMethodName=:trainingMethodName';
        $statement = $db->prepare($query);
        $statement->bindValue(':trainingMethodName', $trainingMethodName);
        $statement->execute();
        $userOne = $statement->fetch();
        $statement->closeCursor();

        $user_name = $userOne['trainingMethodName'];

        return $user_name;
    }
}
