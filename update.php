<?php include 'includes/db_conn.php'; ?>
<div class="card">
    <div class="card-body">
        <h2>Update Student Record</h2>
        <div class="underline"></div>
        <p>Enter the Student ID to modify a record.</p>
        <form action="edit_form.php" method="GET">
            <input type="text" name="student_id" placeholder="Enter Student ID (e.g., 20-0001)" required>
            <button type="submit" class="btn-primary">Find Student</button>
        </form>
    </div>
</div>