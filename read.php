<?php include 'includes/db_conn.php'; ?>

<div class="card">
    <div class="card-body">
        <h2>Student Directory</h2>
        <div class="underline"></div>
        
        <table class="student-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Surname</th>
                    <th>Address</th>
                    <th>Contact</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM lrac_students");
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>" . htmlspecialchars($row['student_id']) . "</td>
                        <td>" . htmlspecialchars($row['firstname']) . "</td>
                        <td>" . htmlspecialchars($row['middlename']) . "</td>
                        <td>" . htmlspecialchars($row['surname']) . "</td>
                        <td>" . htmlspecialchars($row['address']) . "</td>
                        <td>" . htmlspecialchars($row['contact_number']) . "</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>