<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
<style>
    <?php include './style/b2b/mainpage.css' ?>
</style>

<div class="b2b__main__page">
    <div class="b2b__main__wrapper">
        <!----->
        <div class="b2b__main__categories">
            <div class="b2b__categories__name">
                <p>Категории</p>
            </div>
            <div class="b2b__categories__list">
                <a href="#">
                    <p>Aktivləşdirilmiş kömür</p>
                </a>
                <a href="#">
                    <p>Категория</p>
                </a>
                <a href="#">
                    <p>Сьолы сьулья</p>
                </a>
                <a href="#">
                    <p>Отопление / Вентиляция</p>
                </a>
                <a href="#">
                    <p>Kor olmaq üçün su</p>
                </a>
                <a href="#">
                    <p>GöranBoy next door</p>
                </a>
            </div>
        </div>

        <!------------->
        <div class="b2b__main__search">
            <div class="main__search__name">
                <a class="active__link" href="#">
                    <p>Поиск</p>
                </a>
            </div>

    <!---//!---FILTR MOBILE---->
    <!---//!---FILTR MOBILE---->
    <!---//!---FILTR MOBILE---->
    <div class="main__filtr__mobile">

        <div class="main__filtr__mobile__wrapper">
            <button id="openPopupFilterButton">
                <img src="./imgs/filtr_logo.png" alt="">
            </button>


            <div class="main__filtr__mobile__swiper">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="main__filtr__mobile__element">
                                <a href="#">
                                    <p>Стены</p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main__filtr__mobile__element">
                                <a href="#">
                                    <p>Потолок</p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main__filtr__mobile__element">
                                <a href="#">
                                    <p>Сантехника/Электрика</p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main__filtr__mobile__element">
                                <a href="#">
                                    <p>Сантехника/Электрика</p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main__filtr__mobile__element">
                                <a href="#">
                                    <p>Сантехника/Электрика</p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main__filtr__mobile__element">
                                <a href="#">
                                    <p>Сантехника/Электрика</p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main__filtr__mobile__element">
                                <a href="#">
                                    <p>Сантехника/Электрика</p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main__filtr__mobile__element">
                                <a href="#">
                                    <p>Сантехника/Электрика</p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main__filtr__mobile__element">
                                <a href="#">
                                    <p>Сантехника/Электрика</p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main__filtr__mobile__element">
                                <a href="#">
                                    <p>Сантехника/Электрика</p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>







        </div>



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


            <div class="main__search__wrapper">
                <div class="main__search__element">
                    <div class="search__element__logo">
                        <img src="./imgs/6.png" alt="">
                    </div>
                    <div class="search__element__desc">
                        <div class="search__element__desc__name">
                            <p>Nazvaniye Kompanii asdzx zxıəşəqüö 1</p>
                        </div>
                        <div class="search__element__desc__location">
                            <div>
                                <p>Страна: </p>
                                <p>Россия</p>
                            </div>
                            <div>
                                <p>Город: </p>
                                <p>Нижневартовск</p>
                            </div>
                        </div>
                        <div class="search__element__desc__tags">
                            <a href="#">
                                <p>#Ремонт</p>
                            </a>
                            <a href="#">
                                <p>#пол</p>
                            </a>
                            <a href="#">
                                <p>#ведро</p>
                            </a>
                            <a href="#">
                                <p>#Ремонт</p>
                            </a>
                            <a href="#">
                                <p>#Машина</p>
                            </a>
                            <a href="#">
                                <p>#Сталкер</p>
                            </a>
                        </div>
                    </div>
                    <div class="search__element__info">
                        <a href="./b2b.php?page=company">
                            <p>Подробнее</p>
                        </a>
                    </div>
                </div>








                <div class="main__search__element">
                    <div class="search__element__logo">
                        <img src="./imgs/6.png" alt="">
                    </div>
                    <div class="search__element__desc">
                        <div class="search__element__desc__name">
                            <p>Nazvaniye Kompanii asdzx zxıəşəqüö çş lı</p>
                        </div>
                        <div class="search__element__desc__location">
                            <div>
                                <p>Страна: </p>
                                <p>Россия</p>
                            </div>
                            <div>
                                <p>Город: </p>
                                <p>Нижневартовск</p>
                            </div>
                        </div>
                        <div class="search__element__desc__tags">
                            <a href="#">
                                <p>#Ремонт</p>
                            </a>
                            <a href="#">
                                <p>#пол</p>
                            </a>
                            <a href="#">
                                <p>#ведро</p>
                            </a>
                            <a href="#">
                                <p>#Ремонт</p>
                            </a>
                            <a href="#">
                                <p>#Машина</p>
                            </a>
                            <a href="#">
                                <p>#Сталкер</p>
                            </a>
                        </div>
                    </div>
                    <div class="search__element__info">
                        <a href="./b2b.php?page=company">
                            <p>Подробнее</p>
                        </a>
                    </div>
                </div>









                <div class="main__search__element">
                    <div class="search__element__logo">
                        <img src="./imgs/6.png" alt="">
                    </div>
                    <div class="search__element__desc">
                        <div class="search__element__desc__name">
                            <p>Nazvaniye Kompanii asdzx zxıəşəqüö çş lı</p>
                        </div>
                        <div class="search__element__desc__location">
                            <div>
                                <p>Страна: </p>
                                <p>Россия</p>
                            </div>
                            <div>
                                <p>Город: </p>
                                <p>Нижневартовск</p>
                            </div>
                        </div>
                        <div class="search__element__desc__tags">
                            <a href="#">
                                <p>#Ремонт</p>
                            </a>
                            <a href="#">
                                <p>#пол</p>
                            </a>
                            <a href="#">
                                <p>#ведро</p>
                            </a>
                            <a href="#">
                                <p>#Ремонт</p>
                            </a>
                            <a href="#">
                                <p>#Машина</p>
                            </a>
                            <a href="#">
                                <p>#Сталкер</p>
                            </a>
                        </div>
                    </div>
                    <div class="search__element__info">
                        <a href="./b2b.php?page=company">
                            <p>Подробнее</p>
                        </a>
                    </div>
                </div>





                <div class="main__search__element">
                    <div class="search__element__logo">
                        <img src="./imgs/6.png" alt="">
                    </div>
                    <div class="search__element__desc">
                        <div class="search__element__desc__name">
                            <p>Nazvaniye Kompanii asdzx zxıəşəqüö çş lı</p>
                        </div>
                        <div class="search__element__desc__location">
                            <div>
                                <p>Страна: </p>
                                <p>Россия</p>
                            </div>
                            <div>
                                <p>Город: </p>
                                <p>Нижневартовск</p>
                            </div>
                        </div>
                        <div class="search__element__desc__tags">
                            <a href="#">
                                <p>#Ремонт</p>
                            </a>
                            <a href="#">
                                <p>#пол</p>
                            </a>
                            <a href="#">
                                <p>#ведро</p>
                            </a>
                            <a href="#">
                                <p>#Ремонт</p>
                            </a>
                            <a href="#">
                                <p>#Машина</p>
                            </a>
                            <a href="#">
                                <p>#Сталкер</p>
                            </a>
                        </div>
                    </div>
                    <div class="search__element__info">
                        <a href="./b2b.php?page=company">
                            <p>Подробнее</p>
                        </a>
                    </div>
                </div>







                <div class="main__search__element">
                    <div class="search__element__logo">
                        <img src="./imgs/6.png" alt="">
                    </div>
                    <div class="search__element__desc">
                        <div class="search__element__desc__name">
                            <p>Nazvaniye Kompanii asdzx zxıəşəqüö çş lı</p>
                        </div>
                        <div class="search__element__desc__location">
                            <div>
                                <p>Страна: </p>
                                <p>Россия</p>
                            </div>
                            <div>
                                <p>Город: </p>
                                <p>Нижневартовск</p>
                            </div>
                        </div>
                        <div class="search__element__desc__tags">
                            <a href="#">
                                <p>#Ремонт</p>
                            </a>
                            <a href="#">
                                <p>#пол</p>
                            </a>
                            <a href="#">
                                <p>#ведро</p>
                            </a>
                            <a href="#">
                                <p>#Ремонт</p>
                            </a>
                            <a href="#">
                                <p>#Машина</p>
                            </a>
                            <a href="#">
                                <p>#Сталкер</p>
                            </a>
                        </div>
                    </div>
                    <div class="search__element__info">
                        <a href="./b2b.php?page=company">
                            <p>Подробнее</p>
                        </a>
                    </div>
                </div>








                <div class="main__search__element">
                    <div class="search__element__logo">
                        <img src="./imgs/6.png" alt="">
                    </div>
                    <div class="search__element__desc">
                        <div class="search__element__desc__name">
                            <p>Nazvaniye Kompanii asdzx zxıəşəqüö çş lı</p>
                        </div>
                        <div class="search__element__desc__location">
                            <div>
                                <p>Страна: </p>
                                <p>Россия</p>
                            </div>
                            <div>
                                <p>Город: </p>
                                <p>Нижневартовск</p>
                            </div>
                        </div>
                        <div class="search__element__desc__tags">
                            <a href="#">
                                <p>#Ремонт</p>
                            </a>
                            <a href="#">
                                <p>#пол</p>
                            </a>
                            <a href="#">
                                <p>#ведро</p>
                            </a>
                            <a href="#">
                                <p>#Ремонт</p>
                            </a>
                            <a href="#">
                                <p>#Машина</p>
                            </a>
                            <a href="#">
                                <p>#Сталкер</p>
                            </a>
                        </div>
                    </div>
                    <div class="search__element__info">
                        <a href="./b2b.php?page=company">
                            <p>Подробнее</p>
                        </a>
                    </div>
                </div>







                <div class="main__search__element">
                    <div class="search__element__logo">
                        <img src="./imgs/6.png" alt="">
                    </div>
                    <div class="search__element__desc">
                        <div class="search__element__desc__name">
                            <p>Nazvaniye Kompanii asdzx zxıəşəqüö çş lı</p>
                        </div>
                        <div class="search__element__desc__location">
                            <div>
                                <p>Страна: </p>
                                <p>Россия</p>
                            </div>
                            <div>
                                <p>Город: </p>
                                <p>Нижневартовск</p>
                            </div>
                        </div>
                        <div class="search__element__desc__tags">
                            <a href="#">
                                <p>#Ремонт</p>
                            </a>
                            <a href="#">
                                <p>#пол</p>
                            </a>
                            <a href="#">
                                <p>#ведро</p>
                            </a>
                            <a href="#">
                                <p>#Ремонт</p>
                            </a>
                            <a href="#">
                                <p>#Машина</p>
                            </a>
                            <a href="#">
                                <p>#Сталкер</p>
                            </a>
                        </div>
                    </div>
                    <div class="search__element__info">
                        <a href="./b2b.php?page=company">
                            <p>Подробнее</p>
                        </a>
                    </div>
                </div>





            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> 
<script>
    $(document).ready(function() {
        // Add a click event handler for all custom-dropdowns
        $(".custom-dropdown").each(function() {
            const $dropdown = $(this);
            const $input = $dropdown.find(".dropdown-input");
            const $list = $dropdown.find(".dropdown-list");

            $input.click(function() {
                $dropdown.toggleClass("open"); // Add or remove the 'open' class
                $list.toggle();
            });

            $list.find("li").click(function() {
                const selectedCity = $(this).attr("data-value");
                $input.val(selectedCity);
                $input.prop("readonly", true);
                $list.hide();
                $dropdown.removeClass("open"); // Remove 'open' class when the list is closed
            });

            // Close the dropdown when clicking outside
            $(document).click(function(event) {
                if (!$(event.target).closest(".custom-dropdown").is($dropdown)) {
                    $input.prop("readonly", true);
                    $list.hide();
                    $dropdown.removeClass("open"); // Remove 'open' class when the list is closed
                }
            });
        });
    });




    /***/ // !  ****FILTER JS CODE*************** */
    /***/ // !  ****FILTER JS CODE*************** */
    /***/ // !  ****FILTER JS CODE*************** */

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



    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 10,
        freeMode: true
    });




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