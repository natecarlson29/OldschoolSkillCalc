<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comment
 * Date: 11/25/2019
 * @author Tarnue Korvah
 */
class Comment {

    private $cmID, $recipient, $comText, $commenter, $comTime;

    public function __construct($recipient, $comText, $commenter, $comTime, $cmID = -1) {
        $this->cmID = $cmID;
        $this->recipient = $recipient;
        $this->comText = $comText;
        $this->commenter = $commenter;
        $this->comTime = $comTime;
    }
    
    public function getComTime() {
        return $this->comTime;
    }
    
    public function setComTime($comTime) {
        $this->comTime = $comTime;
    }

    public function getCommenter() {
        return $this->commenter;
    }

    public function setCommenter($commenter) {
        $this->commenter = $commenter;
    }

    public function getComText() {
        return $this->comText;
    }

    public function setComText($comText) {
        $this->comText = $comText;
    }

    public function getRecipient() {
        return $this->recipient;
    }

    public function setRecipient($recipient) {
        $this->recipient = $recipient;
    }

    public function getcmID() {
        return $this->cmID;
    }

    public function setID($cmID) {
        $this->cmID = $cmID;
    }

}
