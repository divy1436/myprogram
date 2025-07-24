<?php
session_start();
include 'db.php'; // Include database connection

$loginError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Find user by email and username
    $sql = "SELECT * FROM users WHERE email = ? AND username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard.php"); // or home page
            exit();
        } else {
            $loginError = "Incorrect password.";
        }
    } else {
        $loginError = "No user found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <style>
            body {
                background-color: #b6350ea1;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                margin: 0;
            }
            form {
                background-color: #f0c515a1;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                max-width: 400px;
                width: 100%;
            }
            label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
                color: #80006fff;
            }
            input {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 14px;
                background-color: #1ee8e8ff;
            }
            button {
                padding: 10px 20px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            h2 {
                text-align: center;
            }
            .error {
                color: red;
                text-align: center;
            }
        </style>

        <h2>Login Form</h2>

        <?php if ($loginError): ?>
            <p class="error"><?php echo $loginError; ?></p>
        <?php endif; ?>

        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="Enter Email" required>

        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="Enter Username" required>

        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Enter Password" required>

        <button type="submit">Login</button>
    </form>
</body>
</html>
