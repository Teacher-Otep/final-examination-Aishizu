<?php include 'includes/db_conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carl's Portal</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <?php include 'includes/sidebar.php'; ?>
    <?php include 'includes/moon_header.php'; ?>
    
    <div class="main-content">
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        switch ($page) {
            case 'create':
                include 'create.php';
                break;
            case 'read':
                include 'read.php';
                break;
            case 'update':
                include 'update.php';
                break;
            case 'delete':
                include 'delete.php';
                break;
            case 'home':
            default:
                ?>
                <div class="card">
                    <div class="card-body">
                        <h2>Welcome User!</h2>
                        <div class="underline"></div>
                        <p>Select an option from the sidebar to manage the student database records.</p>
                    </div>
                </div>
                <?php
                break;
        }
        ?>
    </div>
</body>
</html>