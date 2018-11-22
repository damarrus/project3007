<?php require_once "../templates/header.php" ?>
<link rel="stylesheet" href="../css/cart.css">
    <div class="cart">
        <div class="cart-center">
            <h2>ВАША КОРЗИНА</h2>
            <p><i>Товары резервируются на ограниченное время</i></p>
        </div>
        <div class="cart-product">

        </div>
        <div>
            <div class="cart-center">
                <h2>Адрес доставки</h2>
                <p><i>Все поля обязательны для заполнения</i></p>
            </div>
            <div class="cart-form">
                <div class="cart-form-variant">
                    <p><i>Выберите вариант доставки</i></p>
                    <select name="a" id="a">
                        <option value="">Курьерская доставка 500 руб.</option>
                        <option value="">Самовывоз бесплатно</option>
                    </select>
                </div>
                <div class="cart-form-name forma">
                    <p class="cart-form-2">Имя:</p>
                    <input type="text" name="" id="" class="cart-form-1">
                    <p class="cart-form-2">Фамилия:</p>
                    <input type="text" name="" id="" class="cart-form-1">
                </div>
                <div class="cart-form-adres forma">
                    <p class="cart-form-2">Адрес:</p>
                    <input type="text" name="" id="" size="50" class="cart-form-1">
                </div>
                <div class="cart-form-city forma">
                    <p class="cart-form-2">Город:</p>
                    <input type="text" name="" id="" class="cart-form-1">
                    <p class="cart-form-2">Индекс:</p>
                    <input type="text" name="" id="" class="cart-form-1">
                </div>
                <div class="cart-form-telefone forma" class="cart-form-1">
                    <p class="cart-form-2">Телефон:</p>
                    <input type="text" name="" id="" class="cart-form-1">
                    <p class="cart-form-2">@mail.ru:</p>
                    <input type="email" name="" id="" class="cart-form-1">
                </div>
            </div>
        </div>
    </div>
<?php require_once "../templates/footer.php" ?>
