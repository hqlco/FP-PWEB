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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      color: #333;
    }

    .container {
      max-width: 1200px;
      margin: 50px auto;
      background: #fff;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .btn {
      background-color: #007bff;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    .alert {
      padding: 10px;
      background-color: #f44336;
      color: white;
      margin-top: 15px;
    }
  </style>
</head>

<body class="bg-light">

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">

        <p>&larr; <a href="index.php"><i class="fas fa-home"></i> Home</a></p>

        <h4>Bergabunglah diri anda ke laundryku</h4>
        <p>Sudah punya akun? <a href="login.php"><i class="fas fa-sign-in-alt"></i> Login di sini</a></p>
        <!-- Registration Response Modal -->
        <div class="modal fade" id="registrationResponseModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Registration Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="registrationResponse">
                <p>Registration Successful!</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <form action="" method="POST">

          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" placeholder="USERNAME" />
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" placeholder="EMAIL" />
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" placeholder="PASSWORD" />
          </div>

          <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" style="margin-top: 10px;" />
          <?php

          if (isset($_POST['register'])) {

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];


            $insert = mysqli_query($conn, "INSERT INTO users (id,username,email,password) VALUES (
                NULL,
                '$username',
                '$email',
                '$password'
                )");

            // if ($insert) {
            //   // If registration is successful
            //   echo "<script>alert('Registration Successful!');</script>";
            // } else {
            //   // If registration fails
            //   echo "<script>alert('Registration Failed!');</script>";
            // }
            // if ($insert) {
            //   echo "<script type='text/javascript'>
            //           $(document).ready(function(){
            //               $('#registrationResponse').html('<p>Registration Successful!</p>');
            //               $('#registrationResponseModal').modal('show');
            //           });
            //         </script>";
            // } else {
            //   echo "<script type='text/javascript'>
            //           $(document).ready(function(){
            //               $('#registrationResponse').html('<p>Registration Failed. Please try again.</p>');
            //               $('#registrationResponseModal').modal('show');
            //           });
            //         </script>";
            // }

            if ($insert) {
              // header("Location: login.php");
              echo "<div class='col-md-10 col-sm-12 col-xs-12'>";
              echo "<div class='alert alert-primary mt-4 ml-5' role='alert'>";
              echo "<p><center>Data Sudah Masuk</center></p>";
              echo   "</div>";
              echo "</div>";
            } else {
              echo "<div class='col-md-10 col-sm-12 col-xs-12'>";
              echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
              echo "<p><center>Data Gagal Masuk</center></p>";
              echo   "</div>";
              echo "</div>";
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>