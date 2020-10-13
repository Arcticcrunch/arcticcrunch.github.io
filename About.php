<?php
    //require "FunctionLibrary.php";
    //require "Connections.php"

    // function PlaceTestText()
    // {
    //     return file_get_contents("Text/FillerArticle.txt");
    // }


?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <meta name="viewport", content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="Scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="Styles.css" >
    <link rel="icon" href="Images/empty.jpg">
    <title>
        Клининговая фирма №1
    </title>
</head>

<body class = "MainPageBorder MainColorBG" onload="OnPageLoad();" id="mainPageBorder">
    <div class = "HeaderPanel PanelsShadow">
        <!--Заголовок сайта-->
        <div class = "HeaderTittle">
            <header>
                Лучшая клининговая фирма
            </header>
        </div>

        <!--Панель с кнопками соц сетей-->
        <div class = "SocialPanel">
            <!-- ВКонтакте -->
            <button class = "SocialButton VKontakteButton"
                onclick='location.href="https://vk.com/nikolol"'
                title="Создатель этого сайта :)">
            </button>
            <!-- Facebook -->
            <button class = "SocialButton FacebookButton"
                onclick="NotImplemented();"
                title="Мы в Facebook :)">
            </button>
            <!-- YouTube -->
            <button class = "SocialButton YouTubeButton"
                onclick="NotImplemented();"
                title="Мы на YouTube :O">
            </button>
            <!-- Twitter -->
            <button class = "SocialButton TwitterButton"
                onclick="NotImplemented();"
                title="Мы в Twitter ;)">
            </button>
            <!-- GitHub -->
            <button class = "SocialButton GitHubButton"
                onclick='location.href="https://github.com/Arcticcrunch/arcticcrunch.github.io"'
                title="Репозиторий данного сайта на GitHub">
            </button>
        </div>

        <!-- Панель с номером обратной связи -->
        <div class="HeaderPhoneNumerPanel">
            +3800-555-35-35
        </div>

        <div class = "NavigationPanel">
            <button class = "NavigationButton MainColorFG SecondaryColorBG" onclick='location.href="https://cleaning"'>
                Главная
            </button>
            <button class = "NavigationButton SecondaryColorFG ActiveColorBG" onclick='location.href="https://cleaning/about.php"'>
                О Нас
            </button>
            <button class = "NavigationButton MainColorFG SecondaryColorBG" onclick="ScrollToServices();">
                Услуги
            </button>
            <button class = "NavigationButton MainColorFG SecondaryColorBG" onclick="ScrollToCalculator();">
                Калькулятор
            </button>
            <button class = "NavigationButton MainColorFG SecondaryColorBG" onclick="NotImplemented();">
                Контакты
            </button>
            <button class = "NavigationButton MainColorFG SecondaryColorBG" onclick='location.href="https://cleaning/testphp.php"''>
                Отзывы
            </button>
        </div>

        <div class = "MainLogoPanel">
            <button onclick='location.href="https://cleaning"' class = "MainLogoButton SecondaryColorBG">
                <div class="MainLogoImage">
                    <!-- <img class = "MainLogoImage" src="Images/empty.jpg"> -->
                </div>
                <!-- <div class = "MainLogoText MainColorFG">
                    Название фирмы
                </div> -->
            </button>
        </div>

    </div>



    <div class="parallax">
        <div class="parallax__layer parallax__layer--base">
                Foreground
        </div>

        <div class="parallax__layer parallax__layer--back">
                Hello there!
        </div>

        <div class="parallax__layer parallax__layer--mid">
                Hello !!
        </div>

        <!-- <div>
            Regular
        </div> -->
    </div>


</body>

</html>




    
  
