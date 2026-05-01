<?php 
include 'includes/db_conn.php';
// Get the ID from the search bar
$id = $_GET['student_id'];

// Use 'lrac_students' because that is your actual table name
$result = mysqli_query($conn, "SELECT * FROM lrac_students WHERE student_id = '$id'");
$row = mysqli_fetch_assoc($result);

if (!$row) {
    echo "Student ID not found.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student - Carl Portal</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <?php include 'includes/sidebar.php'; ?>
    <?php include 'includes/moon_header.php'; ?>

    <div class="main-content">
        <div class="card">
            <div class="card-body">
                <h2>Editing Record: <?php echo $id; ?></h2>
                <div class="underline"></div>
                
                <form action="includes/process_update.php" method="POST">
                   
                    <input type="hidden" name="student_id" value="<?php echo $row['student_id']; ?>">
                    
                    <label>First Name</label>
                    <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" required>
                    
                    <label>Middle Name</label>
                    <input type="text" name="middlename" value="<?php echo $row['middlename']; ?>">
                    
                    <label>Surname</label>
                    <input type="text" name="surname" value="<?php echo $row['surname']; ?>" required>
                    
                    <label>Address</label>
                    <input type="text" name="address" value="<?php echo $row['address']; ?>" required>
                    
                    <label>Contact Number</label>
                    <input type="text" name="contact_number" value="<?php echo $row['contact_number']; ?>" required>
                    
                    <button type="submit" class="btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>