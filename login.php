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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
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

<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

                <p>&larr; <a href="index.php"><i class="fas fa-home"></i> Home</a></p>


                <h4>Masuk ke laundryku</h4>
                <p>Belum punya akun? <a href="register.php"><i class="fas fa-user-plus"></i> Daftar di sini</a></p>


                <form action="" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username atau email" required>
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" required>
            </div>

                    <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" style="margin-top: 10px;" />
                    <?php

                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                $username = mysqli_real_escape_string($conn, $username);
                $password = mysqli_real_escape_string($conn, $password);

                $query = "SELECT * FROM users WHERE (username = '$username' OR email = '$username') AND password = '$password'";
                $result = $conn->query($query);

                if ($result->num_rows == 1) {
                    $user = $result->fetch_assoc();
                    session_start();             
                    $_SESSION["user_role"] = $user['usertype'];
                    header("Location: index.php");
                    exit();
                    echo "Login successful!";
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