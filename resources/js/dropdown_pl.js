document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll("[data-tabs-target]");
    const dropdownItems = document.querySelectorAll("[data-target]");
    const dropdownButton = document.getElementById("dropdownDelayButton");
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
});
