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
<div class="home__wrapper not-found">
  <div class="decor-ellipse" id="decor-one"></div>
  <div class="decor-ellipse" id="decor-three"></div>
  <div class="decor-ellipse" id="decor-for"></div>
  <section class="home">
    <div class="decor-ellipse" id="decor-two"></div>
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
          <a href="#" class="home-enter">Войти</a>
          <div class="main-btn reg-btn">Регистрация</div>
        </div>
        <div class="humb"></div>
      </div>
    </div>
    <div class="home__content">
      <div class="container">
        <div class="not-found__content">
          <div class="text">Упс, эта страница исчезла</div>
          <div class="number">404</div>
          <a href="index.php" class="main-btn not-found__btn">Вернуться на главную</a>
        </div>
      </div>
    </div>
  </section>
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

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="./js/main.js"></script>
<script>
  $(document).ready(function () {
    var fH = $('.footer').height();
    var wH = $(window).height();
    var hH = wH - fH - 29 - 52;
    var notFoundPT = (hH - 455) / 2;
    $('.not-found .home').css('max-height', hH + 'px');
    $('.not-found .home').css('min-height', hH + 'px');
    $('.home__content .not-found__content').css('padding-top', notFoundPT + 'px');
  });
</script>
</body>
</html>