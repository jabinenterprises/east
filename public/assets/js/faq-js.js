document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach((item) => {
        const header = item.querySelector(".faq-item-header");
        const toggle = item.querySelector(".faq-toggle");
        const answer = item.querySelector(".faq-answer");
        const answerId = answer.getAttribute("id");

        header.addEventListener("click", function () {
            const isExpanded = item.classList.contains("faq-item-expanded");

            // Close all other items first
            faqItems.forEach((otherItem) => {
                if (otherItem !== item && otherItem.classList.contains("faq-item-expanded")) {
                    otherItem.classList.remove("faq-item-expanded");
                    const otherToggle = otherItem.querySelector(".faq-toggle");
                    const otherAnswer = otherItem.querySelector(".faq-answer");
                    otherToggle.innerHTML = '<i class="fa fa-angle-right"></i>';
                    otherToggle.setAttribute("aria-expanded", "false");
                    otherAnswer.hidden = true;
                }
            });

            // Toggle current item
            if (isExpanded) {
                item.classList.remove("faq-item-expanded");
                toggle.innerHTML = '<i class="fa fa-angle-right"></i>';
                toggle.setAttribute("aria-expanded", "false");
                answer.hidden = true;
            } else {
                item.classList.add("faq-item-expanded");
                toggle.innerHTML = '<i class="fa fa-angle-down"></i>';
                toggle.setAttribute("aria-expanded", "true");
                answer.hidden = false;
            }
        });

        // Add keyboard support
        toggle.addEventListener("keydown", function (e) {
            if (e.key === "Enter" || e.key === " ") {
                e.preventDefault();
                header.click();
            }
        });
    });

    // Add keyboard navigation between FAQ items
    const toggleButtons = document.querySelectorAll(".faq-toggle");
    toggleButtons.forEach((button, index) => {
        button.addEventListener("keydown", function (e) {
            // Move to next or previous FAQ item with arrow keys
            if (e.key === "ArrowDown" && index < toggleButtons.length - 1) {
                e.preventDefault();
                toggleButtons[index + 1].focus();
            } else if (e.key === "ArrowUp" && index > 0) {
                e.preventDefault();
                toggleButtons[index - 1].focus();
            }
        });
    });
});