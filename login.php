<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>

        <h4>Masuk ke laundryku</h4>
        <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username atau email" />
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" style="margin-top: 10px;"/>
            <?php

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                // Validate and sanitize user input to prevent SQL injection
                $username = mysqli_real_escape_string($conn, $username);
                $password = mysqli_real_escape_string($conn, $password);

                // Query to check if the user exists
                $query = "SELECT * FROM users WHERE (username = '$username' OR email = '$username') AND password = '$password'";
                $result = $conn->query($query);

                if ($result->num_rows == 1) {
                    // Fetch the row data
                    $row = $result->fetch_assoc();
                    
                    if ($row['usertype'] == 'admin') {
                        session_start();
                        $_SESSION["user_role"] = 'admin';
                        header("Location: indexAdmin.php");
                        exit(); // It's essential to exit after redirection
                    } elseif ($row['usertype'] == 'user') {
                        session_start();
                        $_SESSION["user_role"] = 'user';
                        header("Location: index.php");
                        exit(); // It's essential to exit after redirection
                    }
                    echo "Login successful!"; // Replace this with your desired action
                } else {

                    echo '<div class="alert alert-danger d-flex align-items-center mt-2" role="alert"><div>Email atau password salah</div></div>';
                }
            }
            ?>

        </form>
            
        </div>

        <div class="col-md-6">
            <!-- isi dengan sesuatu di sini -->
            <img src="img/laundry.png" alt="">
        </div>

    </div>
</div>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>