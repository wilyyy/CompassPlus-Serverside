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
    
){
    global $db;
   
    $stmt = $db->prepare("INSERT INTO `users` (`id`, `fb_uid`, `first_name`, `age`) VALUES (NULL, :fb_uid, :first_name, :age)", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array(
        ":fb_uid"=>$fb_uid,
        ":first_name"=>$first_name,
        ":age"=>$age
    ));
    //var_dump($stmt->lastInsertId());
  
    //return the last inserted id
    return $db->lastInsertId();
  
    //INSERT a new movie to the sheet
    //$result = $db->query("INSERT INTO `
}
?>