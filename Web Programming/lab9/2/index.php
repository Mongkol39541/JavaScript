<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update&Delete</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>
</head>

<body>
    <div class="container-lg p-5">
        <h1 class="text-center">Course Details</h1>
        <form enctype="multipart/form-data" action="" method="POST">
            <div class="p-2">
                <label class="form-label px-3" for='Course_ID'>Course ID: </label>
                <input class="form-control" type="text" id="Course_ID" name="Course_ID"/>
            </div>
            <div class="p-2">
                <label class="form-label px-3" for='Title'>Title: </label>
                <input class="form-control" type="text" id="Title" name="Title"/>
            </div>
            <div class="p-2">
                <label class="form-label px-3" for='Department_Name'>Department Name: </label>
                <input class="form-control" type="text" id="Department_Name" name="Department_Name"/>
            </div>
            <div class="p-2">
                <label class="form-label px-3" for='Credits'>Credits: </label>
                <input class="form-control" type="text" id="Credits" name="Credits" size="2" />
            </div>
            <div class="text-center">
                <button class="btn btn-success m-3" type="submit" id="Chang" value="Update" name="Chang">Update</button>
                <button class="btn btn-danger m-3" type="submit" id="Chang" value="Delete" name="Chang">Delete</button>
            </div>
        </form>

        <table class="table align-middle mb-0 bg-white my-3">
            <thead class="bg-light">
                <tr>
                    <th scope="col">Course_ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Dept. Name</th>
                    <th scope="col">Credits</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "S186SPCX";
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $chang = $_POST['Chang'];
                    $course_id = $_POST['Course_ID'];
                    $title = $_POST['Title'];
                    $department_name = $_POST['Department_Name'];
                    $credits = $_POST['Credits'];

                    if ($chang == "Update") {
                        $sql = "UPDATE course SET title='$title', dept_name='$department_name', credits='$credits' WHERE course_id = '$course_id';";
                    } else {
                        $sql = "DELETE FROM course WHERE course_id = '$course_id';";
                    }

                    $result = mysqli_query($conn, $sql);
                }
                $sql = "SELECT * FROM course;";
                $result = mysqli_query($conn, $sql);
            
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td class='text-primary text-decoration-underline'>" . $row["course_id"]. "</td><td>" . $row["title"]. 
                            "</td><td>" . $row["dept_name"] . "</td><td>" . $row["credits"] ."</td></tr>";
                    }
                }
                mysqli_close($conn);
            ?>

            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>

</html>