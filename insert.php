<?php
include 'includes/db_conn.php';

$id = $_POST['student_id'];
$fname = $_POST['firstname'];
$mname = $_POST['middlename'];
$sname = $_POST['surname'];
$addr = $_POST['address'];
$cont = $_POST['contact'];

$sql = "INSERT INTO lrac_students (student_id, firstname, middlename, surname, address, contact_number) 
        VALUES ('$id', '$fname', '$mname', '$sname', '$addr', '$cont')";

if (mysqli_query($conn, $sql)) { 
    
    header("Location: index.php?page=read&msg=created"); 
    exit(); 
} else {
    echo "Error: " . mysqli_error($conn);
}
?>