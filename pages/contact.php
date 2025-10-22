<?php
require_once '../includes/config.php';
$page_title = 'Contact Us';
track_page_visit('contact');

$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $subject = sanitize_input($_POST['subject']);
    $message = sanitize_input($_POST['message']);
    
    if (!empty($name) && !empty($email) && !empty($message)) {
        $sql = "INSERT INTO comments (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
        
        if ($conn->query($sql) === TRUE) {
            $success_message = "Thank you for your message! We'll get back to you soon.";
        } else {
            $error_message = "Sorry, there was an error submitting your message. Please try again.";
        }
    } else {
        $error_message = "Please fill in all required fields.";
    }
}

include '../includes/header.php';
?>

<!-- Page Header -->
<div class="page-header" style="background-image: url('../assets/images/grand_place_brussels_364537f2.jpg');">
    <div class="page-header-content">
        <h1 data-aos="fade-up">Get in Touch</h1>
        <p data-aos="fade-up" data-aos-delay="200">We'd Love to Hear from You</p>
    </div>
</div>

<!-- Contact Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Contact Us</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">Have questions about Brussels, the NIP program, or want to share your thoughts? We'd love to hear from you!</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                <div class="card-custom">
                    <div class="card-body p-4">
                        <h4 class="mb-4">Send Us a Message</h4>
                        
                        <?php if ($success_message): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i><?php echo $success_message; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                        <?php endif; ?>
                        
                        <?php if ($error_message): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i><?php echo $error_message; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                        <?php endif; ?>
                        
                        <form method="POST" action="">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Your Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Your Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Optional">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message *</label>
                                <textarea class="form-control" id="message" name="message" rows="6" required></textarea>
                            </div>
                            <button type="submit" class="btn-gold">
                                <i class="fas fa-paper-plane me-2"></i>Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card-custom mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-body">
                        <h5 class="text-gold mb-3"><i class="fas fa-university me-2"></i>About This Project</h5>
                        <p>This website was created as part of the North Intensive Program (NIP) 2025, a collaboration between:</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-gold me-2"></i>Mwenge Catholic University (MWECAU), Tanzania</li>
                            <li><i class="fas fa-check text-gold me-2"></i>Erasmus University College Brussels, Belgium</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card-custom mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-body">
                        <h5 class="text-gold mb-3"><i class="fas fa-map-marker-alt me-2"></i>Visit Brussels</h5>
                        <p><strong>Tourist Information:</strong></p>
                        <p>Visit Brussels<br>
                        Royal Galeries Saint-Hubert 1<br>
                        1000 Brussels, Belgium</p>
                        <p class="mb-0">
                            <i class="fas fa-globe me-2 text-gold"></i>
                            <a href="https://visit.brussels" target="_blank" class="text-decoration-none">visit.brussels</a>
                        </p>
                    </div>
                </div>
                
                <div class="card-custom" data-aos="fade-up" data-aos-delay="500">
                    <div class="card-body">
                        <h5 class="text-gold mb-3"><i class="fas fa-share-alt me-2"></i>Connect With Us</h5>
                        <div class="social-links">
                            <a href="#" class="me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Info -->
<section class="section bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box">
                    <i class="fas fa-plane"></i>
                    <h5>Getting to Brussels</h5>
                    <p>Brussels Airport (BRU) is well-connected to cities worldwide. Direct train service to city center takes 20 minutes.</p>
                </div>
            </div>
            
            <div class="col-lg-4 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-box">
                    <i class="fas fa-hotel"></i>
                    <h5>Where to Stay</h5>
                    <p>Brussels offers accommodation for every budget, from hostels to luxury hotels. The historic center is ideal for first-time visitors.</p>
                </div>
            </div>
            
            <div class="col-lg-4 text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-box">
                    <i class="fas fa-subway"></i>
                    <h5>Getting Around</h5>
                    <p>Excellent public transport system (metro, tram, bus). Many attractions are within walking distance in the city center.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Frequently Asked Questions</h2>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                What is the best time to visit Brussels?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Brussels is beautiful year-round! Spring (April-May) and early fall (September-October) offer pleasant weather and fewer crowds. Summer (June-August) is peak tourist season with many festivals. The Royal Palace is open to visitors only in summer. Winter brings Christmas markets and a magical atmosphere.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                What languages are spoken in Brussels?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Brussels is officially bilingual (French and Dutch). However, as an international city, English is widely spoken, especially in tourist areas, restaurants, and hotels. Many Brusselois are multilingual and can communicate in three or more languages.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                How many days do I need to explore Brussels?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We recommend at least 3-4 days to experience Brussels properly. This allows time for major landmarks (Grand Place, Atomium, Royal Museums), EU institutions, day trips (like Bruges or Ghent), and enjoying Belgian cuisine and culture at a relaxed pace.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                What Belgian specialties should I try?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Don't miss Belgian waffles (Liège and Brussels styles), frites (fries) with various sauces, Belgian chocolate from renowned chocolatiers, and Belgian beer (with hundreds of varieties). Also try moules-frites (mussels and fries), carbonnade flamande (beef stew), and speculoos cookies.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Can I visit the European Parliament?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes! The European Parliament offers free guided tours and access to the Parlamentarium visitor center. You can even attend plenary sessions when Parliament is in session. Book tours in advance through the official European Parliament website.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section" style="background: var(--gradient-primary); color: white; padding: 4rem 0;">
    <div class="container text-center">
        <h2 class="text-white mb-4" data-aos="fade-up">Ready to Explore Brussels?</h2>
        <p class="lead text-white mb-4" data-aos="fade-up" data-aos-delay="100">Start planning your journey to the heart of Europe</p>
        <div data-aos="fade-up" data-aos-delay="200">
            <a href="../index.php" class="btn-gold me-3">Back to Home</a>
            <a href="landmarks.php" class="btn-outline-gold">View Landmarks</a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
