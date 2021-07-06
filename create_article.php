<?PHP include_once("article_controller.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
    <link rel="stylesheet" href="admin_article.css" />
    <link rel="icon" href="favicon.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>

<body>

    <div class="container">

        <div class="menu">
            <ul>
                <li><a href="index_home.html">Beranda</a></li>
                <li><a href="index_profesi.html">Profesi</a></li>
                <li><a href="index_artikel.php">Tips Karier</a></li>
                <li><a href="index_sk.html">&nbspS & K</a></li>
                <li><a href="index_login_freelancer.html">Login</a></li>
            </ul>
        </div>

        <br>
        <h1>Tambahkan Artikel Baru</h1><br>

        <form action="index_artikel.html" method="POST">
            <p><b>Gambar Cover Artikel: </b><input type="file" name="gambar" required /></p>
            <p><b>Judul Artikel: </b><input type="text" name="judul" required /></p>
            <p><b>Isi Artikel: </b><textarea name="isi" rows="15" cols="90" required></textarea></p>
            <p><input type="submit" name="submit" /></p>
        </form>

    </div>

    <?php

    if (isset($_POST["submit"])) {
        $judul = $_POST["judul"];
        $gambar_cover = $_POST["gambar"];
        $isi = $_POST["isi"];

        createArticle($judul, $gambar_cover, $isi);
    }
    ?>
</body>

</html>