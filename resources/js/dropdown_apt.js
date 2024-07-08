document.addEventListener("DOMContentLoaded", function () {
    const dotsButton = document.getElementById("dotsButton");
    const dotsMenu = document.getElementById("dotsMenu");

    // Toggle dropdown visibility
    dotsButton.addEventListener("click", function () {
        dotsMenu.classList.toggle("hidden");
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
