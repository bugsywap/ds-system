document.addEventListener("DOMContentLoaded", function () {
    var alertBox = document.getElementById("alert-2");
    var progressBar = document.getElementById("loading");

    if ("{{ Session::has('message') }}") {
        alertBox.classList.add("show");
        progressBar.style.width = "100%";

        setTimeout(function () {
            progressBar.style.width = "0%";
            setTimeout(function () {
                if (alertBox.classList.contains("show")) {
                    alertBox.classList.remove("show");
                }
            }, 3000);
        }, 3000);
    }

    // Handle the close button
    document
        .querySelectorAll("[data-dismiss-target]")
        .forEach(function (button) {
            button.addEventListener("click", function () {
                var target = document.querySelector(
                    button.getAttribute("data-dismiss-target")
                );
                if (target) {
                    target.classList.remove("show");
                }
            });
        });
});
