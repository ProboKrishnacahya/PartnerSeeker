<?php
function my_connectDB()
{
    $host = "localhost";
    $user = "root";
    $pwd  = "";
    $db   = "partnerseeker";

    $conn = mysqli_connect($host, $user, $pwd, $db) or die("Error connect to database");

    return $conn;
}

function my_closeDB($conn)
{
    mysqli_close($conn);
}

function readArtikel()
{
    $allData = array();
    $conn = my_connectDB();

    if ($conn != NULL) {
        $sql_query = "SELECT * FROM `artikel`";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data['id'] = $row["artikel_id"];
                $data['img1'] = $row["img1"];
                $data['judul'] = $row["judul"];
                $data['isi'] = $row["isi"];
                array_push($allData, $data);
            }
        }
    }
    my_closeDB($conn);
    return $allData;
}

function createArtikel($judul, $isi, $img1)
{
    if ($img1 != "" && $judul != "" && $isi != "") {
        $conn = my_connectDB();
        $sql_query = "INSERT INTO `artikel` (`artikel_id`, `judul`, `isi`, `img1`) 
                                       VALUES (NULL, '$judul', ' $isi', '$img1');";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
    } else {
        return "Data tidak lengkap";
    }
}

function deleteArtikel($artikel_id, $img1)
{
    if ($artikel_id > 0) {
        $conn = my_connectDB();

        if (file_exists("gambar/$img1")) {
            unlink("gambar/$img1");
        }
        $sql_query = "DELETE FROM `artikel` WHERE `artikel_id` = " . $artikel_id;
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
        return $result;
    }
}

function getArtikelWithID($artikel_id)
{
    $data = array();
    if ($artikel_id > 0) {
        $conn = my_connectDB();
        $sql_query = "SELECT * FROM `artikel` WHERE artikel_id = " . $artikel_id;
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data['id'] = $row["artikel_id"];
                $data['img1'] = $row["img1"];
                $data['judul'] = $row["judul"];
                $data['isi'] = $row["isi"];
            }
        }
        my_closeDB($conn);
        return $data;
    }
}

function updateArtikel($id, $img1, $judul, $isi)
{
    if ($id != "" && $img1 != "" && $judul != "" && $isi != "") {
        $conn = my_connectDB();
        $sql_query = "UPDATE `artikel` 
                        SET `img1` = '$img1', 
                            `judul` = '$judul', 
                            `isi` = '$isi' 
                      WHERE `artikel_id` = $id;";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
        return $result;
    }
}
