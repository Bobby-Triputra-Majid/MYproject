<?php include "./_partials/_template/nav.php" ?>
<?php include "./database/connect.php"; ?>

<?php
include "database/connect.php"; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Check if email or username already exists
    $check_query = "SELECT * FROM users WHERE email = ? OR username = ?";
    $stmt = $conn->prepare($check_query);
    $stmt->bind_param("ss", $email, $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Username or Email already exists!";
    } else {
        // Insert new user into database
        $insert_query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            echo "Registration successful!";
            header("Location: index.php?page=login"); // Redirect to login page
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
}
$conn->close();
?>


<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        background: linear-gradient(135deg, #000000, #000000, #0dcaf0);
        color: #ffffff;
        /* Warna teks default */
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .register-container {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .register-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        max-width: 1200px;
        width: 100%;
        gap: 50px;
        /* Jarak antara gambar dan formulir */
    }

    .register-image {
        flex: 1;
        max-width: 500px;
        /* Lebar maksimum gambar */
    }

    .register-image img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        /* Tambahkan border-radius untuk gambar */
    }

    .register-form {
        flex: 1;
        max-width: 500px;
        /* Lebar maksimum formulir */
    }

    .card {
        background: rgba(255, 255, 255, 0.1);
        border: none;
        border-radius: 10px;
        padding: 2rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        color: #ffffff;
        /* Warna teks di dalam card */
    }

    .form-label {
        color: #ffffff;
        /* Warna teks label */
    }

    .form-control {
        background-color: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: #ffffff;
        /* Warna teks input */
    }

    .form-control::placeholder {
        color: rgba(255, 255, 255, 0.5);
        /* Warna placeholder */
    }

    .btn-success {
        background-color: #28a745;
        border: none;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    .btn-primary {
        background-color: #0dcaf0;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0aa8d0;
    }

    footer {
        flex-shrink: 0;
        background-color: #0dcaf0;
        color: #ffffff;
        text-align: center;
        padding: 0.5rem 0;
        /* Footer lebih kecil */
        font-size: 0.9rem;
        /* Ukuran teks footer lebih kecil */
    }

    footer a {
        color: #ffffff;
        text-decoration: none;
    }

    footer a:hover {
        text-decoration: underline;
    }

    footer .fab {
        font-size: 1.2rem;
        /* Ukuran ikon sosial media */
        margin: 0 0.5rem;
        /* Jarak antara ikon */
    }
</style>
</head>

<body>
    <div class="container register-container">
        <div class="register-wrapper">
            <!-- Gambar di sebelah kiri -->
            <div class="register-image">
                <img src="./img/AI_FLIP.png" alt="AI Logo">
            </div>

            <!-- Form Register di sebelah kanan -->
            <div class="register-form">
                <div class="card p-4">
                    <h3 class="text-center mb-3">Register to Stark AI</h3>
                    <form action="?page=register" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Enter Username" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Enter Password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirm-password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm-password" name="confirm-password"
                                placeholder="Confirm Password" required>
                        </div>
                        <a href="index.php?page=login" class="btn btn-primary w-100 mt-2">Register</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>