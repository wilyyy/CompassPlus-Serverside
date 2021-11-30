<?php
//connect to the spreadsheet mdiatest
try {
  $db = new PDO("mysql:dbname=compassplus;host=localhost:3306", "root", "root");
  // $db = new PDO("mysql:dbname=compassplus;host=:3306", "compassplus", "55s1A7h1PYcg");
} catch (Exception $e){
  echo $e->getMessage();
}

?>