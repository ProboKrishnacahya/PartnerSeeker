<?PHP include_once("freelancer_controller.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Freelancer</title>
    <link rel="stylesheet" href="index_register_freelancer.css" />
    <link rel="stylesheet" href="layout.css" />
    <link rel="icon" href="favicon.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>

<body>

    <div class="container">

        <div class="header">
            <nav>
                <a href="index_home.html"><img class="logo" src="logo.png" /></a>
                <ul>
                    <li><a href="index_profesi.php">Profesi</a></li>
                    <li><a href="index_artikel.php">Tips Karier</a></li>
                    <li><a href="index_sk.html">&nbspS & K</a></li>
                    <li><a href="index_login_freelancer.php">Login</a></li>
                </ul>
            </nav>
        </div>

        <div class="profile">
            <form method="POST" action="index_login_freelancer.php">
                <h1>Hello!</h1><br>

                <i class="fa fa-envelope"><label>Email</label></i><br>
                <input type="email" placeholder="Type here" name="email_register" required /><br>

                <i class="fa fa-lock"><label>Password</label></i><br>
                <input type="password" placeholder="Type here" name="password_register" id="password" required /><br>

                <button type="submit" name="answerRegister" class="register"><a class="buttonText">REGISTER</a></button>
        </div>

        <br><br>
        <p class="registerHere">Sudah memiliki akun?
            <a href="index_login_freelancer.php"><b>Login di sini.</b></a>
        </p>

        <nav>
            <div class="bawah">
                © Copyright 2021, <a href="index_home.html">PartnerSeeker</a>
            </div>
        </nav>
    </div>

</body>

</html>