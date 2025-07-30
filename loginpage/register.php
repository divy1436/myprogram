<?php
// Step 1: Connect to database
$con = mysqli_connect('localhost', 'root', '', 'login_db');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Check if form is submitted
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Step 3: Insert into database
    $query = "INSERT INTO users (email, username, password) 
              VALUES ('$email', '$username', '$password')";

    $run = mysqli_query($con, $query);

    if ($run) {
        echo "✅ Registration Successful!";
    } else {
        echo "❌ Error: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register Form</h2>
    <form method="POST">
        Email: <input type="email" name="email" required><br><br>
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>
