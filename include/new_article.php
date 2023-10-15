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

                    <!------------->
                    <div class="new__article__content">
                        тут происхоит добавление контента
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