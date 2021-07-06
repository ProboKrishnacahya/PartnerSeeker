<?php include_once("profesi_controller.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartnerSeeker</title>
    <link rel="stylesheet" href="index_profesi.css" />
    <link rel="stylesheet" href="layout.css" />
    <link rel="icon" href="favicon.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>

<body>

    <?php
    if (isset($_POST["update_submit"])) {
        $id_profesi = $_POST["update_id"];
        $bidang_profesi = $_POST["update_bidang_profesi"];
        $nama_lengkap = $_POST["update_nama_lengkap"];
        $tempat_tanggal_lahir = $_POST["update_tempat_tgllahir"];
        $domisili = $_POST["update_domisili"];
        $email = $_POST["update_email"];


        $gambar_profile = $_FILES['update_gambar_profile']['name'];
        $loc1 = $_FILES['update_gambar_profile']['tmp_name'];

        // mengambil informasi file yang diupload
        $pathInfo = pathinfo($_FILES["update_gambar_profile"]["name"]);

        // modifikasi nama file supaya bersifat unique
        $image_name = $pathInfo['filename'] . '_' . time() . '.' . $pathInfo['extension'];

        // modifikasi path file
        $image_path = 'gambar/' . $image_name;

        // upload file ke server
        move_uploaded_file($loc1, $image_path);

        // memasukkan data ke database
        $result = updateProfesi($id_profesi, $bidang_profesi, $nama_lengkap, $tempat_tanggal_lahir, $domisili, $email, $image_name);
    }
    ?>

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
        $result = readProfesi();
        foreach ($result as $barisdata) {
        ?>

            <div class="profile">
                <img class="profile_picture" src="gambar/<?= $barisdata["gambar_profile"] ?>" />
                <h4 class="kategori"><?= $barisdata["bidang_profesi"] ?></h4>
                <li><i class="fa fa-user"></i><?= $barisdata["nama_lengkap"] ?></li>
                <li><i class="fa fa-calendar-alt"></i><?= $barisdata["tempat_tanggal_lahir"] ?></li>
                <li><i class="fa fa-map-marker-alt"></i><?= $barisdata["domisili"] ?></li>
                <li><i class="fa fa-envelope"></i><?= $barisdata["email"] ?></li>
                <hr>
                <a class="lihat" href="index_portofolio.php?userId=<?php echo $barisdata["user_id"]; ?>">
                    <h3>Lihat Portofolio</h3>
                </a>
                <br><br>
                <?php
                if (isset($_SESSION['email'])) { ?>
                    <a class="del" href="delete_profesi.php?deleteID=<?= $barisdata['id_profesi'] ?>">Hapus Profesi</a>
                    <a class="update" href="update_profesi.php?updateID=<?= $barisdata['id_profesi'] ?>">Update Profesi</a>
                    <button class="logout"><a class="logoutText" href="logout_freelancer.php">Logout</a></button>
                <?php
                }
                ?>
            </div>

        <?php
        }
        ?>

        <nav class="menu">
            <div class="footer">
                © Copyright 2021, <a href="index_home.html">PartnerSeeker</a>
            </div>
        </nav>

    </div>

</body>

</html>