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
    <meta name="robots" content="index, follow" />
    <title>Tips Karier</title>
    <link rel="stylesheet" href="index_artikel.css" />
    <link rel="stylesheet" href="isi_artikel.css" />
    <link rel="stylesheet" href="layout.css" />
    <link rel="stylesheet" href="table_article.css" />
    <link rel="stylesheet" href="admin_article.css" />
    <link rel="stylesheet" href="index_login_admin.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="icon" href="favicon.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
</head>

<?php include_once("controller.php"); ?>

<body>
    <div class="container">

        <div class="header">
            <nav class="navi">
                <a href="index_home.html"><img class="beranda" src="logo.png" /></a>
                <ul>
                    <li><a href="index_profesi.html">Profesi</a></li>
                    <li><a class="active" href="index_artikel.php">Tips Karier</a></li>
                    <li><a href="index_sk.html">&nbspS & K</a></li>
                    <li><a href="index_login_freelancer.php">Login</a></li>
                </ul>
            </nav>
        </div>
        <table>
            <?php
            $result = readArtikel();
            foreach ($result as $barisdata) {
            ?>
                <tr>
                    <td><b><?= $barisdata["id"] ?></b></td>
                </tr>
                <tr>
                    <td><img src="gambar/<?= $barisdata["img1"] ?>" /></td>
                </tr>
                <tr>
                    <td class="paragraf"><b><?= $barisdata["judul"] ?></b><br><br>
                        <details>
                            <summary>Read More..</summary><br><?= $barisdata["isi"] ?>
                        </details>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>

        <a class="scrollToTop" href="#"><i class="fa fa-arrow-up"></i></a>

    </div>
    <nav class="menu">
        <div class="footer">
            © Copyright 2021, <a href="index_home.html">PartnerSeeker</a>
        </div>
    </nav>

    </div>

</body>

</html>