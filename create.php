<?php include 'includes/db_conn.php'; ?>
<div class="card" style="display: flex;">
    <div class="card-body" style="flex: 1;">
        <h2>Create Student Record</h2>
        <div class="underline"></div>
        <form action="insert.php" method="POST">
            <input type="text" id="studentID" name="student_id" placeholder="Student ID (00-0000)" maxlength="9" required>
            <div style="display: flex; gap: 10px;">
                <input type="text" name="firstname" placeholder="First Name" required>
                <input type="text" name="middlename" placeholder="Middle Name">
            </div>
            <input type="text" name="surname" placeholder="Surname" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="text" name="contact" placeholder="Contact Number" required>
            <button type="submit" class="btn-primary">Save Record</button>
        </form>
    </div>
    <div class="graphic-side" style="padding: 40px; display: flex; align-items: center; justify-content: center; background: #f8fafc; border-radius: 0 30px 30px 0;">
        <svg width="120" height="120" viewBox="0 0 24 24" fill="none" stroke="#1d63d2" stroke-width="1">
            <circle cx="12" cy="12" r="10" stroke="#dbeafe" stroke-width="4"/>
            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
            <circle cx="8.5" cy="7" r="4" />
            <line x1="20" y1="8" x2="20" y2="14" stroke-width="2"/><line x1="17" y1="11" x2="23" y2="11" stroke-width="2"/>
        </svg>
    </div>
</div>
<script src="public/masking.js"></script>