<?php
//connect to the spreadsheet mdiatest
try {
  $db = new PDO("mysql:dbname=compassplus;host=localhost:8889", "root", "root");
} catch (Exception $e){
  echo $e->getMessage();
}

?>