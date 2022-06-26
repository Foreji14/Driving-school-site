<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scoala de soferi - Cu noi reusesti!</title>
    <link rel="stylesheet" href="stylelogin.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <?php
  include 'dbc.php';
  $error = '';
  if(isset($_POST['submit']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from user where username='".$username."';";
    $result = mysqli_query($conexiune, $query);

    if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_assoc($result);
      if(password_verify($password, $row['password']))
      {
        $_SESSION['user'] = $row['username'];
        $_SESSION['role'] = $row['id_rol'];
        $_SESSION['userid'] = $row['id'];

        header("Location: index.php");
      }
      else{
        $error = 'Wrong combination of Username/Password used!';
      }
    }
    else{
      $error = 'Wrong combination of Username/Password used!';
    }
  }
  ?>
    <section class="header">

        <nav>
            <a href="index.php"><img class= "Logo" src="images/logo1.png"> </a>
            <div class="nav-links" id="navLinks">
              <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                  <li><a href="index.php">HOME</a></li>
                  <li><a href="https://www.drpciv.ro/dlexam">CHESTIONARE</a></li>
                  <li><a href="index.php#masini">MASINI</a></li>
                  <li><a href="index.php#review">REVIEW-URI</a></li>
                  <li><a href="login.php">LOG IN</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>
    <section class="login-form">
      <form method="post" action="login.php">
        <div class="form__group">
          <div class="form__group__subgroup">
        <label for="username">Username:</label>
        <input id="username" name="username" type="text"/>
      </div>
          <div class="form__group__subgroup">
        <label for="password">Password:</label>
        <input id="password" name="password" type="password"/>
      </div>
      </div>
        <input class="submit-btn" name="submit" type="submit" value="Log In"/>
      </form>
      <?php echo '<p style="color:red">'.$error.'</p>';?>
    </section>
    <footer>
      <p><a href="https://www.facebook.com">Facebook</a></p>
      <p><a href="https://www.instagram.com">Instagram</a></p>
      <p>Author: Andries Rafael-Gabriel</p>
    </footer>
</body>
</html>
