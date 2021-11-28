<?php
//then make the rules for the get request

if(isset($_GET['id'])){
    if(is_numeric($_GET['id'])){
        //get individual movies
        echo json_encode(GetCompassCard($_GET['compass_card_number']));
      } else {
        echo "invalid request";
      }
}

// if(count($_GET) == 0){
//   echo json_encode(GetUsers());
// } else if(isset($_GET['id'])){
  
//   if(is_numeric($_GET['id'])){
//     //get individual movies
//     // echo json_encode(GetUserById($_GET['id']));
//   } else {
//     echo "invalid request";
//   }
// }
?>