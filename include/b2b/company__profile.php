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

                <div class="profile__settings__sertificates">
                    <div class="profile__sertificates__appbar">
                        <div class="appbar__name">
                            <p>Сертификаты</p>
                        </div>
                        <div class="appbar__add">
                            <a href="#">+</a>
                        </div>
                    </div>


                    <div class="profile__sertificates__slider">

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="company__profile__categories">
        <div class="profile__categories__nameadd">
            <div class="profile__categories__name">
                <p>Ваши Категории</p>
            </div>
        </div>

        <div class="profile__categories__wrapper">
            <div class="profile__categories__blockN">
                <div class="categoriesN__name">
                    <p>Название категории (n)</p>
                    <a href="#">
                        <p>Редактировать категорию</p>
                    </a>
                </div>

                <div  class="categoriesN__wrapper">
                    <div  class="categories__swiper__container">
                          <!-- Swiper -->
                            <div class="swiper mySwiper1">
                              <div  class="swiper-wrapper">
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
                                    <div class="swiper__recomendation__element"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper__recomendation__element"></div>
                                </div>
                              </div>

                            </div>
                            <div class="swiper-button-next swiper-button-next-1"></div>
                            <div class="swiper-button-prev swiper-button-prev-1"></div>

                    </div>
                </div>
                <div class="categoriesN__wrapper_showall">
                    <a href="#">
                        <p>Отобразить всё</p>
                    </a>
                </div>
                <div class="categoriesN__name">
                    <p>Название категории (n)</p>
                    <a href="#">
                        <p>Редактировать категорию</p>
                    </a>
                </div>

                <div  class="categoriesN__wrapper">
                    <div class="categories__swiper__container">
                          <!-- Swiper -->
                            <div class="swiper mySwiper2">
                              <div  class="swiper-wrapper">
                                <div class="swiper-slide">Slide 1</div>
                                <div class="swiper-slide">Slide 2</div>
                                <div class="swiper-slide">Slide 3</div>
                                <div class="swiper-slide">Slide 4</div>
                                <div class="swiper-slide">Slide 5</div>
                                <div class="swiper-slide">Slide 6</div>
                                <div class="swiper-slide">Slide 7</div>
                                <div class="swiper-slide">Slide 8</div>
                                <div class="swiper-slide">Slide 9</div>
                              </div>
                              <div class="swiper-button-next swiper-button-next-2"></div>
                            <div class="swiper-button-prev swiper-button-prev-2"></div>
                            </div>


                    </div>
                </div>

                <div class="categoriesN__wrapper_showall">
                    <a href="#">
                        <p>Отобразить всё</p>
                    </a>
                </div>
            </div>



            
        </div>

    </div>

</div>


<!-- Initialize Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


<!-- Initialize Swiper -->
<script>
// Swiper 1
var swiper1 = new Swiper(".mySwiper1", {
    slidesPerView: 5,
    freeMode: true,
    navigation: {
        nextEl: ".swiper-button-next-1",
        prevEl: ".swiper-button-prev-1",
    },
});
// Swiper 1
var swiper2 = new Swiper(".mySwiper2", {
    slidesPerView: 5,
    freeMode: true,
    navigation: {
        nextEl: ".swiper-button-next-2",
        prevEl: ".swiper-button-prev-2"
    }
});

      // JavaScript
//      var swiper;
//
//      function initSwiper() {
//          if (window.innerWidth < 768) {
//              if (swiper) {
//                  swiper.destroy();
//              }
//              swiper = new Swiper(".mySwiper", {
//                  slidesPerView: 2,
//                  freeMode: true,
//                  navigation: {
//                      nextEl: ".swiper-button-next",
//                      prevEl: ".swiper-button-prev"
//                  }
//              });
//          } else {
//              if (swiper) {
//                  swiper.destroy();
//              }
//              swiper = new Swiper(".mySwiper", {
//                  slidesPerView: 1,
//                  freeMode: true,
//                  navigation: {
//                      nextEl: ".swiper-button-next",
//                      prevEl: ".swiper-button-prev"
//                  }
//              });
//          }
//      }
//
//      // Initialize Swiper on page load
//      initSwiper();
//
//      // Update Swiper configuration when the window is resized
//      window.addEventListener("resize", function() {
//          initSwiper();
//      });
</script>