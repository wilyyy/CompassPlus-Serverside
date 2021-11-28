<?php
  //then make the rules for the get request
  if(isset($_DELETE['id'])){
    DeleteSavedLocations($_DELETE['id']);
    echo "deleted!";
  }
?>