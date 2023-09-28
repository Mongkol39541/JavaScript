<?php
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('fwp-db-file.db');
      }
   }
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully<br>";
   }
   $db->close();
?>