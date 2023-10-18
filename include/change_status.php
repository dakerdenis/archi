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
                    <button id="openPopup">
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
                    <button id="openPopup">
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
                    <button id="openPopup">
                        Сменить статус
                    </button>
                </div>
            </div>

        </div>

        <div id="popupContainer" class="popup">
            <div id="popupContent">
                <p>This is your popup content.</p>
            </div>
        </div>


    </div>
</div>


<script>
const openButton = document.getElementById('openPopup');
const popup = document.getElementById('popupContainer');

openButton.addEventListener('click', () => {
    popup.style.display = 'block';
    document.body.style.overflow = 'hidden'; // Disable scrolling on the body
});

document.addEventListener('click', (event) => {
    if (event.target !== openButton && !popup.contains(event.target)) {
        popup.style.display = 'none';
        document.body.style.overflow = 'auto'; // Enable scrolling on the body
    }
});

// Close the popup when the popup container is clicked
popup.addEventListener('click', (event) => {
    if (event.target === popup) {
        popup.style.display = 'none';
        document.body.style.overflow = 'auto'; // Enable scrolling on the body
    }
});

</script>