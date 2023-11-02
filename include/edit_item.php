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
                <p>n/5</p>
            </div>
            <div class="edit__item__fotography__container">
                <div class="image-input">
                    <input type="file" accept="image/*" id="imageInput1" class="image-file-input">
                    <label for="imageInput1" class="image-button">+</label>
                    <img src="" class="image-preview">
                    <span class="change-image">
                        <p>Delete</p>
                    </span>
                </div>
                <div class="image-input">
                    <input type="file" accept="image/*" id="imageInput2" class="image-file-input">
                    <label for="imageInput2" class="image-button">+</label>
                    <img src="" class="image-preview">
                    <span class="change-image">
                        <p>Delete</p>
                    </span>
                </div>
                <div class="image-input">
                    <input type="file" accept="image/*" id="imageInput3" class="image-file-input">
                    <label for="imageInput3" class="image-button">+</label>
                    <img src="" class="image-preview">
                    <span class="change-image">
                        <p>Delete</p>
                    </span>
                </div>
                <div class="image-input">
                    <input type="file" accept="image/*" id="imageInput4" class="image-file-input">
                    <label for="imageInput4" class="image-button">+</label>
                    <img src="" class="image-preview">
                    <span class="change-image">
                        <p>Delete</p>
                    </span>
                </div>
                <div class="image-input">
                    <input type="file" accept="image/*" id="imageInput5" class="image-file-input">
                    <label for="imageInput5" class="image-button">+</label>
                    <img src="" class="image-preview">
                    <span class="change-image">
                        <p>Delete</p>
                    </span>
                </div>
            </div>

        </div>
        <div class="edit__items__sertificates">
            <div class="edit__items__sertificates__name">
                <p>Сертификаты</p>
            </div>
            <div class="edit__items__sertificates__container">
                <div class="document-input">
                    <input type="file" accept=".pdf,.doc,.docx,.xls,.xlsx" id="fileInput1" class="file-input">
                    <label for="fileInput1" class="file-button">+</label>
                    <div class="delete__text">Delete</div>
                    <img src="./imgs/test_cert.jpg" class="file-preview">
                    <div class="file-info">
                        <span class="file-name">No file selected</span>
                        <span class="file-error"></span>
                    </div>
                </div>
                <div class="document-input">
                    <input type="file" accept=".pdf,.doc,.docx,.xls,.xlsx" id="fileInput2" class="file-input">
                    <label for="fileInput2" class="file-button">+</label>
                    <img src="./imgs/test_cert.jpg" class="file-preview">
                    <div class="file-info">
                        <span class="file-name">No file selected</span>
                        <span class="file-error"></span>
                    </div>
                </div>
                <div class="document-input">
                    <input type="file" accept=".pdf,.doc,.docx,.xls,.xlsx" id="fileInput3" class="file-input">
                    <label for="fileInput3" class="file-button">+</label>
                    <img src="./imgs/test_cert.jpg" class="file-preview">
                    <div class="file-info">
                        <span class="file-name">No file selected</span>
                        <span class="file-error"></span>
                    </div>
                </div>
                <div class="document-input">
                    <input type="file" accept=".pdf,.doc,.docx,.xls,.xlsx" id="fileInput4" class="file-input">
                    <label for="fileInput4" class="file-button">+</label>
                    <img src="./imgs/test_cert.jpg" class="file-preview">
                    <div class="file-info">
                        <span class="file-name">No file selected</span>
                        <span class="file-error"></span>
                    </div>
                </div>
                <div class="document-input">
                    <input type="file" accept=".pdf,.doc,.docx,.xls,.xlsx" id="fileInput5" class="file-input">
                    <label for="fileInput5" class="file-button">+</label>
                    <img src="./imgs/test_cert.jpg" class="file-preview">
                    <div class="file-info">
                        <span class="file-name">No file selected</span>
                        <span class="file-error"></span>
                    </div>
                </div>

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








    
// Handle each file input separately
$('.file-input').on('change', function() {
    const $input = $(this);
    const $parent = $input.closest('.document-input');
    const $label = $parent.find('.file-button');
    const $preview = $parent.find('.file-preview');
    const $name = $parent.find('.file-name');
    const $error = $parent.find('.file-error');

    if ($input[0].files && $input[0].files[0]) {
        const file = $input[0].files[0];
        const maxSize = 2 * 1024 * 1024; // 2 megabytes

        if (file.size <= maxSize) {
            $error.text('');
            $label.hide(); // Hide the label
            $preview.show(); // Show the placeholder image
            const fileName = file.name.length > 20 ? file.name.substring(0, 20) + '...' : file.name;
            $name.text(fileName);
            
            // Allow the user to change the uploaded file by clicking the preview
            $preview.on('click', function() {
                $input.val('');
                $label.show(); // Show the label
                $preview.hide(); // Hide the placeholder image
                $name.text('No file selected');
                $preview.off('click'); // Remove the click event after clearing the file
            });
        } else {
            $input.val('');
            $error.text('File size exceeds 2MB');
            $label.show(); // Show the label
            $preview.hide(); // Hide the placeholder image
            $name.text('No file selected');
        }
    } else {
        $error.text('');
        $label.show(); // Show the label
        $preview.hide(); // Hide the placeholder image
        $name.text('No file selected');
    }
});

// Handle the "Choose different file" action for each input
$('.file-button').on('click', function() {
    const $control = $(this);
    const $parent = $control.closest('.document-input');
    const $input = $parent.find('.file-input');
    const $name = $parent.find('.file-name');
    const $error = $parent.find('.file-error');
    const $preview = $parent.find('.file-preview');

    $input.val('');
    $error.text('');
    $control.show(); // Show the label
    $preview.hide(); // Hide the placeholder image
    $name.text('No file selected');
    $preview.off('click'); // Remove the click event from the preview
});

</script>