<?php
$coupons = [
    ["id" => 1, "code" => "WELCOME10", "name" => "Welcome 10% Off", "description" => "For new customers", "type" => "percentage", "type_label" => "Percentage", "discount" => 10, "discount_label" => "10% OFF", "minimum_order" => 30, "used" => 245, "usage_limit" => 500, "start_date" => "2025-05-20", "end_date" => "2025-06-20", "status" => "active"],
    ["id" => 2, "code" => "ROSE15", "name" => "Rose Skincare 15%", "description" => "On orders over $50", "type" => "percentage", "type_label" => "Percentage", "discount" => 15, "discount_label" => "15% OFF", "minimum_order" => 50, "used" => 320, "usage_limit" => 800, "start_date" => "2025-05-10", "end_date" => "2025-06-10", "status" => "active"],
    ["id" => 3, "code" => "FREESHIP", "name" => "Free Shipping", "description" => "Free shipping coupon", "type" => "free_shipping", "type_label" => "Free Shipping", "discount" => 100, "discount_label" => "100% OFF", "minimum_order" => 40, "used" => 612, "usage_limit" => 1000, "start_date" => "2025-04-25", "end_date" => "2025-05-25", "status" => "active"],
    ["id" => 4, "code" => "SUMMER20", "name" => "Summer Sale 20%", "description" => "Limited time offer", "type" => "percentage", "type_label" => "Percentage", "discount" => 20, "discount_label" => "20% OFF", "minimum_order" => 60, "used" => 150, "usage_limit" => 300, "start_date" => "2025-05-01", "end_date" => "2025-05-31", "status" => "active"],
    ["id" => 5, "code" => "VIP25", "name" => "VIP Customers 25%", "description" => "For VIP members", "type" => "percentage", "type_label" => "Percentage", "discount" => 25, "discount_label" => "25% OFF", "minimum_order" => 80, "used" => 78, "usage_limit" => 200, "start_date" => "2025-03-15", "end_date" => "2025-06-15", "status" => "scheduled"],
    ["id" => 6, "code" => "EXPIRED10", "name" => "Expired 10% Off", "description" => "This coupon has expired", "type" => "percentage", "type_label" => "Percentage", "discount" => 10, "discount_label" => "10% OFF", "minimum_order" => 30, "used" => 234, "usage_limit" => 500, "start_date" => "2025-03-01", "end_date" => "2025-04-01", "status" => "expired"]
];

function formatCouponDate(string $date): string
{
    return date("M d, Y", strtotime($date));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupons Management | Rose Skincare Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="admin-coupons-page">

<div class="admin-customers-layout">
    <aside class="admin-sidebar" id="adminSidebar">
        <div class="admin-sidebar-logo">
            <img src="../assets/images/logo.png" alt="Rose Skincare logo">
            <div>
                <strong>ROSE SKINCARE</strong>
                <span>Admin Dashboard</span>
            </div>
        </div>

        <nav class="admin-sidebar-menu">
            <a href="#"><i class="fa-solid fa-house"></i><span>Dashboard</span></a>
            <a href="#"><i class="fa-solid fa-cube"></i><span>Products</span></a>
            <a href="#"><i class="fa-solid fa-bag-shopping"></i><span>Orders</span></a>
            <a href="customers.php"><i class="fa-solid fa-users"></i><span>Customers</span></a>

            <div class="admin-menu-group open">
                <button class="admin-menu-parent" type="button">
                    <span><i class="fa-solid fa-ticket"></i>Coupons</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>

                <div class="admin-submenu">
                    <a href="coupons.php" class="active">All Coupons</a>
                    <button class="admin-submenu-button" type="button" data-open-coupon-modal>Add Coupon</button>
                    <a href="#">Categories</a>
                </div>
            </div>

            <a href="#"><i class="fa-regular fa-star"></i><span>Reviews</span></a>
            <a href="#"><i class="fa-solid fa-chart-column"></i><span>Sales &amp; Reports</span></a>
            <a href="#"><i class="fa-regular fa-file-lines"></i><span>Content</span></a>
            <a href="#"><i class="fa-solid fa-gear"></i><span>Settings</span></a>
            <a href="#"><i class="fa-solid fa-shield-halved"></i><span>System</span></a>
        </nav>

        <div class="admin-support-card">
            <i class="fa-regular fa-life-ring"></i>
            <div>
                <h3>Need Help?</h3>
                <p>Check our documentation or contact support.</p>
            </div>
            <a href="../pages/contact.php"><i class="fa-solid fa-headset"></i> Contact Support</a>
        </div>
    </aside>

    <div class="admin-main-area">
        <header class="admin-topbar">
            <div class="admin-topbar-left">
                <button class="admin-sidebar-toggle" id="adminSidebarToggle" type="button" aria-label="Toggle sidebar">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div class="admin-global-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="search" placeholder="Search anything...">
                    <kbd>Ctrl K</kbd>
                </div>
            </div>

            <div class="admin-profile-area">
                <button class="admin-notification-button" type="button" aria-label="Notifications">
                    <i class="fa-regular fa-bell"></i>
                    <span>3</span>
                </button>
                <div class="admin-profile-avatar">A</div>
                <div class="admin-profile-text">
                    <strong>Admin</strong>
                    <span>Super Admin</span>
                </div>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
        </header>

        <main class="admin-coupons-content">
            <div class="admin-page-heading">
                <div>
                    <h1>Coupons Management</h1>
                    <div class="admin-breadcrumb">
                        <a href="#">Dashboard</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <span>Coupons</span>
                        <i class="fa-solid fa-chevron-right"></i>
                        <strong>All Coupons</strong>
                    </div>
                </div>

                <button class="admin-primary-button" type="button" data-open-coupon-modal>
                    <i class="fa-solid fa-plus"></i>
                    Add Coupon
                </button>
            </div>

            <section class="coupon-stats-grid">
                <article class="coupon-stat-card">
                    <div class="coupon-stat-icon"><i class="fa-solid fa-ticket"></i></div>
                    <div><p>Total Coupons</p><strong>28</strong><span class="coupon-stat-neutral"><i class="fa-regular fa-calendar"></i> All time</span></div>
                </article>
                <article class="coupon-stat-card">
                    <div class="coupon-stat-icon"><i class="fa-solid fa-tag"></i></div>
                    <div><p>Active Coupons</p><strong>18</strong><span class="coupon-stat-positive"><i class="fa-solid fa-arrow-up"></i> 12.5% <small>from last month</small></span></div>
                </article>
                <article class="coupon-stat-card">
                    <div class="coupon-stat-icon"><i class="fa-regular fa-circle-check"></i></div>
                    <div><p>Used Coupons</p><strong>1,243</strong><span class="coupon-stat-neutral"><i class="fa-regular fa-calendar"></i> All time</span></div>
                </article>
                <article class="coupon-stat-card">
                    <div class="coupon-stat-icon"><i class="fa-solid fa-percent"></i></div>
                    <div><p>Total Discount Given</p><strong>$8,542.30</strong><span class="coupon-stat-positive"><i class="fa-solid fa-arrow-up"></i> 15.3% <small>from last month</small></span></div>
                </article>
            </section>

            <section class="coupons-table-card">
                <div class="coupons-toolbar">
                    <div class="coupon-search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input id="couponSearch" type="search" placeholder="Search coupons by code or name...">
                    </div>

                    <select id="couponStatusFilter">
                        <option value="all">All Status</option>
                        <option value="active">Active</option>
                        <option value="scheduled">Scheduled</option>
                        <option value="expired">Expired</option>
                    </select>

                    <select id="couponTypeFilter">
                        <option value="all">All Types</option>
                        <option value="percentage">Percentage</option>
                        <option value="fixed">Fixed Amount</option>
                        <option value="free_shipping">Free Shipping</option>
                    </select>

                    <div class="coupon-date-range">
                        <i class="fa-regular fa-calendar"></i>
                        <input id="couponStartFilter" type="date" aria-label="Start date">
                        <span>-</span>
                        <input id="couponEndFilter" type="date" aria-label="End date">
                    </div>

                    <button class="coupon-export-button" id="exportCouponsButton" type="button">
                        <i class="fa-solid fa-download"></i>
                        Export
                    </button>
                </div>

                <div class="coupons-table-wrapper">
                    <table class="coupons-table">
                        <thead>
                            <tr>
                                <th><input id="selectAllCoupons" type="checkbox" aria-label="Select all coupons"></th>
                                <th>Coupon</th>
                                <th>Type</th>
                                <th>Discount</th>
                                <th>Min. Order</th>
                                <th>Usage</th>
                                <th>Valid Period</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="couponsTableBody">
                            <?php foreach ($coupons as $coupon): ?>
                                <?php
                                $usagePercentage = 0;
                                if ($coupon["usage_limit"] > 0) {
                                    $usagePercentage = min(100, ($coupon["used"] / $coupon["usage_limit"]) * 100);
                                }
                                ?>
                                <tr class="coupon-row"
                                    data-coupon-id="<?= (int) $coupon["id"]; ?>"
                                    data-code="<?= htmlspecialchars(strtolower($coupon["code"])); ?>"
                                    data-name="<?= htmlspecialchars(strtolower($coupon["name"])); ?>"
                                    data-description="<?= htmlspecialchars($coupon["description"]); ?>"
                                    data-type="<?= htmlspecialchars($coupon["type"]); ?>"
                                    data-status="<?= htmlspecialchars($coupon["status"]); ?>"
                                    data-discount="<?= htmlspecialchars($coupon["discount"]); ?>"
                                    data-minimum-order="<?= htmlspecialchars($coupon["minimum_order"]); ?>"
                                    data-used="<?= htmlspecialchars($coupon["used"]); ?>"
                                    data-limit="<?= htmlspecialchars($coupon["usage_limit"]); ?>"
                                    data-start="<?= htmlspecialchars($coupon["start_date"]); ?>"
                                    data-end="<?= htmlspecialchars($coupon["end_date"]); ?>">
                                    <td><input class="coupon-checkbox" type="checkbox" aria-label="Select coupon"></td>
                                    <td>
                                        <div class="coupon-name-cell">
                                            <strong class="coupon-code"><?= htmlspecialchars($coupon["code"]); ?></strong>
                                            <div><h3><?= htmlspecialchars($coupon["name"]); ?></h3><p><?= htmlspecialchars($coupon["description"]); ?></p></div>
                                        </div>
                                    </td>
                                    <td class="coupon-type-label"><?= htmlspecialchars($coupon["type_label"]); ?></td>
                                    <td class="coupon-discount-label"><?= htmlspecialchars($coupon["discount_label"]); ?></td>
                                    <td class="coupon-minimum-order">$<?= number_format($coupon["minimum_order"], 2); ?></td>
                                    <td>
                                        <div class="coupon-usage">
                                            <span><strong class="coupon-used"><?= (int) $coupon["used"]; ?></strong> / <strong class="coupon-limit"><?= (int) $coupon["usage_limit"]; ?></strong></span>
                                            <div class="coupon-usage-track"><div class="coupon-usage-progress" style="width: <?= $usagePercentage; ?>%;"></div></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="coupon-period">
                                            <span class="coupon-start-date"><?= htmlspecialchars(formatCouponDate($coupon["start_date"])); ?></span>
                                            <span class="coupon-end-date"><?= htmlspecialchars(formatCouponDate($coupon["end_date"])); ?></span>
                                        </div>
                                    </td>
                                    <td><span class="coupon-status-badge coupon-status-<?= htmlspecialchars($coupon["status"]); ?>"><?= ucfirst(htmlspecialchars($coupon["status"])); ?></span></td>
                                    <td>
                                        <div class="coupon-actions">
                                            <button class="coupon-action-button edit-coupon-button" type="button" title="Edit Coupon"><i class="fa-regular fa-pen-to-square"></i></button>
                                            <button class="coupon-action-button duplicate-coupon-button" type="button" title="Duplicate Coupon"><i class="fa-regular fa-clone"></i></button>
                                            <button class="coupon-action-button delete delete-coupon-button" type="button" title="Delete Coupon"><i class="fa-regular fa-trash-can"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="coupons-no-results" id="couponsNoResults">
                    <i class="fa-solid fa-ticket"></i>
                    <h2>No coupons found</h2>
                    <p>Try another search or filter.</p>
                </div>

                <div class="coupons-table-footer">
                    <p id="couponsShowingText">Showing 1 to <?= count($coupons); ?> of <?= count($coupons); ?> coupons</p>
                    <div class="customers-pagination">
                        <button type="button"><i class="fa-solid fa-chevron-left"></i></button>
                        <button type="button" class="active">1</button>
                        <button type="button">2</button>
                        <button type="button">3</button>
                        <button type="button"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>

<div class="coupon-modal" id="couponModal" aria-hidden="true">
    <div class="coupon-modal-backdrop" data-close-coupon-modal></div>
    <section class="coupon-modal-panel" role="dialog" aria-modal="true" aria-labelledby="couponModalTitle">
        <div class="coupon-modal-header">
            <h2 id="couponModalTitle">Add New Coupon</h2>
            <button type="button" data-close-coupon-modal aria-label="Close modal"><i class="fa-solid fa-xmark"></i></button>
        </div>

        <form class="coupon-form" id="couponForm">
            <input type="hidden" id="couponFormMode" value="add">
            <input type="hidden" id="editingCouponId">

            <div class="coupon-form-grid">
                <label>Code<input id="couponCode" type="text" placeholder="WELCOME10" required></label>
                <label>Name<input id="couponName" type="text" placeholder="Welcome 10% Off" required></label>
                <label class="coupon-form-full">Description<input id="couponDescription" type="text" placeholder="Short coupon description" required></label>
                <label>Type<select id="couponType"><option value="percentage">Percentage</option><option value="fixed">Fixed Amount</option><option value="free_shipping">Free Shipping</option></select></label>
                <label>Discount<input id="couponDiscount" type="number" min="0" step="0.01" value="10" required></label>
                <label>Minimum Order<input id="couponMinimumOrder" type="number" min="0" step="0.01" value="0"></label>
                <label>Usage Limit<input id="couponUsageLimit" type="number" min="1" value="100" required></label>
                <label>Used<input id="couponUsed" type="number" min="0" value="0"></label>
                <label>Status<select id="couponStatus"><option value="active">Active</option><option value="scheduled">Scheduled</option><option value="expired">Expired</option></select></label>
                <label>Start Date<input id="couponStartDate" type="date" required></label>
                <label>End Date<input id="couponEndDate" type="date" required></label>
            </div>

            <p class="coupon-form-error" id="couponFormError"></p>

            <div class="coupon-modal-actions">
                <button class="admin-secondary-button" type="button" data-close-coupon-modal>Cancel</button>
                <button class="admin-primary-button" type="submit">Save Coupon</button>
            </div>
        </form>
    </section>
</div>

<script src="../assets/js/main.js"></script>
</body>
</html>
