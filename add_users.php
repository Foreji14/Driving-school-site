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
    $query = 'select * from role';
    $result = mysqli_query($conexiune, $query);
    $roles_result = $result;
  if(isset($_POST['submit']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $query = "select * from user where username='".$username."';";
    $result = mysqli_query($conexiune, $query);

    if(mysqli_num_rows($result) > 0){
      $error = 'This user already exists!';
    }
    else{
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);


        $query = "insert into user(id_rol, username, password) values('$role','$username','$hashed_password')";
        $result = mysqli_query($conexiune, $query);

        header("Location: index.php");
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
    <section class="login-form">
      <form method="post" action="add_users.php">
        <div class="form__group">
          <div class="form__group__subgroup">
        <label for="role">Role:</label>
        <select id="role" name="role" type="text">
            <?php
            while($role = mysqli_fetch_assoc($roles_result))
                echo '<option value="'.$role['id'].'">'.$role['denumire'].'</option>' 
            ?>
        </select>
      </div>
          <div class="form__group__subgroup">
        <label for="username">Username:</label>
        <input id="username" name="username" type="text"/>
      </div>
          <div class="form__group__subgroup">
        <label for="password">Password:</label>
        <input id="password" name="password" type="password"/>
      </div>
      </div>
        <input class="submit-btn" name="submit" type="submit" value="Add"/>
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
