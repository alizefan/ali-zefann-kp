<?php
include 'db_conect.php';

            $username = $_POST['username'];
            $password=$_POST['password'];

            $sql = "SELECT * FROM login WHERE username = ? AND password = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            mysqli_close($conn);
            
            if (mysqli_num_rows($result) > 0) {
                // Login berhasil
                echo "<script>
                alert('login berhasil');
                window.location='admin.php';
                </script>";
            } else {
                // Login gagal
                echo "<script>
                alert('login gagal,username atau password anda salah');
                window.location='login.php';
                </script>";
            }
?>
