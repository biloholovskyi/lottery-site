<!doctype html>
<html lang='ru'>
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap-grid.css'>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="./css/main.css">
  <title>Криптобонус</title>
</head>
<body>
<div class="mobile-menu">
  <div class="close"></div>
  <a href="token.php">Токены</a>
  <a href="help.php">Помощь</a>
  <a href="sign.php">Войти</a>
  <a href="reg.php">Регистрация</a>
</div>
<div class="home__wrapper home__wrapper--personal">
  <section class="home">
    <div class="container">
      <div class="home__nav">
        <div class="home__nav__left">
          <div class="home__logo"><a href="index.php">logo</a></div>
          <nav class="head-nav">
            <ul>
              <li><a href="token.php">Токены</a></li>
              <li><a href="help.php">Помощь</a></li>
            </ul>
          </nav>
        </div>
        <div class="home__nav__right">
          <a href="#" class="personal-head-link personal-head-link--card">Корзина пуста</a>
          <span class="personal-head-inf personal-head-inf--balance">Баланс: 0 руб</span>
          <span class="personal-head-inf personal-head-inf--username">Username</span>
          <div class="user-photo"></div>
        </div>
        <div class="humb"></div>
      </div>
    </div>
    <div class="home__content">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="home__content__title home__content__title--personal">Личный кабинет</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<div class="personal-body">
  <div class="personal-nav personal-nav--mobile">
    <div class="personal-nav__item" id="balance">Мой баланс и токены</div>
    <div class="personal-nav__item" id="history">История</div>
    <div class="personal-nav__item" id="notice">Рассылки и уведомления</div>
    <div class="personal-nav__item personal-nav__item--active" id="personal">Личные данные</div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-3">
        <div class="personal-nav">
          <div class="personal-nav__item" id="balance">Мой баланс и токены</div>
          <div class="personal-nav__item" id="history">История</div>
          <div class="personal-nav__item" id="notice">Рассылки и уведомления</div>
          <div class="personal-nav__item personal-nav__item--active" id="personal">Личные данные</div>
        </div>
      </div>
      <div class="col-12 col-lg-9">
        <div class="personal-body__content" id="content-balance">
          <div class="personal-small-card-wrapper">
            <div class="personal-small-card">
              <div class="personal-small-card__title">Общий баланс</div>
              <div class="personal-small-card__price">
                <span class="price">33459</span>
                <span class="wal">руб<span class="decor"></span></span>
              </div>
              <div class="desc">Общее количество средств на кошельке пользователя, в том числе стоимость купленных токенов.</div>
              <div class="personal-small-card__btn main-btn">Пополнить</div>
              <a href="#" class="personal-small-card__link show-money">Заказать вывод средств</a>
            </div>
            <div class="personal-small-card">
              <div class="personal-small-card__title">Из них в токенах</div>
              <div class="personal-small-card__price">
                <span class="price">15466</span>
                <span class="wal">руб<span class="decor"></span></span>
              </div>
              <div class="personal-small-card__title">Количество токенов:</div>
              <div class="personal-small-card__price">
                <span class="price price--token">10</span>
              </div>
              <div class="personal-small-card__btn show-lottery main-btn">Играть в лоторею</div>
              <a href="#" class="personal-small-card__link">Купить токены</a>
            </div>
          </div>
          <div class="personal-main-card personal-main-card--table">
            <div class="card-top">
              <div class="card-top__title card-top__title--small">Мои токены</div>
            </div>
            <div class="card-bottom card-bottom--table">
              <div class="card-table-head">
                <div class="item item--name">Название токена</div>
                <div class="item item--count">Количество</div>
                <div class="item item--date">Дата последнего движения</div>
              </div>
              <div class="card-table-row">
                <div class="left">
                  <div class="item item--name">ТОКЕН RTY-C</div>
                  <div class="item item--count">5</div>
                  <div class="item item--date">12.09.2018</div>
                </div>
                <div class="right">
                  <button class="card-table__btn show-lottery card-table__btn--active">Играть в лоторею</button>
                  <button class="card-table__btn show-money">Вывести средства</button>
                </div>
              </div>
              <div class="card-table-row">
                <div class="left">
                  <div class="item item--name">ТОКЕН RTY-C</div>
                  <div class="item item--count">5</div>
                  <div class="item item--date">12.09.2018</div>
                </div>
                <div class="right">
                  <button class="card-table__btn show-lottery card-table__btn--active">Играть в лоторею</button>
                  <button class="card-table__btn show-money">Вывести средства</button>
                </div>
              </div>
              <div class="card-table-row">
                <div class="left">
                  <div class="item item--name">ТОКЕН RTY-C</div>
                  <div class="item item--count">5</div>
                  <div class="item item--date">12.09.2018</div>
                </div>
                <div class="right">
                  <button class="card-table__btn show-lottery card-table__btn--active">Играть в лоторею</button>
                  <button class="card-table__btn show-money">Вывести средства</button>
                </div>
              </div>
              <div class="card-table-row">
                <div class="left">
                  <div class="item item--name">ТОКЕН RTY-C</div>
                  <div class="item item--count">5</div>
                  <div class="item item--date">12.09.2018</div>
                </div>
                <div class="right">
                  <button class="card-table__btn show-lottery card-table__btn--active">Играть в лоторею</button>
                  <button class="card-table__btn show-money">Вывести средства</button>
                </div>
              </div>
              <div class="card-table-row">
                <div class="left">
                  <div class="item item--name">ТОКЕН RTY-C</div>
                  <div class="item item--count">5</div>
                  <div class="item item--date">12.09.2018</div>
                </div>
                <div class="right">
                  <button class="card-table__btn show-lottery card-table__btn--active">Играть в лоторею</button>
                  <button class="card-table__btn show-money">Вывести средства</button>
                </div>
              </div>
              <div class="card-table-row">
                <div class="left">
                  <div class="item item--name">ТОКЕН RTY-C</div>
                  <div class="item item--count">5</div>
                  <div class="item item--date">12.09.2018</div>
                </div>
                <div class="right">
                  <button class="card-table__btn show-lottery card-table__btn--active">Играть в лоторею</button>
                  <button class="card-table__btn show-money">Вывести средства</button>
                </div>
              </div>
              <div class="card-table-row">
                <div class="left">
                  <div class="item item--name">ТОКЕН RTY-C</div>
                  <div class="item item--count">5</div>
                  <div class="item item--date">12.09.2018</div>
                </div>
                <div class="right">
                  <button class="card-table__btn show-lottery card-table__btn--active">Играть в лоторею</button>
                  <button class="card-table__btn show-money">Вывести средства</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="personal-body__content" id="content-history">
          <div class="personal-main-card personal-main-card--table">
            <div class="card-bottom card-bottom--table">
              <div class="card-table-row">
                <div class="item">
                  <div class="prename">Операция</div>
                  <div class="name">Лоторея</div>
                </div>
                <div class="item">
                  <div class="prename">Дата</div>
                  <div class="name">15.06.19 20:00</div>
                </div>
                <div class="item">
                  <div class="prename">Использовано</div>
                  <div class="name">1 токен</div>
                </div>
                <div class="item">
                  <div class="prename">Баланс</div>
                  <div class="name">2345 токенов</div>
                </div>
                <div class="item">
                  <div class="prename">Выигрышь</div>
                  <div class="name">0.012 ETH</div>
                </div>
              </div>
              <div class="card-table-row">
                <div class="item">
                  <div class="prename">Операция</div>
                  <div class="name">Лоторея</div>
                </div>
                <div class="item">
                  <div class="prename">Дата</div>
                  <div class="name">15.06.19 20:00</div>
                </div>
                <div class="item">
                  <div class="prename">Использовано</div>
                  <div class="name">1 токен</div>
                </div>
                <div class="item">
                  <div class="prename">Баланс</div>
                  <div class="name">2345 токенов</div>
                </div>
                <div class="item">
                  <div class="prename">Выигрышь</div>
                  <div class="name">0.012 ETH</div>
                </div>
              </div>
              <div class="card-table-row">
                <div class="item">
                  <div class="prename">Операция</div>
                  <div class="name">Лоторея</div>
                </div>
                <div class="item">
                  <div class="prename">Дата</div>
                  <div class="name">15.06.19 20:00</div>
                </div>
                <div class="item">
                  <div class="prename">Использовано</div>
                  <div class="name">1 токен</div>
                </div>
                <div class="item">
                  <div class="prename">Баланс</div>
                  <div class="name">2345 токенов</div>
                </div>
                <div class="item">
                  <div class="prename">Выигрышь</div>
                  <div class="name">0.012 ETH</div>
                </div>
              </div>
              <div class="card-table-row">
                <div class="item">
                  <div class="prename">Операция</div>
                  <div class="name">Лоторея</div>
                </div>
                <div class="item">
                  <div class="prename">Дата</div>
                  <div class="name">15.06.19 20:00</div>
                </div>
                <div class="item">
                  <div class="prename">Использовано</div>
                  <div class="name">1 токен</div>
                </div>
                <div class="item">
                  <div class="prename">Баланс</div>
                  <div class="name">2345 токенов</div>
                </div>
                <div class="item">
                  <div class="prename">Выигрышь</div>
                  <div class="name">0.012 ETH</div>
                </div>
              </div>
              <div class="card-table-row">
                <div class="item">
                  <div class="prename">Операция</div>
                  <div class="name">Лоторея</div>
                </div>
                <div class="item">
                  <div class="prename">Дата</div>
                  <div class="name">15.06.19 20:00</div>
                </div>
                <div class="item">
                  <div class="prename">Использовано</div>
                  <div class="name">1 токен</div>
                </div>
                <div class="item">
                  <div class="prename">Баланс</div>
                  <div class="name">2345 токенов</div>
                </div>
                <div class="item">
                  <div class="prename">Выигрышь</div>
                  <div class="name">0.012 ETH</div>
                </div>
              </div>
              <div class="card-table-row">
                <div class="item">
                  <div class="prename">Операция</div>
                  <div class="name">Лоторея</div>
                </div>
                <div class="item">
                  <div class="prename">Дата</div>
                  <div class="name">15.06.19 20:00</div>
                </div>
                <div class="item">
                  <div class="prename">Использовано</div>
                  <div class="name">1 токен</div>
                </div>
                <div class="item">
                  <div class="prename">Баланс</div>
                  <div class="name">2345 токенов</div>
                </div>
                <div class="item">
                  <div class="prename">Выигрышь</div>
                  <div class="name">0.012 ETH</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="personal-body__content" id="content-notice">
          <div class="personal-main-card">
            <div class="card-top">
              <div class="card-top__title">Уведомлять меня о:</div>
            </div>
            <div class="card-bottom">
              <div class="personal-modal__check"><input type="checkbox" class="token-check-input"><span class="token-check"></span><span>Результаты лоторей</span></div>
              <div class="personal-modal__check"><input type="checkbox" class="token-check-input"><span class="token-check"></span><span>Вывод средств</span></div>
              <div class="personal-modal__check"><input type="checkbox" class="token-check-input"><span class="token-check"></span><span>Новости и акции проекта</span></div>
              <div class="personal-modal__check"><input type="checkbox" class="token-check-input"><span class="token-check"></span><span>Изменение личных данных</span></div>
              <button class="personal-save main-btn">Сохранить</button>
            </div>
          </div>
        </div>
        <div class="personal-body__content personal-body__content--active" id="content-personal">
          <div class="personal-main-card">
            <div class="card-top">
              <div class="card-top__title">Платежные средства</div>
            </div>
            <div class="card-bottom">
              <div class="card-bottom__title">ETH кошелек</div>
              <div class="card-bottom__big-title">hasf0g8970ah230897hfd0sa89uhfn287hv</div>
              <a href="#" class="card-bottom__link">Сменить кошелек</a>
              <div class="card-bottom__title card-bottom__title--bank-card">Банковская карта</div>
              <div class="bank-card">
                <div class="card-number">Банковская карта не привязана</div>
                <button class="bank-card__btn">Привязать карту</button>
              </div>
            </div>
          </div>
          <div class="personal-main-card">
            <div class="card-top">
              <div class="card-top__title"> Личные данные</div>
            </div>
            <div class="card-bottom">
              <div class="card-bottom__title">Email для входа</div>
              <div class="card-bottom__big-title">username@mail.ru</div>
              <a href="#" class="card-bottom__link">Сменить Email</a>
            </div>
          </div>
          <div class="personal-main-card">
            <div class="card-top">
              <div class="card-top__title">Пароль</div>
            </div>
            <div class="card-bottom">
              <button class="personal-new-password main-btn">Сменить пароль</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="footer">
  <div class="container">
    <div class="footer__logo">Logo</div>
    <nav class="footer__nav">
      <ul>
        <li><a href="token.php">Токены</a></li>
        <li><a href="about.php">О проекте</a></li>
        <li><a href="news.php">Новости</a></li>
        <li><a href="document.php">Соглашение</a></li>
        <li><a href="help.php">Помощь</a></li>
        <li><a href="political.php">Политика</a></li>
      </ul>
    </nav>
    <div class="footer__social">
      <div class="item" style="background-image: url(media/icon/twitter.svg);"><a href="#"></a></div>
      <div class="item" style="background-image: url(media/icon/yt.svg);"><a href="#"></a></div>
      <div class="item" style="background-image: url(media/icon/tg.svg);"><a href="#"></a></div>
      <div class="item" style="background-image: url(media/icon/insta.svg);"><a href="#"></a></div>
    </div>
  </div>
</footer>

<div class="personal-modal personal-modal--lottery">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 offset-md-2">
        <div class="personal-modal__lottery">
          <div class="personal-modal__close"></div>
          <div class="lottery-fon"></div>
          <div class="lottery-top">
            <h3 class="personal-modal__title">Лотерея</h3>
            <div class="personal-modal__desc">Лотерея происходит мгновенно. в лотерее можно играть на токены разного формата и неограниченного кличества. По результатам лотереи вам будет начислен выигрыш,который вы увидите в своем личном кабинете во вкладке история для того, чтобы играть, нажмите кнопку <span>играть в лотерею</span></div>
          </div>
          <div class="personal-modal__small-title">Выбранные токены</div>
          <div class="personal-modal__check"><input type="checkbox" class="token-check-input"><span class="token-check"></span><span>ТОКЕН RTY-C</span></div>
          <div class="personal-modal__check"><input type="checkbox" class="token-check-input"><span class="token-check"></span><span>ТОКЕН RTY-C</span></div>
          <button class="main-btn lottery-btn">Играть в лоторею</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="personal-modal personal-modal--money">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 offset-md-2">
        <div class="personal-modal__lottery">
          <div class="personal-modal__close"></div>
          <div class="lottery-fon"></div>
          <div class="lottery-top">
            <h3 class="personal-modal__title">Вывод средств</h3>
            <div class="personal-modal__desc">Вывод средств осуществляется вручную администрацией сайта. Это сделано в целях безопасности и гарантии зачисления средств по Вашим реквизитам. В связи с этим вывод может занимать некоторе время. Просим Вас подождать</div>
            <div class="personal-modal-money__input__label" id="personal-out">
              <input type="text" class="personal-modal-money__input"  placeholder="00.00">
              <div class="personal-modal-money__input__desc">К выводу доступно: 15436 рублей</div>
            </div>
            <div class="out-nav">
              <button class="out-nav__btn out-nav__btn--active">Вывести на ETH кошелек</button>
              <button class="out-nav__btn">Вывести на карту</button>
            </div>
          </div>
          <div class="personal-modal-money__input__label" id="personal-eth">
            <input type="text" class="personal-modal-money__input" placeholder="hasf0g8970ah230897hfd0sa89uhfn287hv">
            <div class="personal-modal-money__input__desc">Указать другой кошелек</div>
          </div>
          <button class="main-btn lottery-btn">Заказать вывод средств</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="./js/main.js"></script>
</body>
</html>