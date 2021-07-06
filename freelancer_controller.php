<?php

require_once("db_controller.php");

function readFreelancer(){
    $allData = array();
    $conn = my_connectDB();

    if ($conn!=NULL){
        $sql_query = "SELECT * FROM `freelancer`";
        $result = mysqli_query($conn,$sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // simpan data dari database ke dalam array
                $data['id_freelancer'] = $row["id_freelancer"];
                $data['email'] = $row["email"];
                $data['password'] = $row["password"];
                array_push($allData, $data);
            }
        }
    }
    my_closeDB($conn);
    return $allData;
}

function createFreelancer($email, $password){
    if ($email!="" && $password!=""){
        $conn = my_connectDB();
        $sql_query = "INSERT INTO `freelancer` (`id_freelancer`, `email`, `password`) 
                                       VALUES (NULL, '$email', '$password');";

        $result = mysqli_query($conn,$sql_query) or die(mysqli_error($conn));                          
        my_closeDB($conn);
    } else {
        return "Data tidak lengkap";
    }
}
?>