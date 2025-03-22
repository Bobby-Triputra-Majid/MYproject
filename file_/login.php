<?php
include 'database/connect.php';

// Proses login jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mencari pengguna berdasarkan email
    $stmt = $conn->prepare("SELECT id, fullname, email, password, role_id FROM tb_users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            // Simpan data pengguna ke session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role_id'] = $user['role_id'];

            // Redirect berdasarkan role (opsional)
            if ($user['role_id'] == 2) { // Admin
                header("Location: index.php?page=admin_dashboard");
            } else { // User biasa
                header("Location: index.php?page=user_dashboard");
            }
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "Email not found!";
    }
    $stmt->close();
}
?>
<?php include './_partial/_template/header.php'; ?>
<?php if (isset($error)): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: linear-gradient(135deg, #000000, #000000, #0dcaf0);
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .login-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1200px;
            width: 100%;
            gap: 50px;
            /* Jarak antara gambar dan formulir */
        }

        .login-image {
            flex: 1;
            max-width: 500px;
            /* Lebar maksimum gambar */
        }

        .login-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            /* Tambahkan border-radius untuk gambar */
        }

        .login-form {
            flex: 1;
            max-width: 400px;
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

        .form-floating {
            margin-bottom: 1rem;
        }

        .form-floating input {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #ffffff;
            /* Warna teks input */
        }

        .form-floating input::placeholder {
            color: rgba(255, 255, 255, 0.5);
            /* Warna placeholder */
        }

        .btn-primary {
            background-color: #0dcaf0;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0aa8d0;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-wrapper">
            <!-- Gambar di sebelah kiri -->
            <div class="login-image">
                <img src="img/AI_FLIP.png" alt="AI Logo">
            </div>

            <!-- Form Login di sebelah kanan -->
            <div class="login-form">
                <div class="card">
                    <h1 class="h3 mb-3 fw-normal text-center">Login Now</h1>
                    <form action="" method="POST">
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control" id="floatingInput"
                                placeholder="name@example.com" required>
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="floatingPassword"
                                placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-1 mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Login</button>
                        <div class="text-center mt-3">
                            Belum memiliki akun? <a href="?page=register">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-black text-white text-center mt-auto py-2" style="padding: 20px 0;">
        <div class="container">
            <b>&copy; <b>OUR SOCIAL MEDIA</b></p>
                <div>
                    <a href="https://www.instagram.com" target="_blank" class="text-white mx-2">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="https://www.facebook.com" target="_blank" class="text-white mx-2">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="text-white mx-2">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                </div>
        </div>
    </footer>
</body>

</html>