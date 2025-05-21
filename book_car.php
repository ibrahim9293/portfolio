<?php
$conn = new mysqli("localhost", "root", "", "car_booking");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $car_id = $_POST['car_id'];
    $action = $_POST['action'];

    $status = ($action == "book") ? 1 : 0;
    $conn->query("UPDATE cars SET is_booked = $status WHERE id = $car_id");
    header("Location: book_unbook.php");
    exit();
}

$result = $conn->query("SELECT * FROM cars");
?>

<!DOCTYPE html>
<html>
<head><title>Book/Unbook Car</title></head>
<body>
<h2>Book or Unbook Car</h2>
<form method="POST">
    <label>Select Car:</label>
    <select name="car_id" required>
        <?php while($row = $result->fetch_assoc()): ?>
            <option value="<?= $row['id'] ?>">
                <?= $row['car_model'] ?> (<?= $row['is_booked'] ? 'Booked' : 'Available' ?>)
            </option>
        <?php endwhile; ?>
    </select><br><br>

    <input type="radio" name="action" value="book" required> Book
    <input type="radio" name="action" value="unbook"> Unbook<br><br>

    <input type="submit" value="Submit">
</form>
<br><a href="all_cars.php">Back to All Cars</a>
</body>
</html>
