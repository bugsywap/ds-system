document.addEventListener("DOMContentLoaded", function () {
    const section1 = document.getElementById("section1-1");
    const section1_1 = document.getElementById("section1-2");
    const section2 = document.getElementById("section2");
    const nextButton = document.getElementById("nextButton");
    const backButton = document.getElementById("backButton");

    nextButton.addEventListener("click", function () {
        section1.classList.add("hidden");
        section1_1.classList.add("hidden");
        section2.classList.add("grid");
        section2.classList.remove("hidden");
        nextButton.classList.add("hidden");
    });

    backButton.addEventListener("click", function () {
        section2.classList.add("hidden");
        section1.classList.remove("hidden");
        section1_1.classList.remove("hidden");
        nextButton.classList.remove("hidden");
    });
});
