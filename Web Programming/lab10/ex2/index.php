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
                       $this->open('fwp-db-file.db');
                    }
                 }
                 $db = new MyDB();
                 if(!$db) {
                    echo $db->lastErrorMsg();
                 } else {
                    echo "Opened database successfully<br>";
                 }

                 $sql ="SELECT * from course";

                $ret = $db->query($sql);
                while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                    echo "<tr><td class='text-primary text-decoration-underline'>". $row['course_id'] . "</td>";
                    echo "<td>". $row['title'] . "</td>";
                    echo "<td>". $row['dept_name'] . "</td>";
                    echo "<td>".$row['credits'] ."</td></tr>";
                }

                $db->close();
            ?>

            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>

</html>