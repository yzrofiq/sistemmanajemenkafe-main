<?php
include 'koneksi.php'; // Include the database connection

// Check if the id is set in the GET request
if (isset($_GET['id'])) {
    $order_id = $_GET['id'];

    // Query to delete the method from the database
    $query = "DELETE FROM orders WHERE order_id = $order_id";

    // Execute the query
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Pesanan berhasil dihapus'); window.location.href = 'kelolapesanan.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
} else {
    echo "<script>alert('No ID specified.'); window.location.href = 'kelolapesanan.php';</script>";
}
mysqli_close($conn);
?>
