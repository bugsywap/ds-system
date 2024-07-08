document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll("[data-tabs-target]");
    const dropdownItems = document.querySelectorAll("[data-target]");
    const dropdownButton = document.getElementById("dropdownDelayButton");
    const dotsButton = document.getElementById("dotsButton");
    const dotsMenu = document.getElementById("dotsMenu");
    const dropdownButtonText = dropdownButton.querySelector("span");

    function showTabContent(targetId) {
        document
            .querySelectorAll("#default-styled-tab-content > div")
            .forEach((div) => {
                div.classList.add("hidden");
            });
        const target = document.querySelector(targetId);
        target.classList.remove("hidden");
    }

    tabs.forEach((tab) => {
        tab.addEventListener("click", function () {
            showTabContent(tab.getAttribute("data-tabs-target"));
        });
    });

    dropdownItems.forEach((item) => {
        item.addEventListener("click", function () {
            showTabContent(item.getAttribute("data-target"));
            dropdownButtonText.textContent = item.getAttribute("data-label");
        });
    });

    // Toggle dropdown visibility
    function toggleDropdown() {
        dotsMenu.classList.toggle("hidden");
    }

    dotsButton.addEventListener("click", function (event) {
        event.stopPropagation();
        toggleDropdown();
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function (event) {
        if (
            !dotsButton.contains(event.target) &&
            !dotsMenu.contains(event.target)
        ) {
            dotsMenu.classList.add("hidden");
        }
    });

    // Handle dropdown item clicks
    dotsMenu.querySelectorAll("a").forEach((item) => {
        item.addEventListener("click", function (event) {
            event.preventDefault();
            // Perform actions based on clicked item
            console.log("Clicked:", item.textContent.trim());
            // Close dropdown after action (if needed)
            dotsMenu.classList.add("hidden");
        });
    });
});
