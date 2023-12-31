<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<style>
    <?php include './style/article.css' ?>
    <?php include './style/item.css' ?>
</style>



<div class="item__page__wrapper">
    <div class="item__page__container">
        <!----ITEM----->
        <div class="item__block">
            <!----Item FOTO AND DESCRIPTION SMALL--->
            <div class="item__content__block">
                <!---FOTO-->
                <div class="new__photo__container">
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                          <div data-hash="slide1" class="swiper-slide">
                            <div class="new__photo__block">
                                <img src="./imgs/1.jpg" alt="">
                            </div>
                          </div>
                          <div data-hash="slide2" class="swiper-slide">
                            <div class="new__photo__block">
                            <img src="./imgs/1.jpg" alt="">
                            </div>
                          </div>
                          <div data-hash="slide3" class="swiper-slide">
                            <div class="new__photo__block">
                            <img src="./imgs/1.jpg" alt="">
                            </div>
                          </div>
                          <div data-hash="slide4" class="swiper-slide">
                            <div class="new__photo__block">
                            <img src="./imgs/1.jpg" alt="">
                            </div>
                          </div>
                          <div data-hash="slide5" class="swiper-slide">
                            <div class="new__photo__block">
                            <img src="./imgs/1.jpg" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>                
                </div>
                <!-----description of item-->
                <div class="item__content__desc">
                    <div class="item__name">
                        <p>Название товара длинное очень</p>
                    </div>
                    <div class="item__tags">
                        <a href="#">
                            <p>#Ремонт</p>
                        </a>
                        <a href="#">
                            <p>#Пол</p>
                        </a>
                        <a href="#">
                            <p>#Паркет</p>
                        </a>
                        <a href="#">
                            <p>#Паркет</p>
                        </a>
                        <a href="#">
                            <p>#Паркет</p>
                        </a>
                        <a href="#">
                            <p>#Паркет</p>
                        </a>
                        <a href="#">
                            <p>#Паркет</p>
                        </a>
                    </div>
                    <div class="item__date">
                        <p>Добавлено: 01.04.2023</p>
                    </div>
                    <div class="item__number">
                        <p id="phoneNumber"></p>
                    </div>
                    <div class="item__number__desc">
                        <p id="showFullNumber">Нажмите что бы увидеть номер</p>
                    </div>
                </div>
            </div>
            <!-------Item FULL DESCRIPTION---->
            <div class="item__description">

                <div class="item__description__country">
                    <p>Производитель: PArket House Oxenfurt</p>
                    <p>Страна: Redaniya</p>
                </div>
                <div class="item__description__color">
                    <p>Цвет: Серо-буро малиновый</p>
                    <p>Размер: 1488х228х69</p>
                </div>

                <div class="item__certificates">
                    <div class="item__certificates__name">
                        <p>Сертификаты</p>
                    </div>
                    <div class="item__certificates__container">
                        <!-------->
                        <div class="item__certificates__element">
                            <div class="item__certificates__image">
                                <div class="item__certificates__image__container">
                                    <img src="./imgs/test_cert.jpg" alt="">
                                </div>
                            </div>
                            <div class="item__certificates__desc">
                                <p>Certificate name</p>
                            </div>
                        </div>
                        <!-------->
                                                <!-------->
                                                <div class="item__certificates__element">
                            <div class="item__certificates__image">
                                <div class="item__certificates__image__container">
                                    <img src="./imgs/test_cert.jpg" alt="">
                                </div>
                            </div>
                            <div class="item__certificates__desc">
                                <p>Certificate name</p>
                            </div>
                        </div>
                        <!-------->
                                                <!-------->
                                                <div class="item__certificates__element">
                            <div class="item__certificates__image">
                                <div class="item__certificates__image__container">
                                    <img src="./imgs/test_cert.jpg" alt="">
                                </div>
                            </div>
                            <div class="item__certificates__desc">
                                <p>Certificate name</p>
                            </div>
                        </div>
                        <!-------->
                    </div>
                </div>
                <!-- <div class="item__description__text">
                    <p>Преимущества паркетных полов:
                        Изысканный внешний вид: паркетные полы придают интерьеру шик и элегантность, добавляя в помещение теплоту и уют.
                    </p>
                    <p>
                        Прочность и долговечность: паркетные полы изготовлены из натурального дерева, что делает их прочными и долговечными.
                        Правильно уложенный и ухоженный паркетный пол может прослужить десятилетиями.
                    </p>
                    <p>
                        Уникальный дизайн: паркетные полы предлагают множество вариантов дизайна, таких как разные оттенки древесины,
                        различные узоры и мозаики, позволяя создать уникальный внешний вид пола, соответствующий вашему стилю и предпочтениям.

                    </p>
                    <p>
                        Экологическая чистота: паркетные полы изготовлены из натурального дерева, что делает их экологически чистым
                        и безопасным выбором для вашего дома/
                    </p>
                </div> -->
            </div>
            <!---ARTICLES SWIPER------------>
            <div class="item__articles__name">
                    <p>Это может быть вам интересно</p>
                </div>
            <div class="item__articles">

                <div class="item__articles__container">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!------------------->
                            <div class="swiper-slide">
                                <a href="#" class="item__recomendation__block">
                                    <div class="item__recomendation__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="item__recomendation__name">
                                        <p>Название статьи</p>
                                    </div>
                                </a>
                            </div>
                            <!------------------->
                            <div class="swiper-slide">
                                <a href="#" class="item__recomendation__block">
                                    <div class="item__recomendation__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="item__recomendation__name">
                                        <p>Название статьи</p>
                                    </div>
                                </a>
                            </div>
                            <!------------------->
                            <div class="swiper-slide">
                                <a href="#" class="item__recomendation__block">
                                    <div class="item__recomendation__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="item__recomendation__name">
                                        <p>Название статьи</p>
                                    </div>
                                </a>
                            </div>
                            <!------------------->
                            <div class="swiper-slide">
                                <a href="#" class="item__recomendation__block">
                                    <div class="item__recomendation__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="item__recomendation__name">
                                        <p>Название статьи</p>
                                    </div>
                                </a>
                            </div>
                            <!------------------->
                            <div class="swiper-slide">
                                <a href="#" class="item__recomendation__block">
                                    <div class="item__recomendation__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="item__recomendation__name">
                                        <p>Название статьи</p>
                                    </div>
                                </a>
                            </div>
                            <!------------------->
                            <div class="swiper-slide">
                                <a href="#" class="item__recomendation__block">
                                    <div class="item__recomendation__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="item__recomendation__name">
                                        <p>Название статьи</p>
                                    </div>
                                </a>
                            </div>

                                                        <!------------------->
                                                        <div class="swiper-slide">
                                <a href="#" class="item__recomendation__block">
                                    <div class="item__recomendation__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="item__recomendation__name">
                                        <p>Название статьи</p>
                                    </div>
                                </a>
                            </div>
                                                        <!------------------->
                                                        <div class="swiper-slide">
                                <a href="#" class="item__recomendation__block">
                                    <div class="item__recomendation__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="item__recomendation__name">
                                        <p>Название статьи</p>
                                    </div>
                                </a>
                            </div>
                                                        <!------------------->
                                                        <div class="swiper-slide">
                                <a href="#" class="item__recomendation__block">
                                    <div class="item__recomendation__image">
                                        <img src="./imgs/1.jpg" alt="">
                                    </div>
                                    <div class="item__recomendation__name">
                                        <p>Название статьи</p>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>
        </div>

        <!---ITEM RECOMENDATIONS---->
        <div class="item__recomendation__container">
            <div class="additional__block__articles additional__block__articles_onlypc">
                <div class="additional__block__articles__name">
                    <p>Это важно</p>
                </div>
                <div class="additional__block__articles__content">
                    <a href="#">
                        <p>Кямран Гулиев покинул пост
                            президента Нефтчи</p>
                    </a>

                    <a href="#">
                        <p>Кямран Гулиев покинул пост
                            президента Нефтчи</p>
                    </a>

                    <a href="#">
                        <p>Кямран Гулиев покинул пост
                            президента Нефтчи</p>
                    </a>
                    <a href="#">
                        <p>Кямран Гулиев покинул пост
                            президента Нефтчи</p>
                    </a>

                    <a href="#">
                        <p>Кямран Гулиев покинул пост
                            президента Нефтчи</p>
                    </a>
                </div>
            </div>

            <div class="additional__block__articles">
                <div class="additional__block__articles__name additional__block__articles__name__about">
                    <p>Статьи о товаре</p>
                </div>
                <div class="additional__block__articles__content additional__block__articles__content_about">
                    <a href="#">
                        <p>Классические узоры или современные тренды</p>
                    </a>
                    <a href="#">
                        <p>Почему паркетный пол — отличное вложение в ваш дом</p>
                    </a>
                    <a href="#">
                        <p>Секреты ухода за паркетным полом</p>
                    </a>
                    <a href="#">
                        <p>Выбор правильного дерева для паркета: 5 советов</p>
                    </a>
                    <a href="#">
                        <p>Паркет в Интерьере</p>
                    </a>
                </div>
            </div>
        </div>
    </div>


</div>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
// JavaScript
var swiper;

function initSwiper() {
  if (window.innerWidth < 768) {
    if (swiper) {
      swiper.destroy();
    }
    swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      freeMode: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      }
    });
  } else {
    if (swiper) {
      swiper.destroy();
    }
    swiper = new Swiper(".mySwiper", {
      slidesPerView: 5,
      freeMode: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      }
    });
  }
}

// Initialize Swiper on page load
initSwiper();

// Update Swiper configuration when the window is resized
window.addEventListener("resize", function () {
  initSwiper();
});










    var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 30,
      hashNavigation: {
        watchState: true,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });


    //Скрипт номера телефона 

    function hideLastSevenDigits(phoneNumber) {
        const digitsToHide = 7;
        if (phoneNumber.length >= digitsToHide) {
            const hiddenPart = '-'.repeat(digitsToHide);
            const visiblePart = phoneNumber.substring(0, phoneNumber.length - digitsToHide);
            return visiblePart + hiddenPart;
        } else {
            return phoneNumber;
        }
    }

    const originalPhoneNumber = "+994 507506901";
    const hiddenPhoneNumber = hideLastSevenDigits(originalPhoneNumber);
    document.getElementById("phoneNumber").textContent = hiddenPhoneNumber;

    document.getElementById("showFullNumber").addEventListener("click", () => {
        document.getElementById("phoneNumber").textContent = originalPhoneNumber;
    });





</script>