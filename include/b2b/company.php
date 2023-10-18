<style>
    /*******FIRST !!!!!!!!!!!!!***************/
    <?php include './style/b2b/mainpage.css' ?>
    /*******SECONG !!!!!!!!!!!!!***************/
    <?php include './style/b2b/company.css' ?>
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
        <div class="b2b__main__search b2b__main__search__company">
            <div class="main__search__name">
                <a class="active__link" href="./b2b.php">
                    <p>Поиск</p>
                </a>
                <span>></span>
                <a href="#">
                    <p>Название компании</p>
                </a>
            </div>
            <!------ONLY MOBILE------->
            <div class="b2b__mobile__filter">
                <div class="b2b__mobile__filter__button">
                    <button id="open__filtr">
                        <img src="./imgs/filter.png" alt="">
                    </button>
                </div>
                <div class="b2b__mobile__filter__sort-element">
                    <a href="#">
                        <p>Год производства</p>
                    </a>
                </div>
                <div class="b2b__mobile__filter__sort-element">
                    <a href="#">
                        <p>Дерево</p>
                    </a>
                </div>
                <div class="b2b__mobile__filter__sort-element">
                    <a href="#">
                        <p>Электрика</p>
                    </a>
                </div>
            </div>
            <!------>
            <div id="mobile__filtr__block" class="mobile__b2b__filter__block">
                <div class="mobile__b2b__filter__container">
                    <button id="close__mobile__filtr" class="mobile__b2b__filter__close">
                        X
                    </button>

                    <div class="mobile__b2b__filter__name">
                        Расширенный поиск
                    </div>
                    <div class="mobile__b2b__filter__category">
                        <p>Категория</p>
                    </div>
                </div>
            </div>




            <div class="main__search__wrapper b2b__company__page">
                <div class="b2b__company__wrapper">
                    <div class="b2b__company__container__main">
                        <!------LOGO SOCIAL ---------->
                        <div class="b2b__company__logo_social">
                            <div class="b2b__company__logo">
                                <img src="./imgs/logo__company.png" alt="">
                            </div>
                            <div class="b2b__company__social">
                                <div class="b2b__company__social__wrapper">
                                    <div class="b2b__company__social__element">
                                        <a href="#">
                                            <img src="./imgs/wp1.svg" alt="">
                                        </a>
                                    </div>
                                    <div class="b2b__company__social__element">
                                        <a href="#">
                                            <img src="./imgs/inst1.svg" alt="">
                                        </a>
                                    </div>
                                    <div class="b2b__company__social__element">
                                        <a href="#">
                                            <img src="./imgs/face1.svg" alt="">
                                        </a>
                                    </div>
                                    <div class="b2b__company__social__element">
                                        <a href="#">
                                            <img src="./imgs/link1.svg" alt="">
                                        </a>
                                    </div>
                                    <div class="b2b__company__social__element">
                                        <a href="#">
                                            <img src="./imgs/globe1.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----COMPANY DESCRIPTION------>
                        <div class="b2b__company__desc">
                            <div class="b2b__company__desc_wrapper">
                                <div class="b2b__company__name">
                                    <p>Название компании</p>
                                </div>

                                <div class="b2b__company__country_wrapper">
                                    <div class="b2b__company__city">
                                        <p>Страна:</p>
                                        <p>Узбекистан</p>
                                    </div>
                                    <div class="b2b__company__city">
                                        <p>Город:</p>
                                        <p>Усть-Новоколамск</p>
                                    </div>
                                </div>

                                <div class="b2b__company__added">
                                    <p>Добавлено: 01.01.2023</p>
                                </div>
                                <div class="b2b__company__updated">
                                    <p>Добавлено: 01.01.2023</p>
                                </div>
                                <div class="company__desc__contact">
                                    <div class="company__desc__contactbutton">
                                        <div class="company__desc__contact-button company__active">
                                            <a class="" href="#">
                                                <p id="showedContacts">Контакты</p>
                                            </a>
                                            <p id="show__contacts">Нажмите для отображения</p>
                                        </div>

                                        <div class="company__desc__contact-person">
                                            <a class="" href="#">
                                                <p id="showedRepresentative">Представитель</p>
                                            </a>
                                            <p id="show_representative">Нажмите для отображения</p>
                                        </div>


                                        <div class="lock_">
                                            <img src="./imgs/lock.png" alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----COMPANY CERTIFICATES------>
                        <div class="b2b__company__certificates">
                            <div class="company__certificates__wrapper">
                                <div class="company__certificates__name">
                                    <p>Сертификаты</p>
                                </div>
                                <div class="company__certificates__swiper">

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="b2b__company__description">
                        <div class="b2b__company__description__date">
                            <p><span>Дата основания:</span> 01.02.2023</p>
                        </div>
                        <div class="b2b__company__description__content">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore impedit recusandae dolores iusto velit illo esse numquam, at minus asperiores aut totam necessitatibus eveniet laborum quam. Ex amet deleniti unde?</p>
                        </div>
                    </div>

                    <div class="b2b__company__categories">
                        <div class="b2b__company__categories__name">
                            <p>Название категории (n)</p>
                        </div>
                        <div class="b2b__company__categories__wrapper">


                            <a href="#" class="b2b__company__categories__element">
                                <div class="element__wrapper">
                                    <div class="element__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="element__content">
                                        <div class="element__name">
                                            <p>Пол ламинат</p>
                                        </div>
                                        <div class="element__size">
                                            <p>220 х 60 х 22</p>
                                        </div>
                                        <div class="element__material">
                                            <p>материал</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="b2b__company__categories__element">
                                <div class="element__wrapper">
                                    <div class="element__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="element__content">
                                        <div class="element__name">
                                            <p>Пол ламинат</p>
                                        </div>
                                        <div class="element__size">
                                            <p>220 х 60 х 22</p>
                                        </div>
                                        <div class="element__material">
                                            <p>материал</p>
                                        </div>
                                    </div>
                                </div>
                            </a>


                            <a href="#" class="b2b__company__categories__element">
                                <div class="element__wrapper">
                                    <div class="element__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="element__content">
                                        <div class="element__name">
                                            <p>Пол ламинат</p>
                                        </div>
                                        <div class="element__size">
                                            <p>220 х 60 х 22</p>
                                        </div>
                                        <div class="element__material">
                                            <p>материал</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="b2b__company__categories__element">
                                <div class="element__wrapper">
                                    <div class="element__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="element__content">
                                        <div class="element__name">
                                            <p>Пол ламинат</p>
                                        </div>
                                        <div class="element__size">
                                            <p>220 х 60 х 22</p>
                                        </div>
                                        <div class="element__material">
                                            <p>материал</p>
                                        </div>
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>


                    <div class="b2b__company__categories">
                        <div class="b2b__company__categories__name">
                            <p>Название категории (n)</p>
                        </div>
                        <div class="b2b__company__categories__wrapper">


                            <a href="#" class="b2b__company__categories__element">
                                <div class="element__wrapper">
                                    <div class="element__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="element__content">
                                        <div class="element__name">
                                            <p>Пол ламинат</p>
                                        </div>
                                        <div class="element__size">
                                            <p>220 х 60 х 22</p>
                                        </div>
                                        <div class="element__material">
                                            <p>материал</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="b2b__company__categories__element">
                                <div class="element__wrapper">
                                    <div class="element__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="element__content">
                                        <div class="element__name">
                                            <p>Пол ламинат</p>
                                        </div>
                                        <div class="element__size">
                                            <p>220 х 60 х 22</p>
                                        </div>
                                        <div class="element__material">
                                            <p>материал</p>
                                        </div>
                                    </div>
                                </div>
                            </a>


                            <a href="#" class="b2b__company__categories__element">
                                <div class="element__wrapper">
                                    <div class="element__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="element__content">
                                        <div class="element__name">
                                            <p>Пол ламинат</p>
                                        </div>
                                        <div class="element__size">
                                            <p>220 х 60 х 22</p>
                                        </div>
                                        <div class="element__material">
                                            <p>материал</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="b2b__company__categories__element">
                                <div class="element__wrapper">
                                    <div class="element__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="element__content">
                                        <div class="element__name">
                                            <p>Пол ламинат</p>
                                        </div>
                                        <div class="element__size">
                                            <p>220 х 60 х 22</p>
                                        </div>
                                        <div class="element__material">
                                            <p>материал</p>
                                        </div>
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>

                    <div class="b2b__company__categories">
                        <div class="b2b__company__categories__name">
                            <p>Название категории (n)</p>
                        </div>
                        <div class="b2b__company__categories__wrapper">


                            <a href="#" class="b2b__company__categories__element">
                                <div class="element__wrapper">
                                    <div class="element__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="element__content">
                                        <div class="element__name">
                                            <p>Пол ламинат</p>
                                        </div>
                                        <div class="element__size">
                                            <p>220 х 60 х 22</p>
                                        </div>
                                        <div class="element__material">
                                            <p>материал</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="b2b__company__categories__element">
                                <div class="element__wrapper">
                                    <div class="element__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="element__content">
                                        <div class="element__name">
                                            <p>Пол ламинат</p>
                                        </div>
                                        <div class="element__size">
                                            <p>220 х 60 х 22</p>
                                        </div>
                                        <div class="element__material">
                                            <p>материал</p>
                                        </div>
                                    </div>
                                </div>
                            </a>


                            <a href="#" class="b2b__company__categories__element">
                                <div class="element__wrapper">
                                    <div class="element__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="element__content">
                                        <div class="element__name">
                                            <p>Пол ламинат</p>
                                        </div>
                                        <div class="element__size">
                                            <p>220 х 60 х 22</p>
                                        </div>
                                        <div class="element__material">
                                            <p>материал</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="b2b__company__categories__element">
                                <div class="element__wrapper">
                                    <div class="element__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="element__content">
                                        <div class="element__name">
                                            <p>Пол ламинат</p>
                                        </div>
                                        <div class="element__size">
                                            <p>220 х 60 х 22</p>
                                        </div>
                                        <div class="element__material">
                                            <p>материал</p>
                                        </div>
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>




                </div>



            </div>
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

    //Скрипт показать контакты
    const number = '+994 50 750 69 01';
    const number2 = '+994 55 327 52 69';
    $(document).ready(() => {
        $('#show__contacts').click(() => {
            $('#showedContacts').text(number);
            $('#showedContacts').css({
                "font-size": "14px",
                "font-weight": "400"
            });
        });
        $('#show_representative').click(() => {
            $('#showedRepresentative').text(number2);
            $('#showedRepresentative').css({
                "font-size": "14px",
                "font-weight": "400"
            });
        });

    });
</script>