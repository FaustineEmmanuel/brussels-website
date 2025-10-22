<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Discover Brussels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section class="hero-section" style="background-image: url('assets/images/grand_place_brussels_364537f2.jpg');">
        <div class="hero-content">
            <h1 data-aos="fade-up">🏛️ Welcome to Discover Brussels!</h1>
            <p class="subtitle" data-aos="fade-up" data-aos-delay="200">North Intensive Program 2025</p>
            <p data-aos="fade-up" data-aos-delay="400">An interactive website showcasing Brussels' history, culture, and the NIP program experience</p>
            
            <div class="card-custom mt-5" style="background: rgba(255,255,255,0.95); max-width: 700px; margin: 0 auto; text-align: left;" data-aos="fade-up" data-aos-delay="600">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4"><i class="fas fa-laptop-code text-gold me-2"></i>Setup Instructions</h3>
                    
                    <div class="alert alert-info">
                        <strong><i class="fas fa-info-circle me-2"></i>Note:</strong> This website is designed to work with XAMPP (Apache + MySQL + PHP).
                    </div>
                    
                    <h5 class="text-gold mt-4"><i class="fas fa-database me-2"></i>Database Setup (for XAMPP)</h5>
                    <ol>
                        <li>Make sure XAMPP's <strong>Apache</strong> and <strong>MySQL</strong> services are running</li>
                        <li>Click the button below to install the database</li>
                        <li>Once installed, all features will work including:
                            <ul>
                                <li>Landmark information from database</li>
                                <li>Photo gallery</li>
                                <li>Contact form submissions</li>
                                <li>Visitor statistics tracking</li>
                            </ul>
                        </li>
                    </ol>
                    
                    <div class="text-center my-4">
                        <a href="install.php" class="btn-gold">
                            <i class="fas fa-cog me-2"></i>Install Database
                        </a>
                    </div>
                    
                    <hr>
                    
                    <h5 class="text-gold mt-4"><i class="fas fa-eye me-2"></i>Preview Mode (No Database)</h5>
                    <p>You can also browse the website without database features. The static pages will work perfectly:</p>
                    <ul>
                        <li>History & Culture</li>
                        <li>Landmarks descriptions</li>
                        <li>Museums & Arts</li>
                        <li>NIP Program timeline</li>
                        <li>Sustainability initiatives</li>
                        <li>Democracy & Governance</li>
                    </ul>
                    
                    <div class="text-center my-4">
                        <a href="#" onclick="skipDatabase()" class="btn-outline-gold">
                            <i class="fas fa-forward me-2"></i>Continue Without Database
                        </a>
                    </div>
                    
                    <hr>
                    
                    <h5 class="text-gold mt-4"><i class="fas fa-book me-2"></i>About This Project</h5>
                    <p class="mb-0">This website was created as part of the <strong>North Intensive Program (NIP) 2025</strong>, a collaboration between Mwenge Catholic University (MWECAU) in Tanzania and Erasmus University College Brussels in Belgium.</p>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        function skipDatabase() {
            // Store preference in localStorage
            localStorage.setItem('skip_db_check', 'true');
            window.location.href = 'index.php';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
