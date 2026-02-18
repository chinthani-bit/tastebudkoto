<?php
$title = "Manage Orders - Tastebud Koto";
include 'db.php';

// DELETE order
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM orders WHERE id = $id");
    header('Location: admin-orders.php');
}

// READ all orders
$result = $conn->query("SELECT * FROM orders ORDER BY order_date DESC");
$orders = [];
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $orders[] = $row;
    }
}

include 'header.php';
?>

<div style="max-width: 1000px; margin: 50px auto; padding: 20px;">
    <h1 style="color: #2d5a27;">Manage Orders</h1>
    
    <?php if (count($orders) > 0): ?>
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr style="background: #2d5a27; color: white;">
                <th style="padding: 10px;">Name</th>
                <th style="padding: 10px;">Email</th>
                <th style="padding: 10px;">Product</th>
                <th style="padding: 10px;">Qty</th>
                <th style="padding: 10px;">Date</th>
                <th style="padding: 10px;">Action</th>
            </tr>
            <?php foreach ($orders as $o): ?>
            <tr style="border-bottom: 1px solid #ddd;">
                <td style="padding: 10px;"><?php echo $o['customer_name']; ?></td>
                <td style="padding: 10px;"><?php echo $o['customer_email']; ?></td>
                <td style="padding: 10px;"><?php echo $o['product_name']; ?></td>
                <td style="padding: 10px;"><?php echo $o['quantity']; ?></td>
                <td style="padding: 10px;"><?php echo $o['order_date']; ?></td>
                <td style="padding: 10px;">
                    <a href="?delete=<?php echo $o['id']; ?>" 
                       onclick="return confirm('Delete this order?')"
                       style="color: #dc3545;">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No orders yet.</p>
    <?php endif; ?>
    
    <p style="margin-top: 20px;">
        <a href="experiences.php">← Back to Products</a>
    </p>
</div>

<?php include 'footer.php'; ?>