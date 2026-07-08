document.addEventListener("DOMContentLoaded", () => {
    const menuButton = document.getElementById("menuButton");
    const navbar = document.getElementById("navbar");

    if (menuButton && navbar) {
        menuButton.addEventListener("click", () => {
            navbar.classList.toggle("open");

            const icon = menuButton.querySelector("i");

            if (!icon) {
                return;
            }

            icon.classList.toggle("fa-bars", !navbar.classList.contains("open"));
            icon.classList.toggle("fa-xmark", navbar.classList.contains("open"));
        });
    }

    const slider = document.getElementById("heroSlider");
    const slides = document.querySelectorAll(".hero-slide");
    const dots = document.querySelectorAll(".slider-dot");
    const previousButton = document.getElementById("previousSlide");
    const nextButton = document.getElementById("nextSlide");

    let currentSlide = 0;
    let sliderTimer = null;
    const sliderDelay = 5000;

    function showSlide(index) {
        if (!slides.length) {
            return;
        }

        if (index >= slides.length) {
            index = 0;
        }

        if (index < 0) {
            index = slides.length - 1;
        }

        slides.forEach((slide, slideIndex) => {
            slide.classList.toggle("active", slideIndex === index);
        });

        dots.forEach((dot, dotIndex) => {
            dot.classList.toggle("active", dotIndex === index);
        });

        currentSlide = index;
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function previousSlide() {
        showSlide(currentSlide - 1);
    }

    function stopSlider() {
        if (sliderTimer) {
            clearInterval(sliderTimer);
            sliderTimer = null;
        }
    }

    function startSlider() {
        stopSlider();
        sliderTimer = setInterval(nextSlide, sliderDelay);
    }

    if (nextButton) {
        nextButton.addEventListener("click", () => {
            nextSlide();
            startSlider();
        });
    }

    if (previousButton) {
        previousButton.addEventListener("click", () => {
            previousSlide();
            startSlider();
        });
    }

    dots.forEach((dot) => {
        dot.addEventListener("click", () => {
            showSlide(Number(dot.dataset.index));
            startSlider();
        });
    });

    if (slider) {
        slider.addEventListener("mouseenter", stopSlider);
        slider.addEventListener("mouseleave", startSlider);
    }

    if (slides.length) {
        showSlide(0);
        startSlider();
    }

    const wishlistButtons = document.querySelectorAll(".wishlist-button");

    wishlistButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const heart = button.querySelector("i");

            if (heart) {
                heart.classList.toggle("fa-regular");
                heart.classList.toggle("fa-solid");
            }

            button.classList.toggle("selected");
        });
    });

    const newsletterForms = document.querySelectorAll(".newsletter-form, .about-newsletter-form");

    newsletterForms.forEach((newsletterForm) => {
        newsletterForm.addEventListener("submit", (event) => {
            event.preventDefault();
            alert("Thank you for subscribing!");
            newsletterForm.reset();
        });
    });

    const contactForm = document.getElementById("contactForm");

    if (contactForm) {
        contactForm.addEventListener("submit", (event) => {
            event.preventDefault();

            const submitButton = contactForm.querySelector(".contact-submit-button");

            if (!submitButton) {
                contactForm.reset();
                return;
            }

            const originalContent = submitButton.innerHTML;
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fa-solid fa-circle-check"></i> Message Sent';

            setTimeout(() => {
                contactForm.reset();
                submitButton.disabled = false;
                submitButton.innerHTML = originalContent;
            }, 2500);
        });
    }

    const contactNewsletterForms = document.querySelectorAll(".contact-newsletter-form");

    contactNewsletterForms.forEach((form) => {
        form.addEventListener("submit", (event) => {
            event.preventDefault();

            const button = form.querySelector("button");

            if (!button) {
                form.reset();
                return;
            }

            const oldText = button.textContent;
            button.textContent = "Subscribed";
            form.reset();

            setTimeout(() => {
                button.textContent = oldText;
            }, 2000);
        });
    });

    const shippingOptions = document.querySelectorAll(".shipping-option");
    const shippingPrice = document.getElementById("checkoutShipping");
    const totalPrice = document.getElementById("checkoutTotal");
    const subtotal = 277;

    shippingOptions.forEach((option) => {
        option.addEventListener("click", () => {
            shippingOptions.forEach((item) => {
                item.classList.remove("selected");
            });

            option.classList.add("selected");

            const radio = option.querySelector('input[name="shipping"]');

            if (!radio || !shippingPrice || !totalPrice) {
                return;
            }

            radio.checked = true;

            const price = Number(radio.dataset.price);
            shippingPrice.textContent = price === 0 ? "FREE" : `NIS ${price.toFixed(2)}`;
            totalPrice.textContent = `NIS ${(subtotal + price).toFixed(2)}`;
        });
    });

    const checkoutForm = document.getElementById("checkoutForm");

    if (checkoutForm) {
        checkoutForm.addEventListener("submit", (event) => {
            event.preventDefault();

            const button = checkoutForm.querySelector(".checkout-continue-button");
            const steps = document.querySelectorAll(".checkout-step");

            if (button) {
                button.innerHTML = 'Payment Step <i class="fa-solid fa-arrow-right"></i>';
            }

            if (steps[1]) {
                steps[1].classList.add("active");
            }

            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }

    const checkoutNewsletter = document.querySelector(".checkout-newsletter-form");

    if (checkoutNewsletter) {
        checkoutNewsletter.addEventListener("submit", (event) => {
            event.preventDefault();

            const button = checkoutNewsletter.querySelector("button");

            if (!button) {
                checkoutNewsletter.reset();
                return;
            }

            const oldText = button.textContent;
            button.textContent = "Subscribed";
            checkoutNewsletter.reset();

            setTimeout(() => {
                button.textContent = oldText;
            }, 2000);
        });
    }

    const passwordToggleButtons = document.querySelectorAll(".register-password-toggle");

    passwordToggleButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const targetId = button.dataset.target;
            const passwordInput = document.getElementById(targetId);
            const icon = button.querySelector("i");

            if (!passwordInput || !icon) {
                return;
            }

            const passwordIsHidden = passwordInput.type === "password";
            passwordInput.type = passwordIsHidden ? "text" : "password";

            icon.classList.toggle("fa-eye-slash", !passwordIsHidden);
            icon.classList.toggle("fa-eye", passwordIsHidden);

            button.setAttribute(
                "aria-label",
                passwordIsHidden ? "Hide password" : "Show password"
            );
        });
    });

    const registerForm = document.getElementById("registerForm");
    const passwordInput = document.getElementById("registerPassword");
    const confirmPasswordInput = document.getElementById("confirmPassword");
    const passwordError = document.getElementById("passwordError");

    function passwordsMatch() {
        if (!passwordInput || !confirmPasswordInput) {
            return true;
        }

        const match = passwordInput.value === confirmPasswordInput.value;

        confirmPasswordInput.classList.toggle("register-invalid", !match);

        if (passwordError) {
            passwordError.textContent = match ? "" : "Passwords do not match.";
        }

        return match;
    }

    if (confirmPasswordInput) {
        confirmPasswordInput.addEventListener("input", passwordsMatch);
    }

    if (passwordInput) {
        passwordInput.addEventListener("input", () => {
            if (confirmPasswordInput && confirmPasswordInput.value) {
                passwordsMatch();
            }
        });
    }

    if (registerForm) {
        registerForm.addEventListener("submit", (event) => {
            event.preventDefault();

            if (!passwordsMatch()) {
                confirmPasswordInput.focus();
                return;
            }

            if (!registerForm.checkValidity()) {
                registerForm.reportValidity();
                return;
            }

            const submitButton = registerForm.querySelector(".register-submit-button");

            if (!submitButton) {
                return;
            }

            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Creating Account';

            setTimeout(() => {
                submitButton.innerHTML = '<i class="fa-solid fa-circle-check"></i> Account Created';
            }, 1200);
        });
    }

    const ordersFilter = document.getElementById("ordersFilter");
    const orderCards = document.querySelectorAll(".orders-card");
    const emptyState = document.getElementById("ordersEmptyState");

    if (ordersFilter && orderCards.length) {
        ordersFilter.addEventListener("change", () => {
            const selectedStatus = ordersFilter.value;
            let visibleOrders = 0;

            orderCards.forEach((card) => {
                const cardStatus = card.dataset.status;
                const shouldShow = selectedStatus === "all" || cardStatus === selectedStatus;

                card.classList.toggle("hidden", !shouldShow);

                if (shouldShow) {
                    visibleOrders++;
                }
            });

            if (emptyState) {
                emptyState.classList.toggle("show", visibleOrders === 0);
            }
        });
    }

    const adminSidebar = document.getElementById("adminSidebar");
    const adminSidebarToggle = document.getElementById("adminSidebarToggle");

    if (adminSidebar && adminSidebarToggle) {
        adminSidebarToggle.addEventListener("click", () => {
            adminSidebar.classList.toggle("open");
        });
    }

    document.querySelectorAll(".admin-menu-parent").forEach((button) => {
        button.addEventListener("click", () => {
            button.closest(".admin-menu-group")?.classList.toggle("open");
        });
    });

    const customerSearch = document.getElementById("customerSearch");
    const groupFilter = document.getElementById("customerGroupFilter");
    const statusFilter = document.getElementById("customerStatusFilter");
    const noResults = document.getElementById("customersNoResults");
    const showingText = document.getElementById("customersShowingText");

    function getCustomerRows() {
        return Array.from(document.querySelectorAll(".customer-row"));
    }

    function filterCustomers() {
        const searchValue = customerSearch?.value.trim().toLowerCase() || "";
        const groupValue = groupFilter?.value || "all";
        const statusValue = statusFilter?.value || "all";
        let visibleCount = 0;

        getCustomerRows().forEach((row) => {
            const matchesSearch =
                row.dataset.name.includes(searchValue) ||
                row.dataset.email.includes(searchValue) ||
                row.dataset.phone.includes(searchValue);
            const matchesGroup = groupValue === "all" || row.dataset.group === groupValue;
            const matchesStatus = statusValue === "all" || row.dataset.status === statusValue;
            const shouldShow = matchesSearch && matchesGroup && matchesStatus;

            row.hidden = !shouldShow;

            if (shouldShow) {
                visibleCount++;
            }
        });

        noResults?.classList.toggle("show", visibleCount === 0);

        if (showingText) {
            showingText.textContent = visibleCount === 0
                ? "No customers to display"
                : `Showing 1 to ${visibleCount} of ${visibleCount} customers`;
        }
    }

    customerSearch?.addEventListener("input", filterCustomers);
    groupFilter?.addEventListener("change", filterCustomers);
    statusFilter?.addEventListener("change", filterCustomers);

    const selectAllCustomers = document.getElementById("selectAllCustomers");

    selectAllCustomers?.addEventListener("change", () => {
        document.querySelectorAll(".customer-checkbox").forEach((checkbox) => {
            const row = checkbox.closest("tr");

            if (row && !row.hidden) {
                checkbox.checked = selectAllCustomers.checked;
            }
        });
    });

    const customerModal = document.getElementById("customerModal");
    const customerForm = document.getElementById("customerForm");
    const modalTitle = document.getElementById("customerModalTitle");
    const formMode = document.getElementById("customerFormMode");
    const editingCustomerId = document.getElementById("editingCustomerId");

    function titleCaseName(value) {
        return value
            .split(" ")
            .map((word) => word.charAt(0).toUpperCase() + word.slice(1))
            .join(" ");
    }

    function initialsFromName(value) {
        return value
            .trim()
            .split(" ")
            .filter(Boolean)
            .slice(0, 2)
            .map((part) => part.charAt(0).toUpperCase())
            .join("");
    }

    function openCustomerModal(mode = "add", row = null) {
        customerForm?.reset();

        if (mode === "edit" && row) {
            modalTitle.textContent = "Edit Customer";
            formMode.value = "edit";
            editingCustomerId.value = row.dataset.customerId;
            document.getElementById("customerName").value = titleCaseName(row.dataset.name);
            document.getElementById("customerEmail").value = row.querySelector(".customer-email").textContent.trim();
            document.getElementById("customerPhone").value = row.querySelector(".customer-phone").textContent.trim();
            document.getElementById("customerGroup").value = row.dataset.group;
            document.getElementById("customerStatus").value = row.dataset.status;
            document.getElementById("customerOrders").value = row.querySelector(".customer-orders").textContent.trim();
            document.getElementById("customerSpent").value = row.querySelector(".customer-spent").textContent.replace("$", "").replace(",", "").trim();
        } else {
            modalTitle.textContent = "Add New Customer";
            formMode.value = "add";
            editingCustomerId.value = "";
        }

        customerModal?.classList.add("open");
        customerModal?.setAttribute("aria-hidden", "false");
    }

    function closeCustomerModal() {
        customerModal?.classList.remove("open");
        customerModal?.setAttribute("aria-hidden", "true");
    }

    document.querySelectorAll("[data-open-customer-modal]").forEach((button) => {
        button.addEventListener("click", () => openCustomerModal());
    });

    document.querySelectorAll("[data-close-customer-modal]").forEach((button) => {
        button.addEventListener("click", closeCustomerModal);
    });

    document.addEventListener("click", (event) => {
        const editButton = event.target.closest(".edit-customer-button");

        if (!editButton) {
            return;
        }

        openCustomerModal("edit", editButton.closest(".customer-row"));
    });

    customerForm?.addEventListener("submit", (event) => {
        event.preventDefault();

        const name = document.getElementById("customerName").value.trim();
        const email = document.getElementById("customerEmail").value.trim();
        const phone = document.getElementById("customerPhone").value.trim();
        const group = document.getElementById("customerGroup").value;
        const status = document.getElementById("customerStatus").value;
        const orders = document.getElementById("customerOrders").value || 0;
        const spent = Number(document.getElementById("customerSpent").value || 0);
        const initials = initialsFromName(name);

        if (formMode.value === "edit") {
            const row = document.querySelector(`[data-customer-id="${editingCustomerId.value}"]`);

            if (row) {
                row.dataset.name = name.toLowerCase();
                row.dataset.email = email.toLowerCase();
                row.dataset.phone = phone.toLowerCase();
                row.dataset.group = group;
                row.dataset.status = status;
                row.querySelector(".customer-table-avatar").textContent = initials;
                row.querySelector(".customer-name-cell strong").textContent = name;
                row.querySelector(".customer-email").textContent = email;
                row.querySelector(".customer-phone").textContent = phone;
                row.querySelector(".customer-orders").textContent = orders;
                row.querySelector(".customer-spent").textContent = `$${spent.toFixed(2)}`;

                const groupBadge = row.querySelector(".customer-group-badge");
                groupBadge.textContent = group;
                groupBadge.className = `customer-group-badge group-${group.toLowerCase()}`;

                const statusBadge = row.querySelector(".customer-status-badge");
                statusBadge.textContent = status.charAt(0).toUpperCase() + status.slice(1);
                statusBadge.className = `customer-status-badge status-${status}`;
            }
        } else {
            const rowsCount = getCustomerRows().length + 1;
            const newId = `CUS-${String(rowsCount).padStart(3, "0")}`;
            const row = document.createElement("tr");

            row.className = "customer-row";
            row.dataset.name = name.toLowerCase();
            row.dataset.email = email.toLowerCase();
            row.dataset.phone = phone.toLowerCase();
            row.dataset.group = group;
            row.dataset.status = status;
            row.dataset.customerId = newId;
            row.innerHTML = `
                <td><input class="customer-checkbox" type="checkbox"></td>
                <td><div class="customer-name-cell"><div class="customer-table-avatar">${initials}</div><div><strong>${name}</strong><span>#${newId}</span></div></div></td>
                <td class="customer-email">${email}</td>
                <td class="customer-phone">${phone}</td>
                <td><span class="customer-group-badge group-${group.toLowerCase()}">${group}</span></td>
                <td class="customer-orders">${orders}</td>
                <td class="customer-spent">$${spent.toFixed(2)}</td>
                <td><span class="customer-status-badge status-${status}">${status.charAt(0).toUpperCase() + status.slice(1)}</span></td>
                <td class="customer-joined">${new Date().toLocaleDateString("en-US", { month: "short", day: "2-digit", year: "numeric" })}</td>
                <td><div class="customer-actions"><button class="customer-action-button view-customer-button" type="button"><i class="fa-regular fa-eye"></i></button><button class="customer-action-button edit-customer-button" type="button"><i class="fa-regular fa-pen-to-square"></i></button><button class="customer-action-button delete delete-customer-button" type="button"><i class="fa-regular fa-trash-can"></i></button></div></td>
            `;

            document.getElementById("customersTableBody")?.prepend(row);
        }

        closeCustomerModal();
        filterCustomers();
    });

    document.addEventListener("click", (event) => {
        const deleteButton = event.target.closest(".delete-customer-button");

        if (!deleteButton) {
            return;
        }

        const row = deleteButton.closest(".customer-row");
        const customerName = row.querySelector(".customer-name-cell strong").textContent.trim();

        if (window.confirm(`Delete ${customerName}?`)) {
            row.remove();
            filterCustomers();
        }
    });

    const viewModal = document.getElementById("viewCustomerModal");

    function closeViewModal() {
        viewModal?.classList.remove("open");
        viewModal?.setAttribute("aria-hidden", "true");
    }

    document.querySelectorAll("[data-close-view-modal]").forEach((button) => {
        button.addEventListener("click", closeViewModal);
    });

    document.addEventListener("click", (event) => {
        const viewButton = event.target.closest(".view-customer-button");

        if (!viewButton) {
            return;
        }

        const row = viewButton.closest(".customer-row");
        const name = row.querySelector(".customer-name-cell strong").textContent.trim();

        document.getElementById("viewCustomerInitials").textContent = initialsFromName(name);
        document.getElementById("viewCustomerName").textContent = name;
        document.getElementById("viewCustomerId").textContent = `#${row.dataset.customerId}`;
        document.getElementById("viewCustomerEmail").textContent = row.querySelector(".customer-email").textContent.trim();
        document.getElementById("viewCustomerPhone").textContent = row.querySelector(".customer-phone").textContent.trim();
        document.getElementById("viewCustomerGroup").textContent = row.dataset.group;
        document.getElementById("viewCustomerStatus").textContent = row.dataset.status.charAt(0).toUpperCase() + row.dataset.status.slice(1);
        document.getElementById("viewCustomerOrders").textContent = row.querySelector(".customer-orders").textContent.trim();
        document.getElementById("viewCustomerSpent").textContent = row.querySelector(".customer-spent").textContent.trim();
        document.getElementById("viewCustomerJoined").textContent = row.querySelector(".customer-joined").textContent.trim();

        viewModal?.classList.add("open");
        viewModal?.setAttribute("aria-hidden", "false");
    });

    const exportButton = document.getElementById("exportCustomersButton");

    exportButton?.addEventListener("click", () => {
        const visibleRows = getCustomerRows().filter((row) => !row.hidden);
        const csvRows = [["Customer ID", "Name", "Email", "Phone", "Group", "Orders", "Total Spent", "Status", "Joined Date"]];

        visibleRows.forEach((row) => {
            csvRows.push([
                row.dataset.customerId,
                row.querySelector(".customer-name-cell strong").textContent.trim(),
                row.querySelector(".customer-email").textContent.trim(),
                row.querySelector(".customer-phone").textContent.trim(),
                row.dataset.group,
                row.querySelector(".customer-orders").textContent.trim(),
                row.querySelector(".customer-spent").textContent.trim(),
                row.dataset.status,
                row.querySelector(".customer-joined").textContent.trim()
            ]);
        });

        const csvContent = csvRows
            .map((row) => row.map((value) => `"${String(value).replaceAll('"', '""')}"`).join(","))
            .join("\n");
        const blob = new Blob([csvContent], { type: "text/csv;charset=utf-8;" });
        const url = URL.createObjectURL(blob);
        const link = document.createElement("a");

        link.href = url;
        link.download = "rose-skincare-customers.csv";
        document.body.appendChild(link);
        link.click();
        link.remove();
        URL.revokeObjectURL(url);
    });

    const couponSearch = document.getElementById("couponSearch");
    const couponStatusFilter = document.getElementById("couponStatusFilter");
    const couponTypeFilter = document.getElementById("couponTypeFilter");
    const couponStartFilter = document.getElementById("couponStartFilter");
    const couponEndFilter = document.getElementById("couponEndFilter");
    const couponsNoResults = document.getElementById("couponsNoResults");
    const couponsShowingText = document.getElementById("couponsShowingText");

    function getCouponRows() {
        return Array.from(document.querySelectorAll(".coupon-row"));
    }

    function typeLabel(type) {
        if (type === "free_shipping") {
            return "Free Shipping";
        }

        if (type === "fixed") {
            return "Fixed Amount";
        }

        return "Percentage";
    }

    function discountLabel(type, discount) {
        if (type === "fixed") {
            return `$${Number(discount).toFixed(2)} OFF`;
        }

        if (type === "free_shipping") {
            return "Free Shipping";
        }

        return `${Number(discount)}% OFF`;
    }

    function formatDateForDisplay(dateValue) {
        if (!dateValue) {
            return "";
        }

        return new Date(`${dateValue}T00:00:00`).toLocaleDateString("en-US", {
            month: "short",
            day: "2-digit",
            year: "numeric"
        });
    }

    function escapeHtml(value) {
        return String(value)
            .replaceAll("&", "&amp;")
            .replaceAll("<", "&lt;")
            .replaceAll(">", "&gt;")
            .replaceAll('"', "&quot;")
            .replaceAll("'", "&#039;");
    }

    function filterCoupons() {
        const searchValue = couponSearch?.value.trim().toLowerCase() || "";
        const statusValue = couponStatusFilter?.value || "all";
        const typeValue = couponTypeFilter?.value || "all";
        const startValue = couponStartFilter?.value || "";
        const endValue = couponEndFilter?.value || "";
        let visibleCount = 0;

        getCouponRows().forEach((row) => {
            const matchesSearch = row.dataset.code.includes(searchValue) || row.dataset.name.includes(searchValue);
            const matchesStatus = statusValue === "all" || row.dataset.status === statusValue;
            const matchesType = typeValue === "all" || row.dataset.type === typeValue;
            const matchesStart = !startValue || row.dataset.start >= startValue;
            const matchesEnd = !endValue || row.dataset.end <= endValue;
            const shouldShow = matchesSearch && matchesStatus && matchesType && matchesStart && matchesEnd;

            row.hidden = !shouldShow;

            if (shouldShow) {
                visibleCount++;
            }
        });

        couponsNoResults?.classList.toggle("show", visibleCount === 0);

        if (couponsShowingText) {
            couponsShowingText.textContent = visibleCount === 0
                ? "No coupons to display"
                : `Showing 1 to ${visibleCount} of ${visibleCount} coupons`;
        }
    }

    couponSearch?.addEventListener("input", filterCoupons);
    couponStatusFilter?.addEventListener("change", filterCoupons);
    couponTypeFilter?.addEventListener("change", filterCoupons);
    couponStartFilter?.addEventListener("change", filterCoupons);
    couponEndFilter?.addEventListener("change", filterCoupons);

    const selectAllCoupons = document.getElementById("selectAllCoupons");

    selectAllCoupons?.addEventListener("change", () => {
        document.querySelectorAll(".coupon-checkbox").forEach((checkbox) => {
            const row = checkbox.closest("tr");

            if (row && !row.hidden) {
                checkbox.checked = selectAllCoupons.checked;
            }
        });
    });

    const couponModal = document.getElementById("couponModal");
    const couponForm = document.getElementById("couponForm");
    const couponModalTitle = document.getElementById("couponModalTitle");
    const couponFormMode = document.getElementById("couponFormMode");
    const editingCouponId = document.getElementById("editingCouponId");
    const couponFormError = document.getElementById("couponFormError");

    function clearCouponForm() {
        couponForm?.reset();

        if (couponFormError) {
            couponFormError.textContent = "";
        }

        const discount = document.getElementById("couponDiscount");
        const minimumOrder = document.getElementById("couponMinimumOrder");
        const usageLimit = document.getElementById("couponUsageLimit");
        const used = document.getElementById("couponUsed");

        if (discount) discount.value = 10;
        if (minimumOrder) minimumOrder.value = 0;
        if (usageLimit) usageLimit.value = 100;
        if (used) used.value = 0;
    }

    function openCouponModal(mode = "add", row = null) {
        clearCouponForm();

        couponFormMode.value = mode;

        if (mode === "edit" && row) {
            couponModalTitle.textContent = "Edit Coupon";
            editingCouponId.value = row.dataset.couponId;
            document.getElementById("couponCode").value = row.querySelector(".coupon-code").textContent.trim();
            document.getElementById("couponName").value = row.querySelector(".coupon-name-cell h3").textContent.trim();
            document.getElementById("couponDescription").value = row.dataset.description;
            document.getElementById("couponType").value = row.dataset.type;
            document.getElementById("couponDiscount").value = row.dataset.discount;
            document.getElementById("couponMinimumOrder").value = row.dataset.minimumOrder;
            document.getElementById("couponUsageLimit").value = row.dataset.limit;
            document.getElementById("couponUsed").value = row.dataset.used;
            document.getElementById("couponStatus").value = row.dataset.status;
            document.getElementById("couponStartDate").value = row.dataset.start;
            document.getElementById("couponEndDate").value = row.dataset.end;
        } else {
            couponModalTitle.textContent = "Add New Coupon";
            editingCouponId.value = "";
        }

        couponModal?.classList.add("open");
        couponModal?.setAttribute("aria-hidden", "false");
    }

    function closeCouponModal() {
        couponModal?.classList.remove("open");
        couponModal?.setAttribute("aria-hidden", "true");
    }

    document.querySelectorAll("[data-open-coupon-modal]").forEach((button) => {
        button.addEventListener("click", () => openCouponModal());
    });

    document.querySelectorAll("[data-close-coupon-modal]").forEach((button) => {
        button.addEventListener("click", closeCouponModal);
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape" && couponModal?.classList.contains("open")) {
            closeCouponModal();
        }
    });

    document.addEventListener("click", (event) => {
        const editButton = event.target.closest(".edit-coupon-button");

        if (!editButton) {
            return;
        }

        openCouponModal("edit", editButton.closest(".coupon-row"));
    });

    function couponRowMarkup({ code, name, description, type, discount, minimumOrder, used, usageLimit, status, startDate, endDate }) {
        const usagePercentage = usageLimit > 0 ? Math.min(100, (used / usageLimit) * 100) : 0;

        return `
            <td><input class="coupon-checkbox" type="checkbox"></td>
            <td><div class="coupon-name-cell"><strong class="coupon-code">${escapeHtml(code)}</strong><div><h3>${escapeHtml(name)}</h3><p>${escapeHtml(description)}</p></div></div></td>
            <td class="coupon-type-label">${escapeHtml(typeLabel(type))}</td>
            <td class="coupon-discount-label">${escapeHtml(discountLabel(type, discount))}</td>
            <td class="coupon-minimum-order">$${Number(minimumOrder).toFixed(2)}</td>
            <td><div class="coupon-usage"><span><strong class="coupon-used">${used}</strong> / <strong class="coupon-limit">${usageLimit}</strong></span><div class="coupon-usage-track"><div class="coupon-usage-progress" style="width: ${usagePercentage}%;"></div></div></div></td>
            <td><div class="coupon-period"><span class="coupon-start-date">${formatDateForDisplay(startDate)}</span><span class="coupon-end-date">${formatDateForDisplay(endDate)}</span></div></td>
            <td><span class="coupon-status-badge coupon-status-${status}">${status.charAt(0).toUpperCase() + status.slice(1)}</span></td>
            <td><div class="coupon-actions"><button class="coupon-action-button edit-coupon-button" type="button"><i class="fa-regular fa-pen-to-square"></i></button><button class="coupon-action-button duplicate-coupon-button" type="button"><i class="fa-regular fa-clone"></i></button><button class="coupon-action-button delete delete-coupon-button" type="button"><i class="fa-regular fa-trash-can"></i></button></div></td>
        `;
    }

    couponForm?.addEventListener("submit", (event) => {
        event.preventDefault();

        const code = document.getElementById("couponCode").value.trim().toUpperCase();
        const name = document.getElementById("couponName").value.trim();
        const description = document.getElementById("couponDescription").value.trim();
        const type = document.getElementById("couponType").value;
        const discount = Number(document.getElementById("couponDiscount").value || 0);
        const minimumOrder = Number(document.getElementById("couponMinimumOrder").value || 0);
        const usageLimit = Number(document.getElementById("couponUsageLimit").value || 0);
        const used = Number(document.getElementById("couponUsed").value || 0);
        const status = document.getElementById("couponStatus").value;
        const startDate = document.getElementById("couponStartDate").value;
        const endDate = document.getElementById("couponEndDate").value;

        if (endDate < startDate) {
            couponFormError.textContent = "End date must be after the start date.";
            return;
        }

        if (used > usageLimit) {
            couponFormError.textContent = "Used count cannot be greater than usage limit.";
            return;
        }

        const duplicateCode = getCouponRows().some((row) => {
            const sameCode = row.dataset.code === code.toLowerCase();
            const isEditingSameRow = couponFormMode.value === "edit" && row.dataset.couponId === editingCouponId.value;
            return sameCode && !isEditingSameRow;
        });

        if (duplicateCode) {
            couponFormError.textContent = "This coupon code already exists.";
            return;
        }

        const markup = couponRowMarkup({ code, name, description, type, discount, minimumOrder, used, usageLimit, status, startDate, endDate });

        if (couponFormMode.value === "edit") {
            const row = document.querySelector(`[data-coupon-id="${editingCouponId.value}"]`);

            if (row) {
                row.dataset.code = code.toLowerCase();
                row.dataset.name = name.toLowerCase();
                row.dataset.description = description;
                row.dataset.type = type;
                row.dataset.discount = discount;
                row.dataset.minimumOrder = minimumOrder;
                row.dataset.used = used;
                row.dataset.limit = usageLimit;
                row.dataset.start = startDate;
                row.dataset.end = endDate;
                row.dataset.status = status;
                row.innerHTML = markup;
            }
        } else {
            const highestId = getCouponRows().reduce((maximum, row) => Math.max(maximum, Number(row.dataset.couponId)), 0);
            const newRow = document.createElement("tr");

            newRow.className = "coupon-row";
            newRow.dataset.couponId = highestId + 1;
            newRow.dataset.code = code.toLowerCase();
            newRow.dataset.name = name.toLowerCase();
            newRow.dataset.description = description;
            newRow.dataset.type = type;
            newRow.dataset.discount = discount;
            newRow.dataset.minimumOrder = minimumOrder;
            newRow.dataset.used = used;
            newRow.dataset.limit = usageLimit;
            newRow.dataset.start = startDate;
            newRow.dataset.end = endDate;
            newRow.dataset.status = status;
            newRow.innerHTML = markup;
            document.getElementById("couponsTableBody")?.prepend(newRow);
        }

        closeCouponModal();
        filterCoupons();
    });

    document.addEventListener("click", (event) => {
        const duplicateButton = event.target.closest(".duplicate-coupon-button");

        if (!duplicateButton) {
            return;
        }

        const originalRow = duplicateButton.closest(".coupon-row");
        const clonedRow = originalRow.cloneNode(true);
        const highestId = getCouponRows().reduce((maximum, row) => Math.max(maximum, Number(row.dataset.couponId)), 0);
        const originalCode = originalRow.querySelector(".coupon-code").textContent.trim();
        const newCode = `${originalCode}-COPY`;

        clonedRow.dataset.couponId = highestId + 1;
        clonedRow.dataset.code = newCode.toLowerCase();
        clonedRow.dataset.status = "scheduled";
        clonedRow.querySelector(".coupon-code").textContent = newCode;

        const statusBadge = clonedRow.querySelector(".coupon-status-badge");
        statusBadge.textContent = "Scheduled";
        statusBadge.className = "coupon-status-badge coupon-status-scheduled";

        originalRow.after(clonedRow);
        filterCoupons();
    });

    document.addEventListener("click", (event) => {
        const deleteButton = event.target.closest(".delete-coupon-button");

        if (!deleteButton) {
            return;
        }

        const row = deleteButton.closest(".coupon-row");
        const couponCode = row.querySelector(".coupon-code").textContent.trim();

        if (window.confirm(`Delete coupon ${couponCode}?`)) {
            row.remove();
            filterCoupons();
        }
    });

    const exportCouponsButton = document.getElementById("exportCouponsButton");

    exportCouponsButton?.addEventListener("click", () => {
        const visibleRows = getCouponRows().filter((row) => !row.hidden);
        const csvRows = [["Code", "Name", "Description", "Type", "Discount", "Minimum Order", "Used", "Usage Limit", "Start Date", "End Date", "Status"]];

        visibleRows.forEach((row) => {
            csvRows.push([
                row.querySelector(".coupon-code").textContent.trim(),
                row.querySelector(".coupon-name-cell h3").textContent.trim(),
                row.dataset.description,
                row.dataset.type,
                row.dataset.discount,
                row.dataset.minimumOrder,
                row.dataset.used,
                row.dataset.limit,
                row.dataset.start,
                row.dataset.end,
                row.dataset.status
            ]);
        });

        const csvContent = csvRows
            .map((row) => row.map((value) => `"${String(value).replaceAll('"', '""')}"`).join(","))
            .join("\n");
        const blob = new Blob([csvContent], { type: "text/csv;charset=utf-8;" });
        const url = URL.createObjectURL(blob);
        const link = document.createElement("a");

        link.href = url;
        link.download = "rose-skincare-coupons.csv";
        document.body.appendChild(link);
        link.click();
        link.remove();
        URL.revokeObjectURL(url);
    });
});
