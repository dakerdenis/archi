document.addEventListener("DOMContentLoaded", function () {
    const dropdownTrigger = document.getElementById("dropdown-trigger");
    const dropdownContent = document.getElementById("dropdown-content");

    dropdownTrigger.addEventListener("click", function (event) {
        event.stopPropagation(); // Prevent the click event from reaching the document
        dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
    });

    // Close the dropdown when clicking anywhere else on the page
    document.addEventListener("click", function (event) {
        if (event.target !== dropdownTrigger && event.target !== dropdownContent) {
            dropdownContent.style.display = "none";
        }
    });
});