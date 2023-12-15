<?php
    require_once 'db_conect.php';

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";

        if(mysqli_query($conn, $sql)) {
            echo "<script>
            alert('Feedback berhasil di kirim,terimakasih atas masukkanya');
            window.location='index.php';
            </script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>