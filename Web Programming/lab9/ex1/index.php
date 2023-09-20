<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Course ID</th>
            <th scope="col">Course Title</th>
            <th scope="col">Dept. Name</th>
            <th scope="col">Year</th>
            <th scope="col">Semeter</th>
            <th scope="col">Building</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "S186SPCX";
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM course LEFT JOIN section USING (course_id);";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["course_id"]. "</td><td>" . $row["title"]. 
                "</td><td>" . $row["dept_name"] . "</td><td>" . $row["year"] . 
                "</td><td>" . $row["semester"] . "</td><td>" . $row["building"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
    ?>
    </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>