<?php
//make the rules
if(
    isset($_POST['fb_uid']) &&
    isset($_POST['balance']) &&
    isset($_POST['monthly']) &&
    isset($_POST['compass_card_number']) &&
    isset($_POST['cvn']) 
){
  $lastid = AddCompassCard(
      $_POST['fb_uid'], 
      $_POST['balance'],
      $_POST['monthly'],
      $_POST['compass_card_number'],
      $_POST['cvn']
    );
  echo json_encode($lastid);
}
?>