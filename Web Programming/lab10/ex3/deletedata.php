<?php
    $c_id = $_GET['CourseID'];
    echo "$c_id";

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

   $sql = "DELETE FROM course WHERE course_id = '$c_id';";
   $ret = $db->exec($sql);
   if(!$ret){
     echo $db->lastErrorMsg();
   } else {
      echo $db->changes(), " Record deleted successfully<br>";
   }

   $db->close();
?>