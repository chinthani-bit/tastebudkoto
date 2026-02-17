<?php
    $title = "Product catalog features - Tastebud Koto";
    include 'db.php';

$products = $pdo->query("SELECT * FROM products")->fetchAll();

include 'header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div>
        <h1>Unique Experiences</h1>
        <p>Where Finnish Nature Meets Sri Lankan Culture</p>
    </div>
</header>

<div class="container">
    <!-- Seasonal Experiences -->
    <section>
        <h2>Seasonal Activities</h2>
        <div class="season-cards">
            <div class="season-card winter-card">
                <h3>Winter Wonderland</h3>
                <ul>
                    <li>Northern Lights viewing from the villa</li>
                    <li>Ice fishing on the frozen lake</li>
                    <li>Traditional Finnish sauna experience</li>
                    <li>Cross-country skiing through pine forests</li>
                    <li>Snowshoeing adventures</li>
                </ul>
            </div>
            
            <div class="season-card summer-card">
                <h3>Summer Magic</h3>
                <ul>
                    <li>Midnight sun lake swimming</li>
                    <li>Berry picking in the forest</li>
                    <li>Traditional Finnish BBQ (grilli)</li>
                    <li>Kayaking on the lake</li>
                    <li>Forest hiking and mushroom foraging</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Culinary Experiences -->
    <section class="culinary-section">
        <h2>Culinary Experiences</h2>
        <div class="culinary-cards">
            <div class="culinary-card">
                <div class="culinary-icon">
                    <i class="fas fa-mortar-pestle" style="font-size: 36px; color: #e67e22;"></i>
                </div>
                <h4>Taste Bud Foods Workshop</h4>
                <p>Learn to make traditional Sri Lankan dishes using our dehydrated foods and spices.</p>
                <ul>
                    <li>2-hour hands-on session</li>
                    <li>All materials provided</li>
                    <li>Recipe booklet included</li>
                    <li>Take-home spice blend</li>
                </ul>
            </div>
            
            <div class="culinary-card">
                <div class="culinary-icon">
                    <i class="fas fa-utensils" style="font-size: 36px; color: #e67e22;"></i>
                </div>
                <h4>Fusion Dining Experience</h4>
                <p>Enjoy a curated menu where Finnish ingredients meet Sri Lankan spices.</p>
                <ul>
                    <li>4-course dinner</li>
                    <li>Wine pairing available</li>
                    <li>Vegetarian options</li>
                    <li>Cooking demonstration</li>
                </ul>
            </div>
            
            <div class="culinary-card">
                <div class="culinary-icon">
                    <i class="fas fa-seedling" style="font-size: 36px; color: #e67e22;"></i>
                </div>
                <h4>Farm to Table Tour</h4>
                <p>Visit local Finnish farms and markets, then learn to cook with fresh ingredients.</p>
                <ul>
                    <li>Local market visit</li>
                    <li>Meet Finnish farmers</li>
                    <li>Cooking session</li>
                    <li>Fresh ingredient box</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Taste Bud Foods Products -->
    <section>
        <h2>Our Taste Bud Foods Products</h2>
        
        <?php if (count($products) > 0): ?>
            <div class="product-cards">
                <?php foreach ($products as $p): ?>
                <div class="product-card">
                    <img src="images/<?php echo $p['image'] ?: 'product-placeholder.jpg'; ?>" alt="<?php echo $p['name']; ?>" class="product-image">
                    <h4><?php echo $p['name']; ?></h4>
                    <p><?php echo $p['description']; ?></p>
                    <div class="price">€<?php echo $p['price']; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            
            <div class="product-cards">
                <div class="product-card">
                    <img src="images/kithul-pani.jpg" alt="Kithul Products" class="product-image">
                    <h4>Kithul Treacle & Products</h4>
                    <p>Pure traditional Sri Lankan sweetener, jaggery, and pancake mixes.</p>
                    <div class="price">From €12.90</div>
                </div>
                
                <div class="product-card">
                    <img src="images/Spices-villa.jpg" alt="Curry Mixes" class="product-image">
                    <h4>Dehydrated Curry Mixes</h4>
                    <p>Just add water for authentic Sri Lankan curries.</p>
                    <div class="price">From €8.50</div>
                </div>
                
                <div class="product-card">
                    <img src="images/Food-villa.jpg" alt="Flour Blends" class="product-image">
                    <h4>Traditional Flour Blends</h4>
                    <p>Authentic Sri Lankan flour mixes for traditional dishes.</p>
                    <div class="price">From €6.90</div>
                </div>
            </div>
        <?php endif; ?>
    </section>
</div>

<?php include 'footer.php'; ?>