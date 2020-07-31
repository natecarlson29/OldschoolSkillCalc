<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Accounts
 *
 * @author tj598023
 */
class Accounts {
    //put your code here
    
     private $username, $accountNames;
    
    function __construct($username, $accountNames) {
        $this->username = $username;
        $this->accountNames = $accountNames;
        
}
public function getUsername() {
    return $this->username;
}

public function getAccountNames() {
    return $this->accountNames;
}

public function setUsername($username) {
    $this->username = $username;
}

public function setAccountNames($accountNames) {
    $this->accountNames = $accountNames;
}


}
