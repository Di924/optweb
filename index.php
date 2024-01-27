<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="mycss/style.css"> 
    <title>ProcessStream</title>
    
</head> 
<body> 
<header> 
<div class="container"> 
    <!-- Строка 1: Навигация --> 
    <!-- <div class="row">  -->
    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation"> 
        <img src="img/logo.png" alt="" srcset="" style="height: 128px; width:128px;"> 
            <div class="container"> 
                <!-- Кнопка --> 
                <button class="navbar-toggler position-absolute top-50 end-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapsNav">Меню 
                    <span class="navbar-toggler-icon"></span> 
                </button> 
                <div class="collapse navbar-collapse" id="collapsNav"> 
                    <ul id="list-tab" class="nav navbar-nav me-auto mb-2-mb-lg-0"> 
                        <li class="nav-item"><a class="nav-link" href="#list-1" data-bs-toggle="list" role="tab"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16"> 
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/> 
                        </svg> Главная</a></li> 
                        <li class="nav-item"><a class="nav-link" href="#list-2" data-bs-toggle="list"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                        </svg> Уведомления</a></li> 
                        <li class="nav-item"><a class="nav-link" href="#list-3" data-bs-toggle="list"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16"> 
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/> 
                        </svg> Сообщения</a></li> 

                    </ul>
                    <form action="" class="input-group navbar-text" style="width: 40%">
                        <span class="input-group-text" id="addon-wrapping">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </span>
                        <input id="id-search" type="text" class="form-control" placeholder="Найти.." required>
                        <span class="input-group-text">
                            <button type="button" class="btn btn-light" id="btn-search">Найти</button>
                        </span>
                    </form>

                </div> 
            </div>
            <div id="nav-options" class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                    <img src="img/house.png" alt="">
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#" class="dropdown-item">Профиль</a></li>
                    <li><a href="#" class="dropdown-item">Безопасность</a></li>
                    <li><a href="#" class="dropdown-item">Настройки</a></li>
                    <hr class="hr">
                    <li><a href="#" class="dropdown-item">Выйти</a></li>
                </ul>
                <button id="tweet" class="btn btn-default border border-dark pull-right position-relative">
                    <span id="badge" class="position-absolute top-0 start-100 translate-middle p-1 bgdanger border border-dark bg-danger  rounded"></span>
                    <a class="nav-link text-black" id="bookmark" href="#" title="Добавить в закладки">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                          </svg>
                    </a>
                </button>
            </nav>
            <!-- Подменю -->
                <nav class="navbar navbar-expand-md" role="navigation">
                    <div class="container tab-content" id="nav-tabContent">
                    <!-- Раздел 1: Главная -->
                        <div class="tab-pane fade navbar-nav" id="list-1" role="tabpanel">
                            <a href="#" class="text-decoration-none">Главная > Стр.1</a> 
                            <a href="#" class="text-decoration-none">Главная > Стр.2</a> 
                            <a href="#" class="text-decoration-none">Главная > Стр.3</a> 
                            </div>
                        <div class="tab-pane fade navbar-nav" id="list-2" role="tabpanel">
                        <!-- Раздел 2: Уведомления -->
                            <a href="#" class="text-decoration-none">Уведомления > Стр.1</a> 
                            <a href="#" class="text-decoration-none">Уведомления > Стр.2</a> 
                            <a href="#" class="text-decoration-none">Уведомления > Стр.3</a> 
                        </div>
                        <!-- Раздел 3: Сообщения -->
                        <div class="tab-pane fade navbar-nav" id="list-3" role="tabpanel">
                            <a href="#" class="text-decoration-none">Сообщения > Стр.1</a>   
                            <a href="#" class="text-decoration-none">Сообщения > Стр.2</a>   
                            <a href="#" class="text-decoration-none">Сообщения > Стр.3</a>   
                        </div> <!-- end tab-pane 3 -->
                    </div> <!-- end tab-content -->
                </nav> <!-- end navbar -->
        </div> 
    </div> <!-- end container --> 
</header>
<!-- Содержание -->
<div class="container main">
    <div class="row">
    <!-- Левая колонка для больших устройств -->
        <div id="profile" class="col-md-3 d-none d-sm-block d-sm-none d-md-block">
        <!-- start Card 1 -->
            <div id="profile-resume" class="card">
                <img src="img/card.jpg" class="card-img-top img-fluid">
                <div class="card-body card-block">
                    <img src="img/habib.jpg" class="card-img border img-thumbnail" alt="">
                    <h4 class="card-title">Мыслящий человек</h4>
                    <p class="card-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg> house-3000@mail.ru
                    </p>
                    <p class="card-text">Занимаюсь разработкой пользовательского интерфейса (frontend-разработчик)</p>
                        <div class="d-flex justify-content-end">
                            <p class="cars-text">
                                <a href="https://web.whatsapp.com/" class="btn btn-success" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                </svg> whatsapp</a>
                            </p>
                        </div>
                    </div>
                    <div id="profile-photo" class="card">
                        <div class="card-header">Портфолио:</div>
                            <div class="card-body card-block">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item w-50">
                                        <a href="#" class="thumbnail" data-bs-toggle="modal" data-bs-target="#Modal">
                                        <img class="img-fluid" src="img/card-1.jpg"></a>
                                    </li>
                                    <li class="list-group-item w-50">
                                        <a href="#" class="thumbnail" data-bs-toggle="modal" data-bs-target="#Modal">
                                        <img class="img-fluid" src="img/card-2.jpg"></a>
                                    </li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item w-50">
                                        <a href="#" class="thumbnail" data-bs-toggle="modal" data-bs-target="#Modal">
                                        <img class="img-fluid" src="img/card-3.jpg"></a>
                                    </li>
                                    <li class="list-group-item w-50">
                                        <a href="#" class="thumbnail" data-bs-toggle="modal" data-bs-target="#Modal">
                                        <img class="img-fluid" src="img/card-4.jpg"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Модальное окно + слайдер -->
                <div id="main-content main" class="col-sm-12 col-md-6">
                    <div id="search_text" class="alert alert-warning alert-dismissible fade d-none show" role="alert">
                        Совпадений не найдено!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div id="main-card" class="card">
                        <img src="img/coi.jpg" class="card-img border img-thumbnail rounded-circle" style="width:80px; height:80px;" alt="">
                        <h4 class="text-primary">Виктор Цой</h4>
                        <p class="card-text">Я один, но это не значит, что я одинок</p>
                        <a href="index.php?xml=1" class="p-2" title="Показать" style="text-derocation:none">
                            <?php
                                for ($i=1;$i<=5;$i++) {
                                    echo ' <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>';
                                }
                            ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                        <form id="new-message" class="p-2" method="post" action="php/blog.php">
                            <div class="input-group navbar-text" >
                                <input type="text" name="body" class="form-control" placeholder="Комментировать.." aria-label="Найти.." aria-describedby="addon-wrapping" required>
                                <span class="input-group-text" id="addon-wrapping">
                                    <button class="btn btn-primary" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                                            <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5"/>
                                            <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3"/>
                                        </svg>
                                    </button>
                                </span>
                            </div>
                            <input type="text" value="1" name="num" hidden>
                        </form>
                        <?php
                            if(isset($_GET['xml']) && $_GET['xml']=='1') {
                                include "php/comment.php";
                            }
                        ?>
                    </div>
                    <div id="main-card" class="card">
                        <img src="img/robot.jpg" class="card-img border img-thumbnail rounded-circle" style="width:80px; height:80px;" alt="">
                        <h4 class="text-primary">Мистер Робот</h4>
                        <p class="card-text">Как можно снять маску, когда она уже не маска, когда она такая же часть меня, как и я сам?</p>
                        <a href="index.php?xml=2" class="p-2" title="Показать" style="text-derocation:none">
                            <?php
                                for ($i=1;$i<=5;$i++) {
                                    echo ' <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>';
                                }
                            ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                        <form id="new-message" class="p-2" method="post" action="php/blog.php">
                            <div class="input-group navbar-text" >
                                <input type="text" name="body" class="form-control" placeholder="Комментировать.." aria-label="Найти.." aria-describedby="addon-wrapping" required>
                                <span class="input-group-text" id="addon-wrapping">
                                    <button class="btn btn-primary" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                                            <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5"/>
                                            <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3"/>
                                        </svg>
                                    </button>
                                </span>
                            </div>
                            <input type="text" value="2" name="num" hidden>
                        </form>
                        <?php
                            if(isset($_GET['xml']) && $_GET['xml']=='2') {
                                include "php/comment.php";
                            }
                        ?>
                    </div>
                </div>
                

                <!-- Правая колонка для больших устройств -->
                <div id="right-content" class="col-md-3 d-none d-sm-block d-sm-none d-md-block">
                    <div class="card" id="news">
                        <div class="card-header"><p class="text-info fs-5" style="margin:0">Новости:</p></div>
                        <div class="card-block" style="padding: 15px;">
                            <img src="img/arch-linux.jpg" alt="" class="img-fluid p-3">
                            <div class="texti">
                                <p>Arch Linux</p>
                                <button class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#offcanvas1" aria-controls="offcanvas1">Читать</button>
                            </div>
                        </div>
                        <div class="card-block" style="padding: 15px;">
                            <img src="img/debian.png" alt="" class="img-fluid p-3">
                            <div class="texti">
                                <p>Debian</p>
                                <button class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#offcanvas2" aria-controls="offcanvas2">Читать</button>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="card card-success">
                            <div class="card-header">
                                <img src="img/rss-rbk.jpg" class="card-img-top py-2" alt="rss-РБК">
                                <!-- Окно оповещения -->
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                     <?php
                                    require("php/rss.php");
                                    
                                    // Вывод курсов валют
                                    foreach ($kurs as $currency => $rate) {
                                        echo $currency . $rate . "<br>";
                                    }
                                    ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas1" aria-labelledby="offcanvas1">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-info">Arch Linux</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
            </div>
            <div class="offcanvas-body">
                <img src="img/arch-linux.jpg" alt="" style="width:365px">
                <p class="text-muted">Независимый дистрибутив GNU/Linux для опытных пользователей, оптимизированный для архитектуры x86-64.

Дистрибутив стремится предоставить последние «новейшие» версии программ, следуя модели rolling release. По умолчанию пользователю предоставляется минималистичная базовая система, в которую пользователь может добавить то, что ему требуется.</p>
            </div>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas2" aria-labelledby="offcanvas2">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-info">Debian</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
            </div>
            <div class="offcanvas-body">
            <img src="img/debian.png" alt="" style="width:365px">
                <p class="text-muted">Операционная система, состоящая из свободного программного обеспечения с открытым исходным кодом. В настоящее время Debian GNU/Linux — один из самых популярных и важных дистрибутивов GNU/Linux, в первичной форме оказавший значительное влияние на развитие этого типа ОС в целом.</p>
            </div>

        </div>

        
                <div class="container">
                    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div id="carousel-id" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="img/card-1.jpg" alt="Фура" class="d-block w-100" srcset="">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/card-2.jpg" alt="Фура-2-2" class="d-block w-100" srcset="">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/card-3.jpg" alt="Фура-2-2" class="d-block w-100" srcset="">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/card-4.jpg" alt="Фура-2-2" class="d-block w-100" srcset="">
                                            </div>
                                        </div><!-- carousel-inner        -->
                                    </div> <!-- carousel-id        -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-id" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Предыдущий</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-id" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Следующий</span>
                                    </button>
                                    <!-- end Carusel -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                    </div>
                                </div> <!-- modal-body -->
                            </div> <!-- modal-content -->
                        </div> <!-- modal-dialog -->
                    </div> <!-- end modal -->
                </div> <!-- left con -->
            </div> 
        </div>
            <!-- Правая колонка для больших устройств -->
    <div id="right-content" class="col-md-3 d-none d-sm-block d-sm-none d-mdblock">
        Колонка-3
    </div>
    </div>
</div>




<script src="js/bootstrap.bundle.min.js"></script> 
<script src="myjs/main.js"></script>
<script>
    let btn_search = document.getElementById('btn-search');
    btn_search.onclick = function() {
        // 1. Строка поиска
        let search = document.getElementById('id-search').value;
        // 2. Регулярное выражение (ищем только текст)
        let s_reg = new RegExp(search, 'g');
        
        // Очищаем предыдущие выделения
        clearHighlights();

        // Функция для очистки выделений
        function clearHighlights() {
            let highlightedElements = document.querySelectorAll('.text-warning');
            highlightedElements.forEach(element => {
                let parent = element.parentNode;
                parent.replaceChild(document.createTextNode(element.textContent), element);
            });
        }

        // Функция для рекурсивного обхода элементов и замены текста внутри
        function replaceText(element) {
            if (element.nodeType === 3) { // Текстовый узел
                let str = element.nodeValue.replace(s_reg, match => `<span class="text-warning">${match}</span>`);
                element.replaceWith(...strToNodes(str));
            } else if (element.nodeType === 1 && element.nodeName !== 'SCRIPT' && element.nodeName !== 'STYLE') { // Элемент
                for (let child of element.childNodes) {
                    replaceText(child);
                }
            }
        }

        // Функция для преобразования строки в массив узлов
        function strToNodes(str) {
            let div = document.createElement('div');
            div.innerHTML = str;
            return div.childNodes;
        }

        // Получаем корневой элемент для начала обработки
        let rootElement = document.body;

        // Заменяем текст внутри элементов
        replaceText(rootElement);

        // Показываем или скрываем сообщение о не совпадении
        let message = document.getElementById('search_text');
        message.classList.toggle('d-none', !rootElement.innerHTML.includes('<span class="text-warning">'));

    }
</script>



 
</body> 
</html>

