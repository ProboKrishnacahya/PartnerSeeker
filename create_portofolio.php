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
        include_once("profesi_controller.php");

        if (isset($_POST["input_submit"])) {
            // penyimpanan data yang dikirim melalui form
            $bidang_profesi = $_POST["input_bidang_profesi"];
            $nama_lengkap = $_POST["input_nama_lengkap"];
            $tempat_tgl_lahir = $_POST["input_tempat_tgllahir"];
            $domisili = $_POST["input_domisili"];
            $email = $_POST["input_email"];
            $gambar_profile = $_FILES['gambar_profile']['name'];
            $loc1 = $_FILES['gambar_profile']['tmp_name'];
            move_uploaded_file($loc1, "gambar/" . $gambar_profile);

            createProfesi($bidang_profesi, $nama_lengkap, $tempat_tgl_lahir, $domisili, $email, $gambar_profile);
        }
        ?>

        <form action="index_portofolio.php" method="POST" class="profile">
            <h1>Portofolio</h1>
            <br>
            <table>
                <tr>
                    <td class="fa">Nama Proyek:</td>
                    <td>
                        <p><input type="text" name="input_nama_proyek" class="form" /></p>
                    </td>
                </tr>
                <tr>
                    <td class="fa">Tanggal Proyek:</td>
                    <td>
                        <p><input type="date" name="input_tanggal_proyek" class="form" /></p>
                    </td>
                </tr>
                <tr>
                    <td class="fa">Deskripsi Proyek:</td>
                    <td>
                        <p><input type="text" name="input_deskripsi_proyek" class="form" /></p>
                    </td>
                </tr>
                <tr>
                    <td class="fa">Keahlian Khusus:</td>
                    <td>
                        <p><input type="text" name="input_keahlian_khusus" class="form" /></p>
                    </td>
                </tr>
                <tr>
                    <td class="fa">Pencapaian</td>
                    <td>
                        <p><input type="text" name="input_pencapaian" class="form" /></p>
                    </td>
                </tr>
                <tr>
                    <td class="fa">Riwayat Pendidikan: </td>
                    <td>
                        <p><input type="text" name="input_riwayat_pendidikan" class="form" /></p>
                    </td>
                </tr>
            </table>

            <div class="tombol">
                <button type="submit" name="input_submit"><a class="buttonText">Simpan Portofolio</a></button>
            </div>

        </form>

        <nav class="menu">
            <div class="footer">
                © Copyright 2021, <a href="index_home.html">PartnerSeeker</a>
            </div>
        </nav>

    </div>

</body>

</html>