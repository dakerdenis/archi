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
                <?php
                if (isset($_GET['login'])) {
                    if($_GET['login']== 'yes'){
                        include './include/burger_loggedin.php';
                    }else {
                        include './include/burger.php'; 
                    }
                } else {
                    include './include/burger.php'; 
                }
                
                ?>


                
            </div>
        </div>
        <!-----burger button and menu----->
        <div class="header__burger_menu">
            <div class="menu-container">
                <div class="burger-menu" id="burger-menu">
                    <div class="burger-icon">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>

                <div class="burger__menu__content" id="burger-menu-content">
                        <div class="burger__menu__languages">
                            <a class="" href="#">
                                <p>AZ</p>
                            </a>
                            <a class="burger__menu__languages__active" href="#">
                                <p>RU</p>
                            </a>
                            <a class="" href="#">
                                <p>ENG</p>
                            </a>
                        </div>
                        <div class="burger__menu__login">
                            <a href="./index.php?page=login">
                                <p>Вход</p>
                            </a>
                        </div>
                        <div class="burger__menu__registration">
                            <a href="./index.php?page=registration">
                                <p>Регистрация</p>
                            </a>
                        </div>
                        <div class="burger__menu__links">
                            <a href="./index.php?page=pages">
                                <p>Статьи</p>
                            </a>
                            <a href="./index.php?page=goods">
                                <p>Построй дом!</p>
                            </a>
                            <a href="./b2b.php">
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
</header>