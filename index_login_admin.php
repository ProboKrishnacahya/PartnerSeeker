<?php include_once("admin_controller.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="PartnerSeeker, Freelancer, Pekerja Lepas" />
    <meta name="description" content="Website yang menjembatani pihak freelancer dengan pihak klien agar dapat saling bekerja sama sesuai kebutuhan proyek." />
    <meta name="author" content="PartnerSeeker" />
    <meta name="owner" content=" Vanness Zhong Anthony X Probo Krishnacahya X Nathanael Abel Arianto | V.P.N Team" />
    <meta name="robots" content="index, follow"/>
    <title>Login Admin</title>
    <link rel="stylesheet" href="index_login_admin.css" />
    <link rel="stylesheet" href="layout.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="icon" href="favicon.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
</head>

<body>

<div class="container">

        <div class="header">
            <nav>
                <a href="index_home.html"><img class="logo" src="logo.png" /></a>
                <ul>
                    <li><a href="index_profesi.html">Profesi</a></li>
                    <li><a href="index_artikel.php">Tips Karier</a></li>
                    <li><a href="index_sk.html">&nbspS & K</a></li>
                    <li><a href="index_login_freelancer.php">Login</a></li>
                </ul>
            </nav>
        </div>

        <div class="profile">
            <form action="index_login_admin.php" method="POST">
                <h1>Welcome Back!</h1><br>

                <i class="fa fa-user"><label>Username</label></i><br>
                <input type="text" placeholder="Type here" name="email" required /><br>

                <i class="fa fa-lock"><label>Password</label></i><br>
                <input type="password" placeholder="Type here" name="pwd" id="pwd" required /><br>

                <button type="submit" name="submit"><a class="buttonText" href="create_article.php">LOGIN</a></button>
        </div>

        <nav class="menu">
            <div class="bawah">
                © Copyright 2021, <a href="index_home.html">PartnerSeeker</a>
            </div>
        </nav>
    </div>
    
    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['uname'];
        $pwd = $_POST['pwd'];
        if ($username == "Krishna" && $pwd == "12345") {
            $login = "Login Berhasil";
        } else {
            $login = "Login Gagal";
        }
        echo $login;
    }
    ?>

    </form>

</body>

</html>