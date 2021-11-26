<?php
//make the rules
if(
    isset($_POST['fb_uid']) &&
    isset($_POST['ride_name']) &&
    isset($_POST['ride_location']) &&
    isset($_POST['ride_type'])
){
  $lastid = AddUsers(
      $_POST['fb_uid'], 
      $_POST['ride_name'],
      $_POST['ride_location'],
      $_POST['ride_type']
    );
  echo json_encode($lastid);
}
?>