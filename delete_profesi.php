<?php include_once("profesi_controller.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartnerSeeker</title>
    <link rel="stylesheet" href="index_website.css" />
    <script src="index_website.js"></script>
</head>

<body>

    <?php
    $data_to_be_deteled = $_GET["deleteID"];
    $resultDelete = deleteProfesi($data_to_be_deteled, $gambar_profile);
    header('location: index_profesi.php');
    ?>

</body>

</html>