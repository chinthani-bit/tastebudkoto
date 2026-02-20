<?php 
$title = "Manage Bookings - Tastebud Koto";
include 'db.php'; 

// DELETE booking
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM bookings WHERE id = $id");
    header('Location: admin.php');
    exit;
}

// READ all bookings
$result = $conn->query("SELECT * FROM bookings ORDER BY id DESC");
$bookings = [];
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $bookings[] = $row;
    }
}

include 'header.php';
?>

<div class="container" style="max-width: 1000px; margin: 50px auto;">
    <h1 style="color: #2d5a27;">Manage Bookings</h1>
    
    <?php if (count($bookings) > 0): ?>
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr style="background: #2d5a27; color: white;">
                <th style="padding: 10px; text-align: left;">Name</th>
                <th style="padding: 10px; text-align: left;">Email</th>
                <th style="padding: 10px; text-align: left;">Date</th>
                <th style="padding: 10px; text-align: left;">Guests</th>
                <th style="padding: 10px; text-align: left;">Action</th>
            </tr>
            <?php foreach ($bookings as $b): ?>
            <tr style="border-bottom: 1px solid #ddd;">
                <td style="padding: 10px;"><?php echo htmlspecialchars($b['name']); ?></td>
                <td style="padding: 10px;"><?php echo htmlspecialchars($b['email']); ?></td>
                <td style="padding: 10px;"><?php echo $b['booking_date']; ?></td>
                <td style="padding: 10px;"><?php echo $b['guests']; ?></td>
                <td style="padding: 10px;">
                    <a href="?delete=<?php echo $b['id']; ?>" 
                       onclick="return confirm('Are you sure you want to delete this booking?')"
                       style="color: #dc3545; text-decoration: none;">
                        Delete
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p style="margin-top: 20px;">No bookings yet.</p>
    <?php endif; ?>
    
    <p style="margin-top: 20px;">
        <a href="contact.php">← Back to Booking Form</a>
    </p>
</div>

<?php include 'footer.php'; ?>