<?php
    $title = "Product catalog features - Tastebud Koto";
    include 'db.php';
    
// CREATE - Add new product
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];
    $image = $_POST['image']; 
    
    $sql = "INSERT INTO products (name, price, description, image) 
            VALUES ('$name', '$price', '$desc', '$image')";
    $pdo->exec($sql);
    $success = "Product added successfully!";
}

// DELETE - Remove product
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $pdo->exec("DELETE FROM products WHERE id = $id");
    header('Location: admin-products.php');
}

// READ - Get all products
$products = $pdo->query("SELECT * FROM products ORDER BY id DESC")->fetchAll();

include 'header.php';
?>

<!-- JavaScript validation -->
<script>
function validateProduct() {
    let name = document.getElementById('name').value;
    let price = document.getElementById('price').value;
    let desc = document.getElementById('description').value;
    
    if (name === '') { alert('Product name is required'); return false; }
    if (price === '' || price <= 0) { alert('Please enter a valid price'); return false; }
    if (desc === '') { alert('Description is required'); return false; }
    return true;
}
</script>

<div class="container" style="max-width: 1000px; margin: 50px auto;">
    <h1 style="color: #2d5a27;">Manage Products - Taste Bud Foods</h1>
    
    <!-- Add Product Form -->
    <div style="background: #f9f9f9; padding: 30px; margin: 30px 0; border-radius: 8px;">
        <h2>Add New Product</h2>
        
        <?php if (isset($success)): ?>
            <div style="background: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px;"><?php echo $success; ?></div>
        <?php endif; ?>
        
        <form method="POST" onsubmit="return validateProduct()">
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Product Name *</label>
                <input type="text" id="name" name="name" style="width: 100%; padding: 8px;">
            </div>
            
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Price (€) *</label>
                <input type="number" id="price" name="price" step="0.01" style="width: 100%; padding: 8px;">
            </div>
            
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Description *</label>
                <textarea id="description" name="description" rows="3" style="width: 100%; padding: 8px;"></textarea>
            </div>
            
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Image filename (e.g., kithul-pani.jpg)</label>
                <input type="text" name="image" value="product-placeholder.jpg" style="width: 100%; padding: 8px;">
                <small>Place image in images/ folder</small>
            </div>
            
            <button type="submit" name="add" style="background: #2d5a27; color: white; padding: 10px 20px; border: none; border-radius: 5px;">
                Add Product
            </button>
        </form>
    </div>
    
    <!-- Product List -->
    <h2>Current Products</h2>
    
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr style="background: #2d5a27; color: white;">
            <th style="padding: 10px; text-align: left;">Image</th>
            <th style="padding: 10px; text-align: left;">Name</th>
            <th style="padding: 10px; text-align: left;">Price</th>
            <th style="padding: 10px; text-align: left;">Description</th>
            <th style="padding: 10px; text-align: left;">Action</th>
        </tr>
        <?php foreach ($products as $p): ?>
        <tr style="border-bottom: 1px solid #ddd;">
            <td style="padding: 10px;">
                <img src="images/<?php echo $p['image'] ?: 'product-placeholder.jpg'; ?>" style="width: 50px; height: 50px; object-fit: cover;">
            </td>
            <td style="padding: 10px;"><?php echo $p['name']; ?></td>
            <td style="padding: 10px;">€<?php echo $p['price']; ?></td>
            <td style="padding: 10px;"><?php echo substr($p['description'], 0, 50); ?>...</td>
            <td style="padding: 10px;">
                <a href="?delete=<?php echo $p['id']; ?>" onclick="return confirm('Delete this product?')" style="color: #dc3545;">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    <p style="margin-top: 20px;">
        <a href="experiences.php">View products on Experiences page →</a>
    </p>
</div>

<?php include 'footer.php'; ?>