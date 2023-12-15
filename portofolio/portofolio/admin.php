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

    <?php
    include("db_conect.php");

    if(isset($_GET['delete'])) {
        $deleteId = $_GET['delete'];
    
        // Debugging statement
    
        $deleteSql = "DELETE FROM feedback WHERE Id = '$deleteId'";
        // var_dump($deleteSql);
        $deleteQuery = mysqli_query($conn, $deleteSql);
    
        if ($deleteQuery === false) {
            echo 'Error: ' . mysqli_error($conn);
        } 
    }
    
    
        // Query to retrieve feedback data
        $sql = "SELECT * FROM feedback";
        $result = mysqli_query($conn, $sql);
    
        // Check if there are rows in the result
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>Name</th><th>Email</th><th>Message</th><th>Timestamp</th><th>Action</th></tr>";

            // Output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["message"] . "</td>";
                echo "<td>" . $row["created_at"] . "</td>";
                echo "<td>";
                echo "<a href=admin.php?delete=$row[id]><i class='fas fa-trash-alt'></i></a>";
                // echo $row["Id"];
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
</body>
</html>
