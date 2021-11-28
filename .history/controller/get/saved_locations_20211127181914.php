<?php
//then make the rules for the get request
if(count($_GET) == 0){
  echo json_encode(GetSavedLocations());
} else if(isset($_GET['id'])){
  
  if(is_numeric($_GET['id'])){
    //get individual movies
    echo json_encode(GetSavedLocationsById($_GET['id']));
  } else {
    echo "invalid request";
  }
}
?>