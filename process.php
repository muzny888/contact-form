<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate the data
    if (!empty($name) && !empty($email) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Simulate sending the email (use mail() in a real app)
            echo "<h1>Thank You, $name!</h1>";
            echo "<p>Your message has been sent successfully.</p>";
        } else {
            echo "<p>Invalid email address.</p>";
        }
    } else {
        echo "<p>All fields are required.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}
?>
