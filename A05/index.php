<?php 
  include("connect.php");  
  $query = "SELECT * FROM islandsofpersonality";
  $result = executeQuery($query);

  $personalities = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $personalities[] = $row;
  }

  $titles = ['Family', 'Friends', 'Beloved'];
  $query = "SELECT image, content FROM islandcontents WHERE islandOfPersonalityID = 1";
  $result = executeQuery($query);

  $lovingContent = [];
  while ($row = mysqli_fetch_assoc($result)) {
      $lovingContent[] = [
          'description' => $row['content'],
          'image' => $row['image']
      ];
  }

  //$titles = ['Thrill-Seeking Escapades', 'Cultural Explorations', 'Adventurous Challenges'];
  $query = "SELECT image, content FROM islandcontents WHERE islandOfPersonalityID = 2";
  $result = executeQuery($query);

  $adventurousContent = [];
  while ($row = mysqli_fetch_assoc($result)) {
      $adventurousContent[] = [
          'description' => $row['content'],
          'image' => $row['image']
      ];
  }

  //$titles = ['Culinary Adventures', 'Creative Cooking', 'Food Photography and Blogging'];
  $query = "SELECT image, content FROM islandcontents WHERE islandOfPersonalityID = 3";
  $result = executeQuery($query);

  $foodieContent = [];
  while ($row = mysqli_fetch_assoc($result)) {
      $foodieContent[] = [
          'description' => $row['content'],
          'image' => $row['image']
      ];
  }

  //$titles = ['Movies', 'TV Shows', 'Anime'];
  $query = "SELECT image, content FROM islandcontents WHERE islandOfPersonalityID = 4";
  $result = executeQuery($query);

  $entertainmentContent = [];
  while ($row = mysqli_fetch_assoc($result)) {
      $entertainmentContent[] = [
          'description' => $row['content'],
          'image' => $row['image']
      ];
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Island of Personality</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        * {
          box-sizing: border-box;
        }
        html, body {
          margin: 0;
          padding: 0;
          width: 100%;
          overflow-x: hidden;
        }
        .w3-row-padding {
          margin-left: 0 !important;
          margin-right: 0 !important;
        }
        .overlay-container::before {
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.5);
          z-index: 1;
        }
        .overlay-container > div {
          position: relative;
          z-index: 2;
        }
      </style>
</head>
<body>

<!-- Navbar (sit on top) -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color: rgba(231, 223, 225, 0.767);">
  <div class="container">
    <a class="navbar-brand fs-4 fw-semibold text-black" href="#home">MARIANE</a>
    <button 
      class="navbar-toggler shadow-none" 
      type="button" 
      data-bs-toggle="offcanvas" 
      data-bs-target="#offcanvasNavbar" 
      aria-controls="offcanvasNavbar" 
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div 
      class="sidebar offcanvas offcanvas-end" 
      style="background-color: rgb(255, 255, 255);" 
      tabindex="-1" 
      id="offcanvasNavbar" 
      aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <button 
          type="button" 
          class="btn-close btn-close-black"
          data-bs-dismiss="offcanvas" 
          aria-label="Close">
        </button>
      </div>
      <div class="offcanvas-body text-center">
        <ul class="navbar-nav pe-3 justify-content-end flex-grow-1">
          <li class="nav-item mx-2">
            <a class="nav-link text-black" href="#aboutme">ABOUT ME</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-black" href="#emotions">EMOTIONS</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-black" href="#personalities">PERSONALITIES</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- Header -->
<header class="container-fluid d-flex justify-content-center align-items-center text-center py-5 w-100" id="home" style="background-image: url('https://i.pinimg.com/originals/44/b7/d7/44b7d7ef2cd6e0d3438deaf6f02b1b90.png'); background-size: cover; background-position: center; height: 100vh;">
  <div>
    <h1 class="fw-bold display-3 text-white" style="text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7);">MARIANE CARANDANG'S</h1>
    <p class="fw-semibold fs-1 text-white" style="text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7);">Island of Personality</p>
  </div>
</header>

<!-- AboutMe Section -->
<div class="w3-container w3-light-grey w3-padding-32" id="aboutme">
    <div class="w3-row" style="display: flex; justify-content: center; flex-wrap: wrap;">
        <!-- Text Column -->
        <div class="w3-col m6" style="text-align: justify;">
            <h1 class="w3-padding-16">ABOUT ME</h1>
            <h5>
              Hi, I'm Mariane Carandang, an IT student passionate about exploring the ever-evolving world of technology. My journey is not just about code and algorithms, it’s also about emotions and creativity. 
              Inspired by the four iconic emotions from Inside Out, my personality is a colorful blend.
            </h5>
            <p class="w3-text-grey w3-padding-16">
              Joy represents my love for celebrating life’s small and big moments, especially with my family, friends, and beloved, who bring light and warmth to my days. 
              Whether sharing laughter over a meal, creating unforgettable memories, or simply being with the people I cherish, they are my source of genuine happiness.
              Fear reflects the challenges that push me to embrace my adventurous side. Even though I’m afraid of heights, I still go hiking to conquer my fears and enjoy 
              breathtaking views. At the beach, I might hesitate to jump into the water, but I eventually take the leap, proving to myself that bravery is found in the little steps.
              Envy connects to my foodie personality, sparking my love for culinary adventures. I enjoy exploring creative cooking, experimenting with recipes, and capturing the beauty 
              of dishes through food photography and blogging. Seeing others excel in the culinary world motivates me to improve and savor every flavorful moment.
              Ennui ties to my entertainment personality, as moments of boredom lead me to immerse myself in movies, TV shows, and anime. These stories transport me 
              to new worlds, inspire my imagination, and often bring a sense of comfort and creativity.
              Through this website, I aim to share some of my journey, quirks, and aspirations with you as we navigate this exciting world of technology and life together.
            </p>
        </div>
        <!-- Image Column -->
        <div class="w3-col m4" style="text-align: center;">
            <img class="w3-image w3-round-large" 
                 src="https://raw.githubusercontent.com/mariane19/images/refs/heads/main/A05-img/aboutme.jpg" 
                 alt="About Me" 
                 style="width: 100%; max-width: 400px; height: auto;">
        </div>
    </div>
</div>

<!--Emotions Section-->
    <div class="w3-row-padding w3-padding-16 w3-center text-white" id="emotions" style="background-image: url(https://raw.githubusercontent.com/mariane19/images/refs/heads/main/A05-img/emotions-bg.jpg); background-repeat: no-repeat; background-size: cover;">
        <h1 class="w3-padding-16" style="text-align: center;">EMOTIONS</h1>
        <div class="w3-col s12 m6 l3">
          <img src="https://raw.githubusercontent.com/mariane19/images/refs/heads/main/A05-img/joy.jpg" alt="Description of the image" 
            style="width:100%; max-width:200px; height:200px; border-radius:50%; object-fit:cover;">
          <h3 class="pt-3">JOY</h3>
          <p>Loving Personality is about spreading warmth, kindness, and positivity, uplifting others, and leading with a compassionate heart.</p>
        </div>
        <div class="w3-col s12 m6 l3">
          <img src="https://raw.githubusercontent.com/mariane19/images/refs/heads/main/A05-img/fear.jpg" alt="Description of the image" 
            style="width:100%; max-width:200px; height:200px; border-radius:50%; object-fit:cover;">
          <h3 class="pt-3">FEAR</h3>
          <p>Adventurous Personality is about embracing challenges, exploring new horizons, and finding joy in pushing boundaries despite fears.</p>
        </div>
        <div class="w3-col s12 m6 l3">
          <img src="https://raw.githubusercontent.com/mariane19/images/refs/heads/main/A05-img/envy.jpg" alt="Description of the image" 
            style="width:100%; max-width:200px; height:200px; border-radius:50%; object-fit:cover;">
          <h3 class="pt-3">ENVY</h3>
          <p>Foodie Personality is about savoring flavors, exploring diverse cuisines, and finding joy in discovering delicious surprises, fueled by a craving for new culinary experiences.</p>
        </div>
        <div class="w3-col s12 m6 l3">
          <img src="https://raw.githubusercontent.com/mariane19/images/refs/heads/main/A05-img/ennui.jpg" alt="Description of the image" 
            style="width:100%; max-width:200px; height:200px; border-radius:50%; object-fit:cover;">
          <h3 class="pt-3">ENNUI</h3>
          <p>Entertainment Personality is my escape from boredom, finding joy and inspiration in movies, anime, and TV shows that spark creativity and adventure.</p>
        </div>
    </div>  

    <!-- Personalities Section -->
    <div class="container-fluid bg-light py-5" id="personalities">
      <h1 class="text-center w3-padding-16">MY PERSONALITIES</h1>

      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">
        <?php echo $personalities[0]['name']; ?>
      </h3>
      <div class="container-fluid py-4">
          <div class="row justify-content-center">
              <?php
              echo '<div class="container-fluid py-4">';
              echo '<div class="row justify-content-center">';
              
              foreach ($lovingContent as $index => $content) {
                  echo '<div class="col-lg-4 col-md-6 mb-4">';
                  echo '<img src="' . $content['image'] . '" class="img-fluid" alt="' . $titles[$index] . '">';
                  echo '<h3>' . $titles[$index] . '</h3>'; 
                  echo '<p>' . $content['description'] . '</p>';
                  echo '</div>';
              }
              
              echo '</div>';
              echo '</div>';
              ?>
          </div>
      </div>   
  
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">
        <?php echo $personalities[1]['name']; ?>
      </h3>
      <div class="container-fluid py-4">
          <div class="row justify-content-center">
              <?php
              echo '<div class="container-fluid py-4">';
              echo '<div class="row justify-content-center">';
              
              foreach ($adventurousContent as $index => $content) {
                  echo '<div class="col-lg-4 col-md-6 mb-4">';
                  echo '<img src="' . $content['image'] . '" class="img-fluid" alt="' . $titles[$index] . '">';
                  echo '<h3>' . $titles[$index] . '</h3>'; 
                  echo '<p>' . $content['description'] . '</p>';
                  echo '</div>';
              }
              
              echo '</div>';
              echo '</div>';
              ?>
              <!--div class="col-lg-4 col-md-6 mb-4">
                  <img src="https://raw.githubusercontent.com/mariane19/images/refs/heads/main/A05-img/adventurous/hiking.jpg" class="img-fluid" alt="Thrill-Seeking Escapades">
                  <h3>Thrill-Seeking Escapades</h3>
                  <p>Hiking on breathtaking trails, zip-lining through forests, or exploring hidden caves—your love for thrilling outdoor activities defines your adventurous spirit.</p>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                  <img src="https://raw.githubusercontent.com/mariane19/images/refs/heads/main/A05-img/adventurous/adventurous2.jpeg" class="img-fluid" alt="Cultural Explorations">
                  <h3>Cultural Explorations</h3>
                  <p>Traveling to new destinations to experience diverse cultures, cuisines, and traditions feeds your curiosity and broadens your horizons.</p>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                  <img src="https://raw.githubusercontent.com/mariane19/images/refs/heads/main/A05-img/adventurous/adventurous3.jpg" class="img-fluid" alt="Adventurous Challenges">
                  <h3>Adventurous Challenges</h3>
                  <p>Whether it's facing a fear of heights or trying an extreme sport, you embrace challenges as opportunities to grow and discover your limits.</p>
              </div-->
          </div>
      </div>
  
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">
        <?php echo $personalities[2]['name']; ?>
      </h3>
      <div class="container-fluid py-4">
          <div class="row justify-content-center">
              <?php
              echo '<div class="container-fluid py-4">';
              echo '<div class="row justify-content-center">';
              
              foreach ($foodieContent as $index => $content) {
                  echo '<div class="col-lg-4 col-md-6 mb-4">';
                  echo '<img src="' . $content['image'] . '" class="img-fluid" alt="' . $titles[$index] . '">';
                  echo '<h3>' . $titles[$index] . '</h3>'; 
                  echo '<p>' . $content['description'] . '</p>';
                  echo '</div>';
              }
              
              echo '</div>';
              echo '</div>';
              ?>
              <!--div class="col-lg-4 col-md-6 mb-4">
                  <img src="https://raw.githubusercontent.com/mariane19/images/refs/heads/main/A05-img/foodie/foodie1.jpg" class="img-fluid" alt="Culinary Adventures">
                  <h3>Culinary Adventures</h3>
                  <p>Exploring diverse cuisines, from street food to fine dining, and always being on the lookout for the next unique flavor experience.</p>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                  <img src="https://raw.githubusercontent.com/mariane19/images/refs/heads/main/A05-img/foodie/foodie2.jpg" class="img-fluid" alt="Creative Cooking">
                  <h3>Creative Cooking</h3>
                  <p>Experimenting in the kitchen with new recipes, fusion dishes, or baking creations that bring joy to you and those you share them with.</p>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                  <img src="https://raw.githubusercontent.com/mariane19/images/refs/heads/main/A05-img/foodie/foodie3.jpg" class="img-fluid" alt="Food Photography and Blogging">
                  <h3>Food Photography and Blogging</h3>
                  <p>Capturing the beauty of plated dishes and sharing your food journeys through vibrant photos, blogs, or social media posts.</p>
              </div-->
          </div>
      </div>
  
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">
      <?php echo $personalities[3]['name']; ?>
      </h3>
      <div class="container-fluid py-4">
          <div class="row justify-content-center">
              <?php
              echo '<div class="container-fluid py-4">';
              echo '<div class="row justify-content-center">';
              
              foreach ($entertainmentContent as $index => $content) {
                  echo '<div class="col-lg-4 col-md-6 mb-4">';
                  echo '<img src="' . $content['image'] . '" class="img-fluid" alt="' . $titles[$index] . '">';
                  echo '<h3>' . $titles[$index] . '</h3>'; 
                  echo '<p>' . $content['description'] . '</p>';
                  echo '</div>';
              }
              
              echo '</div>';
              echo '</div>';
              ?>
              <!--div class="col-lg-4 col-md-6 mb-4">
                  <img src="https://raw.githubusercontent.com/mariane19/images/refs/heads/main/A05-img/entertainment/entertainmet1.jpg" class="img-fluid" alt="Movies">
                  <h3>Movies</h3>
                  <p>Watching classic films, new releases, and cinematic masterpieces, whether solo or with friends, and appreciating the art of storytelling through movies.</p>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                  <img src="https://raw.githubusercontent.com/mariane19/images/refs/heads/main/A05-img/entertainment/entertainmet2.jpg" class="img-fluid" alt="TV Shows">
                  <h3>TV Shows</h3>
                  <p>Diving into binge-worthy TV series, following ongoing seasons, and discussing the latest episodes and character arcs with fellow fans.</p>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                  <img src="https://raw.githubusercontent.com/mariane19/images/refs/heads/main/A05-img/entertainment/entertainmet3.jpg" class="img-fluid" alt="Anime">
                  <h3>Anime</h3>
                  <p>Diving into the colorful world of anime, exploring iconic series, and following captivating characters and unique storylines.</p>
              </div-->
          </div>
      </div>
  </div>

    <!-- Footer -->
    <footer class="w3-center py-2" style="background-color: rgb(231 223 225);">
      <p class="pt-3">&copy Copyright 2024 All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>