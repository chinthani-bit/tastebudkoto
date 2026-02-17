<?php 
    $title = "Booking & Contact - Tastebud Koto";
    include 'db.php'; 

// Delete booking
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $pdo->exec("DELETE FROM bookings WHERE id = $id");
    header('Location: admin.php');
}

// Get all bookings
$bookings = $pdo->query("SELECT * FROM bookings ORDER BY id DESC")->fetchAll();
include 'header.php';
?>

<div class="container" style="max-width: 1000px; margin: 50px auto;">
    <h1>Manage Bookings</h1>
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #2d5a27; color: white;">
            <th style="padding: 10px;">Name</th>
            <th style="padding: 10px;">Email</th>
            <th style="padding: 10px;">Date</th>
            <th style="padding: 10px;">Guests</th>
            <th style="padding: 10px;">Action</th>
        </tr>
        <?php foreach ($bookings as $b): ?>
        <tr style="border-bottom: 1px solid #ddd;">
            <td style="padding: 10px;"><?php echo $b['name']; ?></td>
            <td style="padding: 10px;"><?php echo $b['email']; ?></td>
            <td style="padding: 10px;"><?php echo $b['booking_date']; ?></td>
            <td style="padding: 10px;"><?php echo $b['guests']; ?></td>
            <td style="padding: 10px;">
                <a href="?delete=<?php echo $b['id']; ?>" onclick="return confirm('Delete?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php include 'footer.php'; ?>