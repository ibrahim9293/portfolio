<?php
$conn = new mysqli("localhost", "root", "", "car_booking");

$result = $conn->query("SELECT * FROM cars");
?>

<!DOCTYPE html>
<html>
<head><title>All Cars</title></head>
<body>
<h2>All Cars</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Model</th>
        <th>Status</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['car_model'] ?></td>
        <td><?= $row['is_booked'] ? 'Booked' : 'Available' ?></td>
    </tr>
    <?php endwhile; ?>
</table>
<br><a href="book_unbook.php">Book/Unbook Car</a> | <a href="manage_cars.php">Add/Remove Car</a>
</body>
</html>

