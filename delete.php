<?php include_once("controller.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Data</title>
</head>

<body>
    <h1>DELETE ARTIKEL DATA</h1>
    <?php
    $data_to_be_deleted = $_GET["deleteID"];
    $resultDelete = deleteArtikel($data_to_be_deleted, $img1);
    echo $resultDelete;
    ?>
</body>

</html>