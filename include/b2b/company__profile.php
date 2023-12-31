<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<style>
    <?php include './style/b2b/company__profile.css' ?>
</style>
<div class="company__profile__container">
    <div class="company__profile__name">
        <p>Личный кабинет</p>
    </div>
    <div class="company__profile__wrapper">
        <!------------->
        <div class="company__profile__desc">
            <!----FOTO AND DESCRIPTION------>
            <div class="company__profile__desc__wrapper">
                <div class="profile__desc__fotoviews">
                    <div class="profile__desc__foto">
                        <img src="./imgs/1.jpg" alt="" srcset="">
                    </div>

                    <div class="profile__desc__views">
                        <img src="./imgs/eye.svg" alt="" srcset="">
                        <p>1200</p>
                    </div>

                    <div class="profile__desc__social">
                        <div class="profile__desc__social__element">
                            <a href="#">
                                <img src="./imgs/wp1.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="./imgs/inst1.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="./imgs/face1.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="./imgs/link1.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="./imgs/globe1.svg" alt="">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="profile__desc">
                    <div class="profile__desc__name">
                        <p>Название какой-нибудь компании</p>
                    </div>
                    <div class="profile__desc__location">
                        <p><span>Страна:</span> Скеллиге</p>
                        <p><span>Город:</span> Каэр-Трольде</p>
                    </div>
                    <div class="profile__desc__date">
                        <p>Дата основания: 01.02.2023</p>
                    </div>
                    <div class="profile__desc__date__more">
                        <p><span>Добавлено:</span> 01.01.2023</p>
                        <p><span>Обновлено:</span> 15.08.2023</p>
                    </div>
                    <div class="profile__desc__contacts__name">
                        <p>Контакты</p>
                    </div>
                    <div class="profile__desc__contacts">
                        <div class="profile__desc__contacts__all">
                            <p>Общие</p>
                            <p>+994 00 000 00 00</p>
                            <p>email@company.com</p>
                        </div>
                        <div class="profile__desc__contacts__represent">
                            <p>Представитель</p>
                            <p>+994 00 000 00 00</p>
                            <p>email@company.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="company__profile__content-text_pc">
                <div class="company__profile__desc__name">
                    <p>Описание</p>
                </div>
                <div class="company__profile__desc__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat possimus, corrupti vel consequuntur, ducimus distinctio, excepturi ratione consectetur saepe quasi eos iure sed earum sequi voluptatum nesciunt quibusdam accusamus ipsa?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat possimus, corrupti vel consequuntur, ducimus distinctio, excepturi ratione consectetur saepe quasi eos iure sed earum sequi voluptatum nesciunt quibusdam accusamus ipsa?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat possimus, corrupti vel consequuntur, ducimus distinctio, excepturi ratione consectetur saepe quasi eos iure sed earum sequi voluptatum nesciunt quibusdam accusamus ipsa?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat possimus, corrupti vel consequuntur, ducimus distinctio, excepturi ratione consectetur saepe quasi eos iure sed earum sequi voluptatum nesciunt quibusdam accusamus ipsa?</p>

                </div>
            </div>
        </div>
        <!------------->
        <div class="company__profile__settings">
            <div class="profile__settings__wrapper">
                <div class="profile__settings__element">
                    <a href="./b2b.php?page=edit__company">
                        <p>Редактировать профиль</p>
                    </a>
                </div>

                <div class="profile__settings__element">
                    <a href="#">
                        <p>Статус аккаунта </p>
                    </a>
                </div>

                <div class="profile__settings__element">
                    <a href="#">
                        <p> Техническая поддержка</p>
                    </a>
                </div>
                <div class="profile__settings__element">
                    <a href="#">
                        <p>Получить Консультацию</p>
                    </a>
                </div>
                <div class="profile__settings__element">
                    <a href="#">
                        <p>Дополнительные услуги</p>
                    </a>
                </div>



            </div>
            <div class="profile__settings__sertificates">
                <div class="profile__sertificates__appbar">
                    <div class="appbar__name">
                        <p>Сертификаты</p>
                    </div>
                </div>


                <div class="profile__sertificates__slider">
                    <div class="swiper mySwiper3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="company__profile__sertificate__block">
                                    <div class="sertificate__image">
                                        <img src="./imgs/test_cert.jpg" alt="">
                                    </div>
                                    <div class="sertificate__name">
                                        <p>Sertificats</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="company__profile__sertificate__block">
                                    <div class="sertificate__image">
                                        <img src="./imgs/test_cert.jpg" alt="">
                                    </div>
                                    <div class="sertificate__name">
                                        <p>Sertificats</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="company__profile__sertificate__block">
                                    <div class="sertificate__image">
                                        <img src="./imgs/test_cert.jpg" alt="">
                                    </div>
                                    <div class="sertificate__name">
                                        <p>Sertificats</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next swiper-button-next-3"></div>
                        <div class="swiper-button-prev swiper-button-prev-3"></div>
                    </div>
                </div>
            </div>
            <div class="company__profile__content-text_mobile">
                <div class="company__profile__desc__name">
                    <p>Описание</p>
                </div>
                <div class="company__profile__desc__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat possimus, corrupti vel consequuntur, ducimus distinctio, excepturi ratione consectetur saepe quasi eos iure sed earum sequi voluptatum nesciunt quibusdam accusamus ipsa?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat possimus, corrupti vel consequuntur, ducimus distinctio, excepturi ratione consectetur saepe quasi eos iure sed earum sequi voluptatum nesciunt quibusdam accusamus ipsa?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat possimus, corrupti vel consequuntur, ducimus distinctio, excepturi ratione consectetur saepe quasi eos iure sed earum sequi voluptatum nesciunt quibusdam accusamus ipsa?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat possimus, corrupti vel consequuntur, ducimus distinctio, excepturi ratione consectetur saepe quasi eos iure sed earum sequi voluptatum nesciunt quibusdam accusamus ipsa?</p>

                </div>
            </div>
        </div>
    </div>
    <div class="company__profile__categories">
        <div class="profile__categories__nameadd">
            <div class="profile__categories__name">
                <p>Ваши Категории</p>
            </div>
            <div class="add__new__category">
                <a href="./b2b.php?page=change_category">
                    <p>+ Добавить категории</p>
                </a>
            </div>
        </div>

        <div class="profile__categories__wrapper">
            <div class="profile__categories__blockN">
                <div class="categoriesN__name">
                    <p>Название категории (n)</p>
                    <a href="./index.php?page=owners_goods">
                        <p>Редактировать <span>категорию</span></p>
                    </a>
                </div>

                <div class="categoriesN__wrapper">
                    <div class="categories__swiper__container">
                        <!-- Swiper -->
                        <div class="swiper mySwiper1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат asdasd üüadasd</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-button-next swiper-button-next-1"></div>
                        <div class="swiper-button-prev swiper-button-prev-1"></div>

                    </div>
                </div>

                <div class="categoriesN__name ">
                    <p>Название категории (n)</p>
                    <a href="./index.php?page=owners_goods">
                        <p>Редактировать <span>категорию</span></p>
                    </a>
                </div>

                <div class="categoriesN__wrapper">
                    <div class="categories__swiper__container">
                        <!-- Swiper -->
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element">
                                        <div class="swiper__recomendation__element__image">
                                            <img src="./imgs/1.jpg" alt="">
                                        </div>
                                        <div class="swiper__recomendation__element__desc">
                                            <div class="swiper__recomendation__element__name">
                                                <p>Пол ламинат</p>
                                            </div>
                                            <div class="swiper__recomendation__element__size">
                                                <p>220 х 60 х 22</p>
                                            </div>
                                            <div class="swiper__recomendation__element__material">
                                                <p>Материал</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-button-next swiper-button-next-2"></div>
                        <div class="swiper-button-prev swiper-button-prev-2"></div>

                    </div>
                </div>


            </div>
        </div>

    </div>



</div>


<!-- Initialize Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
    var swiper1, swiper2, swiper3;

    function updateSwipers() {
        var viewportWidth = window.innerWidth || document.documentElement.clientWidth;

        if (viewportWidth < 768) {
            // Set slidesPerView to 3 and disable navigation for Swiper 1 and Swiper 2
            if (!swiper1 || !swiper2 || !swiper3) {
                // Initialize Swiper 1 and Swiper 2 if they haven't been initialized yet
                swiper1 = new Swiper(".mySwiper1", {
                    slidesPerView: 3,
                    allowSlideNext: false,
                    allowSlidePrev: false,
                    navigation: {
                        nextEl: ".swiper-button-next-1",
                        prevEl: ".swiper-button-prev-1",
                    },
                });
                swiper2 = new Swiper(".mySwiper2", {
                    slidesPerView: 3,
                    allowSlideNext: false,
                    allowSlidePrev: false,
                    navigation: {
                        nextEl: ".swiper-button-next-2",
                        prevEl: ".swiper-button-prev-2",
                    },
                });

                // Initialize Swiper 3 with 2 slides per view and enable navigation
                swiper3 = new Swiper(".mySwiper3", {
                    slidesPerView: 2,
                    freeMode: true,
                    navigation: {
                        nextEl: ".swiper-button-next-3",
                        prevEl: ".swiper-button-prev-3",
                    },
                });
            } else {
                // If Swipers are already initialized, update slidesPerView and disable navigation for Swiper 1 and Swiper 2
                swiper1.params.slidesPerView = 3;
                swiper2.params.slidesPerView = 3;
                swiper1.params.allowSlideNext = false;
                swiper1.params.allowSlidePrev = false;
                swiper2.params.allowSlideNext = false;
                swiper2.params.allowSlidePrev = false;
                swiper1.update();
                swiper2.update();

                // Update Swiper 3 with 2 slides per view and enable navigation
                swiper3.params.slidesPerView = 2;
                swiper3.params.navigation.nextEl = ".swiper-button-next-3";
                swiper3.params.navigation.prevEl = ".swiper-button-prev-3";
                swiper3.update();
            }
        } else {
            // Set slidesPerView to 5 for screens 768 pixels and wider and enable navigation
            if (!swiper1 || !swiper2 || !swiper3) {
                // Initialize Swipers if they haven't been initialized yet
                swiper1 = new Swiper(".mySwiper1", {
                    slidesPerView: 5,
                    freeMode: true,
                    navigation: {
                        nextEl: ".swiper-button-next-1",
                        prevEl: ".swiper-button-prev-1",
                    },
                });
                swiper2 = new Swiper(".mySwiper2", {
                    slidesPerView: 5,
                    freeMode: true,
                    navigation: {
                        nextEl: ".swiper-button-next-2",
                        prevEl: ".swiper-button-prev-2",
                    },
                });

                // Initialize Swiper 3 with 1 slide per view and enable navigation
                swiper3 = new Swiper(".mySwiper3", {
                    slidesPerView: 1,
                    freeMode: true,
                    navigation: {
                        nextEl: ".swiper-button-next-3",
                        prevEl: ".swiper-button-prev-3",
                    },
                });
            } else {
                // If Swipers are already initialized, update slidesPerView and enable navigation
                swiper1.params.slidesPerView = 5;
                swiper2.params.slidesPerView = 5;
                swiper1.params.allowSlideNext = true;
                swiper1.params.allowSlidePrev = true;
                swiper2.params.allowSlideNext = true;
                swiper2.params.allowSlidePrev = true;
                swiper1.update();
                swiper2.update();
                swiper3.params.slidesPerView = 1;
                swiper3.params.allowSlideNext = true;
                swiper3.params.allowSlidePrev = true;
                swiper3.update();
            }
        }
    }

    // Call the function on page load and when the window is resized
    window.addEventListener("load", updateSwipers);
    window.addEventListener("resize", updateSwipers);






</script>