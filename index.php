<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scoala de soferi - Cu noi reusesti!</title>
  <script src="script.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <?php
  require 'dbc.php';
  ?>
  <section class="header">

    <nav>
      <a href="index.php"><img class="Logo" src="images/logo1.png"> </a>
      <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
          <li><a href="./index.php">HOME</a></li>
          <li><a href="https://www.drpciv.ro/dlexam">CHESTIONARE</a></li>
          <li><a href="./index.php#masini">MASINI</a></li>
          <li><a href="./index.php#review">REVIEW-URI</a></li>
          <?php
          if (isset($_SESSION['user'])) if ($_SESSION['role'] == 2)
            echo '<li><a href="profesori.php">PROGRAMARI</a></li>';
          else echo '<li><a href="programare.php">CAND NE VEDEM?</a></li>';
          ?>
          <?php
          if (!isset($_SESSION['user'])) {
            echo '<li><a href="login.php">LOG IN</a></li>';
          } else {
            echo  '<li><a href="logout.php">LOG OUT</a></li>';
            if ($_SESSION['role'] == 3) {
              echo '<li><a href="add_users.php">ADD USERS</a></li>';
            }
          } ?>
        </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
  </section>

  <section id="home" class="home">
    <div class="text-box">
      <h1>Scoala de soferi Afumantii</h1>
      <p>Suntem aici ca sa predam studentilor unul dintre cele mai placute skill-uri din lume</p>
    </div>
  </section>

  <div id="masini" class="masini">
    <h1>Masinile noastre</h1>
    <div class="row">
      <div class="masini-col">
        <h3>Volkswagen</h3>
        <img src="images/masina1.jpg">
        <p>Masina manuala motor de 1.6 nu bate nu scartaie din 2004</p>
      </div>
      <div class="masini-col">
        <h3>Peugeot</h3>
        <img src="images/masina.jpg">
        <p>Masina automata motor de 1.6 nu bate nu scartaie din 2004</p>
      </div>
      <div class="masini-col">
        <h3>Fiesta</h3>
        <img src="images/masina2.jpg">
        <p>Masina manuala motor de 1.6 nu bate nu scartaie din 2004</p>
      </div>
    </div>

  </div>
  <section id="review" class="reviews">
    <h1>Clientii nostrii sunt multumiti!</h1>
    <p> <b>Convinge-te singur </b></p>
    <div class="row">
      <div class="reviews-col">
        <h3>Volkswagen</h3>
        <div>
          <img src="images/review1.jpg">
          <p>Ad occaecat minim velit anim elit duis duis ex sunt consequat pariatur. Velit proident deserunt mollit reprehenderit ipsum aute cupidatat sint in deserunt nulla ullamco nulla.</p>
        </div>
      </div>
      <div class="reviews-col">
        <h3>Peugeot</h3>
        <div>
          <img src="images/review2.jpg">
          <p>Ad occaecat minim velit anim elit duis duis ex sunt consequat pariatur. Velit proident deserunt mollit reprehenderit ipsum aute cupidatat sint in deserunt nulla ullamco nulla.</p>
        </div>
      </div>
      <div class="reviews-col">
        <h3>Fiesta</h3>
        <div>
          <img src="images/review3.jpg">
          <p>Ad occaecat minim velit anim elit duis duis ex sunt consequat pariatur. Velit proident deserunt mollit reprehenderit ipsum aute cupidatat sint in deserunt nulla ullamco nulla.</p>
        </div>
      </div>
    </div>

  </section>
  <footer>
    <p><a href="https://www.facebook.com">Facebook</a></p>
    <p><a href="https://www.instagram.com">Instagram</a></p>
    <p>Author: Andries Rafael-Gabriel</p>
  </footer>
</body>


</html>