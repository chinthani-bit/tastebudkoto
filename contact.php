<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - TasteBudKoto</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- External CSS files -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation using Bootstrap navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <div class="container">
            <a href="index.html" class="logo">
                <img src="images/logo.png" alt="TasteBudKoto Logo" class="logo-img">
                <span>TasteBudKoto</span>
            </a>
            <div class="navbar-nav">
                <a class="nav-link" href="index.html">Home</a>
                <a class="nav-link" href="about.html">Our Story</a>
                <a class="nav-link" href="experiences.html">Experiences</a>
                <a class="nav-link" href="gallery.html">Gallery</a>
                <a class="nav-link active text-orange fw-bold" href="contact.html">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="page-header bg-green text-white text-center py-5 mt-5">
        <div class="container">
            <h1 class="display-4 mb-3">Contact Us</h1>
            <p class="lead">Get in touch to book your Finnish-Sri Lankan experience</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container my-5">
        <!-- Contact Form and Info -->
        <div class="row g-4">
            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="contact-card">
                    <h2 class="text-green mb-4">Send Us a Message</h2>
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label text-green">Full Name *</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label text-green">Email Address *</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="subject" class="form-label text-green">Subject</label>
                            <select class="form-select" id="subject">
                                <option value="">Select a topic</option>
                                <option value="booking">Booking Inquiry</option>
                                <option value="food">Food Products</option>
                                <option value="experience">Experience Questions</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="dates" class="form-label text-green">Preferred Dates (optional)</label>
                            <input type="text" class="form-control" id="dates" >
                        </div>
                        
                        <div class="mb-3">
                            <label for="message" class="form-label text-green">Your Message *</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-orange btn-lg w-100">Send Message</button>
                    </form>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-4">
                <div class="contact-card">
                    <h3 class="text-green mb-4">Contact Information</h3>
                    
                    <div class="contact-item">
                        <h5 class="text-green"><i class="fas fa-map-marker-alt"></i> Location</h5>
                        <p>Hämeenlinna, Finland</p>
                    </div>
                    
                    <div class="contact-item">
                        <h5 class="text-green"><i class="fas fa-envelope"></i> Email</h5>
                        <p>info@tastebudKoto.fi</p>
                        <p>tastebud@kotovilla.fi (for food products)</p>
                    </div>
                    
                    <div class="contact-item">
                        <h5 class="text-green"><i class="fas fa-phone"></i> Phone</h5>
                        <p>+358 44 951 8738</p>
                        <p class="small">Available 9:00-18:00 Finnish time</p>
                    </div>
                    
                    <div class="contact-item">
                        <h5 class="text-green"><i class="fas fa-info-circle"></i> Booking Information</h5>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-orange"></i> Check-in: 15:00</li>
                            <li><i class="fas fa-check text-orange"></i> Check-out: 11:00</li>
                            <li><i class="fas fa-check text-orange"></i> Minimum stay: 2 nights</li>
                            <li><i class="fas fa-check text-orange"></i> Maximum capacity: 6 guests</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <section class="my-5">
            <h2 class="text-center text-green mb-4">Find Us in Finland</h2>
            <div class="map-placeholder text-center">
                <i class="fas fa-map-marked-alt fa-3x mb-3"></i>
                <h3>Hämeenlinna Region</h3>
                <p>Located in the beautiful lake district of Southern Finland</p>
                <p>Approximately 1 hour from Helsinki by train or car</p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>TasteBudKoto</h5>
                    <p>One Dream of three Students | Created with passion from Sri Lanka to Finland</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Contact Info</h5>
                    <p>Hämeenlinna, Finland</p>
                    <p>info@tastebudKoto.fi</p>
                    <p>+358 44 951 8738</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Follow Our Journey</h5>
                    <p>From HAMK students to villa dreamers</p>
                    <p>Facebook | Instagram</p>
                </div>
            </div>
            <hr class="bg-light">
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>