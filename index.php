<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rose Skincare</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="header">
    <div class="container header-content">
        <a href="index.php" class="logo">
            <img src="assets/images/logo.png" alt="Rose Skincare logo">
            <span>ROSE SKINCARE</span>
        </a>

        <nav class="navbar" id="navbar">
            <a href="index.php" class="active">Home</a>
            <a href="pages/shop.php">Shop</a>
            <a href="#skin-types">Skin Type</a>
            <a href="#best-sellers">Best Sellers</a>
            <a href="pages/about.php">About Us</a>
            <a href="pages/contact.php">Contact</a>
        </nav>

        <div class="header-actions">
            <button class="icon-button" type="button" aria-label="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>

            <a href="pages/my-orders.php" class="icon-button" aria-label="Account">
                <i class="fa-regular fa-user"></i>
            </a>

            <a href="pages/wishlist.php" class="icon-button hide-mobile" aria-label="Wishlist">
                <i class="fa-regular fa-heart"></i>
            </a>

            <a href="pages/checkout.php" class="icon-button cart-button" aria-label="Cart">
                <i class="fa-solid fa-bag-shopping"></i>
                <span class="cart-count">0</span>
            </a>

            <button class="menu-button" id="menuButton" type="button" aria-label="Open menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>
</header>

<main>
    <section class="hero-slider" id="heroSlider">
        <div class="hero-slide active" style="background-image: url('assets/images/hero/hero-1.png');"></div>
        <div class="hero-slide" style="background-image: url('assets/images/hero/hero-2.png');"></div>
        <div class="hero-slide" style="background-image: url('assets/images/hero/hero-3.png');"></div>

        <div class="hero-overlay"></div>

        <div class="container hero-container">
            <div class="hero-content">
                <p class="section-label">PURE CARE. REAL RESULTS.</p>
                <h1>Reveal Your <span>Natural Radiance</span></h1>
                <div class="small-line"></div>
                <p class="hero-description">
                    Thoughtful formulas, inspired by nature, made to bring out the healthiest version of you.
                </p>
                <a href="pages/shop.php" class="primary-button">
                    Shop Now
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <button class="slider-arrow previous-arrow" id="previousSlide" type="button" aria-label="Previous slide">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <button class="slider-arrow next-arrow" id="nextSlide" type="button" aria-label="Next slide">
            <i class="fa-solid fa-chevron-right"></i>
        </button>

        <div class="slider-dots">
            <button class="slider-dot active" data-index="0" aria-label="First slide"></button>
            <button class="slider-dot" data-index="1" aria-label="Second slide"></button>
            <button class="slider-dot" data-index="2" aria-label="Third slide"></button>
        </div>
    </section>

    <section class="section skin-types-section" id="skin-types">
        <div class="container">
            <div class="section-heading">
                <p class="section-label">KNOW YOUR SKIN</p>
                <h2>Choose Your Skin Type</h2>
            </div>

            <div class="skin-types-grid">
                <article class="skin-type-card">
                    <div class="skin-icon"><i class="fa-solid fa-droplet"></i></div>
                    <h3>Dry Skin</h3>
                    <p>Feels tight, rough or flaky. Needs deep hydration.</p>
                    <a href="pages/shop.php?skin_type=dry" class="outline-button">
                        Explore Products
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </article>

                <article class="skin-type-card">
                    <div class="skin-icon"><i class="fa-solid fa-droplet-slash"></i></div>
                    <h3>Oily Skin</h3>
                    <p>Shiny appearance with enlarged pores and excess oil.</p>
                    <a href="pages/shop.php?skin_type=oily" class="outline-button">
                        Explore Products
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </article>

                <article class="skin-type-card">
                    <div class="skin-icon"><i class="fa-solid fa-water"></i></div>
                    <h3>Combination Skin</h3>
                    <p>Oily in some areas and dry in others.</p>
                    <a href="pages/shop.php?skin_type=combination" class="outline-button">
                        Explore Products
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </article>

                <article class="skin-type-card">
                    <div class="skin-icon"><i class="fa-solid fa-feather"></i></div>
                    <h3>Sensitive Skin</h3>
                    <p>Easily irritated and needs calm, gentle care.</p>
                    <a href="pages/shop.php?skin_type=sensitive" class="outline-button">
                        Explore Products
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </article>
            </div>
        </div>
    </section>

    <section class="section best-sellers-section" id="best-sellers">
        <div class="container">
            <div class="section-heading">
                <p class="section-label">OUR FAVORITES</p>
                <h2>Best Sellers</h2>
            </div>

            <div class="products-grid">
                <article class="product-card">
                    <div class="product-image">
                        <span class="discount">10% OFF</span>
                        <button class="wishlist-button" type="button" aria-label="Add to wishlist">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                        <img src="assets/images/products/cream.png" alt="Rose Hydra Cream">
                    </div>
                    <div class="product-info">
                        <h3>Rose Hydra Cream</h3>
                        <p>Moisturizer</p>
                        <div class="product-bottom">
                            <span class="price">NIS 89.00</span>
                            <button class="add-cart-button" type="button" aria-label="Add product to cart">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </article>

                <article class="product-card">
                    <div class="product-image">
                        <span class="discount">15% OFF</span>
                        <button class="wishlist-button" type="button" aria-label="Add to wishlist">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                        <img src="assets/images/products/serum.png" alt="Radiance Serum">
                    </div>
                    <div class="product-info">
                        <h3>Radiance Serum</h3>
                        <p>Serum</p>
                        <div class="product-bottom">
                            <span class="price">NIS 109.00</span>
                            <button class="add-cart-button" type="button" aria-label="Add product to cart">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </article>

                <article class="product-card">
                    <div class="product-image">
                        <span class="discount">10% OFF</span>
                        <button class="wishlist-button" type="button" aria-label="Add to wishlist">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                        <img src="assets/images/products/cleanser.png" alt="Gentle Foam Cleanser">
                    </div>
                    <div class="product-info">
                        <h3>Gentle Foam Cleanser</h3>
                        <p>Cleanser</p>
                        <div class="product-bottom">
                            <span class="price">NIS 69.00</span>
                            <button class="add-cart-button" type="button" aria-label="Add product to cart">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </article>

                <article class="product-card">
                    <div class="product-image">
                        <span class="discount">20% OFF</span>
                        <button class="wishlist-button" type="button" aria-label="Add to wishlist">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                        <img src="assets/images/products/mask.png" alt="Rose Clay Mask">
                    </div>
                    <div class="product-info">
                        <h3>Rose Clay Mask</h3>
                        <p>Face Mask</p>
                        <div class="product-bottom">
                            <span class="price">NIS 79.00</span>
                            <button class="add-cart-button" type="button" aria-label="Add product to cart">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </article>
            </div>

            <div class="center-button">
                <a href="pages/shop.php" class="outline-button large-button">
                    View All Products
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="section about-section" id="about">
        <div class="container">
            <div class="about-box">
                <div class="about-image">
                    <img src="assets/images/story.png" alt="Rose skincare story">
                </div>

                <div class="about-content">
                    <p class="section-label">OUR STORY</p>
                    <h2>Skincare that cares, naturally.</h2>
                    <div class="small-line"></div>
                    <p>
                        At Rose Skincare, we believe true beauty begins with healthy, nourished skin. Our products are crafted with natural ingredients and gentle formulas to help you feel confident every day.
                    </p>
                    <a href="pages/about.php" class="primary-button">
                        Learn More About Us
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="features-section">
        <div class="container features-grid">
            <div class="feature-item">
                <div class="feature-icon"><i class="fa-solid fa-leaf"></i></div>
                <div>
                    <h3>Natural Ingredients</h3>
                    <p>Clean, safe and effective plant-based ingredients.</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon"><i class="fa-solid fa-truck-fast"></i></div>
                <div>
                    <h3>Fast Delivery</h3>
                    <p>Quick and reliable delivery to your door.</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon"><i class="fa-solid fa-certificate"></i></div>
                <div>
                    <h3>Original Products</h3>
                    <p>100% authentic products you can trust.</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon"><i class="fa-regular fa-heart"></i></div>
                <div>
                    <h3>Gentle Care</h3>
                    <p>Dermatologically tested for all skin types.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section testimonials-section">
        <div class="container">
            <div class="section-heading">
                <p class="section-label">CUSTOMER LOVE</p>
                <h2>What Our Customers Say</h2>
            </div>

            <div class="testimonials-grid">
                <article class="testimonial-card">
                    <i class="fa-solid fa-quote-left quote-icon"></i>
                    <p>My skin feels softer, brighter and more hydrated. I love the natural ingredients.</p>
                    <div class="stars">*****</div>
                    <strong>Aisha M.</strong>
                </article>

                <article class="testimonial-card">
                    <i class="fa-solid fa-quote-left quote-icon"></i>
                    <p>Rose Skincare changed my routine. Every product feels gentle and luxurious.</p>
                    <div class="stars">*****</div>
                    <strong>Lina R.</strong>
                </article>

                <article class="testimonial-card">
                    <i class="fa-solid fa-quote-left quote-icon"></i>
                    <p>The cleanser and cream are now my daily essentials. Simple, calm and effective.</p>
                    <div class="stars">*****</div>
                    <strong>Maya S.</strong>
                </article>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <a href="index.php" class="logo">
                <img src="assets/images/logo.png" alt="Rose Skincare logo">
                <span>ROSE SKINCARE</span>
            </a>
            <p>Gentle, natural skincare made for healthy everyday radiance.</p>
            <div class="social-links">
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
            </div>
        </div>

        <div class="footer-column">
            <h3>Shop</h3>
            <a href="pages/shop.php?skin_type=dry">Dry Skin</a>
            <a href="pages/shop.php?skin_type=oily">Oily Skin</a>
            <a href="pages/shop.php?skin_type=combination">Combination Skin</a>
            <a href="pages/shop.php?skin_type=sensitive">Sensitive Skin</a>
        </div>

        <div class="footer-column">
            <h3>Company</h3>
            <a href="pages/about.php">About Us</a>
            <a href="pages/contact.php">Contact</a>
            <a href="pages/my-orders.php">My Orders</a>
            <a href="pages/checkout.php">Checkout</a>
        </div>

        <div class="newsletter">
            <h3>Newsletter</h3>
            <p>Get skincare tips and product updates in your inbox.</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Email address" aria-label="Email address" required>
                <button type="submit" aria-label="Subscribe">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>

    <div class="container footer-bottom">
        <p>&copy; 2026 Rose Skincare. All rights reserved.</p>
        <p>Made with care for glowing skin.</p>
    </div>
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>
