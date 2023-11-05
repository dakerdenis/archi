<style>
    <?php include './style/b2b/change__category.css' ?>
</style>

<div class="change__category__wrapper">
    <div class="change__category__name">
        <p>РЕДАКТИРОВАНИЕ КАТЕГОРИЙ</p>
    </div>
    <div class="change__category__container">
        <div class="change__category__desc">
            <p>Ваши категории</p>
        </div>
        <div id="your__categories" class="change__category__content-block">
            <!---_--->
            <div id="block" class="category__block">
                <div class="category__block__name">
                    <p>SADasdasdasd</p>
                </div>
            </div>

            <!---_--->
            <div id="block" class="category__block ">
                <div class="category__block__name">
                    <p>Ландшафт</p>
                </div>
            </div>

            <!---_--->
            <div id="block" class="category__block">
                <div class="category__block__name">
                    <p>bhg düaüfas sdhfgjukfdsf sdfsdffsdfs</p>
                </div>
            </div>
        </div>




        <div class="change__category__desc change__category__desc_2">
            <p>Добавьте категорию</p>
        </div>
        <div id="add__category" class="change__category__content-block">
            <!---_--->
            <div id="block" class="category__block">
                <div class="category__block__name">
                    <p>Сантехника/Электрика</p>
                </div>
            </div>
            <!---_--->
            <div id="block" class="category__block">
                <div class="category__block__name">
                    <p>Сантехника/Электрика</p>
                </div>
            </div>
            <!---_--->
            <div id="block" class="category__block">
                <div class="category__block__name">
                    <p>Строительные материалы</p>
                </div>
            </div>
            <!---_--->
            <div id="block" class="category__block">
                <div class="category__block__name">
                    <p>Ландшафт</p>
                </div>
            </div>

            <!---_--->
            <div id="block" class="category__block">
                <div class="category__block__name">
                    <p>Ландшафт</p>
                </div>
            </div>

            <!---_--->
            <div id="block" class="category__block">
                <div class="category__block__name">
                    <p>Ландшафт</p>
                </div>
            </div>
        </div>



        <div class="change__category__buttons_block ">
            <button class="change__category__buttons" id="delete_category">
                <p>Удалить</p>
            </button>

            <button class="change__category__buttons" id="add_category">
                <p>ДОбавить</p>
            </button>
        </div>


    </div>
</div>


<script>
// Get all the "block" elements inside both containers
const yourCategoriesBlocks = document.querySelectorAll('#your__categories .category__block');
const addCategoryBlocks = document.querySelectorAll('#add__category .category__block');
const deleteCategoryButton = document.getElementById('delete_category');
const addCategoryButton = document.getElementById('add_category');

// Function to add the "category__block__inactive" class to all "block" elements
function deactivateBlocks() {
  yourCategoriesBlocks.forEach((block) => {
    block.classList.add('category__block__inactive');
  });
  addCategoryBlocks.forEach((block) => {
    block.classList.add('category__block__inactive');
  });
}

// Function to activate the "delete_category" button and deactivate the "add_category" button
function activateDeleteCategoryButton() {
  deleteCategoryButton.classList.add('change__category__buttons__delete');
  addCategoryButton.classList.remove('change__category__buttons__add');
}

// Function to activate the "add_category" button and deactivate the "delete_category" button
function activateAddCategoryButton() {
  addCategoryButton.classList.add('change__category__buttons__add');
  deleteCategoryButton.classList.remove('change__category__buttons__delete');
}

// Add a click event listener to each "block" element in yourCategories
yourCategoriesBlocks.forEach((block) => {
  block.addEventListener('click', () => {
    // First, deactivate all "block" elements
    deactivateBlocks();
    
    // Then, remove the "category__block__inactive" class from the clicked block
    block.classList.remove('category__block__inactive');
    
    // Activate the "delete_category" button
    activateDeleteCategoryButton();
  });
});

// Add a click event listener to each "block" element in addCategory
addCategoryBlocks.forEach((block) => {
  block.addEventListener('click', () => {
    // First, deactivate all "block" elements
    deactivateBlocks();
    
    // Then, remove the "category__block__inactive" class from the clicked block
    block.classList.remove('category__block__inactive');
    
    // Activate the "add_category" button
    activateAddCategoryButton();
  });
});

</script>
