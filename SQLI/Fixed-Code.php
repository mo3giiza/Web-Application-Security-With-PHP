<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sanitized Code For SQL Injection</title>
</head>
<body>
<?php include "db.php"; ?>
<?php
if(isset($_GET['id']) && ! empty($_GET['id'])){

    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $query = "SELECT * FROM testsqli WHERE id = '$id'";
    $result = mysqli_query($con, $query);

    while($row = mysqli_fetch_assoc($result)) {
        $db_user_id = $row['id'];
        $db_username = $row['username'];
    }

    $num_rows = mysqli_num_rows($result);
    if($num_rows > 0){
        echo $db_username;
    }
    else{
        echo "No Profile With This ID";
        // echo $id;
    }
    
}else{
    echo "User ID Can't Be Empty";
}
?>
</body>
</html>