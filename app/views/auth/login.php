<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASEURL?>/css/bootstrap.min.css">
    <!-- mycss -->
    <link rel="stylesheet" href="<?= BASEURL?>/css/my.css">
    <title>Halaman Login</title>
</head>

<body class="colornav">
    <section>
        <div class="container">
        <div class="row  h-100 justify-content-center" style="margin-top: 19%;">
            <div class="col-md-4">

            </div>
            <div class="col-md-4 bg-light">
                <h3 class="text-center mt-3 mb-4 text-muted">Login Admin</h3>
                <form action="" class="large ml-3 mr-3" method="POST">
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" id="email" placeholder="username" style="border-radius: 10px;">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" id="password" placeholder="password" style="border-radius: 10px;">
                    </div>
                    <button name="submit" type="submit" class="btn mb-4 text-light" style="width: 100%; background-color: rgb(15, 182, 140); border-radius : 10px;">masuk</button>
                </form>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        </div>
    </section>
<?php 
 
    include 'config.php';
    
    error_reporting(0);
    
    session_start();
    
    if (isset($_SESSION['username'])) {
        header("Location:".BASEURL."/dashboard");
    }
    
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
    
        $sql = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($koneksi, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
            header("Location:".BASEURL."/dashboard");
        } else {
            echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
        }
    }
 
?>
