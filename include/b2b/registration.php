<style>
    <?php include './style/main.css' ?>
    <?php include './style/login.css' ?>
</style>

<div class="login__page__container">
    <div class="login__page__name">
        <p>РЕГИСТРАЦИЯ</p>
    </div>
    <div class="login__page__form">
        <form action="#" method="post">
            <div class="login__input__container">
                <input type="text" placeholder="ФИО">
            </div>
            <div class="login__input__container">
                <input type="text" placeholder="Номер телефона">
            </div>
            <div class="login__input__container">
                <input type="text" placeholder="Адрес почты">
            </div>
            <div class="login__input__container">
                <input type="text" placeholder="Пароль">
            </div>
            <div class="login__input__container">
                <input type="text" placeholder="Подтвердите пароль">
            </div>
            <div class="login__input__gender">
                <div class="login__input__gender_wrapper">
                    <label>
                        <input type="radio" name="custom-radio" value="option1">
                        <span class="custom-radio"></span> Мужчина
                    </label>
                    <label>
                        <input type="radio" name="custom-radio" checked value="option2">
                        <span class="custom-radio"></span> Женщина
                    </label>
                </div>  
            </div>
            <div class="login__input__checkbox">  
                    <label class="custom-checkbox">
                         <input type="checkbox" class="hidden-checkbox">
                         <span class="checkmark"></span>
                    </label>
                    <p>Я согласен с <a href="#">пользовательским соглашением</a></p>
            </div>
            <div class="login__input__button login__input__button_registration">
                <button>Регистрация</button>
            </div>

        </form>
    </div>

</div>