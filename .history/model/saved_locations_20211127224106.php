<?php
require_once("connect.php");

//get all saved locations
function GetSavedLocations(){
    global $db;
  
    //prepare the query to prevent SQL Injection that hacks and kills our database
    $stmt = $db->prepare('SELECT * FROM `saved_locations`');
    $stmt->execute();
    //SELECT all the movies from the sheet
    //$result = $db->query('SELECT * FROM `movies`');
    return $stmt->fetchAll();
    //var_dump($result->fetchAll());
}

//get location by id, input into map screen
function GetSavedLocationsById($id=NULL){
    global $db;

    $stmt = $db->prepare('SELECT * FROM `saved_locations` WHERE id = :id', array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array(":id"=>$id));

    return $stmt->fetchAll();
}

function AddSavedLocations(
    $id=NULL,
    $fb_uid,
    $name,
    $location
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
    //$result = $db->query("INSERT INTO `movies` (`id
?>