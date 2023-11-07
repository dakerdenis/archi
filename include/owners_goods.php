<style>
    <?php include './style/goods.css' ?>
    html {}
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
        <a href="./index.php?page=new_item">
            <img src="./imgs/plus_1.jpg" alt="">
        </a>
        <button id="toggleButtonDelete">
            <img src="./imgs/delete.png" alt="">
        </button>
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


                    <select id="categories" name="categories">
        <option value="" selected disabled>Select Category</option>
        <option value="cars">Cars</option>
        <option value="planes">Planes</option>
        <option value="helicopters">Helicopters</option>
    </select>

    <div id="subcategories">
        <select id="subcategories-select" name="subcategories">
            <option value="" selected disabled>Select Subcategory</option>
        </select>
    </div>

    <div id="properties">
        <select id="properties-select" name="properties">
            <option value="" selected disabled>Select Property</option>
        </select>
    </div>



    <div id="property-container">
    <!-- Individual property selects will be added dynamically here -->
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




    document.addEventListener("DOMContentLoaded", function() {
    const categoriesSelect = document.getElementById("categories");
    const subcategoriesSelect = document.getElementById("subcategories-select");
    const propertyContainer = document.getElementById("property-container");

    // Define the data structure
    const data = {
        cars: {
            subcategories: ["SUV", "Crossover"],
            properties: {
                SUV: {
                    Color: ["Red", "Blue", "Pink"],
                    Price: ["Low", "Average", "High"],
                    Weight: ["2", "2.2", "3"],
                },
                Crossover: {
                    Color: ["Red", "Blue", "Pink"],
                    Price: ["Low", "Average", "High"],
                    Weight: ["2", "2.2", "3"],
                    Wheels: ["2", "3", "4"],
                },
            },
        },
        planes: {
            subcategories: ["Military", "Average"],
            properties: {
                Military: {
                    Color: ["Red", "Blue", "Pink"],
                    Price: ["Low", "Average", "High"],
                    Weight: ["2", "2.2", "3"],
                },
                Average: {
                    Color: ["Red", "Blue", "Pink"],
                    Price: ["Low", "Average", "High"],
                    Wingspan: ["2", "2.2", "3"],
                    Wheels: ["2", "3", "4"],
                },
            },
        },
        helicopters: {
            subcategories: ["Homemade", "Stalkers"],
            properties: {
                Homemade: {
                    Color: ["Red", "Blue", "Pink"],
                    Price: ["Low", "Average", "High"],
                    Weight: ["2", "2.2", "3"],
                },
                Stalkers: {
                    Color: ["Red", "Blue", "Pink"],
                    Price: ["Low", "Average", "High"],
                    Wingspan: ["2", "2.2", "3"],
                    Wheels: ["2", "3", "4"],
                },
            },
        },
    };

    categoriesSelect.addEventListener("change", function() {
        subcategoriesSelect.innerHTML = '<option value="" selected disabled>Select Subcategory</option>';
        propertyContainer.innerHTML = ""; // Clear existing properties

        const selectedCategory = categoriesSelect.value;

        if (selectedCategory) {
            const subcategories = data[selectedCategory].subcategories;
            subcategories.forEach((subcategory) => {
                const option = document.createElement("option");
                option.value = subcategory;
                option.textContent = subcategory;
                subcategoriesSelect.appendChild(option);
            });
        }
    });

    subcategoriesSelect.addEventListener("change", function() {
        propertyContainer.innerHTML = ""; // Clear existing properties

        const selectedCategory = categoriesSelect.value;
        const selectedSubcategory = subcategoriesSelect.value;

        if (selectedCategory && selectedSubcategory) {
            const properties = data[selectedCategory].properties[selectedSubcategory];
            properties.forEach((options, propertyName) => {
                const propertySelect = document.createElement("select");
                propertySelect.name = propertyName;
                propertySelect.innerHTML = '<option value="" selected disabled>Select ' + propertyName + '</option>';
                options.forEach((option) => {
                    const optionElement = document.createElement("option");
                    optionElement.value = option;
                    optionElement.textContent = option;
                    propertySelect.appendChild(optionElement);
                });
                propertyContainer.appendChild(propertySelect);
            });
        }
    });

    // Hide subcategories and property selects initially
    subcategoriesSelect.style.display = "none";
    propertyContainer.style.display = "none";
});


</script>