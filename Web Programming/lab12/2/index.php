<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet"/>
</head>
<body>

<div class="container p-5">
    <h2 class="mb-3">Product Details</h2>
    <?php
    if(isset($_POST['pre'])) {
        $prodid = intval($_POST['pre']);
        $prodid -= 1;
    } elseif (isset($_POST['nes'])) {
        $prodid = intval($_POST['nes']);
        $prodid += 1;
    } else {
        $prodid = 0;
    }
    $url = "http://10.0.15.21/lab12/restapis/products.php";
    $client = curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($client);   
    $result = json_decode($response);
    echo "<div class='row'>"; 
    echo "<div class='col'>"; 
    echo "<strong>ID</strong>: " . $result[$prodid]->ProductID . " <br>"; 
    echo "<strong>Code</strong>: " . $result[$prodid]->ProductCode . " <br>"; 
    echo "<strong>Name</strong>: " . $result[$prodid]->ProductName . " <br>";
    echo "<strong>Description</strong>: " . $result[$prodid]->Description . " <br>";
    echo "<strong>Price</strong>: " . $result[$prodid]->UnitPrice . " <br>"; 
    echo "<div class='col'>"; 
    echo "</div></div><br>"; 
    ?>
<form action="" method="POST">
    <?php
    if ($prodid == 0) {
        echo '<button type="submit" name="pre" class="btn btn-primary m-2" value=' . $prodid . '" disabled>Previous</button>';
    } else {
        echo '<button type="submit" name="pre" class="btn btn-primary m-2" value=' . $prodid . '">Previous</button>';
    }
    if ($prodid == count($result) - 1) {
        echo '<button type="submit" name="nes" class="btn btn-primary m-2" value="' . $prodid . '" disabled>Next</button>';
    } else {
        echo '<button type="submit" name="nes" class="btn btn-primary m-2" value="' . $prodid . '">Next</button>';
    }
    ?>
</form>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>
</html>