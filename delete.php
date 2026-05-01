<?php
include 'includes/db_conn.php'; 

?>
<div class="card">
    <div class="card-body">
        <h2 class="card-title">Delete Student Record</h2>
        <div class="underline"></div>
        
        <form action="includes/process_delete.php" method="POST">
            <input type="text" name="student_id" placeholder="Enter ID to Delete" required>
            <button type="submit" class="btn-primary" style="background-color: #e53e3e;">Confirm Delete</button>
        </form>
    </div>
</div>