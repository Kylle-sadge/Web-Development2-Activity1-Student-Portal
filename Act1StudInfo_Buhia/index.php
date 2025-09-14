<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="index.css">
    <style>
        .main-header {
            background: linear-gradient(rgba(30,90,200,0.6),rgba(30,90,200,0.6)), url('assets/header-bg.jpg') center/cover;
            padding: 8px 0;
            text-align: center;
        }
        .site-title {
            color: #fff;
            font-size: 2.5rem;
            font-weight: bold;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>
    <header class="main-header">
        <div class="site-title">Student Portal</div>
    </header>

    <div class="wrapper">
        <main>
            <h1>Welcome to the Student Portal</h1>
            <p>
                Welcome to your all-in-one student management system! Here you can:
            </p>

            <div class="button-group">
                <a href="login.php" class="main-btn">Login</a>
                <a href="register.php" class="main-btn">Register</a>
                
                <a href="about.php" class="main-btn alt-btn">About Us</a>
                <a href="contact.php" class="main-btn alt-btn">Contact Support</a>
            </div>

            <li>New here? Register your student account</li><br>
            <li>Already registered? Login to your portal</li><br>
            <li>Learn more about our portal</li><br>
            <li>Need help or have questions?</li><br>

            
            
                <li>Access important announcements and updates</li><br>
            
            <section style="margin-top:40px;">
                <h2>Announcement</h2>
                <p>
                    <strong>Registration for the 2025-2026 school year is now open!</strong>
                    Register early to secure your spot. <br>
                </p>
                <p>
                    <br><strong>What are you waiting for? Register na!</strong>
                </p>
            </section>
        </main>
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>