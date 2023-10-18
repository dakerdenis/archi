<style>
    <?php include './style/change__status.css' ?>
</style>

<div class="change__status__main">
    <div class="change__status__name">
        <p>Смена Статуса</p>
    </div>
    <div class="change__status__content">
        <div class="change__status__wrapper">
            <!------>
            <div class="change__status__element">
                <div class="change__status__element__wrapper">
                    <div class="change__status__element__image change__status__element__image1">
                        <img src="./imgs/change_status.svg" alt="">
                    </div>

                    <div class="change__status__element__content">
                        <div class="change__status__element__desc">
                            <p>
                                Количество категорий: 1
                            </p>
                            <p>
                                Количество подкатегорий: 3
                            </p>
                            <p>
                                Количество товаров: 5
                            </p>
                        </div>
                        <div class="change__status__element__price">
                            <p>БЕСПЛАТНО</p>
                        </div>
                    </div>
                </div>

            </div>
            <!------>
            <div class="change__status__element">
                <div class="change__status__element__wrapper">
                    <div class="change__status__element__image change__status__element__image2">
                        <img src="./imgs/change_status.svg" alt="">
                    </div>

                    <div class="change__status__element__content">
                        <div class="change__status__element__desc">
                            <p>
                                Количество категорий: 2
                            </p>
                            <p>
                                Количество подкатегорий: 5
                            </p>
                            <p>
                                Количество товаров: 7
                            </p>
                        </div>
                        <div class="change__status__element__price">
                            <p>20 AZN в месяц</p>
                        </div>
                    </div>
                </div>

                <div class="change__status__element__change">
                    <button id="openPopup" class="openPopupButton">
                        Сменить статус
                    </button>
                </div>
            </div>
            <!------>
            <div class="change__status__element">
                <div class="change__status__element__wrapper">
                    <div class="change__status__element__image change__status__element__image3">
                        <img src="./imgs/change_status.svg" alt="">
                    </div>

                    <div class="change__status__element__content">
                        <div class="change__status__element__desc">
                            <p>
                                Количество категорий: 3
                            </p>
                            <p>
                                Количество подкатегорий: 8
                            </p>
                            <p>
                                Количество товаров: 10
                            </p>
                            <p>
                                Статьи: 1
                            </p>
                        </div>
                        <div class="change__status__element__price">
                            <p>50 AZN в месяц</p>
                        </div>
                    </div>
                </div>

                <div class="change__status__element__change">
                    <button id="openPopup" class="openPopupButton">
                        Сменить статус
                    </button>
                </div>
            </div>
            <!------>
            <div class="change__status__element">
                <div class="change__status__element__wrapper">
                    <div class="change__status__element__image change__status__element__image4">
                        <img src="./imgs/change_status.svg" alt="">
                    </div>

                    <div class="change__status__element__content">
                        <div class="change__status__element__desc">
                            <p>
                                Количество категорий: 5
                            </p>
                            <p>
                                Количество подкатегорий: 10
                            </p>
                            <p>
                                Количество товаров: 100
                            </p>
                            <p>Статьи: 3</p>
                            <p>Попадание статей
                                в рекламный блок</p>
                        </div>
                        <div class="change__status__element__price">
                            <p>150 AZN в месяц</p>
                        </div>
                    </div>
                </div>

                <div class="change__status__element__change">
                    <button id="openPopup" class="openPopupButton">
                        Сменить статус
                    </button>
                </div>
            </div>

        </div>

        <div id="popupContainer" class="popup">
            <div id="popupContent">
                <div class="popup__wrapper">
                    <div class="popup__element">
                        <div class="popup__element__name">
                            <p>1 месяц</p>
                        </div>

                        <div class="popup__price__image__number__wrapper">
                            <div class="popup__price__image">

                            </div>
                            <div class="popup__price__number">
                                <p>20 AZN</p>
                            </div>
                        </div>

                        <div class="popup__buy">
                            <a href="#">
                                <p>Приобрести</p>
                            </a>
                        </div>
                    </div>
                    <div class="popup__element">
                        <div class="popup__element__name">
                            <p>6 месяцев</p>
                        </div>

                        <div class="popup__price__image__number__wrapper">
                            <div class="popup__price__image">
                                <p>120 AZN</p>
                                <img src="./imgs/crest.svg" alt="">
                            </div>
                            <div class="popup__price__number">
                                <p>100 AZN</p>
                            </div>
                        </div>

                        <div class="popup__buy">
                            <a href="#">
                                <p>Приобрести</p>
                            </a>
                        </div>
                    </div>
                    <div class="popup__element">
                        <div class="popup__element__name">
                            <p>12 месяцев</p>
                        </div>

                        <div class="popup__price__image__number__wrapper">
                            <div class="popup__price__image">
                                <p>240 AZN</p>
                                <img src="./imgs/crest.svg" alt="">
                            </div>
                            <div class="popup__price__number">
                                <p>200 AZN</p>
                            </div>
                        </div>

                        <div class="popup__buy">
                            <a href="#">
                                <p>Приобрести</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


<script>
const openButtons = document.querySelectorAll('.openPopupButton');
const popup = document.getElementById('popupContainer');

openButtons.forEach(button => {
    button.addEventListener('click', () => {
        popup.style.display = 'block';
        document.body.style.overflow = 'hidden'; // Disable scrolling on the body
    });
});

document.addEventListener('click', (event) => {
    if (event.target === popup) {
        closePopup();
    }
});

function closePopup() {
    popup.style.display = 'none';
    document.body.style.overflow = 'auto'; // Enable scrolling on the body
}


</script>