<?php
session_start();

$success = '';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $age = trim($_POST['age'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $course = trim($_POST['course'] ?? '');

    // Validation
    if ($name === '') $errors[] = "Full Name is required.";
    if ($age === '' || !is_numeric($age)) $errors[] = "Valid Age is required.";
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid Email is required.";
    if ($course === '') $errors[] = "Course is required.";

    if (!$errors) {

        $student = "$name|$age|$email|$course\n";
        file_put_contents('students.txt', $student, FILE_APPEND);

     
        $_SESSION['student_name'] = $name;
        $_SESSION['student_age'] = $age;
        $_SESSION['student_email'] = $email;
        $_SESSION['student_course'] = $course;

        $success = "Successfully registered! Welcome, $name.";

        header("refresh:2;url=students.php");
    }
}
?>

<?php include 'header.php'; ?>
<link rel="stylesheet" href="register.css">
<div class="form-container">
    <h2>Register Student</h2>
    <?php if ($errors): ?>
        <div class="error">
            <?php foreach ($errors as $e) echo "<p>$e</p>"; ?>
        </div>
    <?php endif; ?>
    <?php if ($success): ?>
        <div class="success">
            <p><?= $success ?></p>
            <p>Redirecting to your student info...</p>
        </div>
    <?php endif; ?>
    <?php if (!$success): ?>
    <form method="post" action="register.php">
        <label>Full Name:</label>
        <input type="text" name="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" required>
        <label>Age:</label>
        <input type="number" name="age" value="<?= htmlspecialchars($_POST['age'] ?? '') ?>" required>
        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
        <label>Course:</label>
        <input type="text" name="course" value="<?= htmlspecialchars($_POST['course'] ?? '') ?>" required>
        <button type="submit">Register</button>
    </form>
    <?php endif; ?>
</div>
<?php include 'footer.php'; ?>