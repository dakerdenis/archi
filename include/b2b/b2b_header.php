<header class="header__container">
    <div class="header__wrapper">
        <!-------IMAGE-------->
        <div class="header__image header__image_b2b">
            <a href="./b2b.php">
                <p>B2B</p>
            </a>
        </div>
        <!-----NAVIGATION------>
        <div class="header__navigation">
            <ul>
                <li><a href="#">Внешний рынок</a></li>
                <li>
                    <img src="./imgs/logo.png" alt="">
                </li>
                <li><a href="#">Внутренний рыноке</a></li>
            </ul>
        </div>
        <!-----navigation MOBILE----->
        <div class="header__navigation__mobile">
            <p>Книга ремонта</p>
        </div>

        <!---PROFILE&LANG---->
        <div class="header__profile">
            <div class="header__profile__image" id="dropdown-trigger">
                <img src="./imgs/profile.png" alt="Profile Logo">
            </div>
            <div class="dropdown" id="dropdown-content">
                <div class="dropdown_content">
                    <div class="dropdown__languages">
                        <a  href="#">
                            <img src="./imgs/az.png" alt="image" srcset="">
                        </a>
                        <a class="lang_active" href="#">
                            <img src="./imgs/ru.png" alt="image" srcset="">
                        </a>
                        <a href="#">
                            <img src="./imgs/en.png" alt="image" srcset="">
                        </a>
                    </div>

                        <a href="./b2b.php?page=login" class="dropdown__login_block __login__green">
                            <p>Вход</p>
                        </a>
                        <a href="./b2b.php?page=registration" class="dropdown__login_block">
                            <p>Регистрация</p>
                        </a>
                </div>
            </div>
        </div>
        <!-----burger button and menu----->
        <div class="header__burger_menu">
            <div class="burger-menu">
                <div class="burger-icon" id="burger-icon">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <div class="menu" id="menu">
                    <div class="burger__menu__container">
                        <div class="burger__menu__language">
                            <a href="#">
                                <p>AZ</p>
                            </a>
                            <a href="#">
                                <p>RU</p>
                            </a>
                            <a href="#">
                                <p>ENG</p>
                            </a>
                        </div>

                        <div class="burger__menu__login">
                            <a href="./b2b.php?page=login">
                                <p>Вход</p>
                            </a>
                        </div>

                        <div class="burger__menu__registration">
                            <a href="./b2b.php?page=registration">
                                <p>Регистрация</p>
                            </a>
                        </div>

                        <div class="burger__navigation__wrapper">
                            <div class="burger__navigation__element">
                                <a href="#">
                                    <p>Книга ремонта</p>
                                </a>
                                <a href="#">
                                    <p>Построй дом!</p>
                                </a>
                                <a href="#">
                                    <p>B2B</p>
                                </a>
                                <a href="#">
                                    <p>О проекте</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</header>