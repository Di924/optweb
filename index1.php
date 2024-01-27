<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<!-- Адаптация под мобильные приложения -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="mycss/base.css" rel="stylesheet">
<link rel="stylesheet" href="mycss/style.css"> 
<title>ProcessStream</title>
</head>
<body>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<script src="myjs/main.js"></script>
<script src="myjs/ajax.js"></script>
<header>
    <div class="container">
        <!-- Строка 1: Навигация -->
        <div class="row">
            <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
                <div class="collapse navbar-collapse" id="collapsNav">
                    <ul class="nav navbar-nav me-auto mb-2 mb-lg-0" id="list-tab">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="list" href="#list-1" role="tab"><a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"><path d="M8.707 1.5a1 1 0 0 0-1.414"></svg>
                                &nbsp;Главная</a>
                        </li>
                        <li class="nav-item"></li>
                    </ul>
                    <span class="navbar-text"><form method="post" action="php/search.php"><input type="text" name="search" id="search"><button type="submit">Найти</button></form></span>
                </div>
                <div id="nav-options" class="btn-group pull-right">
                    <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                        <img src="/www/optweb/img/Bill.jpg" width="55px">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Профиль</a></li>
                        <li><a class="dropdown-item" href="#">Безопасность</a></li>
                        <li><a class="dropdown-item" href="#">Настройки</a></li>
                        <hr class="hr">
                        <li><a class="dropdown-item" href="#">Выйти</a></li>
                    </ul>
                </div>
            </nav>
            <!-- Содержание -->
            <div class="container main">
                <div class="row">
                <!-- Левая колонка для больших устройств -->
                <div id="profile" class="col-md-3 d-none d-sm-block d-sm-none d-md-block">Колонка-1</div>
                    <!-- Центральная колонка -->
                    <div id="main-content" class="col-sm-12 col-md-6">Колонка-2</div>
                    <!-- Правая колонка для больших устройств -->
                    <div id="right-content" class="col-md-3 d-none d-sm-block d-sm-none d-md-block">  Колонка-3</div>
                </div>
            </div> <!-- end row -->
    </div> <!-- end container -->
</header>

<button id="tweet" class="btn btn-default border border-light pull-right position-relative">
    <span id="badge" class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
    <a class="nav-link text-white" id="bookmark" href="#" title="Добавить в закладки"></a>
</button>
</div>
</div>
</nav>









<footer class="row">
    <div class="container">
    <div class="row">
    <div class="col-sm-2">
    <img src="img/logo.png" class="img-responsive img-fluid" max width="120px">
    </div>
    <div class="col-sm-2">
    <h5>О компании</h5>
    <ul class="list-unstyled">
        <li><a href="#">Документация</a></li>
        <li><a href="#">Контакты</a></li>
        <li><a href="#">О нас</a></li>
        </ul>
        </div>
        <div class="col-sm-2">
        <h5>Соцсети</h5>
        <ul class="list-unstyled">
        <li><a href="#">Facebook</a></1li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Blog</a></1li>
        </ul>
        </div>
        <div class="col-sm-2">
        <h5>Поддержка</h5>
        <ul class="list-unstyled">
        <li><a href="#">Правила и условия</a></li>
        <li><a href="#">Лицензия</a></li>
        <li><a href="#">Справка</a></1li>
        </ul>
        </div>
        <div class="col-sm-4">
        <address>
        <strong>Колледж АлтГУ</strong><br>
        Барнаул, Комсомольский проспект, 100<br>
        <abbr title="Телефон">Тел.:</abbr> +7 (3852) 111-2222
        </address>
        </div>
        </div> <!-- end row -->
        </div> <!-- end container -->
</footer>

</body>
</html>