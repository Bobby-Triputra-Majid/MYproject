<?php include __DIR__ . '/../_partials/_template/header.php'; ?>

<link rel="stylesheet" href="../css/style.css">

<div class="container register-container">
    <div class="register-image">
        <img src="../image/AI_FLIP.png" alt="AI Logo">
    </div>

    <!-- Form Register -->
    <div class="register-form">
        <div class="card p-4">
            <h3 class="text-center mb-3">Register to Chat Zone</h3>
            <form action="?page=register" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username"
                        required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
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
                <button type="submit" class="btn btn-success w-100">Register</button>
            </form>
        </div>
    </div>
</div>

<footer class="bg-primary text-white text-center">
    <div class="container">
        <p>&copy; OUR SOCIAL MEDIA</p>
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