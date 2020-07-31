<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserDB
 *
 * @author Tarnue Korvah
 * @date: 10/23/2019
 */
class UserDB {
    //put your code here

    public static function select_all() {
        $db = Database::getDB();

        $query = 'SELECT * FROM users ORDER BY lastName';
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();


        $users = array();
        foreach ($results as $row) {
            $user = new User($row['username'], $row['password'], $row['role']);
            $users[] = $user;
        }
        return $users;
    }

    public static function getUser($username) {
        $db = Database::getDB();

        $query = 'SELECT * FROM users WHERE username = :username';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->execute();
        $r = $statement->fetch();
        $statement->closeCursor();

        $user = new User($r['username'], $r['password'], $r['role']);
        return $user;
    }

    public static function checkUsername($username) {
        $db = Database::getDB();

        $query = 'SELECT * FROM users WHERE username=:username';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->execute();
        $userOne = $statement->fetch();
        $statement->closeCursor();

        $user_name = $userOne['username'];

        return $user_name;
    }

    public static function checkEmail($role) {
        $db = Database::getDB();
        $query = 'SELECT * FROM users WHERE role=:role';
        $statement = $db->prepare($query);
        $statement->bindValue(':role', $role);
        $statement->execute();
        $uRole = $statement->fetch();
        $statement->closeCursor();

        $user_role = $uRole['role'];

        return $user_role;
    }

    public static function addUser($user) {
        $db = Database::getDB();

        $username = $user->getUserName();
        $password = $user->getPassword();
        $role = $user->getRole();

        $query = 'INSERT INTO users
                 (username, password, role)
              VALUES
                 (:username, :password, :role)';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':role', $role);
        $statement->execute();
        $statement->closeCursor();
    }
    
    public static function addAccount($username, $accountName) {
        $db = Database::getDB();

        $query = 'INSERT IGNORE INTO accounts
                 (username, accountName)
              VALUES
                 (:username, :accountName)';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':accountName', $accountName);
        $statement->execute();
        $statement->closeCursor();
    }
    
    public static function deleteAccount($username, $accountName) {
        $db = Database::getDB();
        
        $query = 'DELETE FROM accounts
                  WHERE username = :username AND accountName = :accountName';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':accountName', $accountName);
        $statement->execute();
        $statement->closeCursor();
    }
    
    public static function getAccounts($username) {
        $db = Database::getDB();
        $query = 'SELECT DISTINCT * FROM accounts WHERE username=:username';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->execute();
        $results = $statement->fetchAll();
        //$statement->closeCursor();
        $accounts = array();
        foreach ($results as $row) {
            $accounts[] = $row['accountName'];
        }
        return $accounts;
    }

    public static function checkPassword($username) {
        $db = Database::getDB();
        $query = 'SELECT * FROM users WHERE username=:username';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->execute();
        $passwordOne = $statement->fetch();
        $statement->closeCursor();

        $user_password = $passwordOne['password'];

        return $user_password;
    }
    

    
    public static function updatePassword($username, $password)
    {
        $db = Database::getDB();
        
        $query = 'UPDATE users
                SET password = :password
                WHERE username = :username';
        
        $statement = $db->prepare($query);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':username', $username);
        $statement->execute();
        $statement->closeCursor();
    }
    
    
    
    public static function updateRole($username, $role) {
        $db = Database::getDB();
        
        $query = 'UPDATE users
                SET role = :role
                WHERE username = :username';
        
        $statement = $db->prepare($query);
        $statement->bindValue(':role', $role);
        $statement->bindValue(':username', $username);
        $statement->execute();
        $statement->closeCursor();
    }
}

/* 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
