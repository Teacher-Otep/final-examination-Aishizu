<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$is_editing = isset($_GET['student_id']); 

$sentences = [
    'create' => 'Create New Student',
    'read'   => 'View Student Records',
    'update' => 'Update Student Records',
    'delete' => 'Delete Student Records'
];

$is_home_style = ($page === 'home' && !$is_editing);
?>

<div class="moon-container <?php echo $is_home_style ? 'is-home' : ''; ?>">
    <div class="moon-shape">
        <?php if ($is_home_style): ?>
            <p>| <?php echo $sentences['create']; ?></p>
            <p>| <?php echo $sentences['read']; ?></p>
            <p>| <?php echo $sentences['update']; ?></p>
            <p>| <?php echo $sentences['delete']; ?></p>
        <?php else: ?>
            <p>| <?php 
               
                echo $is_editing ? $sentences['update'] : ($sentences[$page] ?? 'Student Portal'); 
            ?></p>
        <?php endif; ?>
    </div>
</div>