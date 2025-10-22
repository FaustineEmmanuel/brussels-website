<?php
require_once 'includes/config.php';
$page_title = 'Home';
track_page_visit('home');

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section" style="background-image: url('assets/images/grand_place_brussels_364537f2.jpg');">
    <div class="hero-content">
        <h1 data-aos="fade-up">Discover Brussels</h1>
        <p class="subtitle" data-aos="fade-up" data-aos-delay="200">The Heart of Europe</p>
        <p data-aos="fade-up" data-aos-delay="400">Experience the rich history, stunning architecture, and vibrant culture of Belgium's magnificent capital city</p>
        <div data-aos="fade-up" data-aos-delay="600">
            <a href="pages/landmarks.php" class="btn-gold">Explore Landmarks</a>
            <a href="pages/contact.php" class="btn-outline-gold">Get in Touch</a>
        </div>
    </div>
</section>

<!-- Welcome Section -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="section-title text-start">Welcome to Brussels</h2>
                <p class="lead">Brussels is more than just the capital of Belgium – it's the heart of Europe, a city where medieval charm meets modern innovation.</p>
                <p>As the de facto capital of the European Union, Brussels is home to world-class museums, stunning architecture, delicious cuisine, and a rich cultural heritage spanning centuries. From the magnificent Grand Place to the futuristic Atomium, from ancient forests to cutting-edge sustainability projects, Brussels offers something for everyone.</p>
                <p>This website showcases the experiences and discoveries from the North Intensive Program (NIP) 2025, where students from Mwenge Catholic University in Tanzania explored Brussels' history, culture, institutions, and way of life.</p>
                <a href="pages/history.php" class="btn-gold mt-3">Learn Our History</a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="assets/images/brussels_cityscape_s_275944aa.jpg" alt="Brussels Cityscape" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section bg-light">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Why Visit Brussels?</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Discover what makes Brussels one of Europe's most captivating cities</p>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box">
                    <i class="fas fa-landmark"></i>
                    <h4>Rich History</h4>
                    <p>Explore centuries of Belgian and European history through magnificent landmarks, museums, and architectural wonders.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-box">
                    <i class="fas fa-building"></i>
                    <h4>European Capital</h4>
                    <p>Home to the European Parliament, Commission, and Council – the decision-making heart of the European Union.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-box">
                    <i class="fas fa-palette"></i>
                    <h4>Arts & Culture</h4>
                    <p>World-renowned museums featuring works by Magritte, Bruegel, and countless other masters of art and culture.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-box">
                    <i class="fas fa-utensils"></i>
                    <h4>Belgian Cuisine</h4>
                    <p>Indulge in famous Belgian waffles, chocolate, fries, and hundreds of varieties of craft beers.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="feature-box">
                    <i class="fas fa-leaf"></i>
                    <h4>Green & Sustainable</h4>
                    <p>Discover the ancient Sonian Forest and innovative urban farms leading Europe's sustainability movement.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="feature-box">
                    <i class="fas fa-globe-europe"></i>
                    <h4>Multicultural Hub</h4>
                    <p>A diverse, international city where over 180 nationalities live, work, and share their cultures.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Top Landmarks Section -->
<section class="section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Iconic Landmarks</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Must-see attractions that define Brussels</p>
        
        <div class="row g-4">
            <?php
            $landmarks = [];
            if ($conn) {
                $sql = "SELECT * FROM landmarks ORDER BY id LIMIT 6";
                $result = @$conn->query($sql);
                if ($result && $result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $landmarks[] = $row;
                    }
                }
            }
            
            // Use fallback data if no database
            if (empty($landmarks)) {
                require_once 'includes/fallback_data.php';
                $landmarks = get_landmarks_data();
            }
            
            $delay = 200;
            foreach ($landmarks as $row) {
                echo '<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="'.$delay.'">';
                echo '<div class="card-custom">';
                echo '<img src="'.$row['image_path'].'" class="card-img-top" alt="'.$row['name'].'">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">'.$row['name'].'</h5>';
                echo '<p class="card-text">'.substr($row['description'], 0, 120).'...</p>';
                echo '<a href="pages/landmarks.php" class="btn-gold btn-sm">Learn More <i class="fas fa-arrow-right ms-2"></i></a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                $delay += 100;
            }
            ?>
        </div>
        
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="pages/landmarks.php" class="btn-gold">View All Landmarks</a>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="stats-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" data-aos="fade-up">
                <div class="stat-box">
                    <div class="stat-number" data-count="1000">1000</div>
                    <div class="stat-label">Years of History</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-box">
                    <div class="stat-number" data-count="180">180</div>
                    <div class="stat-label">Nationalities</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-box">
                    <div class="stat-number" data-count="100">100</div>
                    <div class="stat-label">Museums & Galleries</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-box">
                    <div class="stat-number" data-count="27">27</div>
                    <div class="stat-label">EU Member States</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NIP Program Preview -->
<section class="section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <h2 class="section-title text-start">North Intensive Program 2025</h2>
                <p class="lead">A transformative cultural and educational exchange between Tanzania and Belgium</p>
                <p>From October 11-19, 2025, students from Mwenge Catholic University (MWECAU) in Tanzania participated in an immersive program exploring Brussels' history, democracy, sustainability, and cultural heritage.</p>
                <p>Over nine incredible days, we visited:</p>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check text-gold me-2"></i> Historical landmarks and museums</li>
                    <li><i class="fas fa-check text-gold me-2"></i> European Parliament and democratic institutions</li>
                    <li><i class="fas fa-check text-gold me-2"></i> Sonian Forest and sustainable urban farms</li>
                    <li><i class="fas fa-check text-gold me-2"></i> Art galleries and cultural centers</li>
                    <li><i class="fas fa-check text-gold me-2"></i> AfricaMuseum in Tervuren</li>
                </ul>
                <a href="pages/nip_program.php" class="btn-gold mt-3">Explore Our Journey</a>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <img src="assets/images/european_parliament__8fdca356.jpg" alt="European Parliament" class="img-fluid rounded shadow-lg mb-3">
                <img src="assets/images/sonian_forest_brusse_9db93ba0.jpg" alt="Sonian Forest" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Gallery Preview -->
<section class="section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Photo Gallery</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Visual highlights from Brussels and the NIP Program</p>
        
        <div class="row g-4">
            <?php
            $gallery = [];
            if ($conn) {
                $sql = "SELECT * FROM gallery ORDER BY id LIMIT 8";
                $result = @$conn->query($sql);
                if ($result && $result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $gallery[] = $row;
                    }
                }
            }
            
            // Use fallback data if no database
            if (empty($gallery)) {
                require_once 'includes/fallback_data.php';
                $gallery = get_gallery_data();
            }
            
            $delay = 200;
            foreach ($gallery as $row) {
                echo '<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="'.$delay.'">';
                echo '<div class="gallery-item">';
                echo '<a href="'.$row['image_path'].'" data-lightbox="brussels-gallery" data-title="'.$row['title'].'">';
                echo '<img src="'.$row['image_path'].'" alt="'.$row['title'].'">';
                echo '<div class="gallery-overlay">';
                echo '<div class="gallery-overlay-content">';
                echo '<i class="fas fa-search-plus"></i>';
                echo '<h4>'.$row['title'].'</h4>';
                echo '</div>';
                echo '</div>';
                echo '</a>';
                echo '</div>';
                echo '</div>';
                $delay += 50;
            }
            ?>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section" style="background: var(--gradient-primary); color: white; padding: 5rem 0;">
    <div class="container text-center">
        <h2 class="text-white mb-4" data-aos="fade-up">Ready to Explore Brussels?</h2>
        <p class="lead text-white mb-4" data-aos="fade-up" data-aos-delay="100">Start your journey through Belgium's magnificent capital city</p>
        <div data-aos="fade-up" data-aos-delay="200">
            <a href="pages/landmarks.php" class="btn-gold me-3">Discover Landmarks</a>
            <a href="pages/contact.php" class="btn-outline-gold">Contact Us</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
