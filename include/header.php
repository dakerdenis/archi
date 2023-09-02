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
                <li><a href="#">Книга ремонта</a></li>
                <li><a href="#">Построй дом!</a></li>
                <li><a href="#">B2B</a></li>
                <li><a href="#">О проекте</a></li>
            </ul>
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
    </div>
</header>