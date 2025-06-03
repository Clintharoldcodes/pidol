<?php
session_start();

// Database credentials
$host = 'localhost';
$db   = 'pidol';
$user = 'root';
$pass = '';

// Create connection using mysqli
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . htmlspecialchars($conn->connect_error));
}

// Initialize error variable
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get submitted form data safely and trim spaces
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if ($username !== '' && $password !== '') {
        // Prepare statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
        if (!$stmt) {
            die("Prepare failed: " . htmlspecialchars($conn->error));
        }

        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            $stmt->bind_result($password_hash);
            $stmt->fetch();

            // Verify password
            if (password_verify($password, $password_hash)) {
                // Login successful, store session or cookie as needed
                $_SESSION['username'] = $username;

                // Redirect to home.php
                header("Location: home.php");
                exit;
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "Invalid username.";
        }

        $stmt->close();
    } else {
        $error = "Please enter username and password.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
    <title>Login</title>
</head>
<body>
    <div class="form-container">
        <form class="form login-form" method="POST" action="">
            <h2>Login</h2>

            <?php if (!empty($error)) : ?>
                <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
            <?php endif; ?>

            <input type="text" name="username" placeholder="Username" required />
            <input type="password" name="password" placeholder="Password" required />
            <button type="submit">Login</button>
            <p class="toggle-text">
                Don't have an account? <a href="register.php">Sign Up</a>
            </p>
        </form>
    </div>
</body>
</html>
