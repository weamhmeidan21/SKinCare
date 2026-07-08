<?php
$customers = [
    ["id" => "CUS-001", "name" => "Weam Hamayel", "email" => "weam@example.com", "phone" => "+970 59 123 4567", "group" => "VIP", "orders" => 12, "spent" => 564.30, "status" => "active", "joined" => "May 20, 2025"],
    ["id" => "CUS-002", "name" => "Lara Ahmad", "email" => "lara.ahmad@example.com", "phone" => "+970 59 234 5678", "group" => "Regular", "orders" => 7, "spent" => 298.75, "status" => "active", "joined" => "May 18, 2025"],
    ["id" => "CUS-003", "name" => "Noor Qassem", "email" => "noor.qassem@example.com", "phone" => "+970 59 345 6789", "group" => "Regular", "orders" => 5, "spent" => 189.90, "status" => "active", "joined" => "May 15, 2025"],
    ["id" => "CUS-004", "name" => "Maya Nasser", "email" => "maya.nasser@example.com", "phone" => "+970 59 456 7890", "group" => "VIP", "orders" => 18, "spent" => 842.10, "status" => "active", "joined" => "May 10, 2025"],
    ["id" => "CUS-005", "name" => "Rana Ali", "email" => "rana.ali@example.com", "phone" => "+970 59 567 8901", "group" => "Regular", "orders" => 3, "spent" => 120.50, "status" => "inactive", "joined" => "May 08, 2025"],
    ["id" => "CUS-006", "name" => "Omar Khaled", "email" => "omar.khaled@example.com", "phone" => "+970 59 678 9012", "group" => "Regular", "orders" => 2, "spent" => 75.00, "status" => "inactive", "joined" => "May 06, 2025"]
];

function customerInitials(string $name): string
{
    $parts = array_filter(explode(" ", trim($name)));
    $initials = "";

    foreach (array_slice($parts, 0, 2) as $part) {
        $initials .= strtoupper(substr($part, 0, 1));
    }

    return $initials;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers Management | Rose Skincare Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="admin-customers-page">

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

            <div class="admin-menu-group open">
                <button class="admin-menu-parent" type="button">
                    <span><i class="fa-solid fa-users"></i>Customers</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="admin-submenu">
                    <a href="customers.php" class="active">All Customers</a>
                    <button type="button" class="admin-submenu-button" data-open-customer-modal>Add Customer</button>
                    <a href="#">Customer Groups</a>
                </div>
            </div>

            <a href="#"><i class="fa-regular fa-star"></i><span>Reviews</span></a>
            <a href="#"><i class="fa-solid fa-ticket"></i><span>Coupons</span></a>
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

        <main class="admin-customers-content">
            <div class="admin-page-heading">
                <div>
                    <h1>Customers Management</h1>
                    <div class="admin-breadcrumb">
                        <a href="#">Dashboard</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <span>Customers</span>
                        <i class="fa-solid fa-chevron-right"></i>
                        <strong>All Customers</strong>
                    </div>
                </div>

                <button class="admin-primary-button" type="button" data-open-customer-modal>
                    <i class="fa-solid fa-plus"></i>
                    Add Customer
                </button>
            </div>

            <section class="customer-stats-grid">
                <article class="customer-stat-card">
                    <div class="customer-stat-icon"><i class="fa-solid fa-users"></i></div>
                    <div><p>Total Customers</p><strong>1,248</strong><span class="positive"><i class="fa-solid fa-arrow-up"></i> 12.5% <small>this month</small></span></div>
                </article>
                <article class="customer-stat-card">
                    <div class="customer-stat-icon"><i class="fa-solid fa-user-plus"></i></div>
                    <div><p>New Customers</p><strong>156</strong><span class="positive"><i class="fa-solid fa-arrow-up"></i> 8.3% <small>this month</small></span></div>
                </article>
                <article class="customer-stat-card">
                    <div class="customer-stat-icon"><i class="fa-solid fa-crown"></i></div>
                    <div><p>Active Customers</p><strong>1,102</strong><span class="positive"><i class="fa-solid fa-arrow-up"></i> 10.7% <small>this month</small></span></div>
                </article>
                <article class="customer-stat-card">
                    <div class="customer-stat-icon"><i class="fa-solid fa-user-xmark"></i></div>
                    <div><p>Inactive Customers</p><strong>146</strong><span class="negative"><i class="fa-solid fa-arrow-down"></i> 4.2% <small>this month</small></span></div>
                </article>
            </section>

            <section class="customers-table-card">
                <div class="customers-toolbar">
                    <div class="customer-search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input id="customerSearch" type="search" placeholder="Search customers by name, email or phone...">
                    </div>

                    <select id="customerGroupFilter">
                        <option value="all">All Groups</option>
                        <option value="VIP">VIP</option>
                        <option value="Regular">Regular</option>
                    </select>

                    <select id="customerStatusFilter">
                        <option value="all">All Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>

                    <div class="customer-date-filter">
                        <i class="fa-regular fa-calendar"></i>
                        <input id="customerDateFilter" type="date" aria-label="Filter by date">
                    </div>

                    <button class="customer-export-button" id="exportCustomersButton" type="button">
                        <i class="fa-solid fa-download"></i>
                        Export
                    </button>
                </div>

                <div class="customers-table-wrapper">
                    <table class="customers-table">
                        <thead>
                            <tr>
                                <th><input id="selectAllCustomers" type="checkbox" aria-label="Select all customers"></th>
                                <th>Customer</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Group</th>
                                <th>Orders</th>
                                <th>Total Spent</th>
                                <th>Status</th>
                                <th>Joined Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="customersTableBody">
                            <?php foreach ($customers as $customer): ?>
                                <tr class="customer-row"
                                    data-name="<?= htmlspecialchars(strtolower($customer["name"])); ?>"
                                    data-email="<?= htmlspecialchars(strtolower($customer["email"])); ?>"
                                    data-phone="<?= htmlspecialchars(strtolower($customer["phone"])); ?>"
                                    data-group="<?= htmlspecialchars($customer["group"]); ?>"
                                    data-status="<?= htmlspecialchars($customer["status"]); ?>"
                                    data-customer-id="<?= htmlspecialchars($customer["id"]); ?>">
                                    <td><input class="customer-checkbox" type="checkbox" aria-label="Select <?= htmlspecialchars($customer["name"]); ?>"></td>
                                    <td>
                                        <div class="customer-name-cell">
                                            <div class="customer-table-avatar"><?= htmlspecialchars(customerInitials($customer["name"])); ?></div>
                                            <div><strong><?= htmlspecialchars($customer["name"]); ?></strong><span>#<?= htmlspecialchars($customer["id"]); ?></span></div>
                                        </div>
                                    </td>
                                    <td class="customer-email"><?= htmlspecialchars($customer["email"]); ?></td>
                                    <td class="customer-phone"><?= htmlspecialchars($customer["phone"]); ?></td>
                                    <td><span class="customer-group-badge group-<?= strtolower($customer["group"]); ?>"><?= htmlspecialchars($customer["group"]); ?></span></td>
                                    <td class="customer-orders"><?= (int) $customer["orders"]; ?></td>
                                    <td class="customer-spent">$<?= number_format($customer["spent"], 2); ?></td>
                                    <td><span class="customer-status-badge status-<?= htmlspecialchars($customer["status"]); ?>"><?= ucfirst(htmlspecialchars($customer["status"])); ?></span></td>
                                    <td class="customer-joined"><?= htmlspecialchars($customer["joined"]); ?></td>
                                    <td>
                                        <div class="customer-actions">
                                            <button class="customer-action-button view-customer-button" type="button" title="View Customer"><i class="fa-regular fa-eye"></i></button>
                                            <button class="customer-action-button edit-customer-button" type="button" title="Edit Customer"><i class="fa-regular fa-pen-to-square"></i></button>
                                            <button class="customer-action-button delete delete-customer-button" type="button" title="Delete Customer"><i class="fa-regular fa-trash-can"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="customers-no-results" id="customersNoResults">
                    <i class="fa-solid fa-users-slash"></i>
                    <h2>No customers found</h2>
                    <p>Try another search or filter.</p>
                </div>

                <div class="customers-table-footer">
                    <p id="customersShowingText">Showing 1 to <?= count($customers); ?> of <?= count($customers); ?> customers</p>
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

<div class="customer-modal" id="customerModal" aria-hidden="true">
    <div class="customer-modal-backdrop" data-close-customer-modal></div>
    <section class="customer-modal-panel" role="dialog" aria-modal="true" aria-labelledby="customerModalTitle">
        <div class="customer-modal-header">
            <h2 id="customerModalTitle">Add New Customer</h2>
            <button type="button" data-close-customer-modal aria-label="Close modal"><i class="fa-solid fa-xmark"></i></button>
        </div>

        <form class="customer-form" id="customerForm">
            <input type="hidden" id="customerFormMode" value="add">
            <input type="hidden" id="editingCustomerId">

            <div class="customer-form-grid">
                <label>Full Name<input id="customerName" type="text" required></label>
                <label>Email<input id="customerEmail" type="email" required></label>
                <label>Phone<input id="customerPhone" type="tel" required></label>
                <label>Group<select id="customerGroup"><option>VIP</option><option>Regular</option></select></label>
                <label>Status<select id="customerStatus"><option value="active">Active</option><option value="inactive">Inactive</option></select></label>
                <label>Orders<input id="customerOrders" type="number" min="0" value="0"></label>
                <label class="customer-form-full">Total Spent<input id="customerSpent" type="number" min="0" step="0.01" value="0"></label>
            </div>

            <div class="customer-modal-actions">
                <button class="admin-secondary-button" type="button" data-close-customer-modal>Cancel</button>
                <button class="admin-primary-button" type="submit">Save Customer</button>
            </div>
        </form>
    </section>
</div>

<div class="customer-modal" id="viewCustomerModal" aria-hidden="true">
    <div class="customer-modal-backdrop" data-close-view-modal></div>
    <section class="customer-modal-panel view-customer-panel" role="dialog" aria-modal="true">
        <div class="customer-modal-header">
            <h2>Customer Details</h2>
            <button type="button" data-close-view-modal aria-label="Close modal"><i class="fa-solid fa-xmark"></i></button>
        </div>

        <div class="view-customer-profile">
            <div id="viewCustomerInitials" class="customer-table-avatar large">WH</div>
            <div>
                <h3 id="viewCustomerName">Customer Name</h3>
                <p id="viewCustomerId">#CUS-000</p>
            </div>
        </div>

        <dl class="view-customer-details">
            <div><dt>Email</dt><dd id="viewCustomerEmail"></dd></div>
            <div><dt>Phone</dt><dd id="viewCustomerPhone"></dd></div>
            <div><dt>Group</dt><dd id="viewCustomerGroup"></dd></div>
            <div><dt>Status</dt><dd id="viewCustomerStatus"></dd></div>
            <div><dt>Orders</dt><dd id="viewCustomerOrders"></dd></div>
            <div><dt>Total Spent</dt><dd id="viewCustomerSpent"></dd></div>
            <div><dt>Joined</dt><dd id="viewCustomerJoined"></dd></div>
        </dl>
    </section>
</div>

<script src="../assets/js/main.js"></script>
</body>
</html>
