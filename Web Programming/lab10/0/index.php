<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update&Delete</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>
</head>

<body>
    <?php
    $course_id = "";
    $title = "";
    $department_name = "";
    $credits = "";
    if (isset($_GET['Chang'])) {
        $db = new MyDB();
        $chang = $_GET['Chang'];
        $sql = "SELECT * FROM course WHERE course_id = '$chang'";
        $ret = $db->query($sql);
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
            $course_id = $row["course_id"];
            $title = $row["title"];
            $department_name = $row["dept_name"];
            $credits = $row["credits"];
        }
        $db->close();
    }
    ?>
    <div class="container-lg p-5">
        <h1 class="text-center">Course Details</h1>
        <form enctype="multipart/form-data" action="" method="POST">
            <div class="p-2">
                <label class="form-label px-3" for='Course_ID'>Course ID: </label>
                <input class="form-control" type="text" id="Course_ID" name="Course_ID" value="<?php echo $course_id; ?>"/>
            </div>
            <div class="p-2">
                <label class="form-label px-3" for='Title'>Title: </label>
                <input class="form-control" type="text" id="Title" name="Title" value="<?php echo $title; ?>"/>
            </div>
            <div class="p-2">
                <label class="form-label px-3" for='Department_Name'>Department Name: </label>
                <input class="form-control" type="text" id="Department_Name" name="Department_Name" value="<?php echo $department_name; ?>"/>
            </div>
            <div class="p-2">
                <label class="form-label px-3" for='Credits'>Credits: </label>
                <input class="form-control" type="text" id="Credits" name="Credits" size="2" value="<?php echo $credits; ?>"/>
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
                <form enctype="multipart/form-data" action="" method="GET">
            <?php
                class MyDB extends SQLite3 {
                    function __construct() {
                       $this->open('course.db');
                    }
                 }
                $db = new MyDB();

                if (isset($_POST['Chang'])) {
                    $chang = $_POST['Chang'];
                    $course_id = $_POST['Course_ID'];
                    $title = $_POST['Title'];
                    $department_name = $_POST['Department_Name'];
                    $credits = $_POST['Credits'];

                    if ($chang == "Update") {
                        $sql = "UPDATE course SET title='$title', dept_name='$department_name', credits='$credits' WHERE course_id = '$course_id'";
                    } else {
                        $sql = "DELETE FROM course WHERE course_id = '$course_id'";
                    }
                    $ret = $db->exec($sql);
                }
    
                $sql = "SELECT * FROM course";
                $ret = $db->query($sql); 
                while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                    echo "<tr>";
                    echo "<td class='text-primary text-decoration-underline'><button type='submit' value='" . $row["course_id"] . "' name='Chang'>" . $row["course_id"]. "</a></td>";
                    echo "<td>" . $row["title"]. "</td>";
                    echo "<td>" . $row["dept_name"] . "</td>";
                    echo "<td>" . $row["credits"] ."</td>";
                    echo "</tr>";
                }
                $db->close();
            ?>
                </form>
            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>

</html>