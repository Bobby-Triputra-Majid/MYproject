<?php include './_partials/_template/nav.php'; ?>
<?php include "database/connect.php"; ?>

<?php
session_start();
require "database/connect.php"; // Ensure the database is connected

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form input
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
        echo "All fields are required!";
        exit();
    }

    // Check if the user exists
    $query = "SELECT id, username, password FROM users WHERE email = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $username, $hashed_password);
            $stmt->fetch();

            // Verify password
            if (password_verify($password, $hashed_password)) {
                $_SESSION["user_id"] = $id;
                $_SESSION["username"] = $username;

                // Redirect to dashboard
                header("Location: dashboard.php");
                exit();
            } else {
                echo "Invalid email or password!";
            }
        } else {
            echo "No account found with this email!";
        }
        $stmt->close();
    } else {
        echo "Database error: " . $conn->error;
    }
    $conn->close();
}
?>
<style>
    body {
        background: linear-gradient(135deg, #000000, #000000, #0dcaf0);
        color: #ffffff;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        min-height: 100vh;
    }

    .navbar-brand h1 {
        font-size: 2rem;
        margin: 0;
    }

    .nav-link {
        font-size: 1.2rem;
    }

    .btn-info {
        background-color: #0dcaf0;
        border: none;
        padding: 10px 20px;
        font-size: 1.2rem;
    }

    .btn-info:hover {
        background-color: #0aa8d0;
    }

    .form {
        background: rgba(255, 255, 255, 0.1);
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 400px;
    }

    .form-title {
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .input-container {
        margin-bottom: 1rem;
    }

    .input-container input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1rem;
    }

    .submit {
        width: 100%;
        padding: 10px;
        background-color: #0dcaf0;
        border: none;
        border-radius: 5px;
        color: #fff;
        font-size: 1rem;
        cursor: pointer;
    }

    .submit:hover {
        background-color: #0aa8d0;
    }

    .signup-link {
        text-align: center;
        margin-top: 1rem;
    }

    .signup-link a {
        color: #0dcaf0;
        text-decoration: none;
    }

    .signup-link a:hover {
        text-decoration: underline;
    }
</style>

<div class="container-fluid d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100 justify-content-center">
        <!-- Kolom Gambar (Kiri) -->
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="./img/AI_FLIP.png" alt="AI Image" class="img-fluid" style="max-height: 80vh;">
        </div>

        <!-- Kolom Formulir (Kanan) -->
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <form class="form">
                <p class="form-title">Login</p>
                <div class="input-container">
                    <input type="email" placeholder="Enter email">
                </div>
                <div class="input-container">
                    <input type="password" placeholder="Enter password">
                </div>
                <button type="submit" class="submit">
                    Sign in
                </button>
                <p class="signup-link">
                    No account?
                    <a href="?page=register">Sign up</a>
                </p>
            </form>
        </div>
    </div>
</div>