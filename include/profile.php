<style>
    <?php include './style/profile.css' ?>
</style>
<div class="profile_page_wrapper">
    <div class="profile__content_wrapper">
        <div class="profile__userdata">
            <div class="profile__userdata_image">
                <img src="./imgs/1.jpg" alt="">
            </div>
            <div class="profile__userdata__content">
                <div class="profile__userdata__name">
                    <p>Ахмедджановзаде Ахмед</p>
                </div>
                <div class="profile__userdata__element">
                    <p>Прочитанных статей: 100</p>
                </div>
                <div class="profile__userdata__element">
                    <p>email@gmail.com</p>
                </div>
                <div class="profile__userdata__element">
                    <p>+994 00 000 00 00</p>
                </div>
                <div class="profile__userdata__settings">
                    <a href="./index.php?page=change_profile">
                        <p>Редактировать профиль</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="profile__saved">
            <div class="profile__saved_savedpages">
                <a href="./index.php?page=my_article">
                    <p>Мои статьи</p>
                </a>

            </div>
            <div class="dropdown2">
                <button onclick="open_list()" class="dropbtn2">
                    <p class="dropbtn2_desc">Сохранёные статьи</p>
                </button>
                <div id="myDropdown2" class="dropdown-content2">
                    <div class="dropdown__articles__wrapper">
                        <a href="./index.php?page=article">
                            <div class="article__container">
                                <div class="dropdown__link_name">
                                    <p>Название статьи</p>
                                </div>
                                <div class="dropdown__link_tags">
                                    <p>#ремонт #пол #паркет</p>
                                </div>
                            </div>
                        </a>
                        <a href="./index.php?page=article">
                            <div class="article__container">
                                <div class="dropdown__link_name">
                                    <p>Название статьи</p>
                                </div>
                                <div class="dropdown__link_tags">
                                    <p>#ремонт #пол #паркет</p>
                                </div>
                            </div>
                        </a>
                        <a href="./index.php?page=article">
                            <div class="article__container">
                                <div class="dropdown__link_name">
                                    <p>Название статьи</p>
                                </div>
                                <div class="dropdown__link_tags">
                                    <p>#ремонт #пол #паркет</p>
                                </div>
                            </div>
                        </a>
                        <a href="./index.php?page=article">
                            <div class="article__container">
                                <div class="dropdown__link_name">
                                    <p>Название статьи</p>
                                </div>
                                <div class="dropdown__link_tags">
                                    <p>#ремонт #пол #паркет</p>
                                </div>
                            </div>
                        </a>
                        <a href="./index.php?page=article">
                            <div class="article__container">
                                <div class="dropdown__link_name">
                                    <p>Название статьи</p>
                                </div>
                                <div class="dropdown__link_tags">
                                    <p>#ремонт #пол #паркет</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <div class="dropdown3">
                <button onclick="open_list2()" class="dropbtn3">
                    <p class="dropbtn3_desc">Здесь будут ваши сохранённые товары</p>
                </button>
                <div id="myDropdown3" class="dropdown-content3">
                    <div class="dropdown__articles__wrapper">
                        <a href="./index.php?page=article">
                            <div class="article__container">
                                <div class="dropdown__link_name">
                                    <p>Название товара</p>
                                </div>
                                <div class="dropdown__link_tags">
                                    <p>#ремонт #пол #паркет</p>
                                </div>
                            </div>
                        </a>
                        <a href="./index.php?page=article">
                            <div class="article__container">
                                <div class="dropdown__link_name">
                                    <p>Название товара</p>
                                </div>
                                <div class="dropdown__link_tags">
                                    <p>#ремонт #пол #паркет</p>
                                </div>
                            </div>
                        </a>
                        <a href="./index.php?page=article">
                            <div class="article__container">
                                <div class="dropdown__link_name">
                                    <p>Название товара</p>
                                </div>
                                <div class="dropdown__link_tags">
                                    <p>#ремонт #пол #паркет</p>
                                </div>
                            </div>
                        </a>
                        <a href="./index.php?page=article">
                            <div class="article__container">
                                <div class="dropdown__link_name">
                                    <p>Название товара</p>
                                </div>
                                <div class="dropdown__link_tags">
                                    <p>#ремонт #пол #паркет</p>
                                </div>
                            </div>
                        </a>
                        <a href="./index.php?page=article">
                            <div class="article__container">
                                <div class="dropdown__link_name">
                                    <p>Название товара</p>
                                </div>
                                <div class="dropdown__link_tags">
                                    <p>#ремонт #пол #паркет</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="profile__buisness_section">
        <div class="profile__buisness_create">
            <a href="#">
                <p>+ создать бизнес</p>
            </a>
        </div>
        <!------------>
    </div>
</div>


<script>
    function open_list() {
        document.getElementById("myDropdown2").classList.toggle("show2");
        console.log('clicked');
    }
    function open_list2() {
        document.getElementById("myDropdown3").classList.toggle("show3");
        console.log('clicked');
    }
</script>