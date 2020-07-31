<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of trainingMethod
 *
 * @author jn665423
 */
class trainingMethod {
    private $trainingMethodID,$skill,$lvlRequired,$exp,$imageURL,$trainingMethodName;
    
    function __construct($trainingMethodID,$skill,$lvlRequired,$exp,$imageURL,$trainingMethodName) {
        $this->trainingMethodID = $trainingMethodID;
        $this->skill = $skill;
        $this->lvlRequired = $lvlRequired;
        $this->exp = $exp;
        $this->imageURL = $imageURL;
        $this->trainingMethodName = $trainingMethodName;
    }
    
    function getTrainingMethodID() {
        return $this->trainingMethodID;
    }

    function getSkill() {
        return $this->skill;
    }

    function getLvlRequired() {
        return $this->lvlRequired;
    }

    function getExp() {
        return $this->exp;
    }

    function getImageURL() {
        return $this->imageURL;
    }

    function getTrainingMethodName() {
        return $this->trainingMethodName;
    }

    function setTrainingMethodID($trainingMethodID) {
        $this->trainingMethodID = $trainingMethodID;
    }

    function setSkill($skill) {
        $this->skill = $skill;
    }

    function setLvlRequired($lvlRequired) {
        $this->lvlRequired = $lvlRequired;
    }

    function setExp($exp) {
        $this->exp = $exp;
    }

    function setImageURL($imageURL) {
        $this->imageURL = $imageURL;
    }

    function setTrainingMethodName($trainingMethodName) {
        $this->trainingMethodName = $trainingMethodName;
    }


}
