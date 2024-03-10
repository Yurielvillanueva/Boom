<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform basic validation (you should add more validation)
    if (empty($username) || empty($email) || empty($password)) {
        echo "Please fill in all the fields.";
        exit;
    }

    // Perform database operations (this is just a placeholder)
    // In a real-world scenario, you would use a database to store user information.
    // Ensure to hash the password securely (e.g., using password_hash) before storing it.

    // For demonstration purposes, let's just print the user information.
    echo "User registered successfully!<br>";
    echo "Username: " . $username . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";
} else {
    // Redirect if accessed directly without form submission
    header("Location: index.html");
    exit;
}
?>
