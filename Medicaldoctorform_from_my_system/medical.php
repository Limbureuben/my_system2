<?php
include("dbconnection.php");
session_start();

if (isset($_POST['doctordetails'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $select_admin_data_for_login = mysqli_query($conn, "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$password'");

    $row = mysqli_num_rows($select_admin_data_for_login);

    if ($row > 0) {

        echo "<script> alert('you are successfully login')</script>";
        echo "<script>window.location='medicaldash.php'</script>";
    } else {
        echo "<script>alert('wrong! invald email or password')</script>";
        echo "<script>window.location='medicallog.php'</script>";
    }
}
