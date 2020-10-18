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
    <script src="JQuery.js"></script>
    <link rel="stylesheet" type="text/css" href="Styles.css" >
    <link rel="icon" href="Images/empty.jpg">
    <title>
        Клининговая фирма №1
    </title>
</head>

<body class = "MainPageBorder SecondaryColorBG" onload="OnPageLoad();" id="mainPageBorder">
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
            <button class = "NavigationButtonTop SecondaryColorFG ActiveColorBG" onclick='location.href="https://cleaning"'>
                Главная
            </button>
            <button class = "NavigationButtonTop MainColorFG SecondaryColorBG" onclick='location.href="https://cleaning/about.php"'>
                О Нас
            </button>
            <button class = "NavigationButtonTop MainColorFG SecondaryColorBG" onclick="ScrollToServices();">
                Услуги
            </button>
            <button class = "NavigationButtonTop MainColorFG SecondaryColorBG" onclick="ScrollToCalculator();" style="font-size: calc(9px + 1.15vh);">
                Калькулятор
            </button>
            <button class = "NavigationButtonTop MainColorFG SecondaryColorBG" onclick="NotImplemented();">
                Контакты
            </button>
            <button class = "NavigationButtonTop MainColorFG SecondaryColorBG" onclick='location.href="https://cleaning/testphp.php"''>
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
                <!-- <div> -->
                    <img class = "IntroPanelLogo" src="Images/empty.jpg">
                <!-- </div> -->
                <div class = "MainLogoText MainColorFG">
                    Название фирмы
                </div>
            </div>
        </div>

        <!-- Кнопка заказа -->
        <div class = "BuyButtonPanel"  id="buyButton">
            <button class = "BuyButton PanelsShadow PanelsBorderStyle" onclick="ShowOrderPanel();">
                <!-- <div style="width: 70%; height: 70%; background-color: blue;">

                </div> -->
                Заказать сейчас!
            </button>
        </div>

        <!-- Выезжающая панель -->
        <div class="SlidingPanel PanelsShadow MainColorFG SecondaryColorBG PanelsBorderStyle" id="slidingPanel">
            <div class="SlidingPanelsBlock">
                
            </div>
            <div class="SlidingPanelsBlock">
                
            </div>

        </div>



        <!--Панель преимуществ-->
        <div  id="benefitsPanel" class="BenefitsPanelBackground MainColorBG PanelsShadow">
            <div class = "BenefitsPanel PanelsBorderStyle MainPanelsWidth PanelsShadow">
                <div class = "BenefitsPanelTitleText">
                    Почему вам нужно выбрать нас?..
                </div>

                <div class = "BenefitPanelTable">
                    <div class = "BenefitPanelBlock">
                        <img class = "BenefitImage" src="Images/empty.jpg">
                        <div class = "BenefitBlockTitle" >Индивидуальный подход</div>
                        <div class = "BenefitBlockText" >Мы подбираем индивидуальный подход к каждому клиенту исходя из его потребностей.</div>
                    </div>
                    <div class = "BenefitPanelBlock">
                        <img class = "BenefitImage" src="Images/empty.jpg">
                        <div class = "BenefitBlockTitle" >Качество</div>
                        <div class = "BenefitBlockText" >Высокое качество - это наша основная прерогатива.</div>
                    </div>
                    <div class = "BenefitPanelBlock">
                        <img class = "BenefitImage" src="Images/empty.jpg">
                        <div class = "BenefitBlockTitle" >Оперативность</div>
                        <div class = "BenefitBlockText" >Мы действуем быстро и с полной отдачей.</div>
                    </div>
                </div>
            </div>
        </div>

            
        <div class="MainGrid">
            <!-- Кнопка вверх -->
            <div class = "UpButtonPanel">
                <!-- <button class = "UpButton" onclick="ScrollToTop();">
                    
                </button> -->
            </div>


            <div class=" MainGridContent PanelsShadow ">
                <!--Панель услуг-->
                <div class = "ServiceTypesPanel PanelsBorderStyle MainPanelsWidth" id = "servicesPanel">
                    <div class="ServiceTypesHeader SecondaryColorFG">
                        <!-- Здесь будет распологаться перечень услуг по пунктам... -->
                        <!-- <br> -->
                        Мы занимаемся следующими видами работ:
                        <br>
                    
                        <ul style="text-align: left; font-size: 23px">
                            <li>Уборка в квартирах, отдельных комнатах;</li>
                            <li>Уборка в частных домах и на их территориях;</li>
                            <li>Клининг в офисных помещениях разного типа: кабинеты, свободные пространства, конференц-залы и проч.;</li>
                            <li>Очищение фасадов зданий от загрязнений всех типов сложностей;</li>
                            <li>Уборка в помещениях сразу после строительных или ремонтных работ;</li>
                            <li>Мойка окон всех форм и размеров;</li>
                            <li>Клининг помещений, которые претерпели пожар или затопление;</li>
                            <li>Очистка плитки, мрамора, паркета;</li>
                            <li>Осуществление очистки ковра и других тканей, используя специализированные химические средства;</li>
                            <li>Выполнение уборки на высоте;</li>
                            <li>Очищение воздуха.</li>
                        </ul>

                        <div style="font-size: 24px; padding-left: 28px; padding-top: 28px; color:white">

                    </div>
                </div>
            </div>
                
            <!--Панель калькулятора стоимости-->
            <div class="CostCalculatorBG PanelsShadow">
                <div class = "CostCalculatorPanel PanelsBorderStyle MainPanelsWidth" id = "calculatorPanel">
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

                    <div>
                        <div>
                            Сумма:
                        </div>
                        <div>
                            1400
                        </div>
                    </div>
                    

                </div>
            </div>

            <!--Панель доп инфы-->
            <div class= "AboutInfoPanel PanelsBorderStyle MainPanelsWidth">
                    
                    <?php echo "Hello there!"; ?>

                </div>
                



            </div>

            <div class="AdsPanel">
                <!-- aasdasde -->
            </div>

            <footer class = "Footer PanelsShadow">
                <!-- <div><button style="width: 70px; height: 70px" onclick="ScrollToTop();">Вверх!</div> -->
              
                <div class = "NavigationPanel">
                    <button class = "NavigationButtonBottom SecondaryColorFG ActiveColorBG" onclick='location.href="https://cleaning"'>
                        Главная
                    </button>
                    <button class = "NavigationButtonBottom MainColorFG SecondaryColorBG" onclick='location.href="https://cleaning/about.php"'>
                        О Нас
                    </button>
                    <button class = "NavigationButtonBottom MainColorFG SecondaryColorBG" onclick="ScrollToServices();">
                        Услуги
                    </button>
                    <button class = "NavigationButtonBottom MainColorFG SecondaryColorBG" onclick="ScrollToCalculator();" style="font-size: calc(9px + 1.15vh);">
                        Калькулятор
                    </button>
                    <button class = "NavigationButtonBottom MainColorFG SecondaryColorBG" onclick="NotImplemented();">
                        Контакты
                    </button>
                    <button class = "NavigationButtonBottom MainColorFG SecondaryColorBG" onclick='location.href="https://cleaning/testphp.php"''>
                        Отзывы
                    </button>
                </div>

                <div class = "Creator">Крютченко "Johnta" Никита 2020(c)</div>

            </footer>
        </div>
        


        <!--Кнопка прокрутки вверх-->
        <div class="UpButtonFixed" onclick="ScrollToTop();" onmouseover="UpButtonOnMouseOver();" onmouseout="UpButtonOnMouseLeave();" id="upButtonFixed">
            <!-- UpButtonFixed -->

        </div>
        <!-- Графика кнопки прокрутки вверх -->
        <div class="UpButtonGFX" id="upButtonGFX">
            <!-- UpButtonGFX -->
        </div>


        <!-- Фон панели заказа -->
        <div class="OrderPanelBackground" id="orderPanelBackground" onclick="HideOrderPanel();">

        </div>
        <!-- Панель заказа PanelsShadow-->
        <div class="OrderPanel SecondaryColorBG PanelsBorderStyle " id="orderPanel">
            <div class="OrderConentContainer">
                <div class="OrderPanelImageContainer">
                    <div class="OrderPanelImage">
 
                    </div>
                </div>





                <!-- <iframe name="iframe1" style="display: none;" ></iframe> -->
                <form method="POST" id="OrderForm" class="OrderDetailesPanel" action="">
                    Готовы сделать заказ? :)
                    <br>
                    Как к вам обращаться?
                    <br>
                    Имя:<span class="UpperRedStar"><sup>*</sup></span>
                    <br>
                    <input name="nameInput" autocomplete="off" maxlength="25"/>
                    <br>
                    Фамилия:
                    <br>
                    <input name="secondNameInput" autocomplete="off" maxlength="25"/>
                    <br>
                    Отчество:
                    <br>
                    <input name="lastNameInput" autocomplete="off" maxlength="25"/>
                    <br>
                    Телефон:<span class="UpperRedStar"><sup>*</sup></span>
                    <br>
                    <input name="phoneInput" autocomplete="off" />
                    <br>
                    Адрес:
                    <br>
                    <input name="adressInput" autocomplete="off" maxlength="70"/>
                    <br>
                    Комментарий к заказу:
                    <br>
                    <input name="commentaryInput" autocomplete="off" maxlength="256"/>
                    <br>

                    <input name="submitOrderButton" id="OrderButton" type="button" value="Заказать!"/>


                </form>
            </div>
        </div>

    </main>





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

</html>




    
  
