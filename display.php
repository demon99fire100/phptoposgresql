<?php
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
    <button class='btn btn-primary my-5'><a href="user.php" class='text-light'>add user</a>
</button>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">inicio</th>
        <th scope="col">fim</th>
        <th scope="col">placa</th>
        </tr>
    </thead>
   
    <tbody>
    <?php
    $postgresql = "SELECT id, start_time, end_time, license_plate FROM licenseplates";
    $result = pg_query($con, $postgresql);
    if ($result){
        while($row= pg_fetch_assoc($result)){
            $id=$row['id'];
            $start_time=$row['start_time'];
            $end_time=$row['end_time'];
            $license_plate=$row['license_plate'];
            echo'<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$start_time.'</td>
        <td>'.$end_time.'</td>
        <td>'.$license_plate.'</td>
        <td>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">delete</a></button>
        </td>
        </tr>';
        }
    }
    
    ?>
    

    </tbody>
    </table>
            
    </div>
</body>
</html>
