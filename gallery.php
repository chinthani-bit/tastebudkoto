<?php include 'header.php';
 ?>

<script>
function showCategory(category) {
    // Get all gallery cards
    let cards = document.querySelectorAll('.gallery-card');
    
    // Loop through all cards
    for (let i = 0; i < cards.length; i++) {
        if (category === 'all') {
            cards[i].style.display = 'block';
        } else {
            // Check if card has this category
            if (cards[i].classList.contains(category)) {
                cards[i].style.display = 'block';
            } else {
                cards[i].style.display = 'none';
            }
        }
    }
}
</script>


<!-- Page Header -->
<link rel="stylesheet" href="css/gallery.css">
<header class="page-header">
    <div>
        <h1>Our Gallery</h1>
        <p>Experience the blend of Sri Lankan and Finnish culture</p>
    </div>
</header>
<div style="text-align: center; margin: 30px 0;">
    <button onclick="showCategory('all')" style="background: #2d5a27; color: white; padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer;">All</button>
    <button onclick="showCategory('villa')" style="background: #2d5a27; color: white; padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer;">Villa</button>
    <button onclick="showCategory('nature')" style="background: #2d5a27; color: white; padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer;">Nature</button>
    <button onclick="showCategory('food')" style="background: #2d5a27; color: white; padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer;">Food</button>
</div>
<div class="container">
    <!-- Gallery Introduction -->
    <div class="gallery-intro">
        <h2>Explore Our Photos</h2>
        <p>Browse through our collection of images showing Finnish nature and Sri Lankan hospitality</p>
    </div>

    
    <div class="gallery-grid">
        <!-- Villa Images -->
        <div class="gallery-card villa">
            <div class="image-container">
                <img src="images/Summer_Cottage.jpg" alt="Villa Exterior" class="gallery-image">
            </div>
            <div class="card-content">
                <h3>Villa Exterior</h3>
                <p>Traditional Finnish log cabin design by the lake</p>
            </div>
        </div>
        
        <div class="gallery-card villa">
            <div class="image-container">
                <img src="images/CoZy-room.avif" alt="Living Room" class="gallery-image">
            </div>
            <div class="card-content">
                <h3>Living Room</h3>
                <p>Cozy fireplace with Sri Lankan textiles</p>
            </div>
        </div>
        
        <div class="gallery-card villa">
            <div class="image-container">
                <img src="images/sauna.jpg" alt="Finnish Sauna" class="gallery-image">
            </div>
            <div class="card-content">
                <h3>Finnish Sauna</h3>
                <p>Traditional löyly experience</p>
            </div>
        </div>

        <!-- Nature Images -->
        <div class="gallery-card nature">
            <div class="image-container">
                <img src="images/Nothern-light.jpeg" alt="Northern Lights" class="gallery-image">
            </div>
            <div class="card-content">
                <h3>Northern Lights</h3>
                <p>View from the villa terrace</p>
            </div>
        </div>
        
        <div class="gallery-card nature">
            <div class="image-container">
                <img src="images/forest-pine.jpg" alt="Finnish Forest" class="gallery-image">
            </div>
            <div class="card-content">
                <h3>Finnish Forest</h3>
                <p>Pine trees and hiking trails</p>
            </div>
        </div>
        
        <div class="gallery-card nature">
            <div class="image-container">
                <img src="images/lake-view.jpg" alt="Lake View" class="gallery-image">
            </div>
            <div class="card-content">
                <h3>Lake View</h3>
                <p>Serene waters perfect for swimming</p>
            </div>
        </div>

        <!-- Food Images -->
        <div class="gallery-card food">
            <div class="image-container">
                <img src="images/breakfast.jpg" alt="Sri Lankan Breakfast" class="gallery-image">
            </div>
            <div class="card-content">
                <h3>Sri Lankan Breakfast</h3>
                <p>Kithul treacle pancakes with our products</p>
            </div>
        </div>
        
        <div class="gallery-card food">
            <div class="image-container">
                <img src="images/cooking.jpg" alt="Cooking Workshop" class="gallery-image">
            </div>
            <div class="card-content">
                <h3>Cooking Workshop</h3>
                <p>Learning traditional Sri Lankan recipes</p>
            </div>
        </div>
        
        <div class="gallery-card food">
            <div class="image-container">
                <img src="images/product.jpeg" alt="Spice Display" class="gallery-image">
            </div>
            <div class="card-content">
                <h3>Spice Display</h3>
                <p>Taste Bud Foods products showcase</p>
            </div>
        </div>

        <!-- Seasons Images (Nature category) -->
        <div class="gallery-card nature">
            <div class="image-container">
                <img src="images/villa-hero.jpg" alt="Winter" class="gallery-image">
            </div>
            <div class="card-content">
                <h3>Winter</h3>
                <p>Snow-covered landscape</p>
            </div>
        </div>
        
        <div class="gallery-card nature">
            <div class="image-container">
                <img src="images/spring.jpg" alt="Spring" class="gallery-image">
            </div>
            <div class="card-content">
                <h3>Spring</h3>
                <p>Blossoming nature</p>
            </div>
        </div>
        
        <div class="gallery-card nature">
            <div class="image-container">
                <img src="images/summer.jpeg" alt="Summer" class="gallery-image">
            </div>
            <div class="card-content">
                <h3>Summer</h3>
                <p>Midnight sun evenings</p>
            </div>
        </div>
        
        <div class="gallery-card nature">
            <div class="image-container">
                <img src="images/autumn.jpeg" alt="Autumn" class="gallery-image">
            </div>
            <div class="card-content">
                <h3>Autumn</h3>
                <p>Colorful ruska season</p>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>