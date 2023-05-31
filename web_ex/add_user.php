
<?php
include 'database.php';

if(isset($_POST['sin'])){
    $name=("$_POST[fullname]");
    $email=("$_POST[email]");
    // $pass=("$_POST[password]");
    // $con_pass=("$_POST[con_password]");
    $result=mysqli_query($mysqli,"INSERT INTO users(`full_name`,`email`) VALUES ('$name','$email')");
    if(!$result){
     die("erorr");
    }else{ 
        header("location:index.php");
    }}
?>