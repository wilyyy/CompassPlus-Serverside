<?php
//make the rules
if(
    isset($_POST['fb_uid']) &&
    isset($_POST['name']) &&
    isset($_POST['location'])
){
  $lastid = AddSavedLocations(
      $_POST['fb_uid'], 
      $_POST['name'],
      $_POST['location']
    );
  echo json_encode($lastid);
}
?>