document.addEventListener("DOMContentLoaded", function () {
    const dropdownTrigger = document.getElementById("dropdown-trigger");
    const dropdownContent = document.getElementById("dropdown-content");
    dropdownTrigger.addEventListener("click", function (event) {
        event.stopPropagation(); 
        dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
    });
    document.addEventListener("click", function (event) {
        if (event.target !== dropdownTrigger && event.target !== dropdownContent) {
            dropdownContent.style.display = "none";
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const burgerIcon = document.getElementById("burger-icon");
    const menu = document.getElementById("menu");

    // Function to close the menu
    function closeMenu() {
        menu.classList.remove("open");
        burgerIcon.style.transform = "rotate(0deg)";
        document.body.style.overflow = "auto"; // Enable scrolling when menu is closed
        document.removeEventListener("click", closeMenuOutside);
    }

    // Function to close the menu when clicked outside
    function closeMenuOutside(event) {
        if (!menu.contains(event.target) && !burgerIcon.contains(event.target)) {
            closeMenu();
        }
    }

    burgerIcon.addEventListener("click", function(event) {
        menu.classList.toggle("open");
        if (menu.classList.contains("open")) {
            burgerIcon.style.transform = "rotate(90deg)";
            document.body.style.overflow = "hidden"; // Disable scrolling when menu is open
            // Add click event listener to close the menu when clicking outside
            document.addEventListener("click", closeMenuOutside);
        } else {
            closeMenu();
        }
    });
});



