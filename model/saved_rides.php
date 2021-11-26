<?php
require_once("connect.php");

/*for saved stops we want to be able to post 
transit stop data on pickdestinations.js

and get all saved transit stops on savedtrips.js
*/

//Get all the saved stops, display on savedtrips.js
function GetSavedRides(){
    global $db;

    $stmt = $db->prepare('SELECT * FROM `saved_rides`');
    $stmt->execute();
    return $stmt->fetchAll();
}

//ambitious get request for inputting into directions search bar
function GetUserById($id=NULL){
    global $db;

    $stmt = $db->prepare('SELECT * FROM `saved_rides` WHERE id = :id', array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array(":id"=>$id));

    return $stmt->fetchAll();
}

//add saved rides to database, onPress heart from pickdest.js
function AddUsers(
    $fb_uid=0, 
    $ride_name='Bus name', 
    $ride_location='bus location', 
    $ride_type="bus"
){
    global $db;
    // try {
    //   $result = $db->query("INSERT INTO `movies` (`id`, `movie_name`) VALUES (NULL, '".$name."')");
    //   var_dump($result);
    // } catch (Exception $e){
    //   echo $e->getMessage();
    // }
    // return false;
    //prepare the query and check :m_name to see if there's special character problems
    $stmt = $db->prepare("INSERT INTO `saved_rides` (`id`, `fb_uid`, `ride_name`, `ride_location`, `type`) VALUES (NULL, :fb_uid, :ride_name, :ride_location, :ride_type)", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array(
        ":fb_uid"=>$fb_uid,
        ":ride_name"=>$ride_name,
        ":ride_location"=>$ride_location,
        ":ride_type"=>$ride_type
    ));
    //var_dump($stmt->lastInsertId());
  
    //return the last inserted id
    return $db->lastInsertId();
  
    //INSERT a new movie to the sheet
    //$result = $db->query("INSERT INTO `movies` (`id`, `movie_name`) VALUES (NULL, '".$name."')");
}
?>
