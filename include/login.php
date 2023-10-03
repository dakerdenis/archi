<style>
    <?php include './style/main.css' ?><?php include './style/login.css' ?>
</style>

<div class="login__page__container">
    <div class="login__page__name">
        <p>ВХОД</p>
    </div>
    <div class="login__page__form">
        <form id="loginForm" action="#" method="post">
            <div class="login__input__container">
                <input type="text" placeholder="Логин">
            </div>
            <div class="login__input__container">
                <input type="text" placeholder="Пароль">
            </div>
            <div class="login__input__password">
                <button id="openPopup">Забыли пароль?</button>
            </div>
            


            <div class="login__input__button">
                <button>Вход</button>
            </div>

            <div class="login__input__button">
                <a href="#">
                    <p>Регистрация</p>
                </a>
            </div>
        </form>
        <div id="popup" class="popup">
                <div class="popup-content">
                    <span class="close" id="closePopup">&times;</span>
                    <form class="popup__container">
                        <div class="popup__name">
                            <p>ВОССТАНОВЛЕНИЕ ПАРОЛЯ</p>
                        </div>
                        <div class="popup__input__container">
                            <input type="text" placeholder="Введите эмейл или номер телефона">
                        </div>
                        <div class="popup__reset">
                            <button>Восстановить</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <script>
        document.getElementById('loginForm').addEventListener("submit", (event) => {
            event.preventDefault();
        })
        var popup = document.getElementById("popup");
        var openPopupButton = document.getElementById("openPopup");
        var closePopupButton = document.getElementById("closePopup");


        openPopupButton.addEventListener("click", function() {
            popup.style.display = "block";
            document.addEventListener("click", closePopupOutside);
        });


        function closePopupOutside(event) {
            if (event.target === popup) {
                popup.style.display = "none";
                document.removeEventListener("click", closePopupOutside);
            }
        }

        closePopupButton.addEventListener("click", function() {
            popup.style.display = "none";
            document.removeEventListener("click", closePopupOutside);
        });
    </script>











    <div class="login__page__advertisement">
        <div class="advertisement__block">
            <div class="advertisement__blockBig">
                <!---CONTENT BLOCK----->
                <div class="advertisement__block__content">
                    <img src="./imgs/1.jpg" alt="Advertisement">
                    <div class="advertisement__block__maincontent">
                        <div class="advertisement__block__text">
                            <div class="advertisement__block__name">
                                <p>Доставка керамогранита</p>
                            </div>
                            <div class="advertisement__block__desc">
                                <p>
                                    Компания «G-Stone» является лидером
                                    в поставках самого качественного и
                                    долговечного керамогранита.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="advertisement__blockBig">

                <div class="advertisement__blockSmall">
                    <!---CONTENT BLOCK----->
                    <div class="advertisement__block__content">
                        <img src="./imgs/1.jpg" alt="Advertisement">
                        <div class="advertisement__block__maincontent">
                            <div class="advertisement__block__text">
                                <div class="advertisement__block__name">
                                    <p>Доставка керамогранита</p>
                                </div>
                                <div class="advertisement__block__desc">
                                    <p>
                                        Компания «G-Stone» является лидером
                                        в поставках самого качественного и
                                        долговечного керамогранита.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="advertisement__blockSmall">
                    <!---CONTENT BLOCK----->
                    <div class="advertisement__block__content">
                        <img src="./imgs/1.jpg" alt="Advertisement">
                        <div class="advertisement__block__maincontent">
                            <div class="advertisement__block__text">
                                <div class="advertisement__block__name">
                                    <p>Доставка керамогранита</p>
                                </div>
                                <div class="advertisement__block__desc">
                                    <p>
                                        Компания «G-Stone» является лидером
                                        в поставках самого качественного и
                                        долговечного керамогранита.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="advertisement__blockSmall">
                    <!---CONTENT BLOCK----->
                    <div class="advertisement__block__content">
                        <img src="./imgs/1.jpg" alt="Advertisement">
                        <div class="advertisement__block__maincontent">
                            <div class="advertisement__block__text">
                                <div class="advertisement__block__name">
                                    <p>Доставка керамогранита</p>
                                </div>
                                <div class="advertisement__block__desc">
                                    <p>
                                        Компания «G-Stone» является лидером
                                        в поставках самого качественного и
                                        долговечного керамогранита.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advertisement__blockSmall">
                    <!---CONTENT BLOCK----->
                    <div class="advertisement__block__content">
                        <img src="./imgs/1.jpg" alt="Advertisement">
                        <div class="advertisement__block__maincontent">
                            <div class="advertisement__block__text">
                                <div class="advertisement__block__name">
                                    <p>Доставка керамогранита</p>
                                </div>
                                <div class="advertisement__block__desc">
                                    <p>
                                        Компания «G-Stone» является лидером
                                        в поставках самого качественного и
                                        долговечного керамогранита.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>