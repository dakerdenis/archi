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
                <li><a href="./index.php?page=pages" style="
                <?php if (isset($_GET['page'])) {
                    if ($_GET['page'] == "pages") {
                        echo "background-color: #FFFF00;";
                    }
                } ?>
                ">Статьи</a></li>
                <li><a href="./index.php?page=goods" style="
                                    <?php if (isset($_GET['page'])) {
                                        if ($_GET['page'] == "goods") {
                                            echo "background-color: #FFFF00;";
                                        }
                                    } ?>
                ">Построй дом!</a></li>
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

            <?php
            if (isset($_GET['login'])) {
                if ($_GET['login'] == 'yes') {
                    include './include/burger_loggedin.php';
                } else {
                    include './include/burger.php';
                }
            } else {
                include './include/burger.php';
            }

            ?>



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
                    <?php
                    if (isset($_GET['login'])) {
                        if ($_GET['login'] == 'yes') {
                            include './include/burger_mobile__loggedin.php';
                        } else {
                            include './include/burger_mobile.php';
                        }
                    } else {
                        include './include/burger_mobile.php';
                    }

                    ?>








                </div>




            </div>
        </div>


    </div>
</header>