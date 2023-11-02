<style>
    <?php include './style/edit_item.css' ?>
</style>
<div class="edit__item__wrapper">
    <div class="edit__item__container">
        <div class="edit__item__name">
            <p>Редактирование Товара</p>
        </div>

        <div class="edit__item__category">
            <p>Название Категории</p>
        </div>
        <div class="edit__item__tags">
            <p>#подкатегории #подкатегории</p>
        </div>
        <div class="edit__item__size">
            <p>свойства (цвет) (размер)</p>
        </div>
        <div class="edit__item__country_company">
            <p>Страна Производителя</p>
            <p>Название Компании</p>
        </div>
        <div class="edit__item__fotography">
            <div class="edit__item__fotography__name">
                <p>Фотографии</p>
            </div>
            <div class="edit__item__fotography__container">
                <div class="image-input">
                    <input type="file" accept="image/*" id="imageInput1" class="image-file-input">
                    <label for="imageInput1" class="image-button">+</label>
                    <img src="" class="image-preview">
                    <span class="change-image"><p>Delete</p></span>
                </div>
                <div class="image-input">
                    <input type="file" accept="image/*" id="imageInput2" class="image-file-input">
                    <label for="imageInput2" class="image-button">+</label>
                    <img src="" class="image-preview">
                    <span class="change-image"><p>Delete</p></span>
                </div>
                <div class="image-input">
                    <input type="file" accept="image/*" id="imageInput3" class="image-file-input">
                    <label for="imageInput3" class="image-button">+</label>
                    <img src="" class="image-preview">
                    <span class="change-image"><p>Delete</p></span>
                </div>
                <div class="image-input">
                    <input type="file" accept="image/*" id="imageInput4" class="image-file-input">
                    <label for="imageInput4" class="image-button">+</label>
                    <img src="" class="image-preview">
                    <span class="change-image"><p>Delete</p></span>
                </div>
                <div class="image-input">
                    <input type="file" accept="image/*" id="imageInput5" class="image-file-input">
                    <label for="imageInput5" class="image-button">+</label>
                    <img src="" class="image-preview">
                    <span class="change-image"><p>Delete</p></span>
                </div>
            </div>

        </div>
        <div class="edit__items__sertificates">
            <div class="edit__items__sertificates__name">
                <p>Сертификаты</p>
            </div>
            <div class="edit__items__sertificates__container">

            </div>
        </div>

        <div class="edit__items__delete__save">
            <div class="edit__items__delete">
                <a href="#">
                    <p>Удалить объявление</p>
                </a>
            </div>
            <div class="edit__items__save">
                <a href="#">
                    <p>Сохранить</p>
                </a>
            </div>
        </div>

    </div>
</div>

<script>
    // Handle each image input separately
    $('.image-file-input').on('change', function() {
        const $input = $(this);
        const $parent = $input.closest('.image-input');
        const $preview = $parent.find('.image-preview');
        const $button = $parent.find('.image-button');
        const $changeImage = $parent.find('.change-image');

        if ($input[0].files && $input[0].files[0]) {
            const fileReader = new FileReader();
            fileReader.onload = function(e) {
                $preview.attr('src', e.target.result);
                $button.css('display', 'none');
                $preview.css('display', 'block');
                $changeImage.css('display', 'block');
            };
            fileReader.readAsDataURL($input[0].files[0]);
        }
    });

    // Handle the "Choose different image" action for each input
    $('.change-image').on('click', function() {
        const $control = $(this);
        const $parent = $control.closest('.image-input');
        const $input = $parent.find('.image-file-input');
        const $preview = $parent.find('.image-preview');
        const $button = $parent.find('.image-button');

        $input.val('');
        $preview.attr('src', '');
        $preview.css('display', 'none');
        $control.css('display', 'none');
        $button.css('display', 'flex');
    });
</script>