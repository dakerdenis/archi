<style>
    <?php include './style/new_buisness.css' ?>
</style>
<div class="new_buisness__page">
    <div class="new_buisness__page__container">
        <div class="new_buisness__name">
            <p>Добавление товара</p>
        </div>
        <form action="" class="new_buisness__form">
            <div class="new_buisness__form__wrapper">
                <!----Категории подкатегории---->
                <div class="new_buisness__input__container">
                    <div class="new_buisness__input__wrapper new_buisness__double-input new_buisness__double-input__mobile">
                        <div class="custom-dropdown" id="dropdown1">
                            <input type="text" class=" dropdown-input" placeholder="Выбор категорий" readonly>
                            <div class="arrow"></div>
                            <ul class="dropdown-list">
                                <li data-value="Электрика">Электрика </li>
                                <li data-value="Сантехника">Сантехника</li>
                                <li data-value="Мебель">Мебель</li>
                            </ul>
                        </div>

                        <div class="custom-dropdown" id="dropdown2">
                            <input type="text" class=" dropdown-input" placeholder="Выбор подкатегорий" readonly>
                            <div class="arrow"></div>
                            <ul class="dropdown-list">
                                <li data-value="Лампочки">Лампочки</li>
                                <li data-value="Провода">Провода</li>
                                <li data-value="Люстры">Люстры</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="new__item__property__desc">
                    <p>Свойства</p>
                </div>
                <!----Производитель + название---->
                <div class="new_buisness__input__container new_buisness__double-input">
                    <div class="new_buisness__input__name">
                        <p>Производитель</p>
                    </div>
                    <div class="new_buisness__input__wrapper new_buisness__double-input new_buisness__double-input__mobile">
                        <div class="custom-dropdown" id="dropdown3">
                            <input type="text" class=" dropdown-input" placeholder="Страна" readonly>
                            <div class="arrow"></div>
                            <ul class="dropdown-list">
                                <li data-value="Азербайджан">Азербайджан</li>
                                <li data-value="Россия">Россия</li>
                                <li data-value="Туркменистан">Туркменистан</li>
                            </ul>
                        </div>
                        <input type="text" class="company__name__input" placeholder="Название компании">
                    </div>                    
                </div>
                

                <!----Добавление медиафайлов---->
                <div class="new_buisness__input__container">
                    <div class="new_buisness__input__name">
                        <p>Добавление медиафайлов</p>
                    </div>
                    <div class="new_buisness__input__wrapper new_buisness__input__wrapper_upload">
                        <div class="new__buisness__upload_input">
                            <input type="file" id="fileInput" class="custom-file-input" onchange="displayFileName(this)" />
                            <label for="fileInput" class="custom-file-label">Загрузить Фотографии</label>

                        </div>
                        <div id="selectedFileName" class="selected-file-name"></div>
                    </div>


                    <div class="new_buisness__input__wrapper new_buisness__input__wrapper_upload">
                        <div class="new__buisness__upload_input">
                            <input type="file" id="fileInput1" class="custom-file-input" onchange="displayFileName(this)" />
                            <label for="fileInput1" class="custom-file-label">Загрузить Сертификаты</label>

                        </div>
                        <div id="selectedFileName1" class="selected-file-name"></div>
                    </div>

                </div>
                <!----Добавление сертификатов---->
                <div class="new_buisness__input__container">

                </div>

                <div class="add_buisness__button">
                    <button>
                        <p>Добавить</p>
                    </button>
                </div>
                
            </div>
        </form>
    </div>
</div>


<script>
    $(document).ready(function() {
        // Add a click event handler for all custom-dropdowns
        $(".custom-dropdown").each(function() {
            const $dropdown = $(this);
            const $input = $dropdown.find(".dropdown-input");
            const $list = $dropdown.find(".dropdown-list");

            $input.click(function() {
                $dropdown.toggleClass("open"); // Add or remove the 'open' class
                $list.toggle();
            });

            $list.find("li").click(function() {
                const selectedCity = $(this).attr("data-value");
                $input.val(selectedCity);
                $input.prop("readonly", true);
                $list.hide();
                $dropdown.removeClass("open"); // Remove 'open' class when the list is closed
            });

            // Close the dropdown when clicking outside
            $(document).click(function(event) {
                if (!$(event.target).closest(".custom-dropdown").is($dropdown)) {
                    $input.prop("readonly", true);
                    $list.hide();
                    $dropdown.removeClass("open"); // Remove 'open' class when the list is closed
                }
            });
        });
    });






    $(document).ready(function() {
        const $datepicker = $(".custom-datepicker");
        const $input = $datepicker.find(".datepicker-input");
        const $popup = $datepicker.find(".datepicker-popup");

        // Function to populate the year and month selects
        function populateYearMonthSelects() {
            const currentYear = new Date().getFullYear();
            const $yearSelect = $popup.find(".year-select");
            const $monthSelect = $popup.find(".month-select");

            for (let year = currentYear - 30; year <= currentYear + 5; year++) {
                $yearSelect.append(`<option value="${year}">${year}</option>`);
            }

            const months = [
                "January", "February", "March", "April",
                "May", "June", "July", "August",
                "September", "October", "November", "December"
            ];

            for (let i = 0; i < months.length; i++) {
                $monthSelect.append(`<option value="${i}">${months[i]}</option>`);
            }
        }

        // Function to generate and populate the days grid
        function populateDaysGrid(year, month) {
            const $daysGrid = $popup.find(".datepicker-days");
            $daysGrid.empty();

            // Calculate the first day of the month (0 = Sunday, 1 = Monday, etc.)
            const firstDayOfMonth = new Date(year, month, 1).getDay();

            // Calculate the number of days in the selected month
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            // Fill in empty cells before the first day of the month
            for (let i = 0; i < firstDayOfMonth; i++) {
                $daysGrid.append("<div></div>");
            }

            // Populate the days
            for (let day = 1; day <= daysInMonth; day++) {
                $daysGrid.append(`<div>${day}</div>`);
            }
        }

        // Toggle date picker visibility
        $input.click(function() {
            $popup.toggleClass("open");
            if ($popup.hasClass("open")) {
                populateYearMonthSelects();
                const selectedYear = parseInt($popup.find(".year-select").val());
                const selectedMonth = parseInt($popup.find(".month-select").val());
                populateDaysGrid(selectedYear, selectedMonth);
            }
        });

        // Handle year and month selection
        $popup.find(".year-select, .month-select").change(function() {
            const selectedYear = parseInt($popup.find(".year-select").val());
            const selectedMonth = parseInt($popup.find(".month-select").val());
            populateDaysGrid(selectedYear, selectedMonth);
        });

        // Handle day selection
        $popup.on("click", ".datepicker-days div", function() {
            const selectedYear = parseInt($popup.find(".year-select").val());
            const selectedMonth = parseInt($popup.find(".month-select").val()) + 1; // Add 1 to month to match human-readable format
            const selectedDay = parseInt($(this).text());

            // Format the date as "day.month.year"
            const formattedDate = `${selectedDay}.${selectedMonth}.${selectedYear}`;

            // Update the input field with the formatted date
            $input.val(formattedDate);

            // Close the date picker
            $popup.removeClass("open");
        });


        // Close date picker when clicking outside
        $(document).click(function(event) {
            if (!$(event.target).closest(".custom-datepicker").length) {
                $popup.removeClass("open");
            }
        });
    });
</script>