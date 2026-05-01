<?php
include 'db_conn.php'; 

$id = $_POST['student_id'];
$fname = $_POST['firstname'];
$mname = $_POST['middlename'];
$sname = $_POST['surname'];
$addr = $_POST['address'];
$cont = $_POST['contact_number'];

$sql = "UPDATE lrac_students SET firstname='$fname', middlename='$mname', surname='$sname', 
        address='$addr', contact_number='$cont' WHERE student_id='$id'";

if (mysqli_query($conn, $sql)) { 
    header("Location: ../index.php?page=read&msg=updated"); 
    exit(); 
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>