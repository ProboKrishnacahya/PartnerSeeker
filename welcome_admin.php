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
	<title>Read Data</title>
	<link rel="stylesheet" href="table_article.css" />
	<link rel="stylesheet" href="admin_article.css" />
	<link rel="stylesheet" href="index_login_admin.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="icon" href="favicon.png" type="image/png" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
</head>

<body>

<button class="create"><a class="indexText" href="index.php"><b>CRUD ARTICLE</b></a></button><hr>

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
				<td class="paragraf"><b><?= $barisdata["judul"] ?></b><br><br><?= $barisdata["isi"] ?></td>
			</tr>
		<?php
		}
		?>
	</table>

	<a class="scrollToTop" href="#"><i class="fa fa-arrow-up"></i></a>

</body>

</html>