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
<div class="home__wrapper not-found not-found--sign">
  <div class="decor-ellipse" id="decor-one"></div>
  <div class="decor-ellipse" id="decor-for"></div>
  <section class="home home-reg home-rec">
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
        <div class="reg__content">
          <h3 class="reg-title">Сброс пароля</h3>
          <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
              <form class="reg-form">
                <div class="reg-form-input-wrapp login">
                  <input type="text" class="reg-input" placeholder="example@domain.do">
                </div>
                <div class="reg-form__bottom reg-form__bottom--rec">
                  <a href="recovery.php" class="reg-form__bottom__link back-link-recovery" style="text-decoration: none;"><span class="icon"></span> Назад</a>
                  <div class="reg-form__bottom__button">
                    <button class="enter main-btn">Выслать код</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
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
</script>
</body>
</html>