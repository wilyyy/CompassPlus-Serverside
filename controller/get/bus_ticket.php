<?php

if(count($_GET) == 0){
  echo json_encode(GetBusTicket());
} else if(isset($_GET['id'])){
  
  if(is_numeric($_GET['id'])){
    echo json_encode(GetBusTicketById($_GET['id']));
  } else {
    echo "invalid request";
  }
}

?>