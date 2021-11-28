<?php
require_once("connect.php");

function GetCompassCard(){
    global $db;
  
    //prepare the query to prevent SQL Injection that hacks and kills our database
    $stmt = $db->prepare('SELECT * FROM `compass_card`');
    $stmt->execute();
    //SELECT all the movies from the sheet
    //$result = $db->query('SELECT * FROM `movies`');
    return $stmt->fetchAll();
    //var_dump($result->fetchAll());
}

function AddCompassCard(
    $fb_uid = 0,
    $balance=10.25,
    $monthly=0,
    $compass_card_number=55555555555555555555,
    $cvn=123
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
    //var_dump($stmt->lastInsertId());
  
    //return the last inserted id
    return $db->lastInsertId();
  
    //INSERT a new movie to the sheet
    //$result = $db->query("INSERT INTO `
}
?>