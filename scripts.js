/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {

    $('#targetEXP').val(getXPFromLVL(parseFloat($('#targetLevel').val())));
    populateNumberField();

    $('#currentEXP').change(function () {        
        var currentLevel = getLevelFromXP($('#currentEXP').val());
        $('#currentLevel').val(currentLevel);
        
        //Field Validation
        validateLevelFields(parseFloat($('#currentLevel').val()), parseFloat($('#targetLevel').val()));
        
        var targetXP = getXPFromLVL(parseFloat($('#targetLevel').val()));
        $('#targetEXP').val(targetXP);
        
        populateNumberField();
    });

    $('#targetEXP').change(function () {
        var targetLevel = getLevelFromXP($('#targetEXP').val());
        $('#targetLevel').val(targetLevel);
        
        //Field Validation
        validateLevelFields(parseFloat($('#currentLevel').val()), parseFloat($('#targetLevel').val()));
 
        populateNumberField();
    });

    $('#currentLevel').change(function () {
        //Field Validation
        validateLevelFields(parseFloat($('#currentLevel').val()), parseFloat($('#targetLevel').val()));
        
        //Get Values from text boxes
        var currentLevel = parseFloat($('#currentLevel').val());
        var targetLevel = parseFloat($('#targetLevel').val());
        
        //Calculate xp based on values
        var currentXP = getXPFromLVL(currentLevel);
        var targetXP = getXPFromLVL(targetLevel);

        //Populate xp fields
        $('#currentEXP').val(currentXP);
        $('#targetLevel').val(targetLevel);
        $('#targetEXP').val(targetXP);
        
        populateNumberField();
    });

    $('#targetLevel').change(function () {
        
        //Field Validation
        validateLevelFields(parseFloat($('#currentLevel').val()), parseFloat($('#targetLevel').val()));

        var targetLevel = parseFloat($('#targetLevel').val());
        
        var targetXP = getXPFromLVL(targetLevel);
        $('#targetEXP').val(targetXP);
        
        populateNumberField();
    });
});

function getTrainingMethodNumberRemaining(currentExp, targetExp, exp) {
    var expRemaining = targetExp - currentExp;
    var numberRemaining = expRemaining / exp;
    return Math.round(numberRemaining);
}

function getXPFromLVL(currentLevel) {
    var currentXP;
    var totalXP = 0;
    for(var i = 1; i <= currentLevel - 1; i++){
        currentXP = Math.floor((i + 300 * Math.pow(2, (i / 7))));
        totalXP = totalXP + currentXP;
    }
    totalXP = Math.floor(totalXP / 4);
    return totalXP;

}

function populateNumberField(){
    $('.trainingMethodsList div:gt(0)').each(function () {
            var this_row = $(this);
            var exp = $.trim(this_row.find(".exp").html());
            var numLeft = getTrainingMethodNumberRemaining($('#currentEXP').val(), $('#targetEXP').val(), exp);
            this_row.find(".numLeft").html(numLeft);
        });
}

function getLevelFromXP(xp){
    var currentXP;
    var totalXP = 0;
    var previousXP = 0;
    var lastRun = false;
    for(var i = 1; i <= 99 - 1; i++){
        currentXP = Math.floor((i + 300 * Math.pow(2, (i / 7))));
        totalXP = totalXP + currentXP;
        if((previousXP/4 < xp && totalXP/4 > xp) || lastRun === true){
            if(parseInt(xp) === Math.floor(previousXP/4)){
                return i;
            }
            if(lastRun === true){
                return i - 1;
            }
            lastRun = true;
            
        }
        previousXP = totalXP;
    }
    totalXP = Math.floor(totalXP / 4);
    return "Error";
}

function validateLevelFields(currentLevel, targetLevel){
    //Field Validation
        if (targetLevel < 1) {
            $('#targetLevel').val(1);
        }
        if (targetLevel > 99) {
            $('#targetLevel').val(99);
        }
        if (currentLevel < 1) {
            $('#currentLevel').val(1);
        }
        if (currentLevel > 99) {
            $('#currentLevel').val(99);
        }
        //If target is less than or equal to current Level make it 1 level above current 
        if (targetLevel <= currentLevel) {
            $('#targetLevel').val(currentLevel + 1);
        }
}