<?php
//connect to the spreadsheet mdiatest
try {
  $db = new PDO("mysql:dbname=compassplus;host=143.198.158.66:3306", "compassplus", "kbx73f4kskpUvBrT");
} catch (Exception $e){
  echo $e->getMessage();
}

?>