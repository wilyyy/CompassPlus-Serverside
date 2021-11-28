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
function GetUserById($id=NULL){
    global $db;

    $stmt = $db->prepare('SELECT * FROM `users` WHERE id = :id', array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array(":id"=>$id));

    return $stmt->fetchAll();
}

?>