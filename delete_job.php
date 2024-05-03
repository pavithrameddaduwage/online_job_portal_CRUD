<?php
include 'db_connection.php';

// Check if ID parameter is set
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM jobs WHERE JobID = '$id'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record deleted successfully');</script>";
        echo "<script>window.location.href = 'view_jobs.php';</script>"; 
        exit();  
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "ID parameter is missing.";
}
?>
