<!doctype html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="<?=base_url('assecs/style.css');?>" type="text/css"/>
    <link rel="stylesheet" href="<?=base_url('assecs/bootstrap/css/bootstrap.css');?>" type="text/css"/>
    <script type="text/javascript" src="<?=base_url('assecs/jquery-2.1.4.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assecs/bootstrap/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assecs/script.js')?>"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Торты Онлайн Ереван</title>
</head>
<body>
<div class="all">
    <header>
        <div class="cont">
            <div class="boxes">
                <div class="box1">
                    <div class="logo">
                        <a href="<?=base_url('home')?>"><img src="<?=base_url('assecs/image/logo.png')?>" alt="">
                            Торты на любой вкус!
                        </a>
                    </div>
                </div>
                <div class="box2">
                    <div class="phone_number">
                        <p>+(374)98 40-90-88</p>
                        <a href="https://www.facebook.com/gugo.egiazaryan" target="_blank"><img src="<?=base_url('assecs/image/facebook_icon.png')?>" alt=""></a>
                        <a href="#"><img src="<?=base_url('assecs/image/instagram_icon.png')?>" alt=""></a>
                    </div>
                </div>
                <div class="box4">
                    <img src="<?=base_url('assecs/image/sweet_pirog.png')?>" alt="">
                    <p>Сладкая жизнь с доставкой на дом</p>
                    <p>Бесплатно !</p>
                    <button class="call_out">Заказать Звонок</button>
                </div>
                <div class="box3">
                    <div class="bascket">
                        <div class="our_bascket">
                            <p >Ваша корзина</p>
                        </div>
                        <div class="product_bascket">
                            <p>Товаров 0 шт.</p>
                            <p>на сумму 0 руб.</p>
                        </div>
                        <div class="checkout">
                            <a href="#">Оформить заказ</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <div class="description_header">
        <div class="cont">
        <ul>
            <li>
                <p>Всё по честному</p>
                <p>Толко натуральные продукты, никаких искусственных красителей и консервантов.</p>
            </li>
            <li>
                <p>Всегда свежее</p>
                <p>Мы готовим специально для вас, а не продаем залежалый товар с витрины.</p>
            </li>
            <li>
                <p>Классические рецепты</p>
                <p>
                    Мы чтим традиции и гарантируем высочайшее качество исполнения.
                </p>
            </li>
            <li>
                <p>Очень вкусно!</p>
                <p>Гарантируем, вам понравятся наши десерты и вы вернетесь к нам снова! Удачного выбора и аппетитной корзины!</p>
            </li>
        </ul>
    </div>
    </div>
    <div class="header_menu">
    <div class="cont">

        <ul>
            <li><a href="<?=base_url('home')?>">Главная</a></li>
            <li><a href="<?=base_url('home/katalog_data')?>">Каталог тортов</a></li>
            <li><a href="#">Оплата и Доставка</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </div>
    </div>
    <!--    <div class="header_fixed_choose">-->
    <!--        TORT-->
    <!--    </div>-->



<!-- MODAL CALL   -->
    <div id="call_back" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Заказать звонок</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="email">Имя</label>
                            <input type="text" class="form-control" id="name" placeholder="Ваше имя">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="text" class="form-control" id="pwd" placeholder="Номер телефона">
                            <input type="hidden" class="base_url_hidden" value="<?=base_url('home/call_back_data')?>">
                        </div>
                        <button type="submit" class="btn btn-default call_back_btn">Заказать</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div id="sucsees_call_back" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body call_back_margin">
                    <h4>Сообщение успешно отправлено ! ! !</h4>
                </div>
            </div>

        </div>
    </div>