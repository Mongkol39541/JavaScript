<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แม่สูตรคูณ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        td {
            border-bottom: 1px solid black;
        }
    </style>
</head>

<body>
<?php
    $comp = "";
    $invalue = "";
    ?>
<div class="my-3 p-3">
    <div class="bg-white rounded-3 w-50 text-dark my-3 p-3">
        <form enctype="multipart/form-data" action="<?php echo $comp; ?>" method="post">
            <label><h4>กรอกสูตรคูณ: </h4></label>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <input type="text" id="invalue" name="invalue" value="<?php echo $invalue; ?>" />
                <button type="submit" id="submit" value="Submit" class="btn btn-success">แสดงตาราง</button>
            </div>
        </form>
        <br>
        <table>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $number = $_POST['invalue'];
                    $invalue = intval($number);
                    echo "<h2><stong>ตารางสูตรคูณแม่ ". $invalue. "</stong></h2>";
                    for ($i = 1; $i <= 12; $i++) {
                        echo "<tr><td><h4>". $invalue. "&emsp; x &emsp;". $i. "&emsp; = &emsp;". $invalue*$i . "</h4></td></tr>";
                    } 
                }
                ?>
        </table>
    </div>
</div>
</body>

</html>