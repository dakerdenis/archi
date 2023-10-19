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

                    <div class="profile__desc__social">
                        <div class="profile__desc__social__element">
                            <a href="#">
                                <img src="./imgs/wp1.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="./imgs/inst1.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="./imgs/face1.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="./imgs/link1.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="./imgs/globe1.svg" alt="">
                            </a>
                        </div>
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

        <div class="edit__company__submit">
            <button>
                <p>Сохранить изменения</p>
            </button>
        </div>
    </form>

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
</script>