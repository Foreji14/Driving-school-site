<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scoala de soferi - Cu noi reusesti!</title>
    <link rel="stylesheet" href="stylelogin.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="profesori.css">
    <script src="script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
      require 'dbc.php';
      include 'helpers.php';
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
      <div class="tabel1">
        <table>
          <thead>
          <tr>
                <th>Studenti</th>
                <th>Luni</th>
          </tr>
        </thead>
          <?php 
          $profesor = $_SESSION['userid'];
            $luniResultat = preia_zi_profesor($profesor, 1);
            while($row = mysqli_fetch_assoc($luniResultat))
            {
              ?>
              <tr>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['hour_from'].' - '.$row['hour_to'];?></td>
              </tr>
              <?php
            }
            while(mysqli_next_result($conexiune)){;}
          ?>
      </table>

      </div>
      <div class="tabel2">
        <table>
          <thead>
          <tr>
            <th>Studenti</th>
            <th>Marti</th>
          </tr>
        </thead>
        <?php 
          $profesor = $_SESSION['userid'];
          $luniResultat = preia_zi_profesor($profesor, 2);
            while($row = mysqli_fetch_assoc($luniResultat))
            {
              ?>
              <tr>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['hour_from'].' - '.$row['hour_to'];?></td>
              </tr>
              <?php
            }
            while(mysqli_next_result($conexiune)){;}
          ?>
          
      </table>

      </div>
      <div class="tabel3">
        <table>
          <thead>
          <tr>
            <th>Studenti</th>
            <th>Miercuri</th>
          </tr>
        </thead>
        <?php 
          $profesor = $_SESSION['userid'];
          $luniResultat = preia_zi_profesor($profesor, 3);
            while($row = mysqli_fetch_assoc($luniResultat))
            {
              ?>
              <tr>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['hour_from'].' - '.$row['hour_to'];?></td>
              </tr>
              <?php
            }
            while(mysqli_next_result($conexiune)){;}
          ?>
      </table>

      </div>
      <div class="tabel4">
        <table>
          <thead>
          <tr>
            <th>Studenti</th>
            <th>Joi</th>
          </tr>
        </thead>
        <?php 
          $profesor = $_SESSION['userid'];
          $luniResultat = preia_zi_profesor($profesor, 4);
            while($row = mysqli_fetch_assoc($luniResultat))
            {
              ?>
              <tr>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['hour_from'].' - '.$row['hour_to'];?></td>
              </tr>
              <?php
            }
            while(mysqli_next_result($conexiune)){;}
          ?>
      </table>

      </div>
        
      <div class="tabel5">
        <table>
          <thead>
          <tr>
            <th>Studenti</th>
            <th>Vineri</th>
          </tr>
        </thead>
        <?php 
          $profesor = $_SESSION['userid'];
          $luniResultat = preia_zi_profesor($profesor, 5);
            while($row = mysqli_fetch_assoc($luniResultat))
            {
              ?>
              <tr>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['hour_from'].' - '.$row['hour_to'];?></td>
              </tr>
              <?php
            }
            while(mysqli_next_result($conexiune)){;}
          ?>
      </table>

      </div>
      <div class="tabel6">
        <table>
          <thead>
          <tr>
            <th>Studenti</th>
            <th>Sambata</th>
          </tr>
        </thead>
        <?php 
          $profesor = $_SESSION['userid'];
          $luniResultat = preia_zi_profesor($profesor, 6);
            while($row = mysqli_fetch_assoc($luniResultat))
            {
              ?>
              <tr>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['hour_from'].' - '.$row['hour_to'];?></td>
              </tr>
              <?php
            }
            while(mysqli_next_result($conexiune)){;}
          ?>
      </table>

      </div>

      <footer>
        <p><a href="https://www.facebook.com">Facebook</a></p>
        <p><a href="https://www.instagram.com">Instagram</a></p>
        <p>Author: Andries Rafael-Gabriel</p>
      </footer>
      
    </body>
    </html>
