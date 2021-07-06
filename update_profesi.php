<?php include_once("profesi_controller.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartnerSeeker</title>
    <link rel="stylesheet" href="index_profesi.css"/>
    <link rel="stylesheet" href="layout.css"/>
    <link rel="icon" href="favicon.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="update_profesi.css" />
    <link rel="stylesheet" href="layout.css">
    <script src="index_website.js"></script>
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

    <?php
    if (isset($_GET["updateID"])) {
        $data_to_be_updated = $_GET["updateID"];
        $data = getIdProfesi($data_to_be_updated);
    }
    ?>
    <br><br>
    <h1>Update Data Profesi dengan ID <?= $data_to_be_updated ?></h1>

    <form action="index_profesi.php" method="POST"class="profile" enctype="multipart/form-data">
    <table>
        <tr>
            <td class="fa">ID:</td>
            <td><p><input type="text" name="update_id" value="<?= $data['id_profesi'] ?>" readonly class="form"/></p></td>
        </tr>
        <tr>
            <td class="fa">Bidang Profesi:</td>
            <td><p><input type="text" name="update_bidang_profesi" value="<?= $data['bidang_profesi'] ?>" class="form"/></p></td>
        </tr>
        <tr>
            <td class="fa">Nama Lengkap</td>
            <td><p><input type="text" name="update_nama_lengkap" value="<?= $data['nama_lengkap'] ?>" class="form"/></p></td>
        </tr>
        <tr>
            <td class="fa">Tempat Tgl Lahir:</td>
            <td><p><input type="text" name="update_tempat_tgllahir" value="<?= $data['tempat_tanggal_lahir'] ?>" class="form"/></p></td>
        </tr>
        <tr>
            <td class="fa">Domisili:</td>
            <td><p><input type="text" name="update_domisili" value="<?= $data['domisili'] ?>" class="form"/></p></td>
         </tr>
         <tr>
             <td class="fa">Email: </td>
             <td><p><input type="text" name="update_email" value="<?= $data['email'] ?>" class="form"/></p></td>
         </tr>
         <tr>
             <td class="fa">Gambar Profile</td>
             <td><p><input type="file" name="update_gambar_profile" class="form"/></p></td>
         </tr>
         
    </table>
        <button type="submit" name="update_submit"><a class="button">Perbarui Profile</a></button>
       
    </form>

</div>

</body>

</html>