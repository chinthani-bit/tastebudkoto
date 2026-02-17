<?php
    $title = "reviews - Tastebud Koto";
    include'db.php';

// Handle review submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];
    
    $sql = "INSERT INTO reviews (name, rating, comment) VALUES ('$name', '$rating', '$comment')";
    $pdo->exec($sql);
    $success = "Thank you for your review!";
}

// Get all reviews
$reviews = $pdo->query("SELECT * FROM reviews ORDER BY id DESC")->fetchAll();

include 'header.php';
?>

<!-- JavaScript validation -->
<script>
function validateReview() {
    let name = document.getElementById('name').value;
    let rating = document.getElementById('rating').value;
    let comment = document.getElementById('comment').value;
    
    if (name === '') { alert('Please enter your name'); return false; }
    if (rating === '') { alert('Please select a rating'); return false; }
    if (comment === '') { alert('Please write your review'); return false; }
    if (comment.length < 10) { alert('Review must be at least 10 characters'); return false; }
    return true;
}
</script>

<!-- Page Header -->
<header class="page-header">
    <div>
        <h1>Our Journey</h1>
        <p>From Sri Lanka to Finland - A Story of Two Cultures</p>
    </div>
</header>

<div class="container">
    <!-- Timeline Section -->
    <section class="timeline">
        <h2>Our Story Timeline</h2>
        
        <div class="timeline-item">
            <div class="timeline-date">2020-2023</div>
            <h3>Taste Bud Foods Begins</h3>
            <p>Started our small business in Sri Lanka, specializing in traditional dehydrated foods, Kithu Jaggery and Treacle, and authentic flour blends.</p>
        </div>
        
        <div class="timeline-item">
            <div class="timeline-date">2024</div>
            <h3>Journey to Finland</h3>
            <p>Three of us moved to Hämeenlinna to study at HAMK University. Brought our Taste Bud Foods products and dreams with us.</p>
        </div>
        
        <div class="timeline-item">
            <div class="timeline-date">2025</div>
            <h3>Finnish Inspiration</h3>
            <p>Fell in love with Finnish nature. The idea of TasteBudKoto began during walks by the lakes.</p>
        </div>
        
        <div class="timeline-item">
            <div class="timeline-date">2026</div>
            <h3>The Dream Takes Form</h3>
            <p>Created TasteBudKoto - a place where guests can experience Finnish nature with Sri Lankan warmth.</p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section">
        <h2>Our Mission</h2>
        <p>To create authentic cultural experiences that bridge Sri Lanka and Finland through hospitality, food, and nature.</p>
        
        <div class="values-grid">
            <div class="value-item">
                <i class="fas fa-handshake"></i>
                <h4>Cultural Bridge</h4>
                <p>Connecting Sri Lankan warmth with Finnish simplicity</p>
            </div>
            
            <div class="value-item">
                <i class="fas fa-leaf"></i>
                <h4>Sustainability</h4>
                <p>Eco-friendly practices and local sourcing</p>
            </div>
            
            <div class="value-item">
                <i class="fas fa-heart"></i>
                <h4>Authenticity</h4>
                <p>Genuine experiences, real stories</p>
            </div>
            
            <div class="value-item">
                <i class="fas fa-graduation-cap"></i>
                <h4>HAMK Roots</h4>
                <p>Born from student dreams and education</p>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section style="margin: 50px 0;">
        <h2>Guest Reviews</h2>
        
        <?php if (isset($success)): ?>
            <div style="background: #d4edda; color: #155724; padding: 15px; margin: 20px 0;"><?php echo $success; ?></div>
        <?php endif; ?>
        
        <!-- Display reviews -->
        <?php foreach ($reviews as $r): ?>
        <div style="background: #f8f9fa; padding: 20px; margin: 20px 0; border-radius: 8px;">
            <strong><?php echo $r['name']; ?></strong> - 
            <span style="color: #e67e22;"><?php echo str_repeat('⭐', $r['rating']); ?></span>
            <p><?php echo $r['comment']; ?></p>
        </div>
        <?php endforeach; ?>
        
        <!-- Add review form -->
        <div style="background: #f8f9fa; padding: 30px; margin-top: 40px; border-radius: 8px;">
            <h3>Share Your Experience</h3>
            <form method="POST" onsubmit="return validateReview()">
                <div style="margin-bottom: 15px;">
                    <label>Your Name *</label>
                    <input type="text" id="name" name="name" style="width: 100%; padding: 8px;">
                </div>
                
                <div style="margin-bottom: 15px;">
                    <label>Rating *</label>
                    <select id="rating" name="rating" style="width: 100%; padding: 8px;">
                        <option value="">Select rating</option>
                        <option value="5">⭐⭐⭐⭐⭐ - Excellent</option>
                        <option value="4">⭐⭐⭐⭐ - Very Good</option>
                        <option value="3">⭐⭐⭐ - Good</option>
                    </select>
                </div>
                
                <div style="margin-bottom: 15px;">
                    <label>Your Review *</label>
                    <textarea id="comment" name="comment" rows="4" style="width: 100%; padding: 8px;"></textarea>
                </div>
                
                <button type="submit" style="background: #e67e22; color: white; padding: 10px 20px; border: none;">Submit Review</button>
            </form>
        </div>
    </section>

    <!-- Founders Section -->
    <section class="founders">
        <h2>The Founders</h2>
        <div class="founder-card">
            <h3>Three Students, One Dream</h3>
            <p>We are three HAMK University students from Sri Lanka, united by our love for our homeland and our new home in Finland.</p>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>