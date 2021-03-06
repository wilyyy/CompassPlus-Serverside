<?php
require_once("connect.php");

function GetCompassCard(){
    global $db;
  
    //prepare the query to prevent SQL Injection that hacks and kills our database
    $stmt = $db->prepare('SELECT * FROM `compass_card`');
    $stmt->execute();

    return $stmt->fetchAll();
}

function GetCompassCardByFb_uid($fb_uid=NULL){
    global $db;

    $stmt = $db->prepare('SELECT * FROM `compass_card` WHERE fb_uid = :fb_uid', array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array(":fb_uid"=>$fb_uid));

    return $stmt->fetchAll();
}

function AddCompassCard(
    $fb_uid = 0,
    $balance=10.25,
    $monthly=false,
    $compass_card_number="5555555555555",
    $cvn="123"
){
    global $db;
   
    $stmt = $db->prepare("INSERT INTO `compass_card` (`id`, `fb_uid`, `balance`, `monthly`, `compass_card_number`, `cvn`) 
    VALUES (NULL, :fb_uid, :balance, :monthly, :compass_card_number, :cvn)", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array(
        ":fb_uid"=>$fb_uid,
        ":balance"=>$balance,
        ":monthly"=>$monthly,
        ":compass_card_number"=>$compass_card_number,
        ":cvn"=>$cvn
    ));
  
    //return the last inserted id
    return $db->lastInsertId();
  
}

function UpdateBalance(
    $fb_uid,
    $amount = 0
){
    global $db;

    $stmt = $db->prepare("UPDATE `compass_card` SET `balance`=`balance` + :amount WHERE `fb_uid` = :fb_uid");

    $stmt->execute(array(
        ":fb_uid"=>$fb_uid,
        ":amount"=>$amount
    ));

    return true;
    
}
?>