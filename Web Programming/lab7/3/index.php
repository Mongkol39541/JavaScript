<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เอกสาร แบบฟอร์ม</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
        $profession = $age = $address = $name = $comp = "";
        $colorprofession = $colorage = $coloraddress = $colorname = "dark";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (strlen($_POST["name"]) < 5) {
                $name = $_POST["name"];
                $colorname = "danger";
            } else {
                $name = $_POST["name"];
                $colorname = "dark";
            }
            if (strlen($_POST["address"]) < 5) {
                $address = $_POST["address"];
                $coloraddress = "danger";
            } else {
                $address = $_POST["address"];
                $coloraddress = "dark";
            }
            if (strlen($_POST["age"]) < 5) {
                $age = $_POST["age"];
                $colorage = "danger";
            } else {
                $age = $_POST["age"];
                $colorage = "dark";
            }
            if (strlen($_POST["profession"]) < 5) {
                $profession = $_POST["profession"];
                $colorprofession = "danger";
            } else {
                $profession = $_POST["profession"];
                $colorprofession = "dark";
            }
        }
        ?>
    <div class="my-3 p-3">
        <div class="bg-white rounded-3 w-50 text-dark my-3 p-3">
            <h3 class="text-center"><strong>Member Registration</strong></h3>
            <form enctype="multipart/form-data" action="<?php echo $comp; ?>" method="post">
                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control text-<?php echo $colorname; ?>" name="name" id="name" value="<?php echo $name; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address:</label>
                    <textarea class="form-control text-<?php echo $coloraddress; ?>" name="address" id="address" rows="6" style="width: 80%;"><?php echo $address; ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Age:</label>
                    <input type="text" class="form-control text-<?php echo $colorage; ?>" name="age" id="age" style="width: 10%;" value="<?php echo $age; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Profession:</label>
                    <input type="text" class="form-control text-<?php echo $colorprofession; ?>" name="profession" id="profession" value="<?php echo $profession; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Residential status:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="resident" id="resident" checked>
                        <label class="form-check-label">Resident</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="resident" id="resident">
                        <label class="form-check-label">Non-Resident</label>
                    </div>
                </div>
                <button type="submit" id="submit" value="Submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>