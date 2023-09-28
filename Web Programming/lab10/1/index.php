<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>
</head>

<body>
    <div class="container-lg p-5">
    <form enctype="multipart/form-data" action="" method="POST">
        <div class="text-center">
            <button class="btn btn-danger m-3" type="submit" id="Chang" value="Delete" name="Chang">Delete</button>
        </div>
    </form>
        <table class="table align-middle mb-0 bg-white my-3">
            <thead class="bg-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

            <?php
                class MyDB extends SQLite3 {
                    function __construct() {
                       $this->open('customers.db');
                    }
                 }
                $db = new MyDB();
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $chang = $_POST['Chang'];
                    if ($chang == "Delete") {
                        $sql = "DELETE FROM customers WHERE CustomerId = (SELECT MAX(CustomerId) from customers)";
                        $ret = $db->exec($sql);
                    }
                }
                $sql ="SELECT * from customers";
                $ret = $db->query($sql);
                while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                    echo "<tr><td class='text-primary text-decoration-underline'>". $row['CustomerId'] . "</td>";
                    echo "<td>". $row['FirstName'] . $row['LastName'] . "</td>";
                    echo "<td>". $row['Address'] . "</td>";
                    echo "<td>".$row['Phone'] ."</td>";
                    echo "<td>".$row['Email'] ."</td></tr>";
                }

                $db->close();
            ?>

            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>

</html>