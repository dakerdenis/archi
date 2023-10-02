<header class="header__container">
    <div class="header__wrapper">
        <!-------IMAGE-------->
        <div class="header__image">
            <a href="./index.php">
                <img src="./imgs/logo.png" alt="Archi logo">
            </a>
        </div>
        <!-----NAVIGATION------>
        <div class="header__navigation">
            <ul>
                <li><a href="./index.php?page=pages">Статьи</a></li>
                <li><a href="./index.php?page=goods">Построй дом!</a></li>
                <li><a href="./b2b.php">B2B</a></li>
                <li><a href="#">О проекте</a></li>
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

                        <a href="./index.php?page=login" class="dropdown__login_block __login__green">
                            <p>Вход</p>
                        </a>
                        <a href="./index.php?page=registration" class="dropdown__login_block">
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
                            <a href="#">
                                <p>Вход</p>
                            </a>
                        </div>

                        <div class="burger__menu__registration">
                            <a href="#">
                                <p>Регистрация</p>
                            </a>
                        </div>

                        <div class="burger__navigation__wrapper">
                            <a class="burger__navigation__activea" href="#">
                                <p>Книга ремонта</p>
                            </a>
                            <a class="" href="#">
                                <p>Построй дом!</p>
                            </a>
                            <a class="" href="#">
                                <p>B2B</p>
                            </a>
                            <a class="" href="#">
                                <p>О проекте</p>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


    </div>
</header>