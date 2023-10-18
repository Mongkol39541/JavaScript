<form method="post">
Enter QR Code Data:
<input type="text" name="str1"><br/>
<input type="submit" name="Submit"><br/>
</form>

<?php
if(isset($_POST["Submit"]))
{
$data=$_POST["str1"];
echo "<h2>Here is your QR Code<h2>";
echo "<img src='https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=DataInQRcode'>";
}
?>

