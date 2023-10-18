<form action="" method="POST">
    <label for="prodid">Name :</label>
    <input type="text" id="prodid" name="prodid" placeholder="Enter a Product ID (1-30)" required />
    <button type="submit" name="submit">Submit</button>
</form>

<?php
 if(isset($_POST['submit']))
 {
  $prodid = $_POST['prodid'];        
  $url = "http://10.0.15.21/lab12/restapis/products.php?prodid=" . $prodid;
  $client = curl_init($url);
  curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
  $response = curl_exec($client);   
  $result = json_decode($response);
  echo "Product ID: " . $result[0]->ProductID . " <br>"; 
  echo "ProductCode: " . $result[0]->ProductCode . " <br>"; 
  echo "ProductName: " . $result[0]->ProductName . " <br>";
  echo "Description: " . $result[0]->Description . " <br>";
  echo "UnitPrice: " . $result[0]->UnitPrice . " <br>"; 
  }
?>