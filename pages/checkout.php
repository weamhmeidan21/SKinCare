<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Complete your Rose Skincare order securely.">
    <title>Checkout | Rose Skincare</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="checkout-page">

<header class="checkout-header">
    <div class="checkout-header-top">
        <div class="checkout-header-left">
            <button class="checkout-icon-button" id="menuButton" type="button" aria-label="Open navigation menu">
                <i class="fa-solid fa-bars"></i>
            </button>

            <a href="checkout.php" class="checkout-icon-button checkout-bag" aria-label="Shopping cart">
                <i class="fa-solid fa-bag-shopping"></i>
                <span>3</span>
            </a>
        </div>

        <a href="../index.php" class="checkout-logo">
            <img src="../assets/images/logo.png" alt="Rose Skincare logo">
            <span>ROSE SKINCARE</span>
        </a>

        <div class="checkout-header-right">
            <button class="checkout-language" type="button">
                <i class="fa-solid fa-globe"></i>
                <span>English</span>
                <i class="fa-solid fa-chevron-down"></i>
            </button>

            <a href="my-orders.php" class="checkout-icon-button" aria-label="Account">
                <i class="fa-regular fa-user"></i>
            </a>
        </div>
    </div>

    <nav class="checkout-navbar" id="navbar">
        <a href="../index.php">Home</a>
        <a href="shop.php">Skin Care</a>
        <a href="../index.php#best-sellers">Best Sellers</a>
        <a href="shop.php?filter=new">New Arrivals</a>
        <a href="shop.php?filter=offers">Offers</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<main>
    <section class="checkout-banner">
        <div class="checkout-banner-image"></div>
        <div class="checkout-banner-overlay"></div>

        <div class="checkout-container checkout-banner-content">
            <h1>Checkout</h1>
            <div class="checkout-breadcrumb">
                <a href="../index.php">Home</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="cart.php">Cart</a>
                <i class="fa-solid fa-chevron-right"></i>
                <span>Checkout</span>
            </div>
        </div>
    </section>

    <section class="checkout-steps-section">
        <div class="checkout-container checkout-steps">
            <div class="checkout-step active">
                <span>1</span>
                <div>
                    <h3>Shipping</h3>
                    <p>Enter your details</p>
                </div>
            </div>

            <div class="checkout-step-line"></div>

            <div class="checkout-step">
                <span>2</span>
                <div>
                    <h3>Payment</h3>
                    <p>Select payment method</p>
                </div>
            </div>

            <div class="checkout-step-line"></div>

            <div class="checkout-step">
                <span>3</span>
                <div>
                    <h3>Review</h3>
                    <p>Review your order</p>
                </div>
            </div>
        </div>
    </section>

    <section class="checkout-main">
        <div class="checkout-container checkout-layout">
            <div class="checkout-form-card">
                <div class="checkout-card-title">
                    <div class="checkout-title-icon">
                        <i class="fa-solid fa-box"></i>
                    </div>
                    <div>
                        <h2>Shipping Information</h2>
                        <p>Enter your details to place your order</p>
                    </div>
                </div>

                <form id="checkoutForm" class="checkout-form" action="#" method="post">
                    <div class="checkout-fields-grid">
                        <div class="checkout-field">
                            <label for="fullName">Full Name <span>*</span></label>
                            <input id="fullName" type="text" name="full_name" placeholder="Enter your full name" required>
                        </div>

                        <div class="checkout-field">
                            <label for="checkoutEmail">Email Address <span>*</span></label>
                            <input id="checkoutEmail" type="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="checkout-field">
                            <label for="phoneNumber">Phone Number <span>*</span></label>
                            <input id="phoneNumber" type="tel" name="phone" placeholder="Enter your phone number" required>
                        </div>

                        <div class="checkout-field">
                            <label for="country">Country / Region <span>*</span></label>
                            <select id="country" name="country" required>
                                <option value="Palestine">Palestine</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Egypt">Egypt</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                            </select>
                        </div>

                        <div class="checkout-field">
                            <label for="city">City <span>*</span></label>
                            <input id="city" type="text" name="city" placeholder="Enter your city" required>
                        </div>

                        <div class="checkout-field">
                            <label for="address">Address <span>*</span></label>
                            <input id="address" type="text" name="address" placeholder="Enter your street address" required>
                        </div>

                        <div class="checkout-field">
                            <label for="apartment">Apartment, suite, etc. <small>(optional)</small></label>
                            <input id="apartment" type="text" name="apartment" placeholder="Enter apartment, suite, etc.">
                        </div>

                        <div class="checkout-field">
                            <label for="postalCode">Postal Code</label>
                            <input id="postalCode" type="text" name="postal_code" placeholder="Enter postal code">
                        </div>
                    </div>

                    <div class="checkout-form-section">
                        <div class="checkout-section-heading">
                            <i class="fa-solid fa-truck"></i>
                            <div>
                                <h3>Shipping Method</h3>
                                <p>Choose how you would like your order to be delivered</p>
                            </div>
                        </div>

                        <label class="shipping-option selected">
                            <div class="shipping-option-left">
                                <input type="radio" name="shipping" value="standard" data-price="0" checked>
                                <span class="shipping-radio"></span>
                                <div>
                                    <h4>Standard Shipping</h4>
                                    <p>3-5 business days</p>
                                </div>
                            </div>
                            <strong>FREE</strong>
                        </label>

                        <label class="shipping-option">
                            <div class="shipping-option-left">
                                <input type="radio" name="shipping" value="express" data-price="19.90">
                                <span class="shipping-radio"></span>
                                <div>
                                    <h4>Express Shipping</h4>
                                    <p>1-2 business days</p>
                                </div>
                            </div>
                            <strong>NIS 19.90</strong>
                        </label>
                    </div>

                    <div class="checkout-form-section">
                        <div class="checkout-section-heading">
                            <i class="fa-regular fa-note-sticky"></i>
                            <div>
                                <h3>Order Notes <small>(optional)</small></h3>
                                <p>Add a note about your order</p>
                            </div>
                        </div>

                        <textarea name="order_notes" rows="4" placeholder="Notes about your order, e.g. special delivery instructions"></textarea>
                    </div>

                    <button class="checkout-continue-button" type="submit">
                        Continue to Payment
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>

            <aside class="checkout-summary-card">
                <div class="checkout-card-title summary-title">
                    <div class="checkout-title-icon">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <h2>Your Order</h2>
                </div>

                <div class="checkout-products">
                    <article class="checkout-product">
                        <div class="checkout-product-image">
                            <img src="../assets/images/products/cream.png" alt="Rose Hydra Cream">
                        </div>
                        <div class="checkout-product-info">
                            <h3>Rose Hydra Cream</h3>
                            <p>Moisturizer</p>
                            <span>1 x NIS 89.00</span>
                        </div>
                        <strong>NIS 89.00</strong>
                    </article>

                    <article class="checkout-product">
                        <div class="checkout-product-image">
                            <img src="../assets/images/products/serum.png" alt="Radiance Serum">
                        </div>
                        <div class="checkout-product-info">
                            <h3>Radiance Serum</h3>
                            <p>Serum</p>
                            <span>1 x NIS 109.00</span>
                        </div>
                        <strong>NIS 109.00</strong>
                    </article>

                    <article class="checkout-product">
                        <div class="checkout-product-image">
                            <img src="../assets/images/products/mask.png" alt="Rose Clay Mask">
                        </div>
                        <div class="checkout-product-info">
                            <h3>Rose Clay Mask</h3>
                            <p>Face Mask</p>
                            <span>1 x NIS 79.00</span>
                        </div>
                        <strong>NIS 79.00</strong>
                    </article>
                </div>

                <div class="checkout-summary-values">
                    <div>
                        <span>Subtotal</span>
                        <strong id="checkoutSubtotal">NIS 277.00</strong>
                    </div>
                    <div>
                        <span>Shipping</span>
                        <strong id="checkoutShipping">FREE</strong>
                    </div>
                </div>

                <div class="checkout-total">
                    <div>
                        <h3>Total</h3>
                        <p>VAT included</p>
                    </div>
                    <strong id="checkoutTotal">NIS 277.00</strong>
                </div>

                <div class="checkout-security-box">
                    <div>
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <section>
                        <h3>Secure Checkout</h3>
                        <p>Your information is 100% secure and protected.</p>
                    </section>
                </div>

                <div class="checkout-payment-logos">
                    <h3>We Accept</h3>
                    <div class="payment-options">
                        <span class="payment-logo visa-logo">VISA</span>
                        <span class="payment-logo mastercard-logo"><i class="fa-brands fa-cc-mastercard"></i></span>
                        <span class="payment-logo">mada</span>
                        <span class="payment-logo apple-pay-logo"><i class="fa-brands fa-apple-pay"></i></span>
                    </div>
                </div>
            </aside>
        </div>
    </section>

    <section class="checkout-benefits">
        <div class="checkout-container checkout-benefits-grid">
            <div class="checkout-benefit">
                <i class="fa-solid fa-truck-fast"></i>
                <div>
                    <h3>Fast Delivery</h3>
                    <p>Carefully packed and delivered quickly.</p>
                </div>
            </div>

            <div class="checkout-benefit">
                <i class="fa-solid fa-lock"></i>
                <div>
                    <h3>Secure Payment</h3>
                    <p>Your checkout details stay protected.</p>
                </div>
            </div>

            <div class="checkout-benefit">
                <i class="fa-regular fa-heart"></i>
                <div>
                    <h3>Gentle Care</h3>
                    <p>Products selected for healthy skin.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="checkout-footer">
    <div class="checkout-container checkout-footer-grid">
        <div class="checkout-footer-brand">
            <a href="../index.php" class="checkout-logo checkout-footer-logo">
                <img src="../assets/images/logo.png" alt="Rose Skincare logo">
                <span>ROSE SKINCARE</span>
            </a>
            <p>Natural skincare for healthy, radiant skin. Inspired by nature, made for you.</p>
            <div class="checkout-social-links">
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
            </div>
        </div>

        <div class="checkout-footer-column">
            <h3>Shop</h3>
            <a href="shop.php">Skin Care</a>
            <a href="../index.php#skin-types">Skin Type</a>
            <a href="../index.php#best-sellers">Best Sellers</a>
            <a href="shop.php?filter=offers">Offers</a>
        </div>

        <div class="checkout-footer-column">
            <h3>Help</h3>
            <a href="contact.php">Contact</a>
            <a href="#">Shipping</a>
            <a href="#">Returns</a>
            <a href="#">Privacy Policy</a>
        </div>

        <div class="checkout-newsletter">
            <h3>Stay in the Glow</h3>
            <p>Subscribe for skincare tips and product updates.</p>
            <form class="checkout-newsletter-form">
                <input type="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>

    <div class="checkout-container checkout-footer-bottom">
        <p>&copy; 2026 Rose Skincare. All rights reserved.</p>
        <div>
            <a href="#">Privacy Policy</a>
            <span></span>
            <a href="#">Terms of Service</a>
        </div>
    </div>
</footer>

<script src="../assets/js/main.js"></script>
</body>
</html>
