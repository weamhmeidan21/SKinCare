<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn more about Rose Skincare, our mission, values and commitment to healthy skin.">
    <title>About Us | Rose Skincare</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="about-page">

<header class="about-header">
    <div class="about-header-top">
        <div class="about-header-side about-header-left">
            <button class="about-icon-button" id="menuButton" type="button" aria-label="Open navigation menu">
                <i class="fa-solid fa-bars"></i>
            </button>

            <a href="checkout.php" class="about-icon-button about-cart" aria-label="Shopping bag">
                <i class="fa-solid fa-bag-shopping"></i>
                <span class="about-cart-count">0</span>
            </a>
        </div>

        <a href="../index.php" class="about-logo">
            <img src="../assets/images/logo.png" alt="Rose Skincare logo">
            <span>ROSE SKINCARE</span>
        </a>

        <div class="about-header-side about-header-right">
            <button class="language-button" type="button">
                <i class="fa-solid fa-globe"></i>
                <span>English</span>
                <i class="fa-solid fa-chevron-down"></i>
            </button>

            <button class="about-icon-button" type="button" aria-label="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
    </div>

    <nav class="about-navbar" id="navbar">
        <a href="../index.php">Home</a>
        <a href="shop.php">Skin Care</a>
        <a href="../index.php#best-sellers">Best Sellers</a>
        <a href="shop.php?filter=new">New Arrivals</a>
        <a href="shop.php?filter=offers">Offers</a>
        <a href="about.php" class="active">About</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<main>
    <section class="about-hero">
        <div class="about-hero-background"></div>
        <div class="about-hero-overlay"></div>

        <div class="about-hero-container">
            <div class="about-hero-content">
                <p class="about-eyebrow">ABOUT US</p>
                <h1>Skincare with <span>Purpose &amp; Passion</span></h1>
                <div class="about-title-line"></div>
                <p>
                    At Rose Skincare, we believe that healthy skin is the foundation of true beauty. Our mission is to provide effective, safe, and high-quality skincare products that nourish your skin and boost your natural glow.
                </p>
                <p>
                    Every product we offer is carefully selected to help you feel confident, cared for, and beautiful every day.
                </p>
                <a href="shop.php" class="about-shop-button">
                    Shop Our Collection
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="values-section">
        <div class="about-container">
            <div class="values-heading">
                <p>OUR VALUES</p>
                <h2>What Makes Rose Skincare Different</h2>
            </div>

            <div class="values-grid">
                <article class="value-card">
                    <div class="value-icon">
                        <i class="fa-solid fa-seedling"></i>
                    </div>
                    <h3>Clean &amp; Safe</h3>
                    <p>We choose gentle, safe ingredients that are good for your skin.</p>
                </article>

                <article class="value-card">
                    <div class="value-icon">
                        <i class="fa-solid fa-flask"></i>
                    </div>
                    <h3>Effective</h3>
                    <p>Our products are backed by science to deliver real, visible results.</p>
                </article>

                <article class="value-card">
                    <div class="value-icon">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <h3>Made With Care</h3>
                    <p>We are passionate about quality and put care into every detail.</p>
                </article>

                <article class="value-card">
                    <div class="value-icon">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <h3>Sustainable</h3>
                    <p>We care about the planet and are committed to responsible beauty.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="about-story-section">
        <div class="about-container about-story-grid">
            <div class="about-story-content">
                <p class="about-eyebrow">OUR STORY</p>
                <h2>Beauty Inspired by Nature</h2>
                <div class="about-title-line"></div>
                <p>
                    Rose Skincare was created from a simple belief: skincare should feel gentle, beautiful and effective. We carefully choose products that support different skin types and concerns without making skincare complicated.
                </p>
                <p>
                    Our goal is to help every customer discover products that fit their skin and make their daily routine something they truly enjoy.
                </p>
            </div>

            <div class="about-story-features">
                <div class="story-feature">
                    <span>01</span>
                    <div>
                        <h3>Thoughtful Selection</h3>
                        <p>Products chosen for quality, safety and visible results.</p>
                    </div>
                </div>

                <div class="story-feature">
                    <span>02</span>
                    <div>
                        <h3>For Every Skin Type</h3>
                        <p>Easy product discovery based on your individual skin needs.</p>
                    </div>
                </div>

                <div class="story-feature">
                    <span>03</span>
                    <div>
                        <h3>Customer First</h3>
                        <p>A simple, caring and reliable shopping experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="about-footer">
    <div class="about-container about-footer-grid">
        <div class="about-footer-brand">
            <a href="../index.php" class="about-logo footer-logo">
                <img src="../assets/images/logo.png" alt="Rose Skincare logo">
                <span>ROSE SKINCARE</span>
            </a>
            <p>Natural skincare for healthy, radiant skin. Inspired by nature and made for you.</p>

            <div class="about-social-links">
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#" aria-label="Pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
            </div>
        </div>

        <div class="about-footer-column">
            <h3>Quick Links</h3>
            <a href="../index.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="../index.php#skin-types">Skin Type</a>
            <a href="../index.php#best-sellers">Best Sellers</a>
            <a href="contact.php">Contact</a>
        </div>

        <div class="about-footer-column">
            <h3>Customer Care</h3>
            <a href="#">Shipping &amp; Delivery</a>
            <a href="#">Returns &amp; Refunds</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
        </div>

        <div class="about-newsletter">
            <h3>Stay in the Glow</h3>
            <p>Subscribe to receive skincare tips, offers and new product updates.</p>
            <form class="about-newsletter-form">
                <input type="email" placeholder="Enter your email" aria-label="Email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>

    <div class="about-container about-footer-bottom">
        <p>&copy; 2026 Rose Skincare. All rights reserved.</p>
        <p>Made with care for glowing skin.</p>
    </div>
</footer>

<script src="../assets/js/main.js"></script>
</body>
</html>
