<?php include_once("portofolio_controller.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartnerSeeker</title>
    <link rel="stylesheet" href="index_portofolio.css" />
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
                    <li><a href="index_login_freelancer.php">Login</a></li>
                </ul>
            </nav>
        </div>

        <?php

        if (isset($_POST["update_submit"])) {
            // penyimpanan data yang dikirim melalui form
            $id = $_POST["update_id"];
            $nama_proyek = $_POST["update_nama_proyek"];
            $tanggal_proyek = $_POST["update_tanggal_proyek"];
            $deskripsi_proyek = $_POST["update_deskripsi_proyek"];
            $keahlian_khusus = $_POST["update_keahlian_khusus"];
            $pencapaian = $_POST["update_pencapaian"];
            $riwayat_pendidikan = $_POST["update_riwayat_pendidikan"];

            $result = updatePortofolio($id, $nama_proyek, $tanggal_proyek, $deskripsi_proyek, $keahlian_khusus, $pencapaian, $riwayat_pendidikan);
        }

        if (isset($_POST["input_submit"])) {
            // penyimpanan data yang dikirim melalui form
            $nama_proyek = $_POST["input_nama_proyek"];
            $tanggal_proyek = $_POST["input_tanggal_proyek"];
            $deskripsi_proyek = $_POST["input_deskripsi_proyek"];
            $keahlian_khusus = $_POST["input_keahlian_khusus"];
            $pencapaian = $_POST["input_pencapaian"];
            $riwayat_pendidikan = $_POST["input_riwayat_pendidikan"];

            createPortofolio($nama_proyek, $tanggal_proyek, $deskripsi_proyek, $keahlian_khusus, $pencapaian, $riwayat_pendidikan);
        }

        if (isset($_GET['userId'])) {
            $userId = $_GET['userId'];
        ?>

            <div class="contentPortofolio">

                <?php
                $result = readPortofolio($userId);

                foreach ($result as $barisdata) {
                ?>  
                    <p class="title"><b>Nama Proyek</b></p><br>
                    <?= $barisdata["nama_proyek"] ?><br><br><br>
                    <p class="title"><b>Tanggal Proyek</b></p><br>
                    <?= $barisdata["tanggal_proyek"] ?><br><br><br>
                    <p class="title"><b>Deskripsi Proyek</b></p><br>
                    <?= $barisdata["deskripsi_proyek"] ?><br><br><br>
                    <p class="title"><b>Keahlian Khusus</b></p><br>
                    <?= $barisdata["keahlian_khusus"] ?><br><br><br>
                    <p class="title"><b>Pencapaian</b></p><br>
                    <?= $barisdata["pencapaian"] ?><br><br><br>
                    <p class="title"><b>Riwayat Pendidikan</b></p><br>
                    <?= $barisdata["riwayat_pendidikan"] ?><br><br><br>

                    <?php
                    if (isset($_SESSION['email'])) { ?>
                        <button class="buttonUpdate"><a href="update_portofolio.php?updateID=<?= $barisdata['id_portofolio'] ?>">Update Portofolio</a></button>&emsp;&emsp;
                        <button class="buttonDelete"><a href="delete_portofolio.php?deleteID=<?= $barisdata['id_portofolio'] ?>">Hapus Portofolio</a></button><br><br>
                        <button class="logout"><a href="logout_freelancer.php">Logout</a></button>
                    <?php
                    }
                    ?>

            </div>

            <br><br>
    <?php
                }
            }
    ?>

    </div>

</body>

</html>