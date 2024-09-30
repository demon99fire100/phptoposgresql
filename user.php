<?php
include("connect.php");

if (isset($_POST["submit"])) {
    // Sanitize input
    $id = intval($_POST['id']);
    $start_time = pg_escape_string(trim($_POST['start_time']));
    $end_time = pg_escape_string(trim($_POST['end_time']));
    $license_plate = pg_escape_string(trim($_POST['license_plate']));

    // Prepared statement
    $postgresql = "INSERT INTO licenseplates (id, start_time, end_time, license_plate)
                   VALUES ($1, $2, $3, $4)";
    
    $result = pg_query_params($con, $postgresql, array($id, $start_time, $end_time, $license_plate));

    if ($result) {
        //echo "Data inserted successfully.";
        header('location:display.php');
    } else {
        echo "There has been an error: " . pg_last_error($con);
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>License Plate Form</title>
</head>
<body>
<div class="container my-5">
    <form method="post">
        <div class="form-group">
            <label>id</label>
            <input type="number" class="form-control" placeholder="Enter your ID" name="id" required>
        </div>
        <div class="form-group">
            <label>inicio</label>
            <input type="text" class="form-control" placeholder="Enter start time" name="start_time" required>
        </div>
        <div class="form-group">
            <label>fim</label>
            <input type="text" class="form-control" placeholder="Enter end time" name="end_time" required>
        </div>
        <div class="form-group">
            <label>placa</label>
            <input type="text" class="form-control" placeholder="Enter license plate" name="license_plate" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>
</body>
</html>
