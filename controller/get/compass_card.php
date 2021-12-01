<?php
//then make the rules for the get request
if(count($_GET) == 0){
  echo json_encode(GetCompassCard());
} else if(isset($_GET['fb_uid'])){
  echo json_encode(GetCompassCardByFb_uid($_GET['fb_uid']));

}
?>