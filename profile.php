<?php
session_start(); // Start the session
require_once 'Users.php'; // Assuming the Users class is in the same directory

// Check if the user is logged in by checking session data
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

// Get the logged-in user ID
$user_id = $_SESSION['user_id'];

// Initialize the Users class and connect to the database
$user = new Users('localhost', 'root', 'root', 'valerikh', 'users');
$user->dbconnect();

// Fetch the user data based on the session ID
$user_data = $user->select($user_id);
if (empty($user_data)) {
    echo "User not found.";
    exit();
}

// Extract user details
$username = $user_data[0]['username'];
$email = $user_data[0]['email'];
$password = $user_data[0]['password']; // You may want to hash the password before displaying it
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .profile-info {
            margin: 20px 0;
        }
        .profile-info p {
            font-size: 18px;
            color: #555;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Your Profile</h2>
        <div class="profile-info">
            <p><strong>Username:</strong> <?php echo htmlspecialchars($username); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Password:</strong> <?php echo htmlspecialchars($password); // Not recommended to display raw passwords ?></p>
        </div>
        <a href="settings.php" class="btn">Edit Profile</a>
        <a href="logout.php" class="btn" style="background-color: #e74c3c;">Logout</a>
    </div>
</body>
</html>