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

// Function to update image and link based on screen resolution
function updateImageAndLink() {
    const screenWidth = window.innerWidth; // Get the current screen width

    const b2b__header_image = document.getElementById('b2b__header_image');
    const b2b__header_link = document.getElementById('b2b__header_link');

    if (screenWidth < 768) {
        // Update the image source and link href for smaller screens
        b2b__header_image.src = './imgs/logo.png'; // New image source
        b2b__header_link.href = './index.php'; // New link href
    } else {
        // Revert to the original image and link for larger screens
        b2b__header_image.src = './imgs/B2B.svg'; // Original image source
        b2b__header_link.href = './b2b.php'; // Original link href
    }
}

// Call the update function when the page loads and when the window is resized
window.addEventListener('load', updateImageAndLink);
window.addEventListener('resize', updateImageAndLink);


/****************************************************/

