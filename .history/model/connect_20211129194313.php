<?php
//connect to the spreadsheet mdiatest
try {
  $db = new PDO("mysql:dbname=compassplus;host=143.198.158.66:3306", "compassplus", "55s1A7h1PYcg");
} catch (Exception $e){
  echo $e->getMessage();
}

?>