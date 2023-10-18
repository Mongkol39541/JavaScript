<?php
    $url = "https://covid19.th-stat.com/api/open/today";
    $response = file_get_contents($url);
    $result = json_decode($response);

    echo "Confirmed:  $result->Confirmed <br>";
    echo "Recovered:  $result->Recovered <br>";
    echo "Hospitalized:  $result->Hospitalized <br>";
    echo "Deaths:  $result->Deaths <br>";
    echo "NewConfirmed:  $result->NewConfirmed <br>";
    echo "NewHospitalized:  $result->NewHospitalized <br>";
    echo "NewDeaths:  $result->NewDeaths <br>";   
?>