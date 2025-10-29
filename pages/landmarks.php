<?php
require_once '../includes/config.php';
$page_title = 'Landmarks';
track_page_visit('landmarks');

include '../includes/header.php';
?>

<!-- Page Header -->
<div class="page-header" style="background-image: url('../assets/images/atomium_brussels_bel_225e89cc.jpg');">
    <div class="page-header-content">
        <h1 data-aos="fade-up">Iconic Landmarks</h1>
        <p data-aos="fade-up" data-aos-delay="200">Discover Brussels' Most Famous Attractions</p>
    </div>
</div>

<!-- Landmarks Gallery -->
<section class="section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Must-See Landmarks</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Explore the architectural wonders and historical sites that define Brussels</p>
        
        <div class="row g-4">
            <?php
            $sql = "SELECT * FROM landmarks ORDER BY id";
            $result = $conn->query($sql);
            
            $delay = 200;
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-lg-6" data-aos="fade-up" data-aos-delay="'.$delay.'">';
                    echo '<div class="card-custom mb-4">';
                    echo '<div class="row g-0">';
                    echo '<div class="col-md-5">';
                    echo '<img src="../'.$row['image_path'].'" class="img-fluid h-100" alt="'.$row['name'].'" style="object-fit: cover;">';
                    echo '</div>';
                    echo '<div class="col-md-7">';
                    echo '<div class="card-body">';
                    echo '<h4 class="card-title">'.$row['name'].'</h4>';
                    echo '<p class="card-text">'.$row['description'].'</p>';
                    echo '<hr>';
                    echo '<h6 class="text-gold"><i class="fas fa-history me-2"></i>History</h6>';
                    echo '<p class="small">'.$row['history'].'</p>';
                    echo '<h6 class="text-gold"><i class="fas fa-map-marker-alt me-2"></i>Location</h6>';
                    echo '<p class="small">'.$row['location'].'</p>';
                    echo '<h6 class="text-gold"><i class="fas fa-info-circle me-2"></i>Visit Info</h6>';
                    echo '<p class="small">'.$row['visit_info'].'</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    $delay += 100;
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- Additional Landmarks -->
<section class="section bg-light">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">More Places to Explore</h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card-custom">
                    <img src="../assets/images/galeries_royales_sai_7938b893.jpg" alt="Galeries Royales" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Galeries Royales Saint-Hubert</h5>
                        <p class="card-text">Europe's first covered shopping arcade, opened in 1847. This stunning glass-roofed gallery features luxury shops, cafes, and theaters.</p>
                        <p class="small text-muted"><i class="fas fa-map-marker-alt me-2"></i>Galerie du Roi 5, 1000 Brussels</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card-custom">
                    <img src="../assets/images/manneken_pis_brussel_f158b05d.jpg" alt="Manneken Pis" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Jeanneke Pis & Zinneke Pis</h5>
                        <p class="card-text">Sister and canine companions to the famous Manneken Pis. These quirky statues continue Brussels' playful fountain tradition.</p>
                        <p class="small text-muted"><i class="fas fa-info-circle me-2"></i>Part of Brussels' fountain heritage</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card-custom">
                    <img src="../assets/images/Basilica of the Sacred Heart.jpg" alt="Galeries Royales" class="card-img-top">
                    <div class="card-body">
                        <!-- <div class="card-icon">
                            <i class="fas fa-church"></i>
                        </div> -->
                        
                        <h5 class="card-title">Basilica of the Sacred Heart</h5>
                        <p class="card-text">The 5th largest church in the world, located in Koekelberg. This Art Deco masterpiece offers panoramic views of Brussels from its dome.</p>
                        <p class="small text-muted"><i class="fas fa-ruler-vertical me-2"></i>89 meters high, 167 meters long</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card-custom">
                    <img src="../assets/images/Palais de Justice.jpg" alt="Galeries Royales" class="card-img-top">
                    <div class="card-body">
                        <!-- <div class="card-icon">
                            <i class="fas fa-landmark"></i>
                        </div> -->
                        <h5 class="card-title">Palais de Justice</h5>
                        <p class="card-text">One of the largest buildings constructed in the 19th century, this massive neo-classical courthouse dominates the Brussels skyline.</p>
                        <p class="small text-muted"><i class="fas fa-building me-2"></i>Larger than St. Peter's Basilica</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card-custom">
                    <img src="../assets/images/Cinquantenaire Arch.jpg" alt="Galeries Royales" class="card-img-top">
                    <div class="card-body">
                        <!-- <div class="card-icon">
                            <i class="fas fa-monument"></i>
                        </div> -->
                        <h5 class="card-title">Cinquantenaire Arch</h5>
                        <p class="card-text">A triumphal arch built for Belgium's 50th anniversary of independence. The park surrounding it houses several museums.</p>
                        <p class="small text-muted"><i class="fas fa-calendar me-2"></i>Built in 1880, completed in 1905</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="card-custom">
                    <img src="../assets/images/Parc du Cinquantenaire.jpg" alt="Galeries Royales" class="card-img-top">
                    <div class="card-body">
                        <!-- <div class="card-icon">
                            <i class="fas fa-tree"></i>
                        </div> -->
                        <h5 class="card-title">Parc du Cinquantenaire</h5>
                        <p class="card-text">A beautiful urban park featuring formal gardens, museums, and the iconic triumphal arch. Perfect for leisurely walks and picnics.</p>
                        <p class="small text-muted"><i class="fas fa-leaf me-2"></i>30 hectares of green space</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sablon District -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2>The Sablon District</h2>
                <p class="lead">An elegant neighborhood known for antiques, chocolate, and culture</p>
                <p><strong>Grand Sablon:</strong> A picturesque square surrounded by antique shops, art galleries, and renowned chocolatiers. The weekend antiques market is a must-visit for collectors and enthusiasts.</p>
                <p><strong>Petit Sablon:</strong> A charming small garden featuring 48 bronze statues representing Brussels' medieval guilds, surrounded by beautiful wrought-iron railings.</p>
                <p><strong>Church of Our Lady of the Sablon:</strong> A stunning Gothic church dating from the 15th century, known for its elaborate architecture and beautiful stained glass windows.</p>
                <p><strong>Egmont Palace:</strong> An 18th-century neoclassical palace now used by the Belgian Ministry of Foreign Affairs. The nearby Egmont Park is a peaceful green space in the heart of the city.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="../assets/images/brussels_cityscape_s_275944aa.jpg" alt="Brussels Architecture" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Mini Europe -->
<section class="section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <h2>Mini-Europe</h2>
                <p class="lead">See all of Europe in one place</p>
                <p>Located at the foot of the Atomium, Mini-Europe is a miniature park featuring over 350 scale models of famous European landmarks.</p>
                <p><strong>Highlights include:</strong></p>
                <ul>
                    <li>The Eiffel Tower, Big Ben, and the Acropolis in miniature</li>
                    <li>Interactive features like moving trains and erupting volcanoes</li>
                    <li>24,000 square meters of beautifully landscaped park</li>
                    <li>Over 80 cities represented from all EU member states</li>
                </ul>
                <p class="text-muted small">Perfect for families and anyone wanting to "tour" Europe in a few hours!</p>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <img src="../assets/images/atomium_brussels_bel_225e89cc.jpg" alt="Atomium" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section" style="background: var(--gradient-primary); color: white; padding: 4rem 0;">
    <div class="container text-center">
        <h2 class="text-white mb-4" data-aos="fade-up">Plan Your Visit</h2>
        <p class="lead text-white mb-4" data-aos="fade-up" data-aos-delay="100">Ready to explore these magnificent landmarks?</p>
        <div data-aos="fade-up" data-aos-delay="200">
            <a href="museums.php" class="btn-gold me-3">Explore Museums</a>
            <a href="contact.php" class="btn-outline-gold">Contact Us</a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
