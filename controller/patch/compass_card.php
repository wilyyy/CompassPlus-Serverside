<?php
//make the rules
var_dump($_PATCH);

if(
    isset($_PATCH['fb_uid']) &&
    isset($_PATCH['amount']) 
){
  $lastid = UpdateBalance(
      $_PATCH['fb_uid'], 
      $_PATCH['amount']
    );
  echo json_encode("updated");
}
?>