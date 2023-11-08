<style>
    <?php include './style/my_article.css' ?>
</style>

<div class="my__article__container">
    <div class="my__article__name">
        <p>Мои статьи</p>
    </div>
    <div class="my__article__search__add">
        <div class="my__article__search">
            <img src="./imgs/search.png" alt="">
            <input type="text" placeholder="Введите название статьи...">
        </div>
        <div class="my__article__addnew">
            <a href="./index.php?page=new_article">
                <p>+ Добавить Статью</p>
            </a>
        </div>
    </div>

    <div class="my__article__list">
        <div class="my__article__list__wrapper">


            <!-------------------->
            <div class="my__article__element">
                <div class="my__article__element__name">
                    <p class="truncate-me">Название статьи по продаже камней</p>
                </div>
                <div class="my__article__edit-delete">
                    <div class="my__article__element__edit">
                        <a href="./index.php?page=edit_article">
                            <img src="./imgs/edit.png" alt="">
                        </a>
                    </div>
                    <div class="my__article__element__delete delete__element_" data-id="1">
                        <p class="openPopup" id="openPopup">
                            <img src="./imgs/delete.png" alt="">
                        </p>
                    </div>
                </div>
            </div>
            <!-------------------->
                        <!-------------------->
                        <div class="my__article__element">
                <div class="my__article__element__name">
                    <p class="truncate-me">Название статьи по продаже камней</p>
                </div>
                <div class="my__article__edit-delete">
                    <div class="my__article__element__edit">
                        <a href="./index.php?page=edit_article">
                            <img src="./imgs/edit.png" alt="">
                        </a>
                    </div>
                    <div class="my__article__element__delete delete__element_" data-id="2">
                        <p class="openPopup" id="openPopup">
                            <img src="./imgs/delete.png" alt="">
                        </p>
                    </div>
                </div>
            </div>
            <!-------------------->
                        <!-------------------->
                        <div class="my__article__element">
                <div class="my__article__element__name">
                    <p class="truncate-me">Название статьи по продаже камней</p>
                </div>
                <div class="my__article__edit-delete">
                    <div class="my__article__element__edit">
                        <a href="./index.php?page=edit_article">
                            <img src="./imgs/edit.png" alt="">
                        </a>
                    </div>
                    <div class="my__article__element__delete delete__element_" data-id="3">
                        <p class="openPopup" id="openPopup">
                            <img src="./imgs/delete.png" alt="">
                        </p>
                    </div>
                </div>
            </div>
            <!-------------------->
                        <!-------------------->
                        <div class="my__article__element">
                <div class="my__article__element__name">
                    <p class="truncate-me">Название статьи по продаже камней</p>
                </div>
                <div class="my__article__edit-delete">
                    <div class="my__article__element__edit">
                        <a href="./index.php?page=edit_article">
                            <img src="./imgs/edit.png" alt="">
                        </a>
                    </div>
                    <div class="my__article__element__delete delete__element_" data-id="4">
                        <p class="openPopup" id="openPopup">
                            <img src="./imgs/delete.png" alt="">
                        </p>
                    </div>
                </div>
            </div>
            <!-------------------->




        </div>

        <div class="my__article__list__show-more">
            <button>
                <p>Показать ещё</p>
            </button>
        </div>
    </div>
</div>


<div class="popup-overlay" id="popupOverlay">
    <form class="popup popup__delete__element" id="popup">
        <span class="close" id="closePopup">X</span>
        <div class="popup__content__delete">
            <div class="popup__eleement__delete__name">
                <p>Удалить статью?</p>
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
    document.addEventListener("DOMContentLoaded", function() {
        const elements = document.querySelectorAll(".truncate-me");
        const maxLength = 25; // Set your desired maximum length
        const maxWidth = 768; // Set the maximum width for truncation

        function truncateText(element) {
            if (window.innerWidth <= maxWidth && element) {
                const content = element.textContent;

                if (content.length > maxLength) {
                    const truncatedContent = content.slice(0, maxLength) + "...";
                    element.textContent = truncatedContent;
                }
            }
        }

        // Initial truncation check on page load for all elements
        elements.forEach(truncateText);

        // Recheck and truncate when the window is resized for all elements
        window.addEventListener("resize", function() {
            elements.forEach(truncateText);
        });
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