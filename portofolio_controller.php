<?php
require_once("db_controller.php");

include('login_check_freelancer.php');

// function to read database data
function readPortofolio($userId)
{
    $allData = array();
    $conn = my_connectDB();

    if ($conn != NULL) {

        // ambil data portofolio yang sesuai dengan usernya
        $sql_query = "SELECT * FROM `portofolio` WHERE `user_id` = $userId";

        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // simpan data dari database ke dalam array
                $data['id_portofolio'] = $row["id_portofolio"];
                $data['nama_proyek'] = $row["nama_proyek"];
                $data['tanggal_proyek'] = $row["tanggal_proyek"];
                $data['deskripsi_proyek'] = $row["deskripsi_proyek"];
                $data['keahlian_khusus'] = $row["keahlian_khusus"];
                $data['pencapaian'] = $row["pencapaian"];
                $data['riwayat_pendidikan'] = $row["riwayat_pendidikan"];
                array_push($allData, $data);
            }
        }
    }
    my_closeDB($conn);
    return $allData;
}

// function to save data portofolio
function createPortofolio($nama_proyek, $tanggal_proyek, $deskripsi_proyek, $keahlian_khusus, $pencapaian, $riwayat_pendidikan)
{
    // cek apakah user sudah login atau belum
    if (!isset($_SESSION['user_id'])) {
        header('location:index_login_freelancer.php');
    }

    if ($nama_proyek != "" && $tanggal_proyek != "" && $deskripsi_proyek != "" && $keahlian_khusus != "" && $pencapaian != "" && $riwayat_pendidikan != "") {
        $conn = my_connectDB();

        $id = $_SESSION['user_id'];

        $sql_query = "INSERT INTO `portofolio` (`id_portofolio`, `nama_proyek`, `tanggal_proyek`, `deskripsi_proyek`, `keahlian_khusus`, `pencapaian`, `riwayat_pendidikan`, `user_id`) 
                                       VALUES (NULL, '$nama_proyek', '$tanggal_proyek', '$deskripsi_proyek', '$keahlian_khusus', '$pencapaian', ' $riwayat_pendidikan', '$id');";

        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
    } else {
        return "Data tidak lengkap";
    }
}


// function to delete data from portofolio
function deletePortofolio($id_portofolio)
{
    if ($id_portofolio > 0) {
        $conn = my_connectDB();
        $sql_query = "DELETE FROM `portofolio` WHERE `id_portofolio` = " . $id_portofolio;
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
        return $result;
    }
}

// function to getId data from portofolio
function getIdPortofolio($id_portofolio)
{
    $data = array();
    if ($id_portofolio > 0) {
        $conn = my_connectDB();
        $sql_query = "SELECT * FROM `portofolio` WHERE id_portofolio = " . $id_portofolio;
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // simpan data dari database ke dalam array
                $data['id_portofolio'] = $row["id_portofolio"];
                $data['nama_proyek'] = $row["nama_proyek"];
                $data['tanggal_proyek'] = $row["tanggal_proyek"];
                $data['deskripsi_proyek'] = $row["deskripsi_proyek"];
                $data['keahlian_khusus'] = $row["keahlian_khusus"];
                $data['pencapaian'] = $row["pencapaian"];
                $data['riwayat_pendidikan'] = $row["riwayat_pendidikan"];
            }
        }
        my_closeDB($conn);
        return $data;
    }
}

// function to update data from portofolio
function updatePortofolio($id_portofolio, $nama_proyek, $tanggal_proyek, $deskripsi_proyek, $keahlian_khusus, $pencapaian, $riwayat_pendidikan)
{
    if ($id_portofolio != "" && $nama_proyek != "" && $tanggal_proyek != "" && $deskripsi_proyek != "" && $keahlian_khusus != "" && $pencapaian != "" && $riwayat_pendidikan != "") {
        $conn = my_connectDB();
        $sql_query = "UPDATE `portofolio` 
                        SET `nama_proyek` = '$nama_proyek',
                            `tanggal_proyek` = '$tanggal_proyek',
                            `deskripsi_proyek` = '$deskripsi_proyek',
                            `keahlian_khusus` = '$keahlian_khusus',
                            `pencapaian` = '$pencapaian', 
                            `riwayat_pendidikan` = '$riwayat_pendidikan' 
                      WHERE `id_portofolio` = $id_portofolio;";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
        return $result;
    }
}
