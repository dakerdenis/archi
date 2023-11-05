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
        <!---//!---FILTR---->
        <!---//!---FILTR---->
        <!---//!---FILTR---->
        <div class="goods__page__filtr">
            <div class="main__filter__container">
                <div class="main__filter__name">
                    <p>Фильтр</p>
                </div>

                <div class="main__filter__description">
                    <p>Подкатегория</p>
                </div>

                <div class="main__filter__dropdown__container">
                    <div class="dropdown__main">
                        <input type="text" id="dropdown__input" placeholder="Select an option" readonly>
                        <span class="dropdown__arrow">&#9660;</span>
                        <ul class="dropdown__options">
                            <li>Option 1</li>
                            <li>Option 2</li>
                            <li>Option 3</li>
                        </ul>
                    </div>
                </div>
                
                <div class="additional__container">
                        <div class="additional__container__block">
                            
                        </div>    


                </div>
            
                <div class="main__filter__search">
                    <button>Применить</button>
                </div>
            </div>
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






    // JavaScript to toggle the dropdown and select an option
    const dropdown = document.querySelector('.dropdown__main');
    const inputField = dropdown.querySelector('#dropdown__input');
    const optionsList = dropdown.querySelector('.dropdown__options');

    dropdown.addEventListener('click', (e) => {
        e.stopPropagation();
        dropdown.classList.toggle('open');
        optionsList.style.display = optionsList.style.display === 'block' ? 'none' : 'block';
    });

    optionsList.addEventListener('click', (e) => {
        if (e.target.tagName === 'LI') {
            inputField.value = e.target.textContent;
            dropdown.classList.remove('open');
            optionsList.style.display = 'none';
        }
    });

    document.addEventListener('click', (e) => {
        if (!dropdown.contains(e.target)) {
            dropdown.classList.remove('open');
            optionsList.style.display = 'none';
        }
    });


</script>