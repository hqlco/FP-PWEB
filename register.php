<?php
  include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <p>&larr; <a href="index.php">Home</a>

        <h4>Bergabunglah diri anda ke laundryku</h4>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

        <form action="" method="POST">
          <div class="form-group">
              <label for="username">Username</label>
              <input class="form-control" type="text" name="username" placeholder="USERNAME" required>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control" type="email" name="email" placeholder="EMAIL" required>
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input class="form-control" type="password" name="password" placeholder="PASSWORD" required>
          </div>
          <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" style="margin-top: 10px;" />
          <?php
            if (isset($_POST['register'])) {
              $username = $_POST['username'];
              $email = $_POST['email'];
              $password = $_POST['password'];

              $username = mysqli_real_escape_string($conn, $username);
              $email = mysqli_real_escape_string($conn, $email);
              $password = mysqli_real_escape_string($conn, $password);

              $is_username = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
              $is_email = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

              if (mysqli_num_rows($is_username) > 0) {
                echo "<div class='col-md-10 col-sm-12 col-xs-12'>";
                echo "  <div class='alert alert-danger mt-4 ml-5' role='alert'>";
                echo "    <p><center>Username Sudah Ada</center></p>";
                echo "  </div>";
                echo "</div>";
              }
              else if (mysqli_num_rows($is_email) > 0) {
                echo "<div class='col-md-10 col-sm-12 col-xs-12'>";
                echo "  <div class='alert alert-danger mt-4 ml-5' role='alert'>";
                echo "    <p><center>Email sudah terdaftar</center></p>";
                echo "  </div>";
                echo "</div>";
              }
              else{
                $insert = mysqli_query($conn, "INSERT INTO users (id,username,email,password) 
                        VALUES (NULL, '$username', '$email', '$password')" );

                if ($insert) {
                  header("Location: login.php");
                  echo "<div class='col-md-10 col-sm-12 col-xs-12'>";
                  echo "  <div class='alert alert-primary mt-4 ml-5' role='alert'>";
                  echo "    <p><center>Data Sudah Masuk</center></p>";
                  echo "  </div>";
                  echo "</div>";
                } 
                else {
                  echo "<div class='col-md-10 col-sm-12 col-xs-12'>";
                  echo "  <div class='alert alert-danger mt-4 ml-5' role='alert'>";
                  echo "    <p><center>Data Gagal Masuk</center></p>";
                  echo "  </div>";
                  echo "</div>";
                } 
              }
            }

          ?>
        </form>
      </div>

      <div class="col-md-6">
        <img class="img img-responsive" src="img/laundry.png" />
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>