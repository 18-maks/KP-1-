<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/logo/Dota.png" type="image/x-icon">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>The 1 moto</title>
</head>

<body>

    <div class="wrapper">
        <header class="container">
            <nav class="head_position">
                <ul>
                    <li><a href="#" class="openModal" data-title="О сайте"
                            data-content="Этот сайт сделан еденаручно и не требует доказательств,сайт сделан на дипломную работу на завершение обучения в ГГКТТиД! Учащимся группы 39ТП, Павловичем Максимом">О
                            нас</a>
                    </li>
                    <li><a href="#" class="openModal" data-title="Пояснение"
                            data-content="Обед перерыв с 14.00 до 14.30 ">Доп. информация</a></li>

                    <span class="logo"><img class="img_logo" src="image/logo/Logo.1.png" alt="иконка сайта"></span>

                    <li><a href="#" class="openModal" data-title="Работа"
                            data-content="Время работы: Ежедневно с 10.00 до 21.00">Работа</a>
                    </li>
                    <li class="btn"><a href="#" class="openModal" data-title="Контакт"
                            data-content="номер: +375 (29) 250 41 05  email: maksimpavlovich90@gmail.com">Контакты</a>
                    </li>
                    <li><a href="#" id="openCart"><img class="shop" src="image/marks/shope.png"
                                alt="иконка корзины"></a>
                    </li>
                </ul>
            </nav>
            <!-- Модальное окно с корзиной -->
            <div id="cartModal" class="modal" style="display:none;">
                <div class="modal-content">
                    <span class="close" id="closeCart">&times;</span>
                    <h2>Корзина</h2>
                    <div id="cartItems">
                        <!-- Товары будут добавляться сюда -->
                    </div>
                    <div id="totalPriceContainer">
                        <p>Общая сумма: <span id="totalPrice">0 руб.</span></p>
                    </div>
                    <button class="checkoutBtn" id="checkoutBtn">Оформить заказ</button>
                    <!-- <button class="checkoutBtn" id="checkoutBtn">Оформить заказ</button>

                    <div id="notification" class="notification" style="display: none;">
                        Ваш заказ оформлен! Спасибо за покупку.
                    </div> -->
                </div>
            </div>
            <div id="modal" class="modal" style="display:none;">
                <div class="modal-content">
                    <span class="close-btn">&times;</span>
                    <h2 id="modalTitle"></h2>
                    <p id="modalContent"></p>
                </div>
            </div>
            <div id="modal2" class="modal" style="display:none;">
                <div class="modal-content">
                    <span class="close-btn2">×</span>
                    <h2 id="modalTitle2"></h2>
                    <img id="modalImage" src="" alt="Изображение" style="max-width: 100%; height: auto;" />
                    <p id="modalContent2"></p>
                </div>
            </div>
        </header>
    </div>

    <div class="fullscreen-image">
        <img src="/image/marks/orig.webp" alt="Описание изображения">
    </div>

    <p class="centered-text">Наш каталог</p>
    <!-- <div class="container_1_container_cards"> -->
    <div class="card_position">
        <div>
            <button class="toggle-button" id="toggleButton">Переключить каталог</button>
        </div>


        <div id="section1" class="section">
            <div class="zero">
                <div class="card" data-price="3600" data-power="50" product_id='1'>
                    <div class="card_top">
                        <a class="card_img" >
                            <img src="image/50/vento(50).webp" alt="Vento 50 кубов">
                        </a>
                        <div class="card_label">-10%</div>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--discount">3 600</div>
                            <div class="card_price card_price--common">4 000</div>
                        </div>
                        <a class="card_title">Vento</a>
                        <button class="card_btn add-to-cart" data-product="Vento" data-price="3600"
                            data-image="image/50/vento(50).webp">в корзину</button>
                        <button class="openModal2 add_infe" data-title="Vento" data-content="Мотоцикл Vento — это идеальный выбор для тех, кто ищет сочетание скорости и маневренности. С двигатель мощностью 50 л.с. он обеспечивает превосходную динамику и уверенное ускорение, что позволяет ему приближаться как к проезжим дорогам, так и к дорожным покрытиям.

Одним из главных признаков Венто является его выдающаяся управляемость. Легкая и устойчивая конструкция позволяет легко маневрировать в плотном городском потоке и уверенно проходить повороты на высокой скорости. В сочетании с современными тормозными циклами этот мотоцикл гарантирует безопасность и комфорт в любых условиях.

Надежность Vento также требует внимания: качественные материалы и продуманные конструкции обеспечивают долгий срок службы и минимальные затраты на обслуживание. Благодаря своему стильному дизайну и ярким цветочным решениям, Vento не только учитывает взгляды, но и сохраняет индивидуальность своего владельца.

Если вы ищете мотоцикл, который станет лучшим спутником в ваших приключениях, Vento — это то, что вам нужно!"
                            data-image="image/50/vento(50).webp">
                            Подробнее
                        </button>
                    </div>
                </div>

                <div class="card" data-price="3600" data-power="50" product_id='2'>
                    <div class="card_top">
                        <a class="card_img" >
                            <img src="image/50/Minsk_D4(50).webp" alt="Минск D4">
                        </a>
                        <div class="card_label">-10%</div>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--discount">3 600</div>
                            <div class="card_price card_price--common">4 000</div>
                        </div>
                        <a class="card_title">Минск D4</a>
                        <button class="card_btn add-to-cart" data-product="Минск D4" data-price="3600"
                            data-image="image/50/Minsk_D4(50).webp">в корзину</button>
                        <button class="openModal2 add_infe" data-title="Минск D4"
                            data-content="Мотоцикл Минск D4 - мощность 50 л.с., отличная управляемость и надежность."
                            data-image="image/50/Minsk_D4(50).webp">
                            Подробнее
                        </button>
                    </div>
                </div>

                <div class="card" data-price="3600" data-power="50" product_id='3'>
                    <div class="card_top">
                        <a class="card_img" >
                            <img src="image/50/Motoland_Alfa_RS_11(50).webp" alt="Alfa RS 11">
                        </a>
                        <div class="card_label">-10%</div>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--discount">3 600</div>
                            <div class="card_price card_price--common">4 000</div>
                        </div>
                        <a class="card_title">Alfa RS 11</a>
                        <button class="card_btn add-to-cart" data-product="Alfa RS 11" data-price="3600"
                            data-image="image/50/Motoland_Alfa_RS_11(50).webp">в корзину</button>
                        <button class="openModal2 add_infe" data-title="Alfa RS 11"
                            data-content="Мотоцикл Alfa RS 11 - мощность 50 л.с., отличная управляемость и надежность."
                            data-image="image/50/Motoland_Alfa_RS_11(50).webp">
                            Подробнее
                        </button>
                    </div>
                </div>

                <div class="card" data-price="3600" data-power="50" product_id='4'>
                    <div class="card_top">
                        <a class="card_img">
                            <img src="image/50/Альфа_Турист(50).webp" alt="Альфа Турист">
                        </a>
                        <div class="card_label">-10%</div>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--discount">3 600</div>
                            <div class="card_price card_price--common">4 000</div>
                        </div>
                        <a class="card_title">Альфа Турист</a>
                        <button class="card_btn add-to-cart" data-product="Альфа Турист" data-price="3600"
                            data-image="image/50/Альфа_Турист(50).webp">в корзину</button>
                        <button class="openModal2 add_infe" data-title="Альфа Турист"
                            data-content="Мотоцикл Альфа Турист - мощность 50 л.с., отличная управляемость и надежность."
                            data-image="image/50/Альфа_Турист(50).webp">
                            Подробнее
                        </button>
                    </div>
                </div>

                <div class="card" data-price="7600" data-power="125" product_id='5'>
                    <div class="card_top">
                        <a class="card_img" >
                            <img src="image/125/bajaj-pulsar(125).webp" alt="BAJAJ Pulsar NS125 FI CBS">
                        </a>
                        <div class="card_label">-10%</div>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--discount">6 840</div>
                            <div class="card_price card_price--common">7 600</div>
                        </div>
                        <a class="card_title">BAJAJ Pulsar NS125 FI CBS</a>
                        <button class="card_btn add-to-cart" data-product="BAJAJ Pulsar NS125 FI CBS" data-price="7600"
                            data-image="image/125/bajaj-pulsar(125).webp">в корзину</button>
                        <button class="openModal2 add_infe" data-title="BAJAJ Pulsar NS125 FI CBS"
                            data-content="Мотоцикл BAJAJ Pulsar NS125 FI CBS - мощность 125 л.с., отличная управляемость и надежность."
                            data-image="image/125/bajaj-pulsar(125).webp">
                            Подробнее
                        </button>
                    </div>
                </div>

                <div class="card" data-price="4425" data-power="125" product_id='6'>
                    <div class="card_top">
                        <a class="card_img" >
                            <img src="image/125/Progasi Smart.webp" alt="Progasi Smart">
                        </a>
                        <div class="card_label">-10%</div>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--discount">3 983</div>
                            <div class="card_price card_price--common">4 425</div>
                        </div>
                        <a class="card_title">Progasi Smart</a>
                        <button class="card_btn add-to-cart" data-product="Progasi Smart" data-price="4425"
                            data-image="image/125/Progasi Smart.webp">в корзину</button>
                        <button class="openModal2 add_infe" data-title="Progasi Smart"
                            data-content="Мотоцикл Progasi Smart - мощность 125 л.с., отличная управляемость и надежность."
                            data-image="image/125/Progasi Smart.webp">
                            Подробнее
                        </button>
                    </div>
                </div>

                <div class="card" data-price="2500" data-power="125" product_id='7'>
                    <div class="card_top">
                        <a class="card_img" >
                            <img src="image/125/GS Motors S12.webp" alt="GS Motors S12">
                        </a>
                        <div class="card_label">-10%</div>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--discount">2 250</div>
                            <div class="card_price card_price--common">2 500</div>
                        </div>
                        <a class="card_title">GS Motors S12</a>
                        <button class="card_btn add-to-cart" data-product="GS Motors S12" data-price="2500"
                            data-image="image/125/GS Motors S12.webp">в корзину</button>
                        <button class="openModal2 add_infe" data-title="GS Motors S12"
                            data-content="Мотоцикл GS Motors S12 - мощность 125 л.с., отличная управляемость и надежность."
                            data-image="image/125/GS Motors S12.webp">
                            Подробнее
                        </button>
                    </div>
                </div>

                <div class="card" data-price="2500" data-power="125" product_id='8'>
                    <div class="card_top">
                        <a class="card_img" >
                            <img src="image/125/Motoland GF125 E.webp" alt="Motoland GF125 E">
                        </a>
                        <div class="card_label">-10%</div>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--discount">2 250</div>
                            <div class="card_price card_price--common">2 500</div>
                        </div>
                        <a class="card_title">Motoland GF125 E</a>
                        <button class="card_btn add-to-cart" data-product="Motoland GF125 E" data-price="2500"
                            data-image="image/125/Motoland GF125 E.webp">в корзину</button>
                        <button class="openModal2 add_infe" data-title="Motoland GF125 E"
                            data-content="Мотоцикл Motoland GF125 E - мощность 125 л.с., отличная управляемость и надежность."
                            data-image="image/125/Motoland GF125 E.webp">
                            Подробнее
                        </button>
                    </div>
                </div>

                <div class="card" data-price="8755" data-power="250" product_id="9">
                    <div class="card_top">
                        <a class="card_img" >
                            <img src="image/250/Motoland 501.webp" alt="Motoland 501">
                        </a>
                        <div class="card_label">-10%</div>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--discount">7 880</div>
                            <div class="card_price card_price--common">8 755</div>
                        </div>
                        <a class="card_title">Motoland 501</a>
                        <button class="card_btn add-to-cart" data-product="Motoland 501" data-price="8755"
                            data-image="image/250/Motoland 501.webp">в корзину</button>
                        <button class="openModal2 add_infe" data-title="Motoland 501"
                            data-content="Мотоцикл Motoland 501 - мощность 250 л.с., отличная управляемость и надежность."
                            data-image="image/250/Motoland 501.webp">
                            Подробнее
                        </button>
                    </div>
                </div>

                <div class="card" data-price="7640" data-power="250" product_id="10">
                    <div class="card_top">
                        <a class="card_img" >
                            <img src="image/250/Motoland MT 250.webp" alt="Motoland MT 250">
                        </a>
                        <div class="card_label">-10%</div>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--discount">6 876</div>
                            <div class="card_price card_price--common">7 640</div>
                        </div>
                        <a class="card_title">Motoland MT 250</a>
                        <button class="card_btn add-to-cart" data-product="Motoland MT 250" data-price="7640"
                            data-image="image/250/Motoland MT 250.webp">в корзину</button>
                        <button class="openModal2 add_infe" data-title="Motoland MT 250"
                            data-content="Мотоцикл Motoland MT 250 - мощность 250 л.с., отличная управляемость и надежность."
                            data-image="image/250/Motoland MT 250.webp">
                            Подробнее
                        </button>
                    </div>
                </div>

                <div class="card" data-price="6670" data-power="250" product_id="11">
                    <div class="card_top">
                        <a class="card_img">
                            <img src="image/250/Motoland FIGHTER 250.webp" alt="Motoland FIGHTER 250">
                        </a>
                        <div class="card_label">-10%</div>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--discount">6 003</div>
                            <div class="card_price card_price--common">6 670</div>
                        </div>
                        <a class="card_title">Motoland FIGHTER 250</a>
                        <button class="card_btn add-to-cart" data-product="Motoland FIGHTER 250" data-price="6670"
                            data-image="image/250/Motoland FIGHTER 250.webp">в корзину</button>
                        <button class="openModal2 add_infe" data-title="Motoland FIGHTER 250"
                            data-content="Мотоцикл Motoland FIGHTER 250 - мощность 250 л.с., отличная управляемость и надежность."
                            data-image="image/250/Motoland FIGHTER 250.webp">
                            Подробнее
                        </button>
                    </div>
                </div>

                <div class="card" data-price="14100" data-power="250" product_id="12">
                    <div class="card_top">
                        <a class="card_img" >
                            <img src="image/250/Bajaj Pulsar N 250.png" alt="Bajaj Pulsar N 250">
                        </a>
                        <div class="card_label">-10%</div>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--discount">12 690</div>
                            <div class="card_price card_price--common">14 100</div>
                        </div>
                        <a class="card_title">Bajaj Pulsar N 250</a>
                        <button class="card_btn add-to-cart" data-product="Bajaj Pulsar N 250" data-price="14100"
                            data-image="image/250/Bajaj Pulsar N 250.png">в корзину</button>
                        <button class="openModal2 add_infe" data-title="Bajaj Pulsar N 250"
                            data-content="Мотоцикл Bajaj Pulsar N 250 - мощность 250 л.с., отличная управляемость и надежность."
                            data-image="image/250/Bajaj Pulsar N 250.png">
                            Подробнее
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="section2" class="section">
            <div class="zero">


                <div class="card" data-price="136"  product_id="12">
                    <div class="card_top">
                        <a class="card_img" >
                            <img src="image/akses/WTCX Мотошлем(136).png" alt="WTCX Мотошлем(136)">
                        </a>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--com">136</div>
                        </div>
                        <a class="card_title">WTCX Мотошлем</a>
                        <button class="card_btn add-to-cart" data-product="WTCX Мотошлем(136)" data-price="136"
                            data-image="image/akses/WTCX Мотошлем(136).png">в корзину</button>
                        <button class="openModal2 add_infe" data-title="WTCX Мотошлем"
                            data-content="WTCX Мотошлем - ."
                            data-image="image/akses/WTCX Мотошлем(136).png">
                            Подробнее
                        </button>
                    </div>
                </div>
                <div class="card" data-price="87"  product_id="">
                    <div class="card_top">
                        <a class="card_img" >
                            <img src="image/akses/WTCX Мотошлем(87).png" alt="WTCX Мотошлем(87)">
                        </a>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--com">87</div>
                        </div>
                        <a class="card_title"> WTCX Мотошлем </a>
                        <button class="card_btn add-to-cart" data-product="WTCX Мотошлем(87)" data-price="87"
                            data-image="image/akses/WTCX .png">в корзину</button>
                        <button class="openModal2 add_infe" data-title="WTCX Мотошлем"
                            data-content=" WTCX Мотошлем - ."
                            data-image="image/akses/WTCX Мотошлем(87).png">
                            Подробнее
                        </button>
                    </div>
                </div>
                <div class="card" data-price="226"  product_id="">
                    <div class="card_top">
                        <a class="card_img" >
                            <img src="image/akses/мотошлем (226).png" alt="мотошлем (226)">
                        </a>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--com">226</div>
                        </div>
                        <a class="card_title"> мотошлем </a>
                        <button class="card_btn add-to-cart" data-product="мотошлем (226)" data-price="226"
                            data-image="image/akses/WTCX .png">в корзину</button>
                        <button class="openModal2 add_infe" data-title="мотошлем"
                            data-content=" мотошлем - ."
                            data-image="image/akses/мотошлем (226).png">
                            Подробнее
                        </button>
                    </div>
                </div>

                <div class="card" data-price="1560"  product_id="">
                    <div class="card_top">
                        <a class="card_img" >
                            <img src="image/akses/Мотокуртка Starks(1560).png" alt="Мотокуртка Starks(1560)">
                        </a>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--com">1560</div>
                        </div>
                        <a class="card_title"> Мотокуртка Starks </a>
                        <button class="card_btn add-to-cart" data-product="Мотокуртка Starks(1560)" data-price="1560"
                            data-image="image/akses/WTCX.png">в корзину</button>
                        <button class="openModal2 add_infe" data-title="Мотокуртка Starks"
                            data-content="Мотокуртка Starks - ."
                            data-image="image/akses/Мотокуртка Starks(1560).png">
                            Подробнее
                        </button>
                    </div>
                </div>

                <div class="card" data-price="150"  product_id="">
                    <div class="card_top">
                        <a class="card_img" >
                            <img src="image/akses/костюм(150).png" alt="костюм(150)">
                        </a>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--com">150</div>
                        </div>
                        <a class="card_title"> костюм </a>
                        <button class="card_btn add-to-cart" data-product="костюм(150)" data-price="150"
                            data-image="image/akses/костюм(150).png">в корзину</button>
                        <button class="openModal2 add_infe" data-title="костюм"
                            data-content=" костюм - ."
                            data-image="image/akses/костюм(150).png">
                            Подробнее
                        </button>
                    </div>
                </div>

                <div class="card" data-price="664"  product_id="">
                    <div class="card_top">
                        <a class="card_img" >
                            <img src="image/akses/Мотокостюм(644).png" alt="Мотокостюм(644)">
                        </a>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--com">664</div>
                        </div>
                        <a class="card_title"> Мотокостюм </a>
                        <button class="card_btn add-to-cart" data-product="Мотокостюм(644)" data-price="664"
                            data-image="image/akses/Мотокостюм(644).png">в корзину</button>
                        <button class="openModal2 add_infe" data-title="Мотокостюм"
                            data-content=" Мотокостюм - ."
                            data-image="image/akses/Мотокостюм(644).png">
                            Подробнее
                        </button>
                    </div>
                </div>

                <div class="card" data-price="5170"  product_id="">
                    <div class="card_top">
                        <a class="card_img" >
                            <img src="image/akses/Мотокомбинезон Dainese(5170).png" alt="Мотокомбинезон Dainese(5170)">
                        </a>
                    </div>
                    <div class="card_bottom">
                        <div class="card_prices">
                            <div class="card_price card_price--com">5170</div>
                        </div>
                        <a class="card_title"> Мотокостюм Dainese </a>
                        <button class="card_btn add-to-cart" data-product="Мотокомбинезон Dainese(5170)" data-price="5170"
                            data-image="image/akses/Мотокомбинезон Dainese(5170).png">в корзину</button>
                        <button class="openModal2 add_infe" data-title="Мотокомбинезон Dainese"
                            data-content=" Мотокомбинезон Dainese - ."
                            data-image="image/akses/Мотокомбинезон Dainese(5170).png">
                            Подробнее
                        </button>
                    </div>
                </div>
                


            </div>
        </div>
    </div>
    </div>

    <div class="map_position">
        <div class="map">
            <h2 class="map__title">
                <img src="image/services/map.png" alt="иконка карты"><br>
                <a href="https://maps.app.goo.gl/AXwBAaDChU3vDGGG9">Open Map</a>
            </h2>
        </div>
    </div>
    </section>


    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__col  footer__col--first">
                    <a class="footer__logo" href="">The1moto</a>
                    <div class="footer__text">Мы рады приветствовать вас в нашем магазине мотоциклов!
                        У нас вы найдете широкий выбор моделей от ведущих производителей, которые подходят
                        как для опытных байкеров, так и для новичков. Каждое транспортное средство проходит
                        строгую проверку качества, чтобы обеспечить вам безопасность и удовольствие от вождения.
                        Не упустите возможность найти свой идеальный мотоцикл!</div>

                    <div class="footer__social">
                        <div class="footer__social-header">
                            <b>15k</b> followers
                        </div>
                        <div class="footer__social-content">
                            <span>Follow us:</span>
                            <a href="#" target="_blank">
                                <img src="image/socialnetwork/facebook.png" alt="иконка facebook">
                            </a>
                            <a href="#" target="_blank">
                                <img src="image/socialnetwork/twiter.png" alt="иконка twiter">
                            </a>
                            <a href="#" target="_blank">
                                <img src="image/socialnetwork/instagram.png" alt="иконка instagram">
                            </a>
                            <a href="#" target="_blank">
                                <img src="image/socialnetwork/youtube.png" alt="иконка youtube">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="footer__col  footer__col--second">
                    <h4 class="footer__title">Blogs</h4>

                    <div class="blogs">
                        <div class="blogs__item">
                            <img class="blogs__img" src="image/News/Diablo.jpg" alt="Диабло Р1">
                            <h4 class="blogs__content">
                                <a class="blogs__title"
                                    href="https://www.starhit.ru/novosti/kak-pogib-bloger-aleksandr-diablo-r1-foto-s-mesta-avarii-214871/">Diablo
                                    R1</a>
                                <span class="blogs__date">24 июня 2020</span>
                            </h4>
                        </div>

                        <div class="blogs__item">
                            <img class="blogs__img" src="image/News/tany.jpg" alt="Мото Таня">
                            <h4 class="blogs__content">
                                <a class="blogs__title"
                                    href="https://www.sport-express.net/other/reviews/tatyana-ozolina-mototanya-biografiya-i-podrobnosti-smerti-dtp-v-turcii-chto-sluchilos-2235947/">мото
                                    Таня</a>
                                <span class="blogs__date">22 июля 2024</span>
                            </h4>
                        </div>

                        <div class="blogs__item">
                            <img class="blogs__img" src="image/News/Bolt.jpg" alt="Болт">
                            <h4 class="blogs__content">
                                <a class="blogs__title"
                                    href="https://www.gazeta.ru/auto/2019/06/11_a_12407929.shtml">Болт</a>
                                <span class="blogs__date">10 июня 2019</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <section id="footer1">
        <div class="footer_t">
            <h1> <a href="indexO">Обратная связь</a></h1>
        </div>
    </section>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>