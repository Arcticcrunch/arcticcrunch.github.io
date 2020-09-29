<?php
    require "FunctionLibrary.php";

    function PlaceTestText()
    {
        return file_get_contents("Text/FillerArticle.txt");
    }


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <meta name="viewport", content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="Scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="Styles.css" >
    <title>
        Клининговая фирма №1
    </title>
</head>

<body class = "MainPageBorder MainColorBG" onload="OnPageLoad();">
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

        <div class = "NavigationPanel">
            <button class = "NavigationButton SecondaryColorFG ActiveColorBG" onclick='location.href="https://cleaning"'>
                Главная
            </button>
            <button class = "NavigationButton MainColorFG" onclick='location.href="https://cleaning/about.html"'>
                О Нас
            </button>
            <button class = "NavigationButton MainColorFG">
                Услуги
            </button>
            <button class = "NavigationButton MainColorFG">
                Заказать
            </button>
            <button class = "NavigationButton MainColorFG">
                Контакты
            </button>
            <button class = "NavigationButton MainColorFG">
                Отзывы
            </button>
        </div>

        <div class = "MainLogoPanel">
            <button onclick='location.href="https://cleaning"' class = "MainLogoButton">
                <!-- <div> class = "MainLogoImagePanel"> -->
                <div>
                    <img class = "MainLogoImage" src="Images/empty.jpg">
                </div>
                <div class = "MainLogoText MainColorFG">
                    Название фирмы
                </div>
            </button>
        </div>

    </div>



    <!--Основное наполнение сайта:-->
    <main class = "Main">

        <!--Фоновое изображение-->
        <div class = "MainPageBackgrond">
            <div class = "MainPageBackgroundPicrue" id="backgroundPicture">
            
            </div>
        </div>

        <!-- Интро панель на главной странице -->
        <div class="IntroPanel PanelsBorderStyle MainPanelsWidth">
            <div class = "IntroPanelLogoPanel">
                <div>
                    <img class = "IntroPanelLogo" src="Images/empty.jpg">
                </div>
                <div class = "MainLogoText MainColorFG">
                    Название фирмы
                </div>
        </div>
        </div>


        <div class = "BuyButtonPanel">
            <button class = "BuyButton PanelsShadow PanelsBorderStyle" onclick="NotImplemented();">
                Заказать сейчас!
            </button>
        </div>

        <!--Панель преимуществ-->
        <div class="BenefitsPanelBackground MainColorBG PanelsShadow">
            <div class = "BenefitsPanel PanelsBorderStyle MainPanelsWidth PanelsShadow">
                <div class = "BenefitsPanelTitleText">
                    Почему вам нужно выбрать нас?..
                </div>

                <div class = "BenefitPanelTable">
                    <div class = "BenefitPanelBlock">
                        <img class = "BenefitImage" src="Images/empty.jpg">
                        <div class = "BenefitBlockText" >Причина 1</div>
                    </div>
                    <div class = "BenefitPanelBlock">
                        <img class = "BenefitImage" src="Images/empty.jpg">
                        <div class = "BenefitBlockText" >Причина 2</div>
                    </div>
                    <div class = "BenefitPanelBlock">
                        <img class = "BenefitImage" src="Images/empty.jpg">
                        <div class = "BenefitBlockText" >Причина 3</div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>

        <!--Панель услуг-->
        <div class = "ServiceTypesPanel PanelsBorderStyle MainPanelsWidth">
            <div class="ServiceTypesHeader SecondaryColorFG">
                Здесь будет распологаться перечень услуг по пунктам...
                <div style="font-size: 24px; padding-left: 28px; padding-top: 28px; color:white">

                </div>
            </div>
        </div>
        
        <!--Панель калькулятора стоимости-->
        <div class = "CostCalculatorPanel PanelsBorderStyle MainPanelsWidth">
            <div class = "CostCalculatorHeader">
                Калькулятор стоимости
            </div>
            <div class = "CostCalculatorServiceText">
                Услуга 1 (80 грн/М2)
            </div>
            <div>
                <input type="range" min="1" max="100" value="1" class="CostSlider" id="costSlider1">
            </div>
            <div class = "CostCalculatorServiceText">
                Услуга 2 (160 грн/М)
            </div>
            <div>
                <input type="range" min="1" max="100" value="1" class="CostSlider" id="costSlider2">
            </div>
            <div class = "CostCalculatorServiceText">
                Услуга 3 (200 грн/М2)
            </div>
            <div>
                <input type="range" min="1" max="100" value="1" class="CostSlider" id="costSlider3">
            </div>
            <div class = "CostCalculatorServiceText">
                Услуга 4 (60 грн/М)
            </div>
            <div>
                <input type="range" min="1" max="100" value="1" class="CostSlider" id="costSlider4">
            </div>
            <div class = "CostCalculatorServiceText">
                Услуга 5 (150 грн/М)
            </div>
            <div>
                <input type="range" min="1" max="100" value="1" class="CostSlider" id="costSlider5">
            </div>

            

        </div>

        <!--Панель доп инфы-->
        <div class= "AboutInfoPanel PanelsBorderStyle MainPanelsWidth">

        </div>

    </main>

    <footer class = "Footer">
        <div class = "Creator">Крютченко "Johnta" Никита 2020(c)</div>
    </footer>

    <!--
    <script type="text/javascript">
        $(document).ready(function () {
            var offset = $('#floatingButton').offset();
            var topPadding = 0;
            $(window).scroll(function() {
                if ($(window).scrollTop() > offset.top) {
                    $('#floatingButton').stop().animate({marginTop: $(window).scrollTop() - offset.top + topPadding});
                }
                else {
                    $('#floatingButton').stop().animate({marginTop: 0});
                }
            });
        });
    </script>
    -->
</body>

















<!--
<body style="padding-left: 20px; padding-right: 20px;">
    <h1>
        Список статей:
    </h1>
    <div style="font-size: 17px;">
    -->
        <?php for ($i=0; $i < count($allArticles); $i++) : ?> 
        <!--
            <a href="article.php?name=<?= $allArticles[$i]["name"]?>">
                <?=$allArticles[$i]["header"] ?> <br>
            </a>
            -->
        <?php endfor ?>
        <!--
    </div>
</body>
-->


</html>