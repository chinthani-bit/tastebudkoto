<?php
$title = "Order Product - Tastebud Koto";
include 'db.php';

// Get product from URL
$product_name = isset($_GET['product']) ? $_GET['product'] : '';
$price = isset($_GET['price']) ? $_GET['price'] : '';

// Handle order submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    
    $sql = "INSERT INTO orders (customer_name, customer_email, product_name, quantity) 
            VALUES ('$name', '$email', '$product', '$quantity')";
    
    if ($conn->query($sql) === TRUE) {
        $success = "Thank you! Your order has been placed.";
    }
}

include 'header.php';
?>

<div style="max-width: 600px; margin: 50px auto; padding: 20px;">
    <h2 style="color: #2d5a27;">Order Product</h2>
    
    <?php if (isset($success)): ?>
        <div style="background: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px;">
            <?php echo $success; ?>
        </div>
    <?php endif; ?>
    
    <form method="POST" style="background: #f9f9f9; padding: 30px; border-radius: 8px;">
        <input type="hidden" name="product" value="<?php echo $product_name; ?>">
        
        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px;">Product:</label>
            <input type="text" value="<?php echo $product_name; ?> (€<?php echo $price; ?>)" 
                   style="width: 100%; padding: 8px; background: #eee; border: none;" disabled>
        </div>
        
        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px;">Your Name *</label>
            <input type="text" name="name" required style="width: 100%; padding: 8px; border: 1px solid #ddd;">
        </div>
        
        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px;">Your Email *</label>
            <input type="email" name="email" required style="width: 100%; padding: 8px; border: 1px solid #ddd;">
        </div>
        
        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px;">Quantity:</label>
            <input type="number" name="quantity" min="1" value="1" style="width: 100%; padding: 8px; border: 1px solid #ddd;">
        </div>
        
        <button type="submit" style="background: #2d5a27; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
            Place Order
        </button>
        
        <a href="experiences.php" style="margin-left: 10px; color: #666;">Cancel</a>
    </form>
</div>

<?php include 'footer.php'; ?>