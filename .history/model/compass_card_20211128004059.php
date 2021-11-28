<?php
require_once("connect.php");

//Get Compass Card by Unique Index that doesnt auto increment
function GetCompassCard($compass_card_number=NULL){
    global $db;

    $stmt = $db->prepare('SELECT * FROM `compass_card` WHERE compass_card_number = :compass_card_number', array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array(":compass_card_number"=>$compass_card_number));

    return $stmt->fetchAll();
}

// function AddCompassCard(){

// }
?>