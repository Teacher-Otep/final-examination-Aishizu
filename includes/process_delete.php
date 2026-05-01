<?php

include 'db_conn.php'; 

if (isset($_POST['student_id'])) {
    $id = $_POST['student_id'];
    
    
    $sql = "DELETE FROM lrac_students WHERE student_id = '$id'";
    
    if (mysqli_query($conn, $sql)) { 
       
        header("Location: ../index.php?page=read&success=Deleted"); 
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>