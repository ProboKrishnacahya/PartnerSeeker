<?php include_once("profesi_controller.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartnerSeeker</title>
    <link rel="stylesheet" href="create_profesi.css" />
    <link rel="stylesheet" href="layout.css">
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
                <li><a class="active" href="index_login_freelancer.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </nav>

    <form action="create_portofolio.php" method="POST" enctype="multipart/form-data" class="profile">
    <h1>Profile</h1>
    <br><br>
    <table>
        <tr>
            <td class="fa">Bidang Profesi:</td>
            <td><p><input type="text" name="input_bidang_profesi" class="form"/></p></td>
        </tr>
        <tr>
            <td class="fa">Nama Lengkap:</td>
            <td><p><input type="text" name="input_nama_lengkap" class="form"/></p></td>
        </tr>
        <tr>
            <td class="fa">Tempat Tgl Lahir:</td>
            <td><p><input type="text" name="input_tempat_tgllahir" class="form"/></p></td>
        </tr>
        <tr>
            <td class="fa">Domisili:</td>
            <td> <p><input type="text" name="input_domisili" class="form"/></p></td>
        </tr>
        <tr>
            <td class="fa">Email</td>
            <td> <p><input type="text" name="input_email" class="form"/></p></td>
         </tr>
         <tr>
             <td class="fa">Gambar Profile: </td>
             <td><p><input type="file" name="gambar_profile" class="form"/></p></td>
         </tr>
         
    </table>
    <button type="submit" name="input_submit"><a class="button">Lanjut Ke Portofolio</a></button>
    </form>

    

    </div>

</body>

</html>