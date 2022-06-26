<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scoala de soferi - Cu noi reusesti!</title>
  <link rel="stylesheet" href="stylelogin.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="programare.css">
  <script src="script.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <section class="header">
    <?php
    require 'dbc.php';
    if (isset($_POST['submit'])) {
      $ziua = $_POST['ziua'];
      $interval = $_POST['interval'];

      $student = $_SESSION['userid'];

      $formattedInterval = substr($interval, 0, 2);
      $intervalIdQuery = "SELECT * from scoala.interval where hour_from='$formattedInterval'";
      $intervalResult = mysqli_query($conexiune, $intervalIdQuery);
      $interval = mysqli_fetch_assoc($intervalResult)['id'];

      $teacherIdQuery = "SELECT * from user where id_rol = 2 order by id desc limit 1";
      $teacherResult = mysqli_query($conexiune, $teacherIdQuery);
      $teacher = mysqli_fetch_assoc($teacherResult)['id'];


      $query = "insert into appointment(id_student, id_teacher, ziua, id_stare, id_interval)
      values('$student', '$teacher', '$ziua', 1, '$interval')";

      $result = mysqli_query($conexiune, $query);

      header("Location: index.php");
    }
    ?>
    <nav>
      <a href="index.php"><img class="Logo" src="images/logo1.png"> </a>
      <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="https://www.drpciv.ro/dlexam">CHESTIONARE</a></li>
          <li><a href="index.php#masini">MASINI</a></li>
          <li><a href="index.php#review">REVIEW-URI</a></li>
          <li><a href="programare.php">CAND NE VEDEM?</a></li>
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
  <section class="tabel">
    <form action="programare.php" method="post">

      <table>
        <thead>
          <tr>
            <th>Luni</th>
            <th>Marti</th>
            <th>Miercuri</th>
            <th>Joi</th>
            <th>Vineri</th>
            <th>Sambata</th>
          </tr>
        </thead>
        <tr>
          <div id="ora8">
            <td id="luni" onclick="cerere('yellow',this)">08 - 10</td>
            <td id="marti" onclick="cerere('yellow',this)">08 - 10</td>
            <td id="miercuri" onclick="cerere('yellow',this)">08 - 10</td>
            <td id="joi" onclick="cerere('yellow',this)">08 - 10</td>
            <td id="vineri" onclick="cerere('yellow',this)">08 - 10</td>
            <td id="sambata" onclick="cerere('yellow',this)">08 - 10</td>
          </div>
        </tr>
        <tr>
          <div id="ora10">
            <td id="luni1" onclick="cerere('yellow',this)">10 - 12</td>
            <td id="marti1" onclick="cerere('yellow',this)">10 - 12</td>
            <td id="miercuri1" onclick="cerere('yellow',this)">10 - 12</td>
            <td id="joi1" onclick="cerere('yellow',this)">10 - 12</td>
            <td id="vineri1" onclick="cerere('yellow',this)">10 - 12</td>
            <td id="sambata1" onclick="cerere('yellow',this)">10 - 12</td>
          </div>
        </tr>
        <tr>
          <div id="ora12">
            <td id="luni2" onclick="cerere('yellow',this)">12 - 14</td>
            <td id="marti2" onclick="cerere('yellow',this)">12 - 14</td>
            <td id="miercuri2" onclick="cerere('yellow',this)">12 - 14</td>
            <td id="joi2" onclick="cerere('yellow',this)">12 - 14</td>
            <td id="vineri2" onclick="cerere('yellow',this)">12 - 14</td>
            <td id="sambata2" onclick="cerere('yellow',this)">12 - 14</td>
          </div>
        </tr>
        <tr>
          <div id="ora14">
            <td id="luni3" onclick="cerere('yellow',this)">14 - 16</td>
            <td id="marti3" onclick="cerere('yellow',this)">14 - 16</td>
            <td id="miercuri3" onclick="cerere('yellow',this)">14 - 16</td>
            <td id="joi3" onclick="cerere('yellow',this)">14 - 16</td>
            <td id="vineri3" onclick="cerere('yellow',this)">14 - 16</td>
            <td id="sambata3" onclick="cerere('yellow',this)">14 - 16</td>
          </div>
        </tr>
        <?php
        if ($_SESSION['role'] == 3) {
        ?>
          <td colspan="6">
            <?php
            echo '<a href="programare.php">Reset</a>';
            ?>
          </td>
        <?php
        }
        ?>
      </table>
      <input id="ziua" type="hidden" name="ziua" value="" />
      <input id="interval" type="hidden" name="interval" value="" />
      <input type="submit" value="Programeaza-ma" name="submit">
    </form>

  </section>

  <footer>
    <p><a href="https://www.facebook.com">Facebook</a></p>
    <p><a href="https://www.instagram.com">Instagram</a></p>
    <p>Author: Andries Rafael-Gabriel</p>
  </footer>
</body>

</html>