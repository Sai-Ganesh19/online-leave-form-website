<?php
// Get the submitted username and password
$enteredUsername = $_POST['adminUsername'];
$enteredPassword = $_POST['adminPassword'];

// Replace these with your actual admin credentials
$correctUsername = 'jeeva';
$correctPassword = 'jeeva123';

// Check if the entered credentials are correct
if ($enteredUsername === $correctUsername && $enteredPassword === $correctPassword) {
    // Successful login, you can redirect to the leave application form or do other actions
    header('Location: welcome.php');
    exit();
} else {
    // Failed login, you can redirect back to the login form or display an error message
    header('Location: login.html');
    exit();
}
?>
