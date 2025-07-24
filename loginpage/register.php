<!-- Full code for register.php -->
<?php
$conn = new mysqli('localhost', 'root', '', 'login_db'); // Replace 'test' with your DB name

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$registerError = "";
$registerSuccess = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? OR username = ?");
    $stmt->bind_param("ss", $email, $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $registerError = "❌ Email or Username already exists.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $username, $hashedPassword);

        if ($stmt->execute()) {
            $registerSuccess = "✅ Registered successfully!";
        } else {
            $registerError = "❌ Registration failed.";
        }
    }

    $stmt->close();
    $conn->close();
}
?>

<!-- HTML Form -->
<form method="POST" action="register.php">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Register</button>
</form>

<?php
if ($registerError) echo "<p style='color:red;'>$registerError</p>";
if ($registerSuccess) echo "<p style='color:green;'>$registerSuccess</p>";
?>
