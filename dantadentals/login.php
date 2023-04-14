<?php
session_start();
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Replace with your own username and password
    if ($username == 'admin' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
        exit();
    } else {
        header('Location: index.php');
        exit();
    }
} else {
    header('Location: index.php');
    exit();
}
?>

