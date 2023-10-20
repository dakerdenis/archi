<header class="header__container">
    <div class="header__wrapper">
        <!-------IMAGE-------->
        <div class="header__image header__image_b2b">
            <a href="./b2b.php">
                <img src="./imgs/B2B.svg" alt="Archi logo">
            </a>
        </div>
        <!-----NAVIGATION------>
        <div class="header__navigation">
            <div class="b2b__header__navigation">
                <div class="b2b__link">
                    <a href="#">
                        <p>Внешний рынок</p>
                    </a>
                </div>

                <div class="b2b__logo__archi">
                    <a href="./index.php">
                        <img src="./imgs/logo.png" alt="">
                    </a>
                </div>


                <div class="b2b__link">
                    <a href="#">
                        <p>Внутренний рынок </p>
                    </a>
                </div>
            </div>
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