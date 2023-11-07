<style>
    <?php include './style/goods.css' ?>
</style>
<div class="goods__page__categories">
    <div class="goods__page__categories__container">
        <a href="#" class="element">
            <p>Стены</p>
        </a>
        <a href="#" class="element">
            <p>Пол</p>
        </a>
        <a href="#" class="element element__active">
            <p>Потолок</p>
        </a>
        <a href="#" class="element">
            <p>Сантехника\Электрика</p>
        </a>
        <a href="#" class="element">
            <p>Отопление\вентиляция</p>
        </a>
        <a href="#" class="element">
            <p>Двери\Окна</p>
        </a>
        <a href="#" class="element">
            <p>Крыша\Фасад</p>
        </a>
        <a href="#" class="element">
            <p>Мебель</p>
        </a>
        <a href="#" class="element">
            <p>Строительные материалы</p>
        </a>
        <a href="#" class="element">
            <p>Ландшафт</p>
        </a>
    </div>

</div>

<div class="goods__page__container">
    <div class="goods__search__block">
        <a href="#">
            <p>Поиск</p>
        </a>
        <span>></span>
        <p>Название категории</p>
    </div>

    <!---//!---FILTR MOBILE---->
    <!---//!---FILTR MOBILE---->
    <!---//!---FILTR MOBILE---->
    <div class="main__filtr__mobile">
        <button id="openPopupFilterButton">Open Popup AAAAAAAa</button>




        <div id="popup_filter" class="popup_filter">
        <div class="popup_filter-content">
            <span class="close_filter" id="closePopupFilterButton">&times;</span>
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
            </div>
        </div>
    </div>
    </div>


    <!---//!---FILTR MOBILE---->
    <!---//!---FILTR MOBILE---->
    <!---//!---FILTR MOBILE---->

    <div class="goods__page__wrapper">

        <!---//?---FILTR---->
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
                <a href="./index.php?page=item" class="goods__page__element">
                    <div class="page__element__image">
                        <img src="./imgs/1.jpg" alt="">
                    </div>
                    <div class="page__element__content">
                        <div class="page__element__name">
                            <p>Товар китай покемон fasfasfasf</p>
                        </div>
                        <div class="page__element__size">
                            <p>210 x 300 x 69</p>
                        </div>
                        <div class="page__element__material">
                            <p>материал</p>
                        </div>
                    </div>
                </a>
                <!------------>
                <!------------>
                <a href="./index.php?page=item" class="goods__page__element">
                    <div class="page__element__image">
                        <img src="./imgs/1.jpg" alt="">
                    </div>
                    <div class="page__element__content">
                        <div class="page__element__name">
                            <p>Товар китай покемон fasfasfasf</p>
                        </div>
                        <div class="page__element__size">
                            <p>210 x 300 x 69</p>
                        </div>
                        <div class="page__element__material">
                            <p>материал</p>
                        </div>
                    </div>
                </a>
                <!------------>
                <!------------>
                <a href="./index.php?page=item" class="goods__page__element">
                    <div class="page__element__image">
                        <img src="./imgs/1.jpg" alt="">
                    </div>
                    <div class="page__element__content">
                        <div class="page__element__name">
                            <p>Товар китай покемон fasfasfasf</p>
                        </div>
                        <div class="page__element__size">
                            <p>210 x 300 x 69</p>
                        </div>
                        <div class="page__element__material">
                            <p>материал</p>
                        </div>
                    </div>
                </a>
                <!------------>
                <!------------>
                <a href="./index.php?page=item" class="goods__page__element">
                    <div class="page__element__image">
                        <img src="./imgs/1.jpg" alt="">
                    </div>
                    <div class="page__element__content">
                        <div class="page__element__name">
                            <p>Товар китай покемон fasfasfasf</p>
                        </div>
                        <div class="page__element__size">
                            <p>210 x 300 x 69</p>
                        </div>
                        <div class="page__element__material">
                            <p>материал</p>
                        </div>
                    </div>
                </a>
                <!------------>
                <!------------>
                <a href="./index.php?page=item" class="goods__page__element">
                    <div class="page__element__image">
                        <img src="./imgs/1.jpg" alt="">
                    </div>
                    <div class="page__element__content">
                        <div class="page__element__name">
                            <p>Товар китай покемон fasfasfasf</p>
                        </div>
                        <div class="page__element__size">
                            <p>210 x 300 x 69</p>
                        </div>
                        <div class="page__element__material">
                            <p>материал</p>
                        </div>
                    </div>
                </a>
                <!------------>
                <!------------>
                <a href="./index.php?page=item" class="goods__page__element">
                    <div class="page__element__image">
                        <img src="./imgs/1.jpg" alt="">
                    </div>
                    <div class="page__element__content">
                        <div class="page__element__name">
                            <p>Товар китай покемон fasfasfasf</p>
                        </div>
                        <div class="page__element__size">
                            <p>210 x 300 x 69</p>
                        </div>
                        <div class="page__element__material">
                            <p>материал</p>
                        </div>
                    </div>
                </a>
                <!------------>
                <!------------>
                <a href="./index.php?page=item" class="goods__page__element">
                    <div class="page__element__image">
                        <img src="./imgs/1.jpg" alt="">
                    </div>
                    <div class="page__element__content">
                        <div class="page__element__name">
                            <p>Товар китай покемон fasfasfasf</p>
                        </div>
                        <div class="page__element__size">
                            <p>210 x 300 x 69</p>
                        </div>
                        <div class="page__element__material">
                            <p>материал</p>
                        </div>
                    </div>
                </a>
                <!------------>

            </div>
        </div>

    </div>
</div>

<script>
    function toggleOptions() {
        const options = document.getElementById("dropdownOptions3");
        const arrow = document.querySelector('.dropdown-arrow3');
        if (options.style.display === "block") {
            options.style.display = "none";
            arrow.style.transform = 'rotate(0deg)';
        } else {
            options.style.display = "block";
            arrow.style.transform = 'rotate(180deg)';
        }
    }

    function toggleSelectedOption(checkbox) {
        const selectedOptions = document.getElementById("selectedOptions3");
        if (checkbox.checked) {
            const option = document.createElement("div");
            option.className = "selected-option3";
            option.textContent = checkbox.value;
            selectedOptions.appendChild(option);
        } else {
            const options = selectedOptions.getElementsByClassName("selected-option3");
            for (let i = 0; i < options.length; i++) {
                if (options[i].textContent === checkbox.value) {
                    selectedOptions.removeChild(options[i]);
                    break;
                }
            }
        }
    }

    // Close the dropdown when clicking anywhere else on the page
    document.addEventListener('click', function (event) {
        const dropdown = document.querySelector('.dropdown3');
        if (!dropdown.contains(event.target)) {
            document.getElementById("dropdownOptions3").style.display = "none";
            document.querySelector('.dropdown-arrow3').style.transform = 'rotate(0deg)';
        }
    });


















/***/// !  ****FILTER JS CODE*************** */
/***/// !  ****FILTER JS CODE*************** */
/***/// !  ****FILTER JS CODE*************** */

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