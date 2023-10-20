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
            <!------ONLY MOBILE------->
            <!------ONLY MOBILE------->
            <!------ONLY MOBILE------->
            <!------ONLY MOBILE------->
            <!------ONLY MOBILE------->
            <div class="__mobile__filter">
                <div class="__mobile__filter__button">
                    <button id="open__filtr">
                        <img src="./imgs/filter.png" alt="">
                    </button>
                </div>
                <div class="__mobile__filter__sort-element">
                    <a href="#">
                        <p>Год производства</p>
                    </a>
                </div>
                <div class="__mobile__filter__sort-element">
                    <a href="#">
                        <p>Дерево</p>
                    </a>
                </div>
                <div class="__mobile__filter__sort-element">
                    <a href="#">
                        <p>Электрика</p>
                    </a>
                </div>
            </div>
            <!------>
            <div id="mobile__filtr__block" class="mobile__filter__block">
                <div class="mobile__filter__container">
                    <button id="close__mobile__filtr" class="mobile__filter__close">
                        X
                    </button>

                    <div class="mobile__filter__name">
                        Расширенный поиск
                    </div>
                    <div class="mobile__filter__category">
                        <p>Категория</p>
                    </div>
                </div>
            </div>
            <script>
                const open__mobile__filtr = document.getElementById('open__filtr');
                const mobile__filtr__block = document.getElementById('mobile__filtr__block');
                const close__mobile__filtr = document.getElementById('close__mobile__filtr');

                open__mobile__filtr.addEventListener('click', function(event) {
                    mobile__filtr__block.classList.add('mobile__filtr__block_opened');
                });

                close__mobile__filtr.addEventListener('click', function(event) {
                    mobile__filtr__block.classList.remove('mobile__filtr__block_opened');
                });
            </script>
            <!------ONLY MOBILE------->
            <!------ONLY MOBILE------->
            <!------ONLY MOBILE------->
            <!------ONLY MOBILE------->
            <!------ONLY MOBILE------->


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

<script>

</script>