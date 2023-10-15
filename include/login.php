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
                <a href="./index.php?page=registration">
                    <p>Регистрация</p>
                </a>
            </div>
        </form>
        <div id="popup" class="popup">
            <div class="popup-content">
                <span class="close" id="closePopup">&times;</span>
                <div id="preloader" class="preloader">
                    <div class="preloader__container">
                        <div id="loader"></div>
                    </div>
                </div>
                <form id="resetPassword" class="popup__container">
                    <div id="popup__name" class="popup__name">
                        <p>ВОССТАНОВЛЕНИЕ ПАРОЛЯ</p>
                    </div>
                    <div id="popup__input__container" class="popup__input__container">
                        <input type="text" placeholder="Введите эмейл или номер телефона">
                    </div>
                    <div class="popup__reset">
                        <button id="sendEmail">Восстановить</button>
                    </div>

                    <div id="congratulations" class="hidden">
                        <div class="congratulations__container">
                            <div class="congratulations__container__img">
                                <img src="./imgs/ready.png" alt="">
                            </div>
                            <div class="congratulations__container__text">
                                <p>Код восстановления отправлен на почту!</p>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>










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

<script>
        document.getElementById('resetPassword').addEventListener("submit", (event) => {
            event.preventDefault();
        })
        document.getElementById('loginForm').addEventListener("submit", (event) => {
            event.preventDefault();
        })
        // Get the popup and button elements (same as before)
        var popup = document.getElementById("popup");
        var openPopupButton = document.getElementById("openPopup");
        var closePopupButton = document.getElementById("closePopup");
        var sendEmailButton = document.getElementById("sendEmail");
        var preloader = document.getElementById("preloader");
        var congratulations = document.getElementById("congratulations");

        // Show the popup when the button is clicked (same as before)
        openPopupButton.addEventListener("click", function() {
            popup.style.display = "block";
            document.addEventListener("click", closePopupOutside);
        });

        // Function to close the popup when clicking outside of it (same as before)
        function closePopupOutside(event) {
            if (event.target === popup) {
                popup.style.display = "none";
                document.removeEventListener("click", closePopupOutside);
            }
        }

        // Close the popup when the close button is clicked (same as before)
        closePopupButton.addEventListener("click", function() {
            popup.style.display = "none";
            document.removeEventListener("click", closePopupOutside);
        });

        // Send Email button click event
        sendEmailButton.addEventListener("click", function() {
            // Hide the current content and show the preloader
            sendEmailButton.style.display = "none";
            document.getElementById("popup__name").style.display="none";
            document.getElementById("popup__input__container").style.display="none";
            preloader.style.display = "block";

            // Simulate sending email with a 2-second delay
            setTimeout(function() {
                preloader.style.display = "none";
                congratulations.style.display = "block";
            }, 2000);
        });
    </script>
