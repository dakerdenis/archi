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
            <a href="#">
                <p>+ Добавить Статью</p>
            </a>
        </div>
    </div>

    <div class="my__article__list">
        <div class="my__article__list__wrapper">
            <div class="my__article__element">
                <div class="my__article__element__name">
                    <p class="truncate-me">Название статьи по продаже камней</p>
                </div>
                <div class="my__article__edit-delete">
                    <div class="my__article__element__edit">
                        <a href="#">
                            <img src="./imgs/edit.png" alt="">
                        </a>
                    </div>
                    <div class="my__article__element__delete">
                        <a href="#">
                            <img src="./imgs/delete.png" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="my__article__element">
                <div class="my__article__element__name">
                    <p  class="truncate-me">Название статьи по продаже камней</p>
                </div>
                <div class="my__article__edit-delete">
                    <div class="my__article__element__edit">
                        <a href="#">
                            <img src="./imgs/edit.png" alt="">
                        </a>
                    </div>
                    <div class="my__article__element__delete">
                        <a href="#">
                            <img src="./imgs/delete.png" alt="">
                        </a>
                    </div>
                </div>
            </div>


            <div class="my__article__element">
                <div class="my__article__element__name">
                    <p  class="truncate-me">Название статьи по продаже камней</p>
                </div>
                <div class="my__article__edit-delete">
                    <div class="my__article__element__edit">
                        <a href="#">
                            <img src="./imgs/edit.png" alt="">
                        </a>
                    </div>
                    <div class="my__article__element__delete">
                        <a href="#">
                            <img src="./imgs/delete.png" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="my__article__element">
                <div class="my__article__element__name">
                    <p  class="truncate-me">Название статьи по продаже камней</p>
                </div>
                <div class="my__article__edit-delete">
                    <div class="my__article__element__edit">
                        <a href="#">
                            <img src="./imgs/edit.png" alt="">
                        </a>
                    </div>
                    <div class="my__article__element__delete">
                        <a href="#">
                            <img src="./imgs/delete.png" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="my__article__element">
                <div class="my__article__element__name">
                    <p class="truncate-me">Название статьи по продаже камней</p>
                </div>
                <div class="my__article__edit-delete">
                    <div class="my__article__element__edit">
                        <a href="#">
                            <img src="./imgs/edit.png" alt="">
                        </a>
                    </div>
                    <div class="my__article__element__delete">
                        <a href="#">
                            <img src="./imgs/delete.png" alt="">
                        </a>
                    </div>
                </div>
            </div>


        </div>

        <div class="my__article__list__show-more">
            <button>
                <p>Показать ещё</p>
            </button>
        </div>
    </div>
</div>


<script>
document.addEventListener("DOMContentLoaded", function () {
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
    window.addEventListener("resize", function () {
        elements.forEach(truncateText);
    });
});

</script>