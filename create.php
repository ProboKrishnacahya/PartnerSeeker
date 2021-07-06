<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: index_akun_admin.php");
}
?>

<?php include_once("controller.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="table_article.css" />
    <link rel="stylesheet" href="admin_article.css" />
    <link rel="stylesheet" href="index_login_admin.css" />
    <link rel="icon" href="favicon.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Create Data</title>
</head>

<body>
    <br>
    <h1>CREATE ARTICLE</h1>

    <form action="create.php" method="POST" enctype="multipart/form-data">
        <p class="create.p">Gambar Cover: <input type="file" name="input_gambar_cover" required /></p>
        <p class="create.p">Judul: <input type="text" name="input_judul" required /></p>
        <p class="create.p">Isi: <textarea name="input_isi" rows="15" cols="90" required></textarea></p>
        <p class="create.p"><input type="submit" name="input_submit" required /></p>
    </form>

    <?php

    if (isset($_POST["input_submit"])) {
        // $gambar_cover = $_POST["input_gambar_cover"];
        $judul = $_POST["input_judul"];
        $isi = $_POST["input_isi"];

        $img1 = $_FILES['input_gambar_cover']['name'];
        $loc1 = $_FILES['input_gambar_cover']['tmp_name'];

        $pathInfo = pathinfo($_FILES["input_gambar_cover"]["name"]);
        $image_name = $pathInfo['filename'] . '_' . time() . '.' . $pathInfo['extension'];
        $image_path = 'gambar/' . $image_name;

        if (!file_exists('gambar')) {
            mkdir('gambar', 0777, true);
        }

        move_uploaded_file($loc1, $image_path);

        createArtikel($judul, $isi, $image_name);
    }
    ?>
</body>

</html>