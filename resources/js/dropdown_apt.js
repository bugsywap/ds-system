document.addEventListener("DOMContentLoaded", function () {
    const dropdownMenuIconButton = document.getElementById(
        "dropdownMenuIconButton"
    );
    const dropdownDots = document.getElementById("dropdownDots");

    dropdownMenuIconButton.addEventListener("click", function () {
        dropdownDots.classList.toggle("hidden");
    });

    // Optional: Close the dropdown if clicking outside of it
    document.addEventListener("click", function (event) {
        if (
            !dropdownMenuIconButton.contains(event.target) &&
            !dropdownDots.contains(event.target)
        ) {
            dropdownDots.classList.add("hidden");
        }
    });
});
