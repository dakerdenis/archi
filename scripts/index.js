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
document.addEventListener("DOMContentLoaded", function () {
    const burgerIcon = document.getElementById("burger-menu");
    const burgerMenuContainer = document.getElementById("burger-menu-content");

    // Function to close the menu
    function closeBurgerMenu() {
        burgerMenuContainer.classList.remove("open__burger__menu");
        burgerIcon.style.transform = "rotate(0deg)";
        document.body.style.overflow = "auto"; // Enable scrolling when menu is closed
        document.removeEventListener("click", closeMenuOutside);
    }

    function closeMenuOutside(event) {
        if (!burgerMenuContainer.contains(event.target) && event.target !== burgerIcon) {
            closeBurgerMenu();
        }
    }

    burgerIcon.addEventListener("click", function (event) {
        event.stopPropagation();
        burgerMenuContainer.classList.toggle("open__burger__menu");
        if (burgerMenuContainer.classList.contains("open__burger__menu")) {
            burgerIcon.style.transform = "rotate(90deg)";
            document.body.style.overflow = "hidden"; // Disable scrolling when menu is open
            // Add click event listener to close the menu when clicking outside
            document.addEventListener("click", closeMenuOutside);
        } else {
            closeBurgerMenu();
        }
    });
});

    