<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drafts</title>
    <link rel="stylesheet" href="css/bootstrap-reboot.rtl.min.css">
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__phone">+0(000)000 00 00</div>
                <div class="header__logo"><img src="img/header/flower.png" alt="" class="header__flower">loveliness cosmetics<img src="img/header/flower.png" alt="" class="header__flower_right"></div>
                <div class="header__wrapper_circle">
                    <div class="header__circle"><img src="icons/header/search.png" alt=""></div>
                    <div class="header__circle"><img src="icons/header/basket.png" alt=""></div>
                    <div class="header__circle"><img src="icons/header/exit.png" alt=""></div>
                </div>
            </div>
        </div>
        <nav class="header__navigation">
            <ul class="header__menu">
                <div class="container header__flex">
                    <li class="header__item"><a href="#" class="header__link">Каталог</a></li>
                    <li class="header__item"><a href="#" class="header__link">Акции</a></li>
                    <li class="header__item"><a href="#" class="header__link">О Нас</a></li>
                    <li class="header__item"><a href="#" class="header__link">Контакты</a></li>
                    <li class="header__item"><a href="#" class="header__link">Помощь</a></li>
                </div>
            </ul>
        </nav>
    </header>
    <section class="main">
        <div class="container">
            <div class="main__text main__text_basket">Вернуться в корзину</div>
            <div class="main__title">оформление заказа</div>
            <div class="main__wrapper">
                <div class="main__order">
                    <div class="main__text">Заказ</div>
                    <div class="main__cards">
                        <div class="main__card">
                            <div class="main__content">
                                <div class="main__square"></div>
                                <div class="main__inner">
                                    <div class="main__subtitle">Lorem Ipsum</div>
                                    <div class="main__descr">Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy text</div>
                                    <div class="main__flex">
                                        <div class="main__descr">10мл</div>
                                        <div class="main__descr">1шт</div>
                                    </div>
                                </div>
                            </div>
                            <div class="main__price">2999тг</div>
                        </div>
                        <div class="main__card">
                            <div class="main__content">
                                <div class="main__square"></div>
                                <div class="main__inner">
                                    <div class="main__subtitle">Lorem Ipsum</div>
                                    <div class="main__descr">Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy text</div>
                                    <div class="main__flex">
                                        <div class="main__descr">10мл</div>
                                        <div class="main__descr">1шт</div>
                                    </div>
                                </div>
                            </div>
                            <div class="main__price">2999тг</div>
                        </div>
                        <div class="main__card">
                            <div class="main__content">
                                <div class="main__square"></div>
                                <div class="main__inner">
                                    <div class="main__subtitle">Lorem Ipsum</div>
                                    <div class="main__descr">Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy text</div>
                                    <div class="main__flex">
                                        <div class="main__descr">10мл</div>
                                        <div class="main__descr">1шт</div>
                                    </div>
                                </div>
                            </div>
                            <div class="main__price">2999тг</div>
                        </div>
                        <div class="main__arrow">&#8594</div>
                    </div>
                </div>
                <form class="main__form" action="#">
                    <div class="main__text">Контактные данные</div>
                    <div class="main__form_flex main__form_flex_mt">
                        <input class="main__input" name="name" required placeholder="Имя и Фамилия" type="text">
                        <input class="main__input" name="phone" required placeholder="Телефон" type="tel">
                    </div>
                    <div class="main__form_flex main__form_flex_email">
                        <input class="main__input" name="email" required placeholder="E-mail" type="email"> 
                    </div>

                    <div class="main__text main__text_dostavka">Доставка</div>
                    <div class="main__form_flex main__form_flex_mt">
                        <input class="main__input" name="region" required placeholder="Регион" type="text">
                        <input class="main__input" name="city" required placeholder="Город" type="text">
                    </div>
                    <div class="main__form_flex main__form_flex_email">
                        <input class="main__input main__input_street" name="street" required placeholder="Улица" type="text">
                        <input class="main__input main__input_home" name="home" required placeholder="Дом" type="text"> 
                    </div>
    
                    <div class="main__form_flex main__form_flex_dostavka">
                        <div class="main__form_wrapper">
                            <div class="main__dostavka">Доставка: 1000тг</div>
                            <div class="main__price">Итого: 2999тг</div>
                        </div>
                        <button class="main__button">Отправить</button>
                    </div>
                </form>
            </div>
            <img src="img/1.png" alt="" class="main__images main__images_1">
            <img src="img/2.png" alt="" class="main__images main__images_2">
            <img src="img/3.png" alt="" class="main__images main__images_3">
            <img src="img/4.png" alt="" class="main__images main__images_4">
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__main">
                    <div class="footer__title">loveliness cosmetics</div>
                    <div class="footer__phone">+0(000)000 00 00</div>
                    <div class="footer__email">info@mail.ru</div>
                    <div class="footer__politic">Политика конфиденциальности</div>
                </div>
                <div class="footer__menu">
                    <div class="footer__subtitle">Меню</div>
                    <div class="footer__descr">Каталог</div>
                    <div class="footer__descr">Акции</div>
                    <div class="footer__descr">О нас</div>
                    <div class="footer__descr">Контакты</div>
                    <div class="footer__descr">Помощь</div>
                </div>
                <div class="footer__catalog">
                    <div class="footer__subtitle">Каталог</div>
                    <div class="footer__descr">Lorem Ipsum</div>
                    <div class="footer__descr">Lorem Ipsum</div>
                    <div class="footer__descr">Lorem Ipsum</div>
                    <div class="footer__descr">Lorem Ipsum</div>
                </div>
                <div class="footer__cabinet">
                    <div class="footer__subtitle">Личный кабинет</div>
                    <div class="footer__descr">Вход / Регистрация</div>
                    <div class="footer__descr">Корзина</div>
                    <div class="footer__descr">баланс</div>
                    <div class="footer__inner">
                        <div class="footer__square"></div>
                        <div class="footer__square"></div>
                    </div>
                </div>
            </div>
            <img src="img/flower_bottom.png" alt="" class="footer__flower">
        </div>
    </footer>
</body>
</html>
