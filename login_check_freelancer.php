<?php
    session_start();

    if (isset($_POST['submitProfesi'])) {

        include("db_controller.php");

        $conn = my_connectDB();
        
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $sql = mysqli_query($conn, "Select * from freelancer where email = '$email' and password = '$password' ");

        $cek = mysqli_num_rows($sql);
        
        if ($cek > 0) {
            $row = $sql->fetch_assoc();
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['user_id'] = $row['id_freelancer'];

            header('location: create_profesi.php');
        } else {
            echo "<p align=center><br> Email dan Password salah ! </b></p>";
            header('location: index_login_freelancer.php');
        }
    }
?>