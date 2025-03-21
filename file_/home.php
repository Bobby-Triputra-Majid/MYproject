<?php include "./_partials/_template/nav.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      background: linear-gradient(135deg, #000000, #000000, #0dcaf0);
      color: #ffffff;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
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

    footer {
      background-color: #0dcaf0;
      color: #ffffff;
      text-align: center;
      padding: 0.5rem 0;
      /* Padding diperkecil */
      margin-top: auto;
      /* Footer akan selalu berada di bagian bawah */
    }

    footer p {
      margin: 0;
      font-size: 0.8rem;
      /* Ukuran teks diperkecil */
    }

    footer a {
      color: #ffffff;
      text-decoration: none;
      margin: 0 0.3rem;
      /* Jarak antara ikon diperkecil */
    }

    footer a:hover {
      text-decoration: underline;
    }

    footer .fab {
      font-size: 1rem;
      /* Ukuran ikon diperkecil */
    }
  </style>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container-fluid text-light">
    <div class="row align-items-center">
    </div>

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

        <div>
          <h1 style="font-size:60px; color: black;"><b>Stark Engine V.5</b></h1>
          <p class="text-muted" style="color:black" ;>Use a Futuristic AI chatbot on your local server.

            A virtual chatbot service that you can use for your daily business and integrate directly into your
            application.
          </p>
        </div>
        <img src="./img/AI.png" alt="my image" style="width: 300px; height: auto;">
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

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; OUR SOCIAL MEDIA</p>
      <div>
        <a href="https://www.instagram.com" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.facebook.com" target="_blank">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="https://twitter.com" target="_blank">
          <i class="fab fa-twitter"></i>
        </a>
      </div>
    </div>
  </footer>

  <script>
    function runFunction() {
      alert("Run button clicked!");
      // You can add more functionality here
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>