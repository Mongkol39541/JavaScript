<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>
</head>

<body>
<?php
    session_start();
    session_id();
    $phone = $email = $address = $lastname = $firstname = $employee_id = "";
?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chang = $_POST['Chang'];
        $employee_id = $_POST['Employee_ID'];
        $firstname = $_POST['Firstname'];
        $lastname = $_POST['Lastname'];
        $address = $_POST['Address'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        if ($chang == "Save") {
            setcookie('Employee_ID', $employee_id, time() + (86400), "/"); 
            setcookie('Firstname', $firstname, time() + (86400), "/"); 
            setcookie('Lastname', $lastname, time() + (86400), "/"); 
            setcookie('Address', $address, time() + (86400), "/"); 
            setcookie('Email', $email, time() + (86400), "/"); 
            setcookie('Phone', $phone, time() + (86400), "/"); 
            $phone = $email = $address = $lastname = $firstname = $employee_id = "";
        } elseif ($chang == "Show") {
            $employee_id = $_COOKIE["Employee_ID"];
            $firstname = $_COOKIE["Firstname"];
            $lastname = $_COOKIE['Lastname'];
            $address = $_COOKIE['Address'];
            $email = $_COOKIE['Email'];
            $phone = $_COOKIE['Phone'];
        } elseif ($chang == "Clear") {
            $phone = $email = $address = $lastname = $firstname = $employee_id = "";
            setcookie('Employee_ID', $employee_id, time(), "/"); 
            setcookie('Firstname', $firstname, time(), "/"); 
            setcookie('Lastname', $lastname, time(), "/"); 
            setcookie('Address', $address, time(), "/"); 
            setcookie('Email', $email, time(), "/"); 
            setcookie('Phone', $phone, time(), "/"); 
        }
    }
?>

<div class="container-lg p-5">
    <h1 class="text-center">Employee Information</h1>
    <form enctype="multipart/form-data" action="" method="POST">
        <div class="p-2">
            <label class="form-label px-3" for='Employee_ID'>Employee ID: </label>
            <input class="form-control" type="text" id="Employee_ID" name="Employee_ID" value="<?php echo $employee_id; ?>"/>
        </div>
        <div class="p-2">
            <label class="form-label px-3" for='Firstname'>Firstname: </label>
            <input class="form-control" type="text" id="Firstname" name="Firstname" value="<?php echo $firstname; ?>"/>
        </div>
        <div class="p-2">
            <label class="form-label px-3" for='Lastname'>Lastname: </label>
            <input class="form-control" type="text" id="Lastname" name="Lastname" value="<?php echo $lastname; ?>"/>
        </div>
        <div class="p-2">
            <label class="form-label px-3" for='Address'>Address: </label>
            <textarea class="form-control" id="Address" name="Address" rows="4"><?php echo $address; ?></textarea>
        </div>
        <div class="p-2">
            <label class="form-label px-3" for='Email'>Email: </label>
            <input class="form-control" type="email" id="Email" name="Email" value="<?php echo $email; ?>"/>
        </div>
        <div class="p-2">
            <label class="form-label px-3" for='Phone'>Phone: </label>
            <input class="form-control" type="number" id="Phone" name="Phone" value="<?php echo $phone; ?>"/>
        </div>
        <div class="text-center">
            <button class="btn btn-success m-3" type="submit" id="Chang" value="Save" name="Chang">Save Data</button>
            <button class="btn btn-danger m-3" type="submit" id="Chang" value="Show" name="Chang">Show Data</button>
            <button class="btn btn-danger m-3" type="submit" id="Chang" value="Clear" name="Chang">Clear Data</button>
        </div>
    </form>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>

</html>