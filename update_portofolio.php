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
        if (isset($_GET["updateID"])) {
            $data_to_be_updated = $_GET["updateID"];
            $data = getIdPortofolio($data_to_be_updated);
        }
        ?>

        <form action="index_portofolio.php" method="POST" class="profile">
            <h1>Portofolio</h1>
            <br>
            <table>
                <tr>
                    <td class="fa">ID:</td>
                    <td>
                        <p><input type="text" name="update_id" class="form" value="<?= $data['id_portofolio'] ?>" readonly /></p>
                    </td>
                </tr>
                <tr>
                    <td class="fa">Nama Proyek:</td>
                    <td>
                        <p><input type="text" name="update_nama_proyek" class="form" value="<?= $data['nama_proyek'] ?>" /></p>
                    </td>
                </tr>
                <tr>
                    <td class="fa">Tanggal Proyek:</td>
                    <td>
                        <p><input type="date" name="update_tanggal_proyek" class="form" value="<?= $data['tanggal_proyek'] ?>" /></p>
                    </td>
                </tr>
                <tr>
                    <td class="fa">Deskripsi Proyek:</td>
                    <td>
                        <p><input type="text" name="update_deskripsi_proyek" class="form" value="<?= $data['deskripsi_proyek'] ?>" /></p>
                    </td>
                </tr>
                <tr>
                    <td class="fa">Keahlian Khusus:</td>
                    <td>
                        <p><input type="text" name="update_keahlian_khusus" class="form" value="<?= $data['keahlian_khusus'] ?>" /></p>
                    </td>
                </tr>
                <tr>
                    <td class="fa">Pencapaian</td>
                    <td>
                        <p><input type="text" name="update_pencapaian" class="form" value="<?= $data['pencapaian'] ?>" /></p>
                    </td>
                </tr>
                <tr>
                    <td class="fa">Riwayat Pendidikan: </td>
                    <td>
                        <p><input type="text" name="update_riwayat_pendidikan" required class="form" value="<?= $data['riwayat_pendidikan'] ?>" /></p>
                    </td>
                </tr>
            </table>

            <div class="tombol">
                <button type="submit" name="update_submit"><a class="buttonText">Simpan Portofolio</a></button>
            </div>
        </form>

    </div>

</body>

</html>