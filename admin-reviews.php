<?php

// MEMBER 3: Delete reviews

include 'db.php'; 

// DELETE review
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM reviews WHERE id = $id");  
    header('Location: admin-reviews.php');
}

// READ all reviews
$result = $conn->query("SELECT * FROM reviews ORDER BY id DESC");  
$reviews = [];
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $reviews[] = $row;
    }
}

include 'header.php';
?>

<div class="container" style="max-width: 800px; margin: 50px auto;">
    <h1 style="color: #2d5a27;">Manage Guest Reviews</h1>
    
    <?php if (count($reviews) > 0): ?>
        <?php foreach ($reviews as $r): ?>
        <div style="background: #f9f9f9; padding: 20px; margin: 20px 0; border-radius: 8px; border-left: 4px solid #e67e22;">
            <div style="display: flex; justify-content: space-between;">
                <div>
                    <strong><?php echo $r['name']; ?></strong> - 
                    <span style="color: #e67e22;"><?php echo str_repeat('⭐', $r['rating']); ?></span>
                    <p style="margin-top: 10px;"><?php echo $r['comment']; ?></p>
                    <small><?php echo $r['created_at']; ?></small>
                </div>
                <div>
                    <a href="?delete=<?php echo $r['id']; ?>" 
                       onclick="return confirm('Delete this review?')"
                       style="background: #dc3545; color: white; padding: 5px 10px; text-decoration: none; border-radius: 3px;">
                        Delete
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No reviews yet.</p>
    <?php endif; ?>
    
    <p style="margin-top: 20px;">
        <a href="about.php">View reviews on About page →</a>
    </p>
</div>

<?php include 'footer.php'; ?>