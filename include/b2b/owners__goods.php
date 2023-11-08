<style>
    <?php include './style/goods.css' ?>
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
        <!---//?---FILTR---->
        <div class="goods__page__filtr">
            фыыфа



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
                <!------------> <!------------>
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
                <!------------> <!------------>
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
                <!------------> <!------------>
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
                <!------------> <!------------>
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
                <!------------> <!------------>














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
    document.addEventListener('click', function(event) {
        const dropdown = document.querySelector('.dropdown3');
        if (!dropdown.contains(event.target)) {
            document.getElementById("dropdownOptions3").style.display = "none";
            document.querySelector('.dropdown-arrow3').style.transform = 'rotate(0deg)';
        }
    });










    const openPopupButtons = document.querySelectorAll(".openPopup");
    const popupOverlay = document.getElementById("popupOverlay");
    const closePopupButton = document.getElementById("closePopup");
    const blockIdInput = document.getElementById("blockIdInput");

    openPopupButtons.forEach(button => {
        button.addEventListener("click", function() {
            const block = this.closest(".delete__element_");
            const blockId = block.getAttribute("data-id");
            blockIdInput.value = blockId;
            popupOverlay.style.display = "block";
        });
    });

    closePopupButton.addEventListener("click", function() {
        popupOverlay.style.display = "none";
    });

    popupOverlay.addEventListener("click", function(event) {
        if (event.target === popupOverlay) {
            popupOverlay.style.display = "none";
        }
    });

    document.addEventListener("keydown", function(event) {
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
</script>