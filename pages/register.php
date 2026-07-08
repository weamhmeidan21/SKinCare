<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Create your Rose Skincare account.">
    <title>Create Account | Rose Skincare</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="register-page">

<header class="register-header">
    <div class="register-header-container">
        <a href="../index.php" class="register-logo">
            <img src="../assets/images/logo.png" alt="Rose Skincare logo">
            <span>ROSE SKINCARE</span>
        </a>

        <nav class="register-navbar" id="navbar">
            <a href="../index.php">Home</a>
            <a href="shop.php">Skin Care</a>
            <a href="../index.php#best-sellers">Best Sellers</a>
            <a href="shop.php?filter=new">New Arrivals</a>
            <a href="shop.php?filter=offers">Offers</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>

        <div class="register-header-actions">
            <button class="register-icon-button" type="button" aria-label="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>

            <a href="checkout.php" class="register-icon-button register-cart" aria-label="Shopping cart">
                <i class="fa-solid fa-bag-shopping"></i>
                <span>2</span>
            </a>

            <a href="my-orders.php" class="register-icon-button" aria-label="Account">
                <i class="fa-regular fa-user"></i>
            </a>

            <button class="register-menu-button" id="menuButton" type="button" aria-label="Open navigation menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>
</header>

<main class="register-main">
    <section class="register-form-section">
        <div class="register-form-content">
            <div class="register-heading">
                <h1>Create Your Account</h1>
                <p>Join Rose Skincare and discover a world of healthy, radiant skin.</p>
                <div class="register-heading-line"></div>
            </div>

            <form class="register-form" id="registerForm" action="#" method="post">
                <div class="register-name-row">
                    <div class="register-field">
                        <label for="firstName">First Name</label>
                        <div class="register-input-wrapper">
                            <i class="fa-regular fa-user"></i>
                            <input id="firstName" type="text" name="first_name" placeholder="Enter your first name" autocomplete="given-name" required>
                        </div>
                    </div>

                    <div class="register-field">
                        <label for="lastName">Last Name</label>
                        <div class="register-input-wrapper">
                            <i class="fa-regular fa-user"></i>
                            <input id="lastName" type="text" name="last_name" placeholder="Enter your last name" autocomplete="family-name" required>
                        </div>
                    </div>
                </div>

                <div class="register-field">
                    <label for="registerEmail">Email Address</label>
                    <div class="register-input-wrapper">
                        <i class="fa-regular fa-envelope"></i>
                        <input id="registerEmail" type="email" name="email" placeholder="Enter your email address" autocomplete="email" required>
                    </div>
                </div>

                <div class="register-field">
                    <label for="registerPassword">Password</label>
                    <div class="register-input-wrapper">
                        <i class="fa-solid fa-lock"></i>
                        <input id="registerPassword" type="password" name="password" placeholder="Create a password" autocomplete="new-password" minlength="8" required>
                        <button class="register-password-toggle" type="button" data-target="registerPassword" aria-label="Show password">
                            <i class="fa-regular fa-eye-slash"></i>
                        </button>
                    </div>
                    <p class="register-password-note">
                        <i class="fa-solid fa-shield-halved"></i>
                        At least 8 characters with letters and numbers
                    </p>
                </div>

                <div class="register-field">
                    <label for="confirmPassword">Confirm Password</label>
                    <div class="register-input-wrapper">
                        <i class="fa-solid fa-lock"></i>
                        <input id="confirmPassword" type="password" name="confirm_password" placeholder="Confirm your password" autocomplete="new-password" minlength="8" required>
                        <button class="register-password-toggle" type="button" data-target="confirmPassword" aria-label="Show password">
                            <i class="fa-regular fa-eye-slash"></i>
                        </button>
                    </div>
                    <p class="register-error-message" id="passwordError"></p>
                </div>

                <label class="register-terms">
                    <input type="checkbox" id="terms" name="terms" required>
                    <span class="register-custom-checkbox">
                        <i class="fa-solid fa-check"></i>
                    </span>
                    <span>I agree to the <a href="#">Terms &amp; Conditions</a> and <a href="#">Privacy Policy</a></span>
                </label>

                <button class="register-submit-button" type="submit">
                    <span>Create Account</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>

                <div class="register-divider">
                    <span></span>
                    <p>OR</p>
                    <span></span>
                </div>

                <button class="register-google-button" type="button">
                    <i class="fa-brands fa-google"></i>
                    Continue with Google
                </button>

                <p class="register-login-link">Already have an account? <a href="login.php">Login</a></p>
            </form>
        </div>
    </section>

    <section class="register-image-section">
        <div class="register-image-overlay"></div>

        <div class="register-benefits-card">
            <article class="register-benefit">
                <div class="register-benefit-icon"><i class="fa-solid fa-gift"></i></div>
                <h2>Exclusive Offers</h2>
                <p>Be the first to know about special deals and discounts.</p>
            </article>

            <article class="register-benefit">
                <div class="register-benefit-icon"><i class="fa-solid fa-leaf"></i></div>
                <h2>Personalized Skincare</h2>
                <p>Get recommendations tailored to your skin type.</p>
            </article>

            <article class="register-benefit">
                <div class="register-benefit-icon"><i class="fa-regular fa-heart"></i></div>
                <h2>Rewards &amp; Points</h2>
                <p>Earn points with every purchase and save more.</p>
            </article>
        </div>
    </section>
</main>

<section class="register-trust-section">
    <div class="register-trust-container">
        <article class="register-trust-item">
            <i class="fa-solid fa-truck"></i>
            <div>
                <h3>Free Shipping</h3>
                <p>On orders over NIS 199</p>
            </div>
        </article>

        <article class="register-trust-item">
            <i class="fa-solid fa-rotate"></i>
            <div>
                <h3>30-Day Returns</h3>
                <p>Love it or return it</p>
            </div>
        </article>

        <article class="register-trust-item">
            <i class="fa-solid fa-shield-halved"></i>
            <div>
                <h3>Secure Payments</h3>
                <p>100% safe and secure</p>
            </div>
        </article>

        <article class="register-trust-item">
            <i class="fa-solid fa-headset"></i>
            <div>
                <h3>Customer Support</h3>
                <p>We're here to help you</p>
            </div>
        </article>
    </div>
</section>

<footer class="register-footer">
    <div class="register-footer-container">
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
