<?php
require_once("connect.php");

//get all saved locations
function GetSavedLocations(){
    global $db;
  
    //prepare the query to prevent SQL Injection that hacks and kills our database
    $stmt = $db->prepare('SELECT * FROM `saved_locations`');
    $stmt->execute();

    return $stmt->fetchAll();
}

function GetSavedLocationsByFb_uid($fb_uid=NULL){
  global $db;

  $stmt = $db->prepare('SELECT * FROM `saved_locations` WHERE fb_uid = :fb_uid', array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
  $stmt->execute(array(":fb_uid"=>$fb_uid));

  return $stmt->fetchAll();
}

//get location by id, input into map screen
function GetSavedLocationsById($id=NULL){
    global $db;

    $stmt = $db->prepare('SELECT * FROM `saved_locations` WHERE id = :id', array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array(":id"=>$id));

    return $stmt->fetchAll();
}

function AddSavedLocations(
    $fb_uid,
    $name="Bus Stop",
    $location="Vancouver"
){
    global $db;
 
    $stmt = $db->prepare("INSERT INTO `saved_locations` (`id`, `fb_uid`, `name`, `location`) VALUES (NULL, :fb_uid, :name, :location)", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array(
        ":fb_uid"=>$fb_uid,
        ":name"=>$name,
        ":location"=>$location
    ));
    //var_dump($stmt->lastInsertId());
  
    //return the last inserted id
    return $db->lastInsertId();
  
}

function DeleteSavedLocations($id=NULL){
    global $db;
  
    if($id == NULL){
      return false;
    }
  
    $stmt = $db->prepare("DELETE FROM `saved_locations` WHERE `saved_locations`.`id` = :id", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array(
      ":id"=>$id
    ));
  }

?>