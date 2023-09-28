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
                class MyDB extends SQLite3 {
                    function __construct() {
                       $this->open('course.db');
                    }
                 }
                $db = new MyDB();

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
                    echo "<tr class='course-row' data-course-id='" . $row["course_id"] . "'>";
                    echo "<td class='text-primary text-decoration-underline'>" . $row["course_id"]. "</td>";
                    echo "<td>" . $row["title"]. "</td>";
                    echo "<td>" . $row["dept_name"] . "</td>";
                    echo "<td>" . $row["credits"] ."</td>";
                    echo "</tr>";
                }
                $db->close();
            ?>

            </tbody>
        </table>
    </div>
    <script>
        const rows = document.querySelectorAll('.course-row');
        const courseIdInput = document.getElementById('Course_ID');
        const titleInput = document.getElementById('Title');
        const departmentNameInput = document.getElementById('Department_Name');
        const creditsInput = document.getElementById('Credits');
        rows.forEach(row => {
            row.addEventListener('click', () => {
                const courseId = row.getAttribute('data-course-id');
                const title = row.cells[1].textContent;
                const departmentName = row.cells[2].textContent;
                const credits = row.cells[3].textContent;
                courseIdInput.value = courseId;
                titleInput.value = title;
                departmentNameInput.value = departmentName;
                creditsInput.value = credits;

                rows.forEach(row => row.classList.remove('bg-warning'));
                row.classList.add('bg-warning');
            });
        });
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>

</html>