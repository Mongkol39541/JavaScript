<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>

<body>
    <?php
        $index_row = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $index_row = $_POST['Row'];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "S186SPCX";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
    
            $sql = "SELECT * FROM course;";
            $result = mysqli_query($conn, $sql);

            $num = 0;
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $num += 1;
                    if ($num == intval($index_row)) {
                        echo "ID: ". $row["course_id"]. "<br>";
                        echo "Tilt: ". $row["title"]. "<br>";
                        echo "Dept Name: ". $row["dept_name"]. "<br>";
                        echo "Credits: ". $row["credits"]. "<br>";
                        break;
                    }
                }
            } else {
                echo "0 results";
            }
            mysqli_close($conn);
        }
    ?>

    <form enctype="multipart/form-data" action="" method="POST">
        <label for='Row'>Enter a record number: </label><input type="text" id="Row" name="Row" size="2" />
        <button type="submit" id="submit" value="Submit">Display</button>
    </form>
</body>

</html>