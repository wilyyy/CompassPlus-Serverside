<?php
  //then make the rules for the get request

  // if all of these parameter exists, run the updateUsers fucntion in model
  //to patch these parameters
  if(
    isset($_PATCH['id']) &&
    isset($_PATCH['fb_uid']) &&
    isset($_PATCH['first_name']) &&
    isset($_PATCH['last_name']) &&
    isset($_PATCH['age'])
  ){
    UpdateUsers(
        $_PATCH['id'],
        $_PATCH['fb_uid'], 
        $_PATCH['first_name'],
        $_PATCH['last_name'],
        $_PATCH['age']
    );
    echo "updated!";
  }
?>