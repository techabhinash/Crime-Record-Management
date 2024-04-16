<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username and password (dummy validation for example)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy validation - replace with your authentication logic
    if ($username === 'admin' && $password === 'password') {
        // Successful login, redirect to the previously requested page (if any)
        if (isset($_SESSION['redirect'])) {
            $redirect = $_SESSION['redirect'];
            unset($_SESSION['redirect']); // Clear the session variable
            header("Location: $redirect");
            exit();
        } else {
            // If no previously requested page, redirect to a default page (e.g., index.html)
            header("Location: index.html");
            exit();
        }
    } else {
        // Invalid credentials, redirect back to login page
        header("Location: login.html");
        exit();
    }
} else {
    // Redirect to login page if accessed directly
    header("Location: login.html");
    exit();
}
?>
