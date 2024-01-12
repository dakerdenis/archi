<style>
    <?php include './style/new_buisness.css' ?>
</style>
<div class="new_buisness__page">
    <div class="new_buisness__page__container">
        <div class="new_buisness__name">
            <p>Добавление бизнеса</p>
        </div>
        <form action="" class="new_buisness__form">
            <div class="new_buisness__form__wrapper">
                <!----название компании---->
                <div class="new_buisness__input__container">
                    <div class="new_buisness__input__wrapper">
                        <input type="text" placeholder="Название компании">
                    </div>
                </div>
                <!----Страна город---->
                <div class="new_buisness__input__container">
                    <div class="new_buisness__input__wrapper new_buisness__double-input">
                        <div class="custom-dropdown" id="dropdown1">
                            <input type="text" class=" dropdown-input" placeholder="Страна" readonly>
                            <div class="arrow"></div>
                            <ul class="dropdown-list">
                                <li data-value="Скеллиге">Скеллиге</li>
                                <li data-value="Редания">Редания</li>
                                <li data-value="Темерия">Темерия</li>
                                <!-- Add more cities as needed -->
                            </ul>
                        </div>

                        <div class="custom-dropdown" id="dropdown2">
                            <input type="text" class=" dropdown-input" placeholder="Город" readonly>
                            <div class="arrow"></div>
                            <ul class="dropdown-list">
                                <li data-value="Oksenfurt">Oksenfurt</li>
                                <li data-value="Redaniya North">Redaniya North</li>
                                <li data-value="Ümlereich Süd">Ümlereich Süd</li>
                                <li data-value="Oksenfurt">Oksenfurt</li>
                                <li data-value="Redaniya North">Redaniya North</li>
                                <li data-value="Ümlereich Süd">Ümlereich Süd</li>
                                <li data-value="Oksenfurt">Oksenfurt</li>
                                <li data-value="Redaniya North">Redaniya North</li>
                                <li data-value="Ümlereich Süd">Ümlereich Süd</li>
                                <li data-value="Oksenfurt">Oksenfurt</li>
                                <li data-value="Redaniya North">Redaniya North</li>
                                <li data-value="Ümlereich Süd">Ümlereich Süd</li>
                                <!-- Add more cities as needed -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!----Дата основания и выбор категорий---->
                <div class="new_buisness__input__container">
                    <div class="new_buisness__input__wrapper new_buisness__double-input">
                        <div class="custom-datepicker">
                            <input type="text" class="datepicker-input" placeholder="Дата основания" readonly>
                            <div class="datepicker-popup">
                                <div class="datepicker-header">
                                    <select class="year-select"></select>
                                    <select class="month-select"></select>
                                </div>
                                <div class="datepicker-days"></div>
                            </div>
                        </div>

                        <div class="custom-dropdown" id="dropdown3">
                            <input type="text" class=" dropdown-input" placeholder="Выбор категорий" readonly>
                            <div class="arrow"></div>
                            <ul class="dropdown-list">
                                <li data-value="Мечи">Мечи</li>
                                <li data-value="Нагрудные латы">Нагрудные латы</li>
                                <li data-value="Das Üngefer Einige">Das Üngefer Einige</li>
                                <!-- Add more cities as needed -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!----Контакты компани + email---->
                <div class="new_buisness__input__container">
                    <div class="new_buisness__input__name">
                        <p>Контакты компании</p>
                    </div>
                    <div class="new_buisness__input__wrapper new_buisness__double-input">
                        <input type="number" placeholder="+994 (**) *** ** **">
                        <input type="email" placeholder="e-mail адрес">
                    </div>
                </div>
                <!----VOEN---->
                <div class="new_buisness__input__container">
                    <div class="new_buisness__input__name">
                        <p>VÖEN</p>
                    </div>
                    <div class="new_buisness__input__wrapper ">
                        <input type="email" placeholder="введите VÖEN">
                    </div>
                </div>
                <!---Контакты представитея - ФИО  ---->
                <div class="new_buisness__input__container">
                    <div class="new_buisness__input__name">
                        <p>Контакты представителя компании*</p>
                    </div>
                    <div class="new_buisness__input__wrapper">
                        <input type="text" placeholder="ФИО представителя">
                    </div>
                </div>
                <!---Контакты представитея - номер + email  ---->
                <div class="new_buisness__input__container">
                    <div class="new_buisness__input__wrapper new_buisness__double-input">
                        <input type="number" placeholder="+994 (**) *** ** **">
                        <input type="email" placeholder="e-mail адрес">
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
                            <label for="fileInput" class="custom-file-label">Загрузить Логотип</label>

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





    function displayFileName(input) {
        const selectedFileName = document.getElementById("selectedFileName");
        const customFileLabel = document.querySelector(".custom-file-label");

        if (input.files.length > 0) {
            selectedFileName.textContent = input.files[0].name;
            customFileLabel.textContent = "Change file";
        } else {
            selectedFileName.textContent = "No file selected";
            customFileLabel.textContent = "Choose a file";
        }
    }
</script>