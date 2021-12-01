<?php
//then make the rules for the get request
if(count($_GET) == 0){
  echo json_encode(GetSavedLocations());
} else if(isset($_GET['fb_uid'])){
  echo json_encode(GetSavedLocationsByFb_uid($_GET['fb_uid']));
}
?>