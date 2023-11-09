<style>
    <?php include './style/goods.css' ?>
    <?php include './style/owners_goods_archi.css' ?>
</style>
<div class="goods__page__categories goods__page__categories_owner">
    <div class="goods__page__categories_owner__block">
        <div class="goods__owner__links">
            <a class="goods__owner__link_blue" href="#">
                <p>Личный Кабинет</p>
            </a>
            <span> > </span>
            <a class="goods__owner__link_blue" href="#">
                <p>Мои Товары</p>
            </a>
            <span> > </span>
            <a class="" href="#">
                <p>Название категории</p>
            </a>
        </div>
    </div>
</div>

<div class="goods__page__container">
    <div class="goods__owner__addgoods">
        <div class="goods__owner__addgoods__mobile__filter">
            <button id="openPopupFilterButton">
                <img src="./imgs/filtr_logo.png" alt="">
            </button>
        </div>
        <div class="owners__goods__delete__add">
            <a href="./index.php?page=new_item">
                <img src="./imgs/plus_1.jpg" alt="">
            </a>
            <button id="toggleButtonDelete">
                <img src="./imgs/delete.png" alt="">
            </button>
        </div>
    </div>
    <div id="popup_filter" class="popup_filter">
            <div class="popup_filter-content">
                <span class="close_filter" id="closePopupFilterButton">×</span>
                <div class="popup__filter__container">
                    <div class="main__filter__container">
                        <div class="main__filter__name">
                            <p>Фильтр</p>
                        </div>

                        <div class="main__filter__description">
                            <p>Подкатегория</p>
                        </div>
                        <div class="additional__container">
                            <div class="additional__container__block">
                                <div class="custom-select" id="category-select">
                                    <div class="select-box">
                                        <span class="selected-option">Select a category</span>
                                        <div class="arrow" style="transform: rotate(0deg);">▼</div>
                                    </div>
                                    <ul class="options" style="display: none;">
                                        <li class="option" data-value="cars">Cars</li>
                                        <li class="option" data-value="planes">Planes</li>
                                        <li class="option" data-value="boats">Boats</li>
                                    </ul>
                                </div>

                                <div class="custom-select" id="subcategory-select" style="display: none;">
                                    <div class="select-box">
                                        <span class="selected-option">Select a subcategory</span>
                                        <div class="arrow" style="transform: rotate(0deg);">▼</div>
                                    </div>
                                    <ul class="options" style="display: none;">
                                        <!-- Subcategory options will be added dynamically based on the selected category -->
                                    </ul>
                                </div>
                                <div class="custom-select-container" id="custom-select-container" style="display: none;">
                                    <div class="custom__select__additionalname">
                                        <p>Свойства</p>
                                    </div>

                                    <div class="custom-select ">
                                        <p class="custom_select_name"> Страна производитель</p>
                                        <div class="select-box">
                                            <span class="selected-option">Option 1</span>
                                            <div class="arrow">▼</div>
                                        </div>
                                        <ul class="options">
                                            <li class="option">Option 1.1</li>
                                            <li class="option">Option 1.2</li>
                                            <li class="option">Option 1.3</li>
                                        </ul>
                                    </div>

                                    <div class="custom-select">
                                        <p class="custom_select_name">Класс</p>
                                        <div class="select-box">
                                            <span class="selected-option">Option 2</span>
                                            <div class="arrow">▼</div>
                                        </div>
                                        <ul class="options">
                                            <li class="option">Option 2.1</li>
                                            <li class="option">Option 2.2</li>
                                            <li class="option">Option 2.3</li>
                                        </ul>
                                    </div>
                                    <!-- Add more custom-select elements as needed -->
                                </div>
                            </div>
                        </div>
                        <div class="main__filter__search">
                            <button>
                                <p>Применить</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="goods__page__wrapper">

        <div class="goods__page__filtr">
            <!---//!---FILTR---->
            <!---//!---FILTR---->
            <!---//!---FILTR---->
            <div class="main__filter__container">
                <div class="main__filter__name">
                    <p>Фильтр</p>
                </div>
                <div class="main__filter__description">
                    <p>Подкатегория</p>
                </div>
                <div class="additional__container">
                    <div class="additional__container__block">
                        <div class="custom-select" id="category-select">
                            <div class="select-box">
                                <span class="selected-option">Select a category</span>
                                <div class="arrow">&#9660;</div>
                            </div>
                            <ul class="options">
                                <li class="option" data-value="cars">Cars</li>
                                <li class="option" data-value="planes">Planes</li>
                                <li class="option" data-value="boats">Boats</li>
                            </ul>
                        </div>

                        <div class="custom-select" id="subcategory-select" style="display: none;">
                            <div class="select-box">
                                <span class="selected-option">Select a subcategory</span>
                                <div class="arrow">&#9660;</div>
                            </div>
                            <ul class="options">
                                <!-- Subcategory options will be added dynamically based on the selected category -->
                            </ul>
                        </div>
                        <div class="custom-select-container" id="custom-select-container" style="display: none;">
                            <div class="custom__select__additionalname">
                                <p>Свойства</p>
                            </div>

                            <div class="custom-select ">
                                <p class="custom_select_name"> Страна производитель</p>
                                <div class="select-box">
                                    <span class="selected-option">Option 1</span>
                                    <div class="arrow">&#9660;</div>
                                </div>
                                <ul class="options">
                                    <li class="option">Option 1.1</li>
                                    <li class="option">Option 1.2</li>
                                    <li class="option">Option 1.3</li>
                                </ul>
                            </div>

                            <div class="custom-select">
                                <p class="custom_select_name">Класс</p>
                                <div class="select-box">
                                    <span class="selected-option">Option 2</span>
                                    <div class="arrow">&#9660;</div>
                                </div>
                                <ul class="options">
                                    <li class="option">Option 2.1</li>
                                    <li class="option">Option 2.2</li>
                                    <li class="option">Option 2.3</li>
                                </ul>
                            </div>
                            <!-- Add more custom-select elements as needed -->
                        </div>
                    </div>
                </div>
                <div class="main__filter__search">
                    <button>
                        <p>Применить</p>
                    </button>
                </div>
            </div>
            <!---//!---FILTR---->
            <!---//!---FILTR---->
            <!---//!---FILTR---->

        </div>




        <!---//?---CONTENT WRAPPER---->
        <div class="goods__page__content__wrapper">
            <div class="goods__page__content__wrapper_">
                <!------------>
                <div class="goods__page__element">
                    <div class="page__element__image">
                        <div class="delete__element_" data-id="1">
                            <p class="openPopup" id="openPopup">x</p>
                        </div>
                        <img src="./imgs/1.jpg" alt="">
                    </div>
                    <div class="page__element__content">
                        <div class="page__element__name">
                            <a href="./index.php?page=item">
                                <p>Товар китай покемон fasfasfasf</p>
                            </a>
                        </div>
                        <div class="page__element__size">
                            <p>210 x 300 x 69</p>
                        </div>
                        <div class="page__element__material">
                            <p>материал</p>
                        </div>
                    </div>
                </div>
                <!------------>
                <!------------>
                <!------------>
                <div class="goods__page__element">
                    <div class="page__element__image">
                        <div class="delete__element_" data-id="2">
                            <p class="openPopup" id="openPopup">x</p>
                        </div>
                        <img src="./imgs/1.jpg" alt="">
                    </div>
                    <div class="page__element__content">
                        <div class="page__element__name">
                            <a href="./index.php?page=item">
                                <p>Товар китай покемон fasfasfasf</p>
                            </a>
                        </div>
                        <div class="page__element__size">
                            <p>210 x 300 x 69</p>
                        </div>
                        <div class="page__element__material">
                            <p>материал</p>
                        </div>
                    </div>
                </div>
                <!------------>
                <!------------>
                <!------------>
                <div class="goods__page__element">
                    <div class="page__element__image">
                        <div class="delete__element_" data-id="3">
                            <p class="openPopup" id="openPopup">x</p>
                        </div>
                        <img src="./imgs/1.jpg" alt="">
                    </div>
                    <div class="page__element__content">
                        <div class="page__element__name">
                            <a href="./index.php?page=item">
                                <p>Товар китай покемон fasfasfasf</p>
                            </a>
                        </div>
                        <div class="page__element__size">
                            <p>210 x 300 x 69</p>
                        </div>
                        <div class="page__element__material">
                            <p>материал</p>
                        </div>
                    </div>
                </div>
                <!------------>
                <!------------>
                <!------------>
                <div class="goods__page__element">
                    <div class="page__element__image">
                        <div class="delete__element_" data-id="4">
                            <p class="openPopup" id="openPopup">x</p>
                        </div>
                        <img src="./imgs/1.jpg" alt="">
                    </div>
                    <div class="page__element__content">
                        <div class="page__element__name">
                            <a href="./index.php?page=item">
                                <p>Товар китай покемон fasfasfasf asdasdasda asdasddas</p>
                            </a>
                        </div>
                        <div class="page__element__size">
                            <p>210 x 300 x 69</p>
                        </div>
                        <div class="page__element__material">
                            <p>материал</p>
                        </div>
                    </div>
                </div>
                <!------------>
                <!------------>
                <!------------>
                <div class="goods__page__element">
                    <div class="page__element__image">
                        <div class="delete__element_" data-id="5">
                            <p class="openPopup" id="openPopup">x</p>
                        </div>
                        <img src="./imgs/1.jpg" alt="">
                    </div>
                    <div class="page__element__content">
                        <div class="page__element__name">
                            <a href="./index.php?page=item">
                                <p>Товар китай покемон fasfasfasf</p>
                            </a>
                        </div>
                        <div class="page__element__size">
                            <p>210 x 300 x 69</p>
                        </div>
                        <div class="page__element__material">
                            <p>материал</p>
                        </div>
                    </div>
                </div>
                <!------------>
                <!------------>














            </div>
        </div>

    </div>
</div>



<div class="popup-overlay" id="popupOverlay">
    <form class="popup popup__delete__element" id="popup">
        <span class="close" id="closePopup">X</span>
        <div class="popup__content__delete">
            <div class="popup__eleement__delete__name">
                <p>Удалить объявление?</p>
            </div>
            <input type="text" id="blockIdInput" readonly>
            <div class="popup__element__delete__button">
                <button>
                    <p>Удалить</p>
                </button>
            </div>
        </div>
    </form>
</div>


<script>
    
    const openPopupButtons = document.querySelectorAll(".openPopup");
    const popupOverlay = document.getElementById("popupOverlay");
    const closePopupButton = document.getElementById("closePopup");
    const blockIdInput = document.getElementById("blockIdInput");

    openPopupButtons.forEach(button => {
        button.addEventListener("click", function () {
            const block = this.closest(".delete__element_");
            const blockId = block.getAttribute("data-id");
            blockIdInput.value = blockId;
            popupOverlay.style.display = "block";
        });
    });

    closePopupButton.addEventListener("click", function () {
        popupOverlay.style.display = "none";
    });

    popupOverlay.addEventListener("click", function (event) {
        if (event.target === popupOverlay) {
            popupOverlay.style.display = "none";
        }
    });

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") {
            popupOverlay.style.display = "none";
        }
    });

    const toggleButton = document.getElementById("toggleButtonDelete");
    const deleteElements = document.querySelectorAll(".delete__element_");

    let visible = false; // Initially, the divs are hidden

    toggleButton.addEventListener("click", () => {
        visible = !visible; // Toggle the visibility flag

        if (visible) {
            // Show the small divs
            deleteElements.forEach(element => {
                element.style.display = "flex";
            });
        } else {
            // Hide the small divs
            deleteElements.forEach(element => {
                element.style.display = "none";
            });
        }
    });







    const categorySelect = document.getElementById("category-select");
    const subcategorySelect = document.getElementById("subcategory-select");
    const categoryOptions = categorySelect.querySelectorAll(".option");
    const subcategoryOptions = subcategorySelect.querySelector(".options");

    categorySelect.addEventListener("click", (event) => {
        event.stopPropagation();
        categorySelect.querySelector(".options").style.display =
            categorySelect.querySelector(".options").style.display === "none" ? "block" : "none";
        categorySelect.querySelector(".arrow").style.transform =
            categorySelect.querySelector(".options").style.display === "none" ? "rotate(0deg)" : "rotate(180deg)";
    });

    categoryOptions.forEach((categoryOption) => {
        categoryOption.addEventListener("click", () => {
            const selectedCategory = categoryOption.dataset.value;
            categorySelect.querySelector(".selected-option").textContent = categoryOption.textContent;

            // Reset the subcategory select when a new category is selected
            subcategorySelect.querySelector(".selected-option").textContent = "Select a subcategory";
            subcategorySelect.querySelector(".options").style.display = "none";
            subcategorySelect.querySelector(".arrow").style.transform = "rotate(0deg)";

            // Update subcategory options based on the selected category
            clearSubcategoryOptions();
            const subcategories = getSubcategories(selectedCategory);
            subcategories.forEach((subcategory) => {
                addSubcategoryOption(subcategory);
            });

            subcategorySelect.style.display = "block";
        });
    });

    subcategorySelect.addEventListener("click", (event) => {
        event.stopPropagation();
        subcategorySelect.querySelector(".options").style.display =
            subcategorySelect.querySelector(".options").style.display === "none" ? "block" : "none";
        subcategorySelect.querySelector(".arrow").style.transform =
            subcategorySelect.querySelector(".options").style.display === "none" ? "rotate(0deg)" : "rotate(180deg)";
    });

    document.addEventListener("click", (event) => {
        if (!categorySelect.contains(event.target)) {
            categorySelect.querySelector(".options").style.display = "none";
            categorySelect.querySelector(".arrow").style.transform = "rotate(0deg)";
        }

        if (!subcategorySelect.contains(event.target)) {
            subcategorySelect.querySelector(".options").style.display = "none";
            subcategorySelect.querySelector(".arrow").style.transform = "rotate(0deg)";
        }
    });


    subcategoryOptions.addEventListener("click", (event) => {
        event.stopPropagation();
        subcategorySelect.querySelector(".options").style.display = "none";
        subcategorySelect.querySelector(".arrow").style.transform = "rotate(0deg)";

        // Display the custom-select container when a subcategory is selected
        const customSelectContainer = document.getElementById("custom-select-container");
        customSelectContainer.style.display = "block";

        // Add event listeners for each custom-select inside the container
        const customSelects = customSelectContainer.querySelectorAll(".custom-select");
        customSelects.forEach((customSelect) => {
            const selectBox = customSelect.querySelector(".select-box");
            const options = customSelect.querySelector(".options");
            const arrow = customSelect.querySelector(".arrow");

            selectBox.addEventListener("click", () => {
                options.style.display = options.style.display === "none" ? "block" : "none";
                arrow.style.transform = options.style.display === "none" ? "rotate(0deg)" : "rotate(180deg)";
            });

            const optionItems = customSelect.querySelectorAll(".option");
            optionItems.forEach((item) => {
                item.addEventListener("click", () => {
                    selectBox.querySelector(".selected-option").textContent = item.textContent;
                    options.style.display = "none";
                    arrow.style.transform = "rotate(0deg)";
                });
            });
        });
    });

    function clearSubcategoryOptions() {
        subcategoryOptions.innerHTML = "";
    }

    function addSubcategoryOption(subcategory) {
        const option = document.createElement("li");
        option.classList.add("option");
        option.textContent = subcategory;
        option.addEventListener("click", () => {
            subcategorySelect.querySelector(".selected-option").textContent = subcategory;
            subcategorySelect.querySelector(".options").style.display = "none";
            subcategorySelect.querySelector(".arrow").style.transform = "rotate(0deg)";
        });
        subcategoryOptions.appendChild(option);
    }

    function getSubcategories(category) {
        const subcategories = {
            cars: ["Sedan", "SUV", "Sports Car", "Truck"],
            planes: ["Commercial", "Private", "Military"],
            boats: ["Sailboat", "Yacht", "Fishing Boat", "Speedboat", "Canoe"],
        };

        return subcategories[category] || [];
    }

    var openPopupFilterButton = document.getElementById("openPopupFilterButton");
    var closePopupFilterButton = document.getElementById("closePopupFilterButton");
    var popup_filter = document.getElementById("popup_filter");

    openPopupFilterButton.addEventListener("click", function() {
        popup_filter.style.display = "block";
    });

    closePopupFilterButton.addEventListener("click", function() {
        popup_filter.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target == popup_filter) {
            popup_filter.style.display = "none";
        }
    });




</script>