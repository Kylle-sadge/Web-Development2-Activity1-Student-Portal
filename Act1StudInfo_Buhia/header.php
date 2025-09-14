<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .main-header {
            background: linear-gradient(rgba(6, 58, 155, 0.6),rgba(31, 94, 156, 0.6)), url('assets/header-bg.jpg') center/cover;
            padding: 15px 0;
            
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
        }
        .site-title {
            color: #fff;
            font-size: 2rem;
            font-weight: bold;
            letter-spacing: 1px;
        }
        .nav-links {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 40px;
            align-items: center;
        }
        .nav-links li {
            list-style: none;
        }
        .nav-links li::marker {
            content: none;
        }
        .nav-links li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 600;
            transition: color 0.2s;
        }
        .nav-links li a:hover {
            color: #00adc4ff;
        }
    </style>
    <script src="main.js"></script>
</head>
<body>
    <header class="main-header">
        <div class="container">
            <div class="site-title">Student Portal</div>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
