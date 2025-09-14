<?php
session_start();
include 'header.php';
?>

<link rel="stylesheet" href="students.css">
<div class="student-info-container">
    <h2>Student Information</h2>
    <?php if (isset($_SESSION['student_name'])): ?>
        <div class="student-card">
            <p><strong>Name:</strong> <?= htmlspecialchars($_SESSION['student_name']) ?></p>
            <p><strong>Age:</strong> <?= htmlspecialchars($_SESSION['student_age']) ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($_SESSION['student_email']) ?></p>
            <p><strong>Course:</strong> <?= htmlspecialchars($_SESSION['student_course']) ?></p>
        </div>
    <?php else: ?>
        <div class="student-card">
            <p>No student information found. Please <a href="register.php">register</a> first.</p>
        </div>
    <?php endif; ?>
</div>
<?php include 'footer.php'; ?>