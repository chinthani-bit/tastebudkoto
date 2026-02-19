<?php
$title = "Experiences - TasteBudKoto";
include 'header.php';
?>

<!-- Page Header -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<header class="page-header">
    <div>
        <h1>Unique Experiences</h1>
        <p>Where Finnish Nature Meets Sri Lankan Culture</p>
    </div>
</header>

<!-- Main Content -->
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

    <!-- Taste Bud Foods Products - HARD CODED (Your Original) -->
    <section>
        <h2>Our Taste Bud Foods Products</h2>
        <div class="product-cards">
            <!-- Product 1 -->
            <div class="product-card">
                <img src="images/kithul-pani.jpg" alt="Kithul Products" class="product-image">
                <h4>Kithul Treacle & Products</h4>
                <p>Pure traditional Sri Lankan sweetener, jaggery, and pancake mixes.</p>
                <div class="price">From €12.90</div>
                
                <!-- SIMPLE ORDER BUTTON -->
                <a href="order-product.php?product=Kithul+Treacle&price=12.90" 
                   style="display: inline-block; background: #e67e22; color: white; padding: 8px 15px; margin-top: 10px; text-decoration: none; border-radius: 5px;">
                    Order Now
                </a>
            </div>
            
            <!-- Product 2 -->
            <div class="product-card">
                <img src="images/Spices-villa.jpg" alt="Curry Mixes" class="product-image">
                <h4>Dehydrated Curry Mixes</h4>
                <p>Just add water for authentic Sri Lankan curries.</p>
                <div class="price">From €8.50</div>
                
                <!-- SIMPLE ORDER BUTTON -->
                <a href="order-product.php?product=Curry+Mixes&price=8.50" 
                   style="display: inline-block; background: #e67e22; color: white; padding: 8px 15px; margin-top: 10px; text-decoration: none; border-radius: 5px;">
                    Order Now
                </a>
            </div>
            
            <!-- Product 3 -->
            <div class="product-card">
                <img src="images/Food-villa.jpg" alt="Flour Blends" class="product-image">
                <h4>Traditional Flour Blends</h4>
                <p>Authentic Sri Lankan flour mixes for traditional dishes.</p>
                <div class="price">From €6.90</div>
                
                <!-- SIMPLE ORDER BUTTON -->
                <a href="order-product.php?product=Flour+Blends&price=6.90" 
                   style="display: inline-block; background: #e67e22; color: white; padding: 8px 15px; margin-top: 10px; text-decoration: none; border-radius: 5px;">
                    Order Now
                </a>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>