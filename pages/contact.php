<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Rose Skincare for product questions, order support and skincare assistance.">
    <title>Contact Us | Rose Skincare</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="contact-page">

<header class="contact-header">
    <div class="contact-header-container">
        <a href="../index.php" class="contact-logo">
            <img src="../assets/images/logo.png" alt="Rose Skincare Logo">
            <span>ROSE SKINCARE</span>
        </a>

        <nav class="contact-navbar" id="navbar">
            <a href="../index.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="../index.php#skin-types">Skin Care</a>
            <a href="../index.php#skin-types">Skin Type</a>
            <a href="../index.php#best-sellers">Best Sellers</a>
            <a href="about.php">About</a>
            <a href="contact.php" class="active">Contact</a>
        </nav>

        <div class="contact-header-actions">
            <button class="contact-language" type="button">
                <i class="fa-solid fa-globe"></i>
                <span>English</span>
                <i class="fa-solid fa-chevron-down"></i>
            </button>

            <button class="contact-icon-button" type="button" aria-label="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>

            <a href="my-orders.php" class="contact-icon-button" aria-label="Account">
                <i class="fa-regular fa-user"></i>
            </a>

            <a href="checkout.php" class="contact-icon-button contact-cart" aria-label="Shopping cart">
                <i class="fa-solid fa-bag-shopping"></i>
                <span>0</span>
            </a>

            <button class="contact-menu-button" id="menuButton" type="button" aria-label="Open navigation menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>
</header>

<main>
    <section class="contact-hero">
        <div class="contact-hero-image"></div>
        <div class="contact-hero-overlay"></div>

        <div class="contact-container contact-hero-container">
            <div class="contact-hero-content">
                <p class="contact-label">WE'RE HERE FOR YOU</p>
                <h1>Contact Us</h1>
                <div class="contact-line"></div>
                <p>
                    We'd love to hear from you. Whether you have a question about products, orders, or skincare support, our team is here to help.
                </p>
                <a href="#contactForm" class="contact-primary-button">
                    Send a Message
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="contact-main-section">
        <div class="contact-container">
            <div class="contact-layout">
                <div class="contact-form-card">
                    <h2>Send Us a Message</h2>

                    <form id="contactForm" class="contact-form" action="#" method="post">
                        <div class="contact-form-row">
                            <div class="contact-input-group">
                                <i class="fa-regular fa-user"></i>
                                <input type="text" name="full_name" placeholder="Full Name" required>
                            </div>

                            <div class="contact-input-group">
                                <i class="fa-regular fa-envelope"></i>
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>

                        <div class="contact-form-row">
                            <div class="contact-input-group">
                                <i class="fa-solid fa-phone"></i>
                                <input type="tel" name="phone" placeholder="Phone">
                            </div>

                            <div class="contact-input-group">
                                <i class="fa-solid fa-tag"></i>
                                <input type="text" name="subject" placeholder="Subject" required>
                            </div>
                        </div>

                        <div class="contact-input-group contact-textarea-group">
                            <i class="fa-regular fa-comment"></i>
                            <textarea name="message" placeholder="Message" rows="7" required></textarea>
                        </div>

                        <button class="contact-submit-button" type="submit">
                            Send Message
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>

                <div class="contact-info-card">
                    <h2>Get in Touch</h2>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div>
                            <h3>Email Us</h3>
                            <a href="mailto:hello@roseskincare.com">hello@roseskincare.com</a>
                            <a href="mailto:support@roseskincare.com">support@roseskincare.com</a>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <h3>Call Us</h3>
                            <a href="tel:+970599123456">+970 599 123 456</a>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h3>Visit Us</h3>
                            <p>Rose Skincare HQ<br>Nablus, Palestine</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <div>
                            <h3>Working Hours</h3>
                            <p>Saturday - Thursday: 9:00 AM - 6:00 PM<br>Friday: Closed</p>
                        </div>
                    </div>
                </div>

                <aside class="contact-side-column">
                    <div class="contact-social-card">
                        <h2>Follow Us</h2>
                        <p>Stay connected for skincare tips, product updates, and more.</p>

                        <div class="contact-social-links">
                            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        </div>
                    </div>

                    <div class="contact-flower-decoration">
                        <img src="../assets/images/logo.png" alt="Rose decoration">
                    </div>
                </aside>
            </div>

            <div class="contact-services">
                <div class="contact-service-item">
                    <div class="contact-service-icon"><i class="fa-solid fa-headset"></i></div>
                    <div>
                        <h3>Quick Response</h3>
                        <p>We reply within 24 hours on business days.</p>
                    </div>
                </div>

                <div class="contact-service-item">
                    <div class="contact-service-icon"><i class="fa-solid fa-droplet"></i></div>
                    <div>
                        <h3>Skincare Support</h3>
                        <p>Get expert help for the best skin solutions.</p>
                    </div>
                </div>

                <div class="contact-service-item">
                    <div class="contact-service-icon"><i class="fa-solid fa-lock"></i></div>
                    <div>
                        <h3>Secure Shopping</h3>
                        <p>Your information is safe with us.</p>
                    </div>
                </div>

                <div class="contact-service-item">
                    <div class="contact-service-icon"><i class="fa-regular fa-heart"></i></div>
                    <div>
                        <h3>Friendly Service</h3>
                        <p>We're here to make your experience beautiful.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="contact-footer">
    <div class="contact-container contact-footer-grid">
        <div class="contact-footer-brand">
            <a href="../index.php" class="contact-logo contact-footer-logo">
                <img src="../assets/images/logo.png" alt="Rose Skincare Logo">
                <span>ROSE SKINCARE</span>
            </a>

            <p>Natural skincare for healthy, radiant skin. Inspired by nature, made for you.</p>

            <div class="contact-footer-socials">
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="Pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
            </div>
        </div>

        <div class="contact-footer-column">
            <h3>Quick Links</h3>
            <a href="shop.php">Shop All</a>
            <a href="../index.php#skin-types">Skin Care</a>
            <a href="../index.php#skin-types">Skin Type</a>
            <a href="../index.php#best-sellers">Best Sellers</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact Us</a>
        </div>

        <div class="contact-footer-column">
            <h3>Customer Care</h3>
            <a href="#">FAQs</a>
            <a href="#">Shipping &amp; Delivery</a>
            <a href="#">Returns &amp; Refunds</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
        </div>

        <div class="contact-newsletter">
            <h3>Stay in the Glow</h3>
            <p>Subscribe to get 10% off your first order and exclusive skincare tips.</p>
            <form class="contact-newsletter-form">
                <input type="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>

    <div class="contact-container contact-footer-bottom">
        <p>&copy; 2026 Rose Skincare. All rights reserved.</p>
        <p>Made with care for glowing skin.</p>
    </div>
</footer>

<script src="../assets/js/main.js"></script>
</body>
</html>
