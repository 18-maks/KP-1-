<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/styleO.css') }}" rel="stylesheet">
    <link href="{{ asset('css/resetO.css') }}" rel="stylesheet">
    <title>Обратная связь</title>
    <link rel="icon" href="{{ asset('images/image/logo/Logo.1.png') }}" type="image/png">

  </head>
  <body>
    
    <!-- Тег для вывода сообщения при успешной отправки сообщения на мыло -->
    <p>{{ session('status') }}</p>


    <div class="container">
      <div class="content">
        <div class="left-side">
          <div class="address details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="topic">Адрес</div>
            <div class="text-one">г. Гродно</div>
            <div class="text-two">Курчатова 5</div>
          </div>
          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Телефон</div>
            <div class="text-one">+375 33 546 32 45</div>
            <div class="text-two">+375 29 265 45 62 </div>
          </div>
          <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">тут почта для сообщений</div>
            <div class="text-two"></div>
          </div>
        </div>
        <div class="right-side">
          <div class="topic-text">Отправьте нам сообщение</div>
          <p>
            Если у вас есть какие-то вопросы или предложения по сотрудничеству -
            заполните форму ниже
          </p>
          <form name="form" >
          <!-- <form action="{{ route('sendMail') }}" method="POST" name="form" > -->
            @csrf
            <div class="input-box">
              <input
                type="text"
                placeholder="Ваше имя"
                name="name"
                id="name"
                data-reg="^[А-ЯЁ][а-яё]*$"
              />
              <label for="name">Только русские буквы</label>
            </div>
            <div class="input-box">
              <input
                type="text"
                placeholder="Введите email"
                name="email"
                id="email"
                data-reg="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$"
              />
              <label for="email">В формате: name@mail.com</label>
            </div>
            <div class="input-box">
              <input
                type="text"
                placeholder="Введите телефон"
                name="phone"
                id="phone"
                data-reg="^(\+375)(25|29|33|44)[0-9]{7}$"
              />
              <label for="phone">В формате: +357297897878 или +375337897878</label>
            </div>
            <div class="input-box message-box">
              <textarea placeholder="Сообщение" name="message"></textarea>
            </div>
            <div class="button">
              <input type="submit" id="button" value="Отправить" />
            </div>
          </form>
          <div class="footer_t">
            <h1> <a href="index">вернуться на сайт</a></h1>
        </div>
        </div>
      </div>
    </div>
    <script
      src="https://kit.fontawesome.com/fce9a50d02.js"
      crossorigin="anonymous"
    ></script>
    <script src="{{ asset('appO.js') }}" defer></script>
  </body>
</html>

<?php
// <script src="{{ asset('appO.js') }}" defer></script>

   
   