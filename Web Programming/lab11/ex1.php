<?php
session_start();
echo "Session ID : "  . session_id();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["scolor"] = "Green";
$_SESSION["sanimal"] = "Cat";
echo "Session variables are set.";

echo "Data from session. <br>";
echo $_SESSION["scolor"]  . "<br>";
echo $_SESSION["sanimal"] . "<br>";

?>

</body>
</html>