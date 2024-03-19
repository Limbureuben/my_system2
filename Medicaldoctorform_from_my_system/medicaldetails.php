<?php
include("dbconnection.php");
session_start();

if (isset($_POST['submit'])) {
    $patientName = $_POST['patientName'];
    $Disease = $_POST['Disease'];
    $Date = $_POST['Date'];
    $message = $_POST['message'];

    $pharmacy_details = "INSERT INTO medicaldetails(patientName, Disease, Date, message)
        VALUES('$patientName', '$Disease', '$Date', '$message');";

    if (mysqli_query($conn, $pharmacy_details)) {
        echo "<script> alert('Patient details submited')</script>";
        echo "<script>window.location='doctdash.php'</script>";
    } else {
        echo "Details not submited";
    }
    mysqli_close($conn);
}
