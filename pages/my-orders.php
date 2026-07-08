<?php
$orders = [
    [
        "id" => "RSK10245",
        "date" => "May 20, 2025",
        "time" => "10:24 AM",
        "total" => 212.00,
        "status" => "delivered",
        "status_title" => "Delivered",
        "status_note" => "Delivered on May 22, 2025",
        "items_count" => 3,
        "images" => ["cream.png", "serum.png", "cleanser.png"]
    ],
    [
        "id" => "RSK10187",
        "date" => "May 10, 2025",
        "time" => "02:15 PM",
        "total" => 158.50,
        "status" => "shipped",
        "status_title" => "Shipped",
        "status_note" => "Estimated delivery May 15, 2025",
        "items_count" => 2,
        "images" => ["serum.png", "cream.png"]
    ],
    [
        "id" => "RSK10092",
        "date" => "Apr 28, 2025",
        "time" => "09:40 AM",
        "total" => 305.75,
        "status" => "processing",
        "status_title" => "Processing",
        "status_note" => "We are preparing your order",
        "items_count" => 4,
        "images" => ["cleanser.png", "cream.png", "serum.png", "mask.png"]
    ],
    [
        "id" => "RSK10011",
        "date" => "Apr 15, 2025",
        "time" => "11:30 AM",
        "total" => 95.00,
        "status" => "cancelled",
        "status_title" => "Cancelled",
        "status_note" => "Cancelled on Apr 16, 2025",
        "items_count" => 1,
        "images" => ["serum.png"]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders | Rose Skincare</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="orders-page">

<header class="orders-header">
    <div class="orders-header-container">
        <a href="../index.php" class="orders-logo">
            <img src="../assets/images/logo.png" alt="Rose Skincare logo">
            <span>ROSE SKINCARE</span>
        </a>

        <nav class="orders-navbar" id="navbar">
            <a href="../index.php">Home</a>
            <a href="shop.php">Skin Care</a>
            <a href="../index.php#best-sellers">Best Sellers</a>
            <a href="shop.php?filter=new">New Arrivals</a>
            <a href="shop.php?filter=offers">Offers</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>

        <div class="orders-header-actions">
            <button type="button" class="orders-header-icon" aria-label="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>

            <a href="checkout.php" class="orders-header-icon orders-cart" aria-label="Shopping cart">
                <i class="fa-solid fa-bag-shopping"></i>
                <span>2</span>
            </a>

            <a href="my-orders.php" class="orders-header-icon orders-account active" aria-label="Account">
                <i class="fa-regular fa-user"></i>
            </a>

            <button type="button" class="orders-menu-button" id="menuButton" aria-label="Open navigation menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>
</header>

<main class="orders-main">
    <div class="orders-layout">
        <aside class="orders-sidebar">
            <div class="orders-profile">
                <div class="orders-profile-avatar">
                    <i class="fa-solid fa-seedling"></i>
                </div>
                <div>
                    <h2>Weam Hamayel</h2>
                    <p>weam@example.com</p>
                </div>
            </div>

            <nav class="orders-account-menu">
                <a href="my-orders.php">
                    <i class="fa-solid fa-border-all"></i>
                    <span>Dashboard</span>
                </a>
                <a href="my-orders.php" class="active">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <span>My Orders</span>
                </a>
                <a href="#">
                    <i class="fa-regular fa-heart"></i>
                    <span>Wishlist</span>
                </a>
                <a href="#">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Addresses</span>
                </a>
                <a href="#">
                    <i class="fa-regular fa-credit-card"></i>
                    <span>Payment Methods</span>
                </a>
                <a href="register.php">
                    <i class="fa-solid fa-gear"></i>
                    <span>Account Settings</span>
                </a>
                <a href="../index.php">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </nav>

            <div class="orders-invite-card">
                <div class="orders-invite-icon">
                    <i class="fa-solid fa-gift"></i>
                </div>
                <div>
                    <h3>Invite &amp; Earn</h3>
                    <p>Refer your friends and get exclusive rewards.</p>
                </div>
                <button type="button">Invite Now</button>
            </div>
        </aside>

        <section class="orders-content">
            <div class="orders-content-header">
                <div>
                    <h1>My Orders</h1>
                    <p>Track, view and manage all your orders in one place.</p>
                </div>

                <div class="orders-filter-wrapper">
                    <select id="ordersFilter" aria-label="Filter orders">
                        <option value="all">All Orders</option>
                        <option value="delivered">Delivered</option>
                        <option value="shipped">Shipped</option>
                        <option value="processing">Processing</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
            </div>

            <div class="orders-list" id="ordersList">
                <?php foreach ($orders as $order): ?>
                    <article class="orders-card" data-status="<?= htmlspecialchars($order["status"]); ?>">
                        <div class="orders-card-top">
                            <div class="orders-main-info">
                                <div class="orders-package-icon">
                                    <i class="fa-solid fa-box-open"></i>
                                </div>
                                <div>
                                    <h2>Order #<?= htmlspecialchars($order["id"]); ?></h2>
                                    <p class="orders-date">
                                        <?= htmlspecialchars($order["date"]); ?>
                                        <span>-</span>
                                        <?= htmlspecialchars($order["time"]); ?>
                                    </p>
                                    <p class="orders-items-count">
                                        <?= (int) $order["items_count"]; ?>
                                        <?= $order["items_count"] === 1 ? "Item" : "Items"; ?>
                                    </p>
                                </div>
                            </div>

                            <div class="orders-total">
                                <span>Total</span>
                                <strong>NIS <?= number_format($order["total"], 2); ?></strong>
                            </div>

                            <div class="orders-status">
                                <span>Status</span>
                                <strong class="status-badge status-<?= htmlspecialchars($order["status"]); ?>">
                                    <?= htmlspecialchars($order["status_title"]); ?>
                                </strong>
                                <p><?= htmlspecialchars($order["status_note"]); ?></p>
                            </div>

                            <a href="#" class="orders-details-button">
                                View Details
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>

                        <div class="orders-products-preview">
                            <?php $visibleImages = array_slice($order["images"], 0, 4); ?>
                            <?php foreach ($visibleImages as $image): ?>
                                <div class="orders-product-image">
                                    <img src="../assets/images/products/<?= htmlspecialchars($image); ?>" alt="Ordered product">
                                </div>
                            <?php endforeach; ?>

                            <?php if ($order["items_count"] > count($visibleImages)): ?>
                                <span class="orders-more-products">
                                    +<?= $order["items_count"] - count($visibleImages); ?> more
                                </span>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="orders-empty-state" id="ordersEmptyState">
                <div>
                    <i class="fa-solid fa-bag-shopping"></i>
                </div>
                <h2>No orders found</h2>
                <p>There are no orders matching this status.</p>
                <a href="shop.php">Continue Shopping</a>
            </div>
        </section>
    </div>
</main>

<section class="orders-benefits">
    <div class="orders-benefits-container">
        <article class="orders-benefit">
            <i class="fa-solid fa-truck"></i>
            <div>
                <h3>Free Shipping</h3>
                <p>On orders over NIS 199</p>
            </div>
        </article>

        <article class="orders-benefit">
            <i class="fa-solid fa-rotate"></i>
            <div>
                <h3>30-Day Returns</h3>
                <p>Love it or return it</p>
            </div>
        </article>

        <article class="orders-benefit">
            <i class="fa-solid fa-shield-halved"></i>
            <div>
                <h3>Secure Payments</h3>
                <p>100% safe and secure</p>
            </div>
        </article>

        <article class="orders-benefit">
            <i class="fa-solid fa-headset"></i>
            <div>
                <h3>Customer Support</h3>
                <p>We're here to help you</p>
            </div>
        </article>
    </div>
</section>

<script src="../assets/js/main.js"></script>
</body>
</html>
