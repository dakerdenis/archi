<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<style>
    <?php include './style/article.css' ?>
    <?php include './style/new_article.css' ?>
</style>


<div class="article__main__page">
    <!---//--85.5%--->
    <div class="article__wrapper">
        <!--//?--ARTICLE CONTAINER -->
        <div class="article__container">
            <div class="new__article__desc">
                <p>Новая статья</p>
            </div>
            <form action="#" class="new__article__form">
                <div class="new__article__container">
                    <!---NAME------>
                    <div class="new__article__name">
                        <input type="text" placeholder="Введите название статьи...">
                    </div>

                    <div class="new___article__tags">
                        <div class="new__article__select__tags">
                            <div class="dropdown3">
                                <div class="dropdown-select3" onclick="toggleOptions()">
                                    <p>Добавьте теги</p>
                                    <span class="dropdown-arrow3">
                                        <img src="./imgs/arrow_new_article.svg" alt="">
                                    </span>
                                </div>
                                <div class="dropdown-options3" id="dropdownOptions3">

                                    <div class="dropdown-option3">
                                        <label class="container">Стены
                                            <input type="checkbox" value="#Тег сичси1" onclick="toggleSelectedOption(this)" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>



                                    <div class="dropdown-option3">
                                        <label class="container">Пол
                                            <input type="checkbox" value="#Тег 1исч" onclick="toggleSelectedOption(this)" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    
                                    <div class="dropdown-option3">
                                        <label class="container">Потолок
                                            <input type="checkbox" value="#Тег 132" onclick="toggleSelectedOption(this)" ">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    
                                    <div class="dropdown-option3">
                                        <label class="container">Веранда
                                            <input type="checkbox" value="#Тег 1фыв" onclick="toggleSelectedOption(this)" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="dropdown-option3">
                                        <label class="container">Крыша
                                            <input type="checkbox" value="#Тег 1фы" onclick="toggleSelectedOption(this)" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="dropdown-option3">
                                        <label class="container">Сантехника/Канализация
                                            <input type="checkbox" value="#Тег кткт1" onclick="toggleSelectedOption(this)" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="dropdown-option3">
                                        <label class="container">Двери/Окна
                                            <input type="checkbox" value="#Тег кнте1" onclick="toggleSelectedOption(this)" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <div class="dropdown-option3">
                                        <label class="container">Двери/ФВфыв
                                            <input type="checkbox" value="#Тег ФАФпт" onclick="toggleSelectedOption(this)" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>


                                    <div class="dropdown-option3">
                                        <label class="container">иавиав/АФфФ
                                            <input type="checkbox" value="#Тег ФАФпт" onclick="toggleSelectedOption(this)" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>


                                    <!-- Add more options here -->
                                </div>
                            </div>
                        </div>

                        <div class="new__article__selected__options">
                            <div class="selected-options3" id="selectedOptions3"></div>
                        </div>

                    </div>

                    <!------------->
                    <div class="new__article__content">
                        тут происхоит добавление контента
                    </div>

                    <div class="additional__block__articles__mobile">
                        <div class="additional__block__mobile__name">
                            <p>Товары из статьи</p>
                        </div>
                        <div class="additional__block__mobile__wrapper">
                            <a href="#">
                                <p>Добавить товар из статьи</p>
                            </a>
                            <a href="#">
                                <p>Добавить товар из статьи</p>
                            </a>
                            <a href="#">
                                <p>Добавить товар из статьи</p>
                            </a>
                            <a href="#">
                                <p>Добавить товар из статьи</p>
                            </a>
                            <a href="#">
                                <p>Добавить товар из статьи</p>
                            </a>
                        </div>
                    </div>

                    <!---SUBMIT--->
                    <div class="new__article___submit">
                        <button>+ Добавить статью</button>
                    </div>

                </div>
            </form>

        </div>
        <!--//?--ADDITIONAL CONTAINER -->
        <div class="additional__container">
            <div class="additional__block__articles">
                <div class="additional__block__articles__name">
                    <p>Это важно</p>
                </div>
                <div class="additional__block__articles__content">
                    <a href="#">
                        <p>Как выбрать идеальное покрытие для вашего пола</p>
                    </a>

                    <a href="#">
                        <p>Как выбрать идеальное покрытие для вашего пола</p>
                    </a>

                    <a href="#">
                        <p>Как выбрать идеальное покрытие для вашего пола</p>
                    </a>
                    <a href="#">
                        <p>Как выбрать идеальное покрытие для вашего пола</p>
                    </a>

                    <a href="#">
                        <p>Как выбрать идеальное покрытие для вашего пола</p>
                    </a>
                </div>
            </div>
            <!----Товары для статьи----->
            <div class="additional__block__articles">
                <div class="additional__block__articles__name">
                    <p>Товары из статьи</p>
                </div>
                <div class="additional__block__articles__content new__article__add__aditional">
                    <a href="#">
                        <p>Добавить товар из статьи</p>
                    </a>
                    <a href="#">
                        <p>Добавить товар из статьи</p>
                    </a>
                    <a href="#">
                        <p>Добавить товар из статьи</p>
                    </a>
                    <a href="#">
                        <p>Добавить товар из статьи</p>
                    </a>
                    <a href="#">
                        <p>Добавить товар из статьи</p>
                    </a>
                </div>
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
</script>
</body>

</html>