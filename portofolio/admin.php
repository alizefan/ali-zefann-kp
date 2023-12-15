<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Feedback</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <!-- Add this in the head of your HTML document to include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Modal for delete confirmation -->
    <div class="overlay" id="overlay"></div>
    <div class="modal" id="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <p>Are you sure you want to delete this feedback?</p>
        <form method="post" id="deleteForm">
            <input type="hidden" name="delete" id="deleteId">
            <input type="submit" value="Delete">
        </form>
    </div>

    <h2>Feedback List</h2>
</div>

<?php
include("db_conect.php");

// Delete feedback entry
if (isset($_GET['delete'])) {
    $deleteId = $_GET['delete'];

    $deleteSql = "DELETE FROM feedback WHERE id = '$deleteId'";
    $deleteQuery = mysqli_query($conn, $deleteSql);

    if ($deleteQuery === false) {
        echo 'Error: ' . mysqli_error($conn);
    } else {
        // Reset auto-increment value after deletion
        mysqli_query($conn, "ALTER TABLE feedback AUTO_INCREMENT = 1");
    }
}

// Query to retrieve feedback data
$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);

// Check if there are rows in the result
if ($result === false) {
    die("Query failed: " . $conn->error);
}

// Display feedback data
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>No</th><th>Timestamp</th><th>Nama</th><th>Email</th><th>Message</th><th>Action</th></tr>";

    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["created_at"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["message"] . "</td>";
        echo "<td>";
        echo "<a href='admin.php?delete=$row[id]' onclick='return confirm(\"Are you sure you want to delete this entry?\")'><i class='fas fa-trash-alt'></i></a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No feedback yet.";
}

mysqli_close($conn);
?>


    <script>
        function openModal(id) {
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('modal').style.display = 'block';
            document.getElementById('deleteId').value = Id;
        }

        function closeModal() {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('modal').style.display = 'none';
        }
    </script>

<div class="logout-container">
<script>
    // Fungsi untuk menampilkan dialog konfirmasi
    function confirmLogout() {
        var confirmLogout = confirm("Anda yakin ingin logout?");
        if (confirmLogout) {
            // Jika pengguna mengklik OK, kirim form dengan konfirmasi logout
            document.getElementById("logoutForm").submit();
        } else {
            // Jika pengguna mengklik Cancel, tidak lakukan apa-apa
        }
    }
</script>

<form id="logoutForm" action="logout.php" method="post">
    <button type="button" class="logoutform-btn" onclick="confirmLogout()">Logout</button>
    <input type="hidden" name="confirm_logout" value="1">
</form>

</div>
</body>
</html>
