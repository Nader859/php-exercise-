<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web exsercise</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
    
</head>
<body class="body">
    
<?php

include 'database.php';

// استعلام جدول من قاعدة البيانات
$sql = "SELECT * FROM users";
$result = mysqli_query($mysqli, $sql);

// عرض البيانات في صفحة HTML
if (mysqli_num_rows($result) > 0) {
    echo "<div class='container p-1'><table class=' table table-striped table-hover '><tr class='col'><th>id</th><th>full_name</th><th>email</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='.row-cols-xl-3 '><td class='col'>" . $row["id"] . "</td><td class='col'>" . $row["full_name"] . "</td ><td class='col'>" . $row["email"] . "</td></tr>";
    }
    echo "</table> </div >";
} else {
    echo "0 results";
}

// إغلاق اتصال قاعدة البيانات
mysqli_close($mysqli);
?>
<a href="create_user.html"><button class="btn btn-primary m-3">add new user</button></a>
</body>
</html>


