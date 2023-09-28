<?php
    $c_id = $_GET['CourseID'];
    $c_title = $_GET['CourseTitle'];
    $c_dept = $_GET['DeptName'];
    $c_credits = $_GET['Credits'];
    echo "$c_id / $c_title / $c_dept / $c_credits " ;
    
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

    
   $sql = "INSERT INTO `course` (`course_id`, `title`, `dept_name`, `credits`) VALUES ('$c_id', '$c_title', '$c_dept', '$c_credits');";
   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully<br>";
   }
   
   $db->close();
?>