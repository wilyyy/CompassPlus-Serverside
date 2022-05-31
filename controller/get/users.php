<?php

if(count($_GET) == 0){
  echo json_encode(GetUsers());
} else if(isset($_GET['fb_uid'])){
  echo json_encode(GetUserByFb_uid($_GET['fb_uid']));
}

?>