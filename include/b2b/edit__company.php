<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<style>
    /*********GOES FIRST************/
    <?php include './style/b2b/company__profile.css' ?>
    /********GOES SECOND************/
    <?php include './style/b2b/edit__company.css' ?>
</style>
<div class="company__profile__container">
    <div class="company__profile__name">
        <p>Личный кабинет</p>
    </div>
    <div class="company__profile__wrapper">
        <!------------->
        <div class="company__profile__desc">
            <!----FOTO AND DESCRIPTION------>
            <div class="company__profile__desc__wrapper">
                <div class="profile__desc__fotoviews">
                    <div class="profile__desc__foto">
                        <img src="./imgs/1.jpg" alt="" srcset="">
                    </div>

                    <div class="profile__desc__views">
                        <img src="./imgs/eye.svg" alt="" srcset="">
                        <p>1200</p>
                    </div>

                    <div class="profile__desc__change__foto">
                        <a href="#">
                            <p>Изменить лого бизнеса</p>
                        </a>
                    </div>

                </div>
                <div class="profile__desc">
                    <div class="profile__desc__name">
                        <p>Название какой-нибудь компании</p>
                    </div>
                    <div class="profile__desc__location">
                        <p><span>Страна:</span> Скеллиге</p>
                        <p><span>Город:</span> Каэр-Трольде</p>
                    </div>
                    <div class="profile__desc__date">
                        <p>Дата основания: 01.02.2023</p>
                    </div>
                    <div class="profile__desc__date__more">
                        <p><span>Добавлено:</span> 01.01.2023</p>
                        <p><span>Обновлено:</span> 15.08.2023</p>
                    </div>
                    <div class="profile__desc__contacts__name">
                        <p>Контакты</p>
                    </div>
                    <div class="profile__desc__contacts">
                        <div class="profile__desc__contacts__all">
                            <p>Общие</p>
                            <p>+994 00 000 00 00</p>
                            <p>email@company.com</p>
                        </div>
                        <div class="profile__desc__contacts__represent">
                            <p>Представитель</p>
                            <p>+994 00 000 00 00</p>
                            <p>email@company.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------->
    </div>
    <form action="" class="edit__company__form">
        <div class="edit__company__name">
            <p>Редактирование данных</p>
        </div>
        <div class="edit__company__wrapper">
            <div class="edit__company__input">
                <input type="text" placeholder="Изменить название бизнеса">
            </div>
            <div class="edit__company__input">
                <input type="text" placeholder="Изменить e-mail компании">
            </div>
            <div class="edit__company__input">
                <input type="text" placeholder="Изменить номер телефона компании">
            </div>
            <div class="edit__company__input">
                <input type="text" placeholder="Изменить e-mail представителя">
            </div>
            <div class="edit__company__input">
                <input type="text" placeholder="Изменить номер телефона представителя">
            </div>
            <div class="edit__company__input">
                <input type="text" placeholder="Изменить Описание">
            </div>
        </div>

        <div class="edit__company__name">
            <p>Редактирование ссылок</p>
        </div>
        <div class="edit__company__wrapper">
            <div class="edit__company__input">
                <input type="text" placeholder="Ссылка Whatsapp">
            </div>
            <div class="edit__company__input">
                <input type="text" placeholder="Ссылка Instagram">
            </div>
            <div class="edit__company__input">
                <input type="text" placeholder="Ссылка Facebook">
            </div>
            <div class="edit__company__input">
                <input type="text" placeholder="Ссылка Linkedin">
            </div>
            <div class="edit__company__input">
                <input type="text" placeholder="Ссылка на сайт">
            </div>
        </div>






        <div class="edit__company__name edit__company__name_sert">
            <p>Редактирование сертификатов</p>
            <p id="openPopup">
                <img src="./imgs/plus.png" alt="">
            </p>
        </div>
        <div class="edit__company__wrapper">
            <div class="edit__company__certificate">
                <div class="edit__company__certificate__name">
                    <p>Название сертификата</p>
                    <p>
                        <img src="./imgs/delete.png" alt="">
                    </p>
                </div>
            </div>

            <div class="edit__company__certificate">
                <div class="edit__company__certificate__name">
                    <p>Название сертификата</p>
                    <p>
                        <img src="./imgs/delete.png" alt="">
                    </p>
                </div>
            </div>

        </div>

        <div class="edit__company__submit">
            <button>
                <p>Сохранить изменения</p>
            </button>
        </div>
    </form>

</div>




<div class="popup-overlay" id="popupOverlay">
    <div class="popup" id="popup">
        <span class="close" id="closePopup">X</span>
        <form class="popup__content">
            <div class="popup__name">
                *Размер файла не более 5мб
            </div>
            <div class="popup__input">
                <div class="file-upload">
                    <input type="file" id="fileInput" accept=".pdf, .xlsx, .docx" style="display: none;">
                    <label for="fileInput" class="custom-label">
                        Загрузите Сертификат
                    </label>
                    <p>+</p>
                </div>
            </div>
            <p class="error-message" style="color: red; display: none;">File size exceeds 5MB</p>
            <div class="popup__upload">
                <button id="upload__okay" type="submit">
                    <p>Загрузить</p>
                </button>
            </div>
        </form>
    </div>
</div>


<!-- Initialize Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


<!-- Initialize Swiper -->
<script>
    // Swiper 1
    var swiper1 = new Swiper(".mySwiper1", {
        slidesPerView: 5,
        spaceBetween: 35,
        freeMode: true,
        navigation: {
            nextEl: ".swiper-button-next1",
            prevEl: ".swiper-button-prev1"
        }
    });

    // Swiper 2
    var swiper2 = new Swiper(".mySwiper0", {
        slidesPerView: 1,
        spaceBetween: 35,
        freeMode: false,
        navigation: {
            nextEl: ".swiper-button-next0",
            prevEl: ".swiper-button-prev0"
        }
    });







    const openPopupButton = document.getElementById("openPopup");
    const popupOverlay = document.getElementById("popupOverlay");
    const closePopupButton = document.getElementById("closePopup");

    openPopupButton.addEventListener("click", function() {
        popupOverlay.style.display = "block";
    });

    closePopupButton.addEventListener("click", function() {
        popupOverlay.style.display = "none";
    });

    popupOverlay.addEventListener("click", function(event) {
        if (event.target === popupOverlay) {
            popupOverlay.style.display = "none";
        }
    });

    document.addEventListener("keydown", function(event) {
        if (event.key === "Escape") {
            popupOverlay.style.display = "none";
        }
    });











    const fileInput = document.getElementById('fileInput');
const fileLabel = document.querySelector('.custom-label');

fileInput.addEventListener('change', handleFileSelection);

function handleFileSelection() {
    const selectedFile = fileInput.files[0];

    if (selectedFile) {
        if (selectedFile.size > 5 * 1024 * 1024) {
            fileLabel.innerText = 'Файл превышает допустимый размер!';
            fileLabel.style.color = 'red';
        } else {
            fileLabel.innerText = selectedFile.name;
            fileLabel.style.color = 'initial';
        }
    } else {
        fileLabel.innerText = 'Загрузите Сертификат';
        fileLabel.style.color = 'initial';
    }
}

fileLabel.addEventListener('click', () => {
    fileInput.value = null;
    fileLabel.innerText = 'Загрузите Сертификат';
    fileLabel.style.color = 'initial';
});

</script>