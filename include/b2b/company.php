  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />


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
                                          <p>Азербайджан</p>
                                      </div>
                                      <div class="b2b__company__city">
                                          <p>Город:</p>
                                          <p>Ağ-Cəbədi</p>
                                      </div>
                                  </div>

                                  <div class="b2b__company__added">
                                      <p>Добавлено: 01.01.2023</p>
                                  </div>
                                  <div class="b2b__company__updated">
                                      <p>Обновлено: 01.01.2023</p>
                                  </div>
                                  <div class="company__desc__contact">
                                      <div class="company__desc__contactbutton">
                                          <div id="show__contacts" class="company__desc__contact-button company__active">
                                              <a class="" href="#">
                                                  <p id="showedContacts">Контакты</p>
                                              </a>
                                              <p >Нажмите для отображения</p>
                                          </div>

                                          <div  id="show_representative" class="company__desc__contact-person">
                                              <a class="" href="#">
                                                  <p id="showedRepresentative">Представитель</p>
                                              </a>
                                              <p>Нажмите для отображения</p>
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
                                      <!-- Swiper -->
                                      <div class="swiper mySwiper">
                                          <div class="swiper-wrapper">
                                              <div class="swiper-slide">
                                                  <div class="certificate__swiper__wrapper">
                                                      <img src="./imgs/test_cert.jpg" alt="">
                                                      <p>Название сертификата</p>
                                                  </div>
                                              </div>
                                              <div class="swiper-slide">
                                                  <div class="certificate__swiper__wrapper">
                                                      <img src="./imgs/test_cert.jpg" alt="">
                                                      <p>Название сертификата</p>
                                                  </div>
                                              </div>
                                              <div class="swiper-slide">
                                                  <div class="certificate__swiper__wrapper">
                                                      <img src="./imgs/test_cert.jpg" alt="">
                                                      <p>Название сертификата</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="swiper-button-next"></div>
                                          <div class="swiper-button-prev"></div>
                                      </div>
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
                            <a href="./b2b.php?page=company_category">
                             <p>Название категории (n)</p>
                            </a>
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
                          <div class="b2b__company__all__category__mobile">
                                <a href="#">
                                    <p>Отобразить все</p>
                                </a>
                          </div>
                      </div>


                      <div class="b2b__company__categories">
                          <div class="b2b__company__categories__name">
                          <a href="./b2b.php?page=company_category">
                             <p>Название категории (n)</p>
                            </a>
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
                          <div class="b2b__company__all__category__mobile">
                                <a href="#">
                                    <p>Отобразить все</p>
                                </a>
                          </div>
                      </div>

                      <div class="b2b__company__categories">
                          <div class="b2b__company__categories__name">
                          <a href="./b2b.php?page=company_category">
                             <p>Название категории (n)</p>
                            </a>
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
                          <div class="b2b__company__all__category__mobile">
                                <a href="#">
                                    <p>Отобразить все</p>
                                </a>
                          </div>
                      </div>




                  </div>



              </div>
          </div>
      </div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


  <script>


      const number = '+994 50 750 69 01';
      const number2 = '+994 55 327 52 69';

      $(document).ready(() => {
          let contactsOpened = false;
          let representativeOpened = false;

          const updateFontSizes = () => {
              if (window.innerWidth > 768) {
                  if (contactsOpened) {
                      $('#showedContacts').text(number);
                      $('#showedContacts').css({
                          "font-size": "14px",
                          "font-weight": "400"
                      });
                  }

                  if (representativeOpened) {
                      $('#showedRepresentative').text(number2);
                      $('#showedRepresentative').css({
                          "font-size": "14px",
                          "font-weight": "400"
                      });
                  }
              } else {
                  if (contactsOpened) {
                      $('#showedContacts').text(number);
                      $('#showedContacts').css({
                          "font-size": "8px",
                          "font-weight": "400"
                      });
                  }

                  if (representativeOpened) {
                      $('#showedRepresentative').text(number2);
                      $('#showedRepresentative').css({
                          "font-size": "8px",
                          "font-weight": "400"
                      });
                  }
              }
          }

          $('#show__contacts').click(() => {
              contactsOpened = true;
              updateFontSizes();
          });

          $('#show_representative').click(() => {
              representativeOpened = true;
              updateFontSizes();
          });

          // Add a window resize event listener to update the font size if the screen size changes
          $(window).on('resize', () => {
              updateFontSizes();
          });
      });
  </script>



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
                  slidesPerView: 2,
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
                  slidesPerView: 1,
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
      window.addEventListener("resize", function() {
          initSwiper();
      });
  </script>