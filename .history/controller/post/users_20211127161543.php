<?php
//make the rules
if(
    isset($_POST['fb_uid']) &&
    isset($_POST['first_name']) &&
    // isset($_POST['last_name']) &&
    isset($_POST['age'])
){
  $lastid = AddUsers(
      $_POST['fb_uid'], 
      $_POST['first_name'],
      // $_POST['last_name'],
      $_POST['age']
    );
  echo json_encode($lastid);
}
?>