<?php
require_once("connect.php");

//get all users
function GetUsers(){
    global $db;
  
    //prepare the query to prevent SQL Injection that hacks and kills our database
    $stmt = $db->prepare('SELECT * FROM `users`');
    $stmt->execute();
    //SELECT all the movies from the sheet
    //$result = $db->query('SELECT * FROM `movies`');
    return $stmt->fetchAll();
    //var_dump($result->fetchAll());
}

//get a user by ID
function GetUserById($id=NULL){
    global $db;

    $stmt = $db->prepare('SELECT * FROM `users` WHERE id = :id', array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array(":id"=>$id));

    return $stmt->fetchAll();
}

//Add a user
function AddUsers(
    $fb_uid=0, 
    $first_name='Babe', 
    $age=20
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
    //$result = $db->query("INSERT INTO `movies` (`id`, `movie_name`) VALUES (NULL, '".$name."')");
}

//Updates a user's information - doesnt work rn but dont need it
function UpdateUsers(
    $id=NULL, 
    $fb_uid, 
    $first_name="Bobby", 
    $last_name="Dee", 
    $age=30
){
    global $db;
  
    if($id == NULL){
      return false;
    }
  
    $stmt = 
        $db->prepare("UPDATE `users` SET 
            `fb_uid` = :fb_uid,
            `first_name` = :first_name,
            `last_name` = :last_name,
            `age` = :age,
            WHERE `movies`.`id` = :id;", 
            array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY)
        );
    $stmt->execute(array(
        ":id"=>$id,
        ":fb_uid"=>$fb_uid,
        ":first_name"=>$first_name,
        ":last_name"=>$last_name,
        ":age"=>$age
    ));
}
?>