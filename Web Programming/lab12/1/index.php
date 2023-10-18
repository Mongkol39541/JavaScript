<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet"/>
</head>
<body>

<div class="container p-5">
    <?php
    $url = "http://10.0.15.21/lab12/restapis/10countries.json";
    $client = curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($client);   
    $result = json_decode($response);
    foreach ($result as $value) {
        echo "<div class='row'>"; 
        echo "<div class='col'>"; 
        echo "Name: " . $value->name . " <br>"; 
        echo "Capital: " . $value->capital . " <br>"; 
        echo "Population: " . $value->population . " <br>";
        echo "Region: " . $value->region . " <br>";
        $loc = "";
        foreach ($value->latlng as $val) {
            $loc .= $val . " ";
        }
        echo "Location: " . $loc . " <br>"; 
        $bor = "";
        foreach ($value->borders as $val) {
            $bor .= $val . " ";
        }
        echo "Borders: " . $bor . " <br>"; 
        echo "</div>"; 
        echo "<div class='col'>"; 
        echo "<img src='" . $value->flag . "' style='width:180px;'><br>";
        echo "</div></div><br>"; 
    }
    ?>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>
</html>