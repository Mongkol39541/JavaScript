<?php
    $url = "http://10.0.15.21/lab12/restapis/superheroes.json";    
    $response = file_get_contents($url);
    $result = json_decode($response);
   
    echo "Squad Name : $result->squadName<br>";
    echo "Home Town : $result->homeTown<br>";    
    foreach ($result->members as $hero) {  
        echo "&emsp; Name : $hero->name<br>";
        echo "&emsp; Age : $hero->age<br>";    
        foreach ($hero->powers as $pow) {  
            echo "&emsp; Powers :". $pow ."<br>"; 
        } 
    }
?>