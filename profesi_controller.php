<?php
require_once("db_controller.php");

include('login_check_freelancer.php');

// function to read database data
function readProfesi()
{
    $allData = array();
    $conn = my_connectDB();

    if ($conn != NULL) {

        // cek apakah user sudah login
        if (isset($_SESSION['user_id'])) {
            // jika sudah login maka tampilkan profesi sesuai usernya
            $id = $_SESSION['user_id'];
            $sql_query = "SELECT * FROM `profesi` WHERE `user_id` = $id";
        } else {
            // jika belum login maka tampilkan semua profesi
            $sql_query = "SELECT * FROM `profesi`";
        }

        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // simpan data dari database ke dalam array
                $data['id_profesi'] = $row["id_profesi"];
                $data['bidang_profesi'] = $row["bidang_profesi"];
                $data['nama_lengkap'] = $row["nama_lengkap"];
                $data['tempat_tanggal_lahir'] = $row["tempat_tanggal_lahir"];
                $data['domisili'] = $row["domisili"];
                $data['email'] = $row["email"];
                $data['gambar_profile'] = $row["gambar_profile"];
                $data['user_id'] = $row["user_id"];
                array_push($allData, $data);
            }
        }
    }
    my_closeDB($conn);
    return $allData;
}

// function to save data profesi
function createProfesi($bidang_profesi, $nama_lengkap, $tempat_tanggal_lahir, $domisili, $email, $gambar_profile)
{
    // cek apakah user sudah login atau belum
    if (!isset($_SESSION['user_id'])) {
        header('location:index_login_freelancer.php');
    }

    if ($bidang_profesi != "" && $nama_lengkap != "" && $tempat_tanggal_lahir != "" && $domisili != "" && $email != "" && $gambar_profile != "") {
        $conn = my_connectDB();

        $id = $_SESSION['user_id'];

        $sql_query = "INSERT INTO `profesi` (`id_profesi`, `bidang_profesi`, `nama_lengkap`, `tempat_tanggal_lahir`, `domisili`, `email`, `gambar_profile`,`user_id`)
                                       VALUES (NULL, '$bidang_profesi', '$nama_lengkap', '$tempat_tanggal_lahir', '$domisili', '$email', '$gambar_profile', '$id');";

        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
    } else {
        return "Data tidak lengkap";
    }
}

// function delete data profesi
function deleteProfesi($id_profesi)
{
    if ($id_profesi > 0) {
        $conn = my_connectDB();
        $sql_query = "DELETE FROM `profesi` WHERE `id_profesi` = " . $id_profesi;
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
        return $result;
    }
}

// function getId data profesi
function getIdProfesi($id_profesi)
{
    $data = array();
    if ($id_profesi > 0) {
        $conn = my_connectDB();
        $sql_query = "SELECT * FROM `profesi` WHERE id_profesi = " . $id_profesi;
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // simpan data dari database ke dalam array
                $data['id_profesi'] = $row["id_profesi"];
                $data['bidang_profesi'] = $row["bidang_profesi"];
                $data['nama_lengkap'] = $row["nama_lengkap"];
                $data['tempat_tanggal_lahir'] = $row["tempat_tanggal_lahir"];
                $data['domisili'] = $row["domisili"];
                $data['email'] = $row["email"];
                $data['gambar_profile'] = $row["gambar_profile"];
            }
        }
        my_closeDB($conn);
        return $data;
    }
}

// function update data profesi
function updateProfesi($id_profesi, $bidang_profesi, $nama_lengkap, $tempat_tanggal_lahir, $domisili, $email, $gambar_profile)
{
    if ($id_profesi != "" && $bidang_profesi != "" && $nama_lengkap != "" && $tempat_tanggal_lahir != "" && $domisili != "" && $email != "" && $gambar_profile != "") {
        $conn = my_connectDB();
        $sql_query = "UPDATE `profesi` 
                        SET `bidang_profesi` = '$bidang_profesi',
                            `nama_lengkap` = '$nama_lengkap',
                            `tempat_tanggal_lahir` = '$tempat_tanggal_lahir',
                            `domisili` = '$domisili',
                            `email` = '$email', 
                            `gambar_profile`= '$gambar_profile',
                      WHERE `id_profesi` = $id_profesi;";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
        return $result;
    }
}
