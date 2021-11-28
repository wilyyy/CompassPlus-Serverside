<?php
require_once("connect.php");

//get all bus ticket rows
function GetBusTicket(){
    global $db;
  
    //prepare the query to prevent SQL Injection that hacks and kills our database
    $stmt = $db->prepare('SELECT * FROM `bus_ticket`');
    $stmt->execute();
    //SELECT all the movies from the sheet
    //$result = $db->query('SELECT * FROM `movies`');
    return $stmt->fetchAll();
    //var_dump($result->fetchAll());
}

//get specific bus ticket row
function GetBusTicketById($id=NULL){
    global $db;

    $stmt = $db->prepare('SELECT * FROM `bus_ticket` WHERE id = :id', array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array(":id"=>$id));

    return $stmt->fetchAll();
}

?>