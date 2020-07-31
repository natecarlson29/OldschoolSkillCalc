<?php

class User {
    private $username, $password, $role, $accounts;
    
    function __construct($username, $password, $role) {
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
        $this->accounts = [];
    }
    
    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getRole() {
        return $this->role;
    }

    function getAccounts() {
        return $this->accounts;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRole($role) {
        $this->role = $role;
    }

    //set using an array as the argument
    function setAccounts($accounts) {
        $this->accounts = $accounts;
    }
    
    function addAccount($account) {
        array_push($this->accounts, $account);
    }


    
}
