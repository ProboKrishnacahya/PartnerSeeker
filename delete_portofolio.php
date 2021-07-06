<?php include_once("portofolio_controller.php"); ?>
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
    $resultDelete = deletePortofolio($data_to_be_deteled);
    header('location: index_portofolio.php');
    ?>

</body>

</html>