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
                    Имя:
                    <input type="text" name="" id="" class="form">
                    Фамилия:
                    <input type="text" name="" id="" class="form">
                </div>
                <div class="cart-form-adres forma">
                    Адрес:
                    <input type="text" name="" id="" size="50" class="form">
                </div>
                <div class="cart-form-city forma">
                    Город:
                    <input type="text" name="" id="" class="form">
                    Индекс:
                    <input type="text" name="" id="" class="form">
                </div>
                <div class="cart-form-telefone forma" class="form">
                    Телефон:
                    <input type="text" name="" id="" class="form">
                    @mail.ru:
                    <input type="email" name="" id="" class="form">
                </div>
            </div>
        </div>
    </div>
<?php require_once "../templates/footer.php" ?>
