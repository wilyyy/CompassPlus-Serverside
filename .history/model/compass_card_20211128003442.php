<?php
require_once("connect.php");

//Get Compass Card by Unique Index that doesnt auto increment
function GetUserById($id=NULL){
    global $db;

    $stmt = $db->prepare('SELECT * FROM `users` WHERE id = :id', array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array(":id"=>$id));

    return $stmt->fetchAll();
}
?>