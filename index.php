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
    <title>Read Data</title>
</head>

<body>

    <br><button class="logout"><a class="logoutText" href="logout_admin.php">Logout</a></button>
    <button class="create"><a class="indexText" href="create.php"><b>Create</b></a></button><br><br>
    <h1>CRUD All Article Data</h1>

    <table class="readAdmin">
        <tr>
            <td class="td_readAdmin"><b>ID</b></td>
            <td class="td_readAdmin"><b>Gambar Cover</b></td>
            <td class="td_readAdmin"><b>Judul</b></td>
            <td class="td_readAdmin"><b>Isi</b></td>
            <td class="td_readAdmin"><b>Update</b></td>
            <td class="td_readAdmin"><b>Delete</b></td>
        </tr>
        <?php
        $result = readArtikel();
        foreach ($result as $barisdata) {
        ?>

            <tr>
                <td class="td_readAdmin"><b><?= $barisdata["id"] ?></b></td>
                <td class="td_readAdmin"><img class="image" src="gambar/<?= $barisdata["img1"] ?>" /></td>
                <td class="td_readAdmin"><?= $barisdata["judul"] ?></td>
                <td class="paragraf"><?= $barisdata["isi"] ?></td>
                <td class="update"><a href="update.php?updateID=<?= $barisdata['id'] ?>"><b>Update</b></a></td>
                <td class="delete"><a href="delete.php?deleteID=<?= $barisdata['id'] ?>"><b>Delete</b></a></td>
            </tr>
        <?php
        }
        ?>
    </table>&emsp;

</body>

</html>