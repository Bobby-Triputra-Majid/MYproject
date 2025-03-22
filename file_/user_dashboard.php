<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/background.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-black border-bottom border-5 border-info">
        <div class="container-fluid">
            <img src="./img/logo.png" style="width: 75px; height: 55px;">
            <a class="navbar-brand text-white fw-bold" href="index.php?page=home">
                <h1 class="mb-0"><b>&nbsp; Stark</b></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
                <ul class="navbar-nav me-3 my-2 my-lg-0 navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php?page=home" style="font-size: 20px;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" style="font-size: 20px;">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" style="font-size: 20px;">Products</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="font-size: 20px;">
                            Documentation
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="?page=logout" class="btn btn-info fw-bolder" style="border-radius: 30px;">
                    logout <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </nav>
</body>

<div class="container mt-4 d-flex justify-content-center">
    <div style="
            width: 90%; 
            padding: 50px; 
            background-color: #ffffff; 
            border-top: 5px solid rgba(15, 205, 235, 0.959);
            border-right: 30px solid rgba(15, 205, 235, 0.959);
            border-radius: 50% / 40%; 
            display: flex;
            align-items: center;
            justify-content: space-between;">

        <!-- Text Content -->
        <div class="text-center">
            <h2 style="font-size:60px;"><b>Welcome,<?php echo $_SESSION['fullname']; ?>!</b></h2>
            <p class="text-muted" style="color:black" ;>Use a Futuristic AI chatbot on your local server.

                A virtual chatbot service that you can use for your daily business and integrate directly into your
                application.
            </p>
        </div>
        <img src="./img/AI.png" alt="my image" style="width: 300px; height: auto;">
    </div>
</div>
</div>
</div>
</div>
</div>
<div class="container mt-5">
    <h2 class="mb-3 fw-bolder text-light text-center">Stark High Capabilites</h2>
    <p class="text-light text-center">Due to high request of AI, The next generation AI Chatbot has been created to be
        reusable in code optimization in Aurora Server</p>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

        <div class="col">
            <div class="card p-3 bg-light" style="border-top: 4px solid rgba(15, 205, 235, 0.959); border-right: 4px solid rgba(15, 205, 235, 0.959); 
                  border-radius: 50% / 30%;">
                <i class="bi bi-chat-heart text-danger fs-1"></i>
                <h5 class="mt-3"><b>AI Chatbot</b></h5>
                <p>Stark AI with a heart, connecting technology and empathy.</p>
            </div>
        </div>

        <!-- Feature 2 -->
        <div class="col">
            <div class="card p-3 bg-light" style="border-top: 4px solid rgba(15, 205, 235, 0.959); border-right: 4px solid rgba(15, 205, 235, 0.959); 
                  border-radius: 50% / 30%;">
                <i class="bi bi-shield-lock text-primary fs-1"></i>
                <h5 class="mt-3"><b>Security</b></h5>
                <p>Stark AI Protecting user data and encrypting your conversations.</p>
            </div>
        </div>

        <!-- Feature 3 -->
        <div class="col">
            <div class="card p-3 bg-light" style="border-top: 4px solid rgba(15, 205, 235, 0.959); border-right: 4px solid rgba(15, 205, 235, 0.959); 
                  border-radius: 50% / 30%;">
                <i class="bi bi-person-check text-success fs-1"></i>
                <h5 class="mt-3"><b>Personalization</b></h5>
                <p>Stark AI adapts responses based on user preferences.</p>
            </div>
        </div>

        <!-- Feature 4 -->
        <div class="col">
            <div class="card p-3 bg-light" style="border-top: 4px solid rgba(15, 205, 235, 0.959); border-right: 4px solid rgba(15, 205, 235, 0.959); 
                  border-radius: 50% / 30%;">
                <i class="bi bi-speedometer2 text-warning fs-1"></i>
                <h5 class="mt-3"><b>Fastest Response</b></h5>
                <p>Stark AI Providing instant answers for a more efficient user experience.</p>
            </div>
        </div>
    </div>
</div>
<footer class="bg-black text-white text-center mt-auto py-2" style="padding: 20px 0;">
    <div class="container">
        <p>&copy;<b> OUR SOCIAL MEDIA</b></p>
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