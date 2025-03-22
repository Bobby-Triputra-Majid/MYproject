<?php include './_partial/_template/header.php'; ?>

<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
  <!-- Testimonial Section -->
  <div class="container my-5" style="margin-bottom: 50px;" id="section2"></div>
  <h2 class="text-center mb-4 fw-bold">Testimoni</h2>
  <marquee behavior="scroll" direction="left" scrollamount="10">
    <div class="d-flex justify-content-center">
      <div class="card testimonial-card mx-2">
        <div class="card-body">
          <p>"Sangat Membantu tugas tugas saya."</p>
          <footer class="blockquote-footer">Suci</footer>
        </div>
      </div>
      <div class="card testimonial-card mx-2">
        <div class="card-body">
          <p>"Luar Biasa!"</p>
          <footer class="blockquote-footer">Chelsea Van Meijr</footer>
        </div>
      </div>
      <div class="card testimonial-card mx-2">
        <div class="card-body">
          <p>"Serasa bermain curang memakai ini."</p>
          <footer class="blockquote-footer">Bagas Dribble</footer>
        </div>
      </div>
      <div class="card testimonial-card mx-2">
        <div class="card-body">
          <p>"SEPERTI DI FILM MARVEL!!!TIDAK ADA NGELAG"</p>
          <footer class="blockquote-footer">Tom Holans</footer>
        </div>
      </div>
    </div>
  </marquee>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>