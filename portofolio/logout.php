<?php
// Mulai session (pastikan ini ada di bagian atas halaman sebelum tag HTML)
session_start();

// Hapus semua data session
session_unset();

// Hancurkan session
session_destroy();

// Redirect ke halaman login atau halaman lain yang sesuai

echo "<script>
                alert('anda berhasil logout');
                window.location='login.php';
                </script>";
exit();
?>
