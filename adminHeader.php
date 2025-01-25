<?php
session_start();

// Ensure the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .navbar {
            background-color: #343a40;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <div class="ml-auto">
        <span class="text-light">Welcome, <?php echo htmlspecialchars($_SESSION['first_name']); ?>!</span>
        <a href="logout.php" class="btn btn-danger btn-sm ml-3">Logout</a>
    </div>
</nav>
