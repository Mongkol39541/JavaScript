<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เว็ปปฏิทินปี 2023</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<?php
    $comp = "";
    $invalue = "";
    ?>

<div class="my-3 p-3 text-center">
    <div class="bg-white rounded-3 w-50 text-dark my-3 p-3">
        <form enctype="multipart/form-data" action="<?php echo $comp; ?>" method="post">
            <label><h4>เลือกเดือน: </h4></label>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <select class="form-select" id="invalue" name="invalue">
                    <option value="---" selected>Select the desired month</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                <button type="submit" id="submit" value="Submit" class="btn btn-success" style="width:100%">แสดงปฏิทิน</button>
            </div>
        </form>

        <table class="table table-bordered">
        <tr>
            <th>Su</th>
            <th>Mo</th> 
            <th>Tu</th>
            <th>We</th>
            <th>Th</th>
            <th>Fr</th>
            <th>Sa</th>
        </tr>
        <br>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['invalue'] != "---") {
                $name = $_POST['invalue'];
                echo "<h4><stong>ปฏิทินของเดือน ". $name. "</stong></h4><br>";
                $arr = array("January"=>range(1, 31), "February"=>range(-2, 28), "March"=>range(-2, 31), "April"=>range(-5, 30), 
                    "May"=>range(0, 31), "June"=>range(-3, 30), "July"=>range(-5, 31), "August"=>range(-1, 31), "September"=>range(-4, 30), 
                    "October"=>range(1, 31), "November"=>range(-2, 30), "December"=>range(-4, 31));
                $asix = 0;
                foreach ($arr[$name] as $mon => $val) {
                    $asix++;
                    if ($asix % 7 == 1) {
                        echo "<tr>";
                    }
                    if ($val <= 0) {
                        echo "<td>&emsp;</td>";
                    } else {
                        echo "<td>". $val. "</td>";
                    }
                    if ($asix % 7 == 0) {
                        echo "</tr>";
                    }
                }
                if ($val == max($arr[$name]) && $asix % 7 != 0) {
                    for ($val = 1; $val <= (7 - $asix % 7); $val++) {
                        echo "<td>&emsp;</td>";
                    }
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</div>
</body>

</html>