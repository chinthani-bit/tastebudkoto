<?php 
$title = "Booking & Contact - Tastebud Koto";
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $guests = $_POST['guests'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO bookings (name, email, booking_date, guests, message) 
            VALUES ('$name', '$email', '$date', '$guests', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        $success = "Booking request sent successfully!";
    }
}

include 'header.php';
?>

<!-- JavaScript validation -->
<script>
function validateBooking() {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let date = document.getElementById('date').value;
    let guests = document.getElementById('guests').value;
    
    if (name === '') { alert('Please enter your name'); return false; }
    if (email === '') { alert('Please enter your email'); return false; }
    if (!email.includes('@')) { alert('Please enter a valid email'); return false; }
    if (date === '') { alert('Please select a date'); return false; }
    if (guests < 1 || guests > 6) { alert('Guests must be between 1 and 6'); return false; }
    return true;
}
</script>

<!-- Page Header -->
 <link rel="stylesheet" href="css/contact.css">
<header class="page-header">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch to book your Finnish-Sri Lankan experience</p>
    </div>
</header>

<main class="container my-5">
    <?php if (isset($success)): ?>
        <div class="alert-success"><?php echo $success; ?></div>
    <?php endif; ?>

    <div class="row">
        <!-- Contact Form -->
        <div class="col-lg-8">
            <div class="contact-card">
                <h2>Send Us a Message</h2>
                <form method="POST" onsubmit="return validateBooking()">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Full Name *</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Email Address *</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Preferred Date *</label>
                        <input type="date" id="date" name="date" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label>Number of Guests *</label>
                        <input type="number" id="guests" name="guests" min="1" max="6" value="2" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label>Your Message</label>
                        <textarea name="message" rows="4" class="form-control"></textarea>
                    </div>
                    
                    <button type="submit" class="btn-submit">Send Message</button>
                </form>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="col-lg-4">
            <div class="contact-card">
                <h3>Contact Information</h3>
                
                <div class="contact-item">
                    <h5><i class="fas fa-map-marker-alt"></i> Location</h5>
                    <p>Hämeenlinna, Finland</p>
                </div>
                
                <div class="contact-item">
                    <h5><i class="fas fa-envelope"></i> Email</h5>
                    <p>info@tastebudKoto.fi</p>
                </div>
                
                <div class="contact-item">
                    <h5><i class="fas fa-phone"></i> Phone</h5>
                    <p>+358 44 951 8738</p>
                </div>
                
                <div class="contact-item">
                    <h5><i class="fas fa-info-circle"></i> Booking Information</h5>
                    <ul>
                        <li><i class="fas fa-check"></i> Check-in: 15:00</li>
                        <li><i class="fas fa-check"></i> Check-out: 11:00</li>
                        <li><i class="fas fa-check"></i> Minimum stay: 2 nights</li>
                        <li><i class="fas fa-check"></i> Max capacity: 6 guests</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <section class="map-section">
        <h2>Find Us in Finland</h2>
        <div class="map-placeholder">
            <i class="fas fa-map-marked-alt"></i>
            <h3>Hämeenlinna Region</h3>
            <p>Located in the beautiful lake district of Southern Finland</p>
            <p>Approximately 1 hour from Helsinki by train or car</p>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>