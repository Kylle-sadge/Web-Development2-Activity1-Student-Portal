<?php include 'header.php'; ?>

<head>
    <link rel="stylesheet" href="contact.css">
</head>

<div class="wrapper">
    <main>
        <h1>Contact Us</h1>
        <p>
            If yo u need any help, please fill out info below: <br><br>
            <strong>This doesnt have any functionality since there's no database yet. Sorry sir!</strong>
        </p>
        <form action="contact_process.php" method="POST" class="contact-form">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <br>
            <button type="submit" class="contact-btn">Send Message</button>
        </form>
    </main>
    <?php include 'footer.php'; ?>
</div>