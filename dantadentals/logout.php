<?php
session_start();

// unset session variables
$_SESSION = array();

// destroy the session
session_destroy();

// redirect to index.php
header('Location: index.php');
exit();
?>
